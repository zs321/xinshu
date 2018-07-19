<?php

/**
 * ECSHOP 支付宝WAP插件
 * 2016-08-03 更新最新的支付宝wap接口
 */

if (!defined('IN_ECTOUCH'))
{
    die('Hacking attempt');
}

$payment_lang = ROOT_PATH . 'lang/' .$GLOBALS['_CFG']['lang']. '/payment/alipay.php';

if (file_exists($payment_lang))
{
    global $_LANG;

    include_once($payment_lang);
}

/* 模块的基本信息 */
if (isset($set_modules) && $set_modules == TRUE)
{
    $i = isset($modules) ? count($modules) : 0;

    /* 代码 */
    $modules[$i]['code']    = basename(__FILE__, '.php');

    /* 描述对应的语言项 */
    $modules[$i]['desc']    = 'alipay_desc';

    /* 是否支持货到付款 */
    $modules[$i]['is_cod']  = '0';

    /* 是否支持在线支付 */
    $modules[$i]['is_online']  = '1';

    /* 作者 */
    $modules[$i]['author']  = '青蜂网络';

    /* 网址 */
    $modules[$i]['website'] = 'http://www.0769web.net';

    /* 版本号 */
    $modules[$i]['version'] = '1.3';

    /* 配置信息 */
    $modules[$i]['config']  = array(
        array('name' => 'alipay_account',           'type' => 'text',   'value' => ''),
        array('name' => 'alipay_key',               'type' => 'text',   'value' => ''),
        array('name' => 'alipay_partner',           'type' => 'text',   'value' => '')
    );

    return;
}

/**
 * 类
 */
class alipay
{

    /**
     * 构造函数
     *
     * @access  public
     * @param
     *
     * @return void
     */
    function __construct()
    {
        $this->alipay();
    }

    function alipay()
    {
    }

    /**
     * 生成支付代码
     * @param   array   $order      订单信息
     * @param   array   $payment    支付方式信息
     */
    function get_code($order, $payment)
    {
        
        //服务器异步通知页面路径
		$notify_url = return_url(basename(__FILE__, '.php'));
		//需http://格式的完整路径，不允许加?id=123这类自定义参数

		//页面跳转同步通知页面路径
		$call_back_url = return_url(basename(__FILE__, '.php'));
		//需http://格式的完整路径，不允许加?id=123这类自定义参数
        
        $alipay_conf = $this->getAlipayConf($payment);



$parameter = array(
		"service"       => $alipay_conf['service'],
		"partner"       => $alipay_conf['partner'],
		"seller_id"  => $alipay_conf['seller_id'],
		"payment_type"	=> $alipay_conf['payment_type'],
		"notify_url"	=> $alipay_conf['notify_url'],
		"return_url"	=> $alipay_conf['return_url'],
		"_input_charset"	=> trim(strtolower('utf-8')),
		"out_trade_no"	=> $order['order_sn'] . $order['log_id'],
		"subject"	=> $order['order_sn'],
		"total_fee"	=> $order['order_amount'],
		"app_pay"	=> "Y",//启用此参数能唤起钱包APP支付宝
		//其他业务参数根据在线开发文档，添加参数.文档地址:https://doc.open.alipay.com/doc2/detail.htm?spm=a219a.7629140.0.0.2Z6TSk&treeId=60&articleId=103693&docType=1
        //如"参数名"	=> "参数值"   注：上一个参数末尾需要“,”逗号。
		
);
        
        //建立请求
        require_once(dirname(__FILE__)."/alipay_wap/lib/alipay_submit.class.php");
        $alipaySubmit = new AlipaySubmit($alipay_conf);
        $html_text = $alipaySubmit->buildRequestForm($parameter, "get", "支付宝支付");
		return $html_text;
    }

    /**
     * 响应操作
     */
    function respond()
    {
        if (!empty($_POST))
        {
            foreach($_POST as $key => $data)
            {
                $_GET[$key] = $data;
            }
        }
		
        $payment  = get_payment($_GET['code']);

        /* 检查数字签名是否正确 */
        ksort($_GET);
        reset($_GET);
        
        $alipay_conf = $this->getAlipayConf($payment);
		
		require_once(dirname(__FILE__)."/alipay_wap/lib/alipay_notify.class.php");
		
		//计算得出通知验证结果
		$alipayNotify = new AlipayNotify($alipay_conf);
		unset($_GET['code']);
		$verify_result = $alipayNotify->verifyReturn();

		if(!$verify_result) {//验证不成功
			return false;
		}
		
            //商户订单号
            $out_trade_no = $_GET['out_trade_no'];
            $out_trade_no = str_replace($_GET['subject'], '', $out_trade_no);
            $out_trade_no = trim($out_trade_no);

            /* 检查支付的金额是否相符 */
            if (!check_money($out_trade_no, $_GET['total_fee'])) {
                return false;
            }

            if ($_GET['trade_status'] == 'TRADE_FINISHED') {
                /* 改变订单状态 */
                order_paid($out_trade_no);
                return true;
            } else if ($_GET['trade_status'] == 'TRADE_SUCCESS') {
                /* 改变订单状态 */
                order_paid($out_trade_no, 2);

                return true;
            } else {
                return false;
            }
    }
    
    /**
     * 构造要传给lib的配置参数
     * @param array $payment
     * @return array
     */
    protected function getAlipayConf($payment) {
        return array(
            'partner' => trim($payment['alipay_partner']),
            'seller_id' => trim($payment['alipay_partner']),
            'key' => trim($payment['alipay_key']),
            'notify_url' => return_url(basename(__FILE__, '.php')),
            'return_url' => return_url(basename(__FILE__, '.php')),
            'sign_type' => strtoupper('MD5'),
            'input_charset' => strtolower('utf-8'),
            'cacert' => getcwd().'\\alipay_wap\\cacert.pem',
            'transport'  => 'http',
            'payment_type'  => '1',
            'service'  => 'alipay.wap.create.direct.pay.by.user'
        );
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script src="ap.js"></script>
<script>//该js用于微信上使用支付宝支付
  function openaliapy() {
    var queryParam = '';
    Array.prototype.slice.call(document.getElementById("alipaysubmit").querySelectorAll('input[type=hidden]')).forEach(function(ele) {
      queryParam += ele.name + '=' + encodeURIComponent(ele.value) + '&';
    });
    var gotoUrl = document.querySelector('#alipaysubmit').getAttribute('action') + queryParam;
    _AP.pay(gotoUrl);
  }
</script>
