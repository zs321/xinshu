<?php

/**
 * ECSHOP 中国银联在线支付
 * ============================================================================
 * 版权所有 2005-2010 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: z1988.com $
 * $Id: unionpay.php 17063 2015-08-006Z z1988.com $
 */


if (!defined('IN_ECTOUCH'))
{
    die('Hacking attempt');
}

// 包含配置文件
$payment_lang = ROOT_PATH . 'lang/' .$GLOBALS['_CFG']['lang']. '/payment/'.basename(__FILE__);;

if (file_exists($payment_lang))
{
    global $_LANG;

    include_once($payment_lang);
}


/* 模块的基本信息 */
if (isset($set_modules) && $set_modules == TRUE) {
	
    $i = isset($modules) ? count($modules) : 0;
    /* 代码 */
    $modules[$i]['code'] = basename(__FILE__, '.php');
    /* 描述对应的语言项 */
    $modules[$i]['desc'] = 'unionpay_desc';
    /* 是否支持货到付款 */
    $modules[$i]['is_cod'] = '0';
    /* 是否支持在线支付 */
    $modules[$i]['is_online'] = '1';
    /* 作者 */
    $modules[$i]['author'] = '青蜂网络';
    /* 网址 */
    $modules[$i]['website'] = 'http://www.0769web.net';
    /* 版本号 */
    $modules[$i]['version'] = '1.0.0';
    /* 配置信息 */
    $modules[$i]['config'] = array(

		array('name' => 'unionpay_evn', 'type' => 'select', 'value' => '0'),
		
		array('name' => 'unionpay_account_pm', 'type' => 'text', 'value' => '777290058117684'),
		array('name' => 'unionpay_sign_cert_pwd_pm', 'type' => 'text', 'value' => '000000'),
		array('name' => 'unionpay_sign_cert_path_pm', 'type' => 'text', 'value' => 'PM_700000000000001_acp.pfx'),
        array('name' => 'unionpay_verify_cert_path_pm', 'type' => 'text', 'value' => 'verify_sign_acp.cer'),
		array('name' => 'unionpay_encrypt_cert_path_pm', 'type' => 'text', 'value' => 'encrypt.cer'),
		//array('name' => 'unionpay_verify_dir_pm', 'type' => 'text', 'value' => ''),
		
		array('name' => 'unionpay_account', 'type' => 'text', 'value' => ''),
		array('name' => 'unionpay_sign_cert_pwd', 'type' => 'text', 'value' => ''),
		array('name' => 'unionpay_sign_cert_path', 'type' => 'text', 'value' => ''),
        array('name' => 'unionpay_verify_cert_path', 'type' => 'text', 'value' => ''),
		array('name' => 'unionpay_encrypt_cert_path', 'type' => 'text', 'value' => ''),
		//array('name' => 'unionpay_verify_dir', 'type' => 'text', 'value' => ''),	
    );

    return;
}

/**
 * 支付插件类
 */
class unionpay
{

	private $dir  ;
	private $site_url;
	/**
     * 生成支付代码
     * @param   array   $order  订单信息
     * @param   array   $payment    支付方式信息
     */
    private $api_url = array(
        0  => array(
            'front_trans_url' => 'https://101.231.204.80:5000/gateway/api/frontTransReq.do',	// 前台请求地址
			'back_trans_url'  => 'https://101.231.204.80:5000/gateway/api/backTransReq.do',		// 后台请求地址
			'single_query_url'  => 'https://101.231.204.80:5000/gateway/api/queryTrans.do',		//单笔查询请求地址
			
        ),
        1  => array(
            'front_trans_url' => 'https://gateway.95516.com/gateway/api/frontTransReq.do',
            'back_trans_url'  => 'https://gateway.95516.com/gateway/api/backTransReq.do',
			'single_query_url'  => 'https://gateway.95516.com/gateway/api/queryTrans.do',	//单笔查询请求地址
        ),
    );
	
	function config($payment)
    {

		// 初始化变量
		$unionpay_evn	= $payment['unionpay_evn'];		// 环境
		$lib_path	= ROOT_PATH . 'includes/modules/payment/unionpay/';
		$lib_path	= dirname(__FILE__).'/'. basename(__FILE__, '.php') .'/';

		$data  = array();
		if ( $unionpay_evn == '1' ){  // 生产环境
			$data['unionpay_verify_dir']		= $lib_path.'certs/';
			$data['unionpay_account']			= $payment['unionpay_account'];	
			$data['unionpay_sign_cert_pwd']		= $payment['unionpay_sign_cert_pwd'];
			$data['unionpay_sign_cert_path']	= $data['unionpay_verify_dir'] . $payment['unionpay_sign_cert_path'];
			$data['unionpay_verify_cert_path']	= $data['unionpay_verify_dir'] . $payment['unionpay_verify_cert_path'];
			$data['unionpay_encrypt_cert_path'] = $data['unionpay_verify_dir'] . $payment['unionpay_encrypt_cert_path'];

			$data['front_trans_url']	= $this->api_url[1]['front_trans_url'];
			$data['single_query_url']	= $this->api_url[1]['single_query_url'];
			
		}elseif( $unionpay_evn == '0'  ){// PM环境
			
			$data['unionpay_verify_dir']			= $lib_path.'certs/pm/';
			$data['unionpay_account']			= $payment['unionpay_account_pm'];	
			$data['unionpay_sign_cert_pwd']		= $payment['unionpay_sign_cert_pwd_pm'];
			$data['unionpay_sign_cert_path']	= $data['unionpay_verify_dir'] . $payment['unionpay_sign_cert_path_pm'];
			$data['unionpay_verify_cert_path']	= $data['unionpay_verify_dir'] . $payment['unionpay_verify_cert_path_pm'];
			$data['unionpay_encrypt_cert_path'] = $data['unionpay_verify_dir'] . $payment['unionpay_encrypt_cert_path_pm'];

			$data['front_trans_url']	= $this->api_url[0]['front_trans_url'];
			$data['single_query_url']	= $this->api_url[0]['single_query_url'];
		}

		
		// cvn2加密 1：加密 0:不加密
		define("SDK_CVN2_ENC", 0);
		// 有效期加密 1:加密 0:不加密
		define("SDK_DATE_ENC", 0);
		// 卡号加密 1：加密 0:不加密
		define("SDK_PAN_ENC", 0);

		// 签名证书路径
		define("SDK_SIGN_CERT_PATH", $data['unionpay_sign_cert_path']);
		// 签名证书密码 
		define("SDK_SIGN_CERT_PWD", $data['unionpay_sign_cert_pwd']);
		// 验签证书
		define("SDK_VERIFY_CERT_PATH", $data['unionpay_verify_cert_path']);
		// 密码加密证书
		define("SDK_ENCRYPT_CERT_PATH", $data['unionpay_encrypt_cert_path']);
		// 验签证书路径
		define("SDK_VERIFY_CERT_DIR", $data['unionpay_verify_dir']);
		
		// 前台请求地址
		define("SDK_FRONT_TRANS_URL", $data['front_trans_url']);
		
		//单笔查询请求地址
		define("SDK_SINGLE_QUERY_URL", $data['single_query_url']);

		//文件下载目录 
		define("SDK_FILE_DOWN_PATH", $lib_path.'file/');
		//日志 目录 
		define("SDK_LOG_FILE_PATH", $lib_path.'logs/');
		//日志级别
		define("SDK_LOG_LEVEL", 'INFO');

		return $data;
    }


   /**
     * 生成支付代码
     *
     * @param array $order
     *            订单信息
     * @param array $payment
     *            支付方式信息
     */
    function get_code($order, $payment) {
  
        $charset = 'UTF-8';

		$data = $this->config($payment);
		
        $parameter = array(
            'version' => '5.0.0', // 接口版本号
            'encoding' => $charset,
            'certId' => $this->getSignCertId(), //证书ID
            'txnType' => '01', //交易类型	
            'txnSubType' => '01', //交易子类
            'bizType' => '000201', //业务类型
            'frontUrl' => return_url(basename(__FILE__, '.php')), //前台通知地址
            'backUrl' => return_url(basename(__FILE__, '.php')), //后台通知地址	
            'signMethod' => '01', //签名方法
            'channelType' => '07', //渠道类型
            'accessType' => '0', //接入类型
            'merId' => $data['unionpay_account'], //商户代码
            'orderId' => $order['order_sn'] . '' . $this->_formatSN($order['log_id']), // 请求号，唯一
            'txnTime' => date('YmdHis', intval($order['add_time']) > 0 ? intval($order['add_time']) : time() ), //订单发送时间
            'txnAmt' => $order['order_amount'] * 100, //交易金额 单位分
            'currencyCode' => '156', //交易币种
            'defaultPayType' => '0001', //默认支付方式	  
			'reqReserved' =>$order['order_sn']  .'-'. $order['log_id'], //请求方保留域，透传字段，查询、通知、对账文件中均会原样出现
        );
        $this->sign($parameter);
        // 前台请求地址
		$front_uri = SDK_FRONT_TRANS_URL;
        // 构造 自动提交的表单
        $html_form = $this->create_html($parameter, $front_uri);

        return $html_form;
    }

    /**
     * 查询交易
     */
    public function verify_query($order, $payment) {
		
        $charset = 'UTF-8';
		
		$data = $this->config($payment);
        $params = array(
            'version' => '5.0.0', //版本号
            'encoding' => $charset, //编码方式
            'certId' => $this->getSignCertId(), //证书ID	
            'signMethod' => '01', //签名方法
            'txnType' => '00', //交易类型	
            'txnSubType' => '00', //交易子类
            'bizType' => '000000', //业务类型
            'accessType' => '0', //接入类型
            'channelType' => '08', //渠道类型
            'orderId' => $order['order_sn'] . '0' . $order['log_id'], //请修改被查询的交易的订单号
            'merId' => $data['unionpay_account'], //商户代码，请修改为自己的商户号
            'txnTime' => date('YmdHis', $order['add_time']), //请修改被查询的交易的订单发送时间
        );
        $this->sign($params);
        $result = $this->sendHttpRequest($params, SDK_SINGLE_QUERY_URL);
        //返回结果展示
        $result_arr = $this->coverStringToArray($result);
        if ($this->verify($result_arr)) {
			
            if ($result_arr['respCode'] == '00') {
                //改变订单支付方式
				$merId		=  $result_arr ['merId'];
				$orderId	=  $result_arr ['orderId'];
				$queryId	=  $result_arr ['queryId'];
				$reqReserved =  $result_arr ['reqReserved'];
				$respCode	=  $result_arr ['respCode'];
				$respMsg	=  $result_arr ['respMsg'];
				$settleAmt	=  $result_arr ['settleAmt'];
				$txnAmt		=  $result_arr ['txnAmt'];
				
				// 获取支付订单号log_id
				if(!strpos($reqReserved, '-')) return false;
				$order_sn_arr = explode('-', $reqReserved);

				$order_sn		= $order_sn_arr[0];
				$pay_id			= (int)$order_sn_arr[1];
				$payment_amount = (int)$settleAmt;

				$action_note = $respCode . ':' 
				. $respMsg 
				. 'orderId:'
				. $orderId
				. $GLOBALS['_LANG']['unionpay_txn_id'] . ':' 
				. $queryId;

				// 完成订单。
				order_paid($pay_id, PS_PAYED, $action_note);
				return true;
            }
        }
        //echo $this->verify($result_arr) ? '验签成功' : '验签失败';
    }

    /**
     * 银联同步响应操作
     * 
     * @return boolean
     */
    public function respond($data=array()) {

        if (isset($_POST ['signature'])) {

			$payment  = get_payment($_GET['code']);
			$data = $this->config($payment);
			
            if ($this->verify($_POST)) {

				$merId		=  $_POST ['merId'];
				$orderId	=  $_POST ['orderId'];
				$queryId	=  $_POST ['queryId'];
				$reqReserved =  $_POST ['reqReserved'];
				$respCode	=  $_POST ['respCode'];
				$respMsg	=  $_POST ['respMsg'];
				$settleAmt	=  $_POST ['settleAmt'];
				$txnAmt		=  $_POST ['txnAmt'];
				
                if ($_POST['respCode'] == '00') {
                    // 获取支付订单号log_id
					if(!strpos($reqReserved, '-')) return false;
					$order_sn_arr = explode('-', $reqReserved);

					$order_sn		= $order_sn_arr[0];
					$pay_id			= (int)$order_sn_arr[1];
					$payment_amount = (int)$settleAmt;
					
					$action_note = $respCode . ':' 
					. $respMsg 
					. 'orderId:'
					. $orderId
					. $GLOBALS['_LANG']['unionpay_txn_id'] . ':' 
					. $queryId;

					// 完成订单。
					order_paid($pay_id, PS_PAYED, $action_note);

                    return true;
                }
            } else {
                return false;
            }
        } else {
            echo '签名为空';
        }
    }

    /**
     * 银联异步通知
     * 
     * @return string
     */
	public function notify($data = array()) {
        if (!empty($_POST)) {
			$this->respond($data);
			  
        } else {
            exit("fail");
        }
    }

    /**
     * 签名证书ID
     *
     * @return unknown
     */
    function getSignCertId() {
        // 签名证书路径

        return $this->getCertId(SDK_SIGN_CERT_PATH);
    }

    /**
     * 取证书ID(.pfx)
     *
     * @return unknown
     */
    function getCertId($cert_path) {
        $pkcs12certdata = file_get_contents($cert_path);
        openssl_pkcs12_read($pkcs12certdata, $certs, SDK_SIGN_CERT_PWD);
        $x509data = $certs ['cert'];
        openssl_x509_read($x509data);
        $certdata = openssl_x509_parse($x509data);
        $cert_id = $certdata ['serialNumber'];
        return $cert_id;
    }

    /**
     * 签名
     *
     * @param String $params_str
     */
    function sign(&$params) {
        if (isset($params['transTempUrl'])) {
            unset($params['transTempUrl']);
        }
        // 转换成key=val&串
        $params_str = $this->coverParamsToString($params);
        $params_sha1x16 = sha1($params_str, FALSE);
        // 签名证书路径
        $cert_path = SDK_SIGN_CERT_PATH;
        $private_key = $this->getPrivateKey($cert_path);
        // 签名
        $sign_falg = openssl_sign($params_sha1x16, $signature, $private_key, OPENSSL_ALGO_SHA1);
        if ($sign_falg) {
            $signature_base64 = base64_encode($signature);
            // $log->LogInfo("签名串为 >" . $signature_base64);
            $params ['signature'] = $signature_base64;
        } else {
            echo "签名失败";
            exit;
            
        }
       
    }

    /**
     * 返回(签名)证书私钥 -
     *
     * @return unknown
     */
    function getPrivateKey($cert_path) {
        $pkcs12 = file_get_contents($cert_path);
        openssl_pkcs12_read($pkcs12, $certs, SDK_SIGN_CERT_PWD);
        return $certs ['pkey'];
    }

    /**
     * 数组 排序后转化为字体串
     *
     * @param array $params        	
     * @return string
     */
    function coverParamsToString($params) {
        $sign_str = '';
        // 排序
        ksort($params);
        foreach ($params as $key => $val) {
            if ($key == 'signature') {
                continue;
            }
            $sign_str .= sprintf("%s=%s&", $key, $val);
            // $sign_str .= $key . '=' . $val . '&';
        }
        return substr($sign_str, 0, strlen($sign_str) - 1);
    }

    /**
     * 构造自动提交表单
     *
     * @param unknown_type $params        	
     * @param unknown_type $action        	
     * @return string
     */
    function create_html($params, $action) {
		global $_LANG;
        $encodeType = isset($params ['encoding']) ? $params ['encoding'] : 'UTF-8';
        $html = <<<eot
    <form id="pay_form" name="pay_form" action="{$action}" method="post">
	
eot;
        foreach ($params as $key => $value) {
            $html .= "    <input type=\"hidden\" name=\"{$key}\" id=\"{$key}\"  value=\"{$value}\" />\n";
        }
		$html .= ' <div style="text-align:center"><input type="submit" value="'. $_LANG['pay_button']  .'" class="J-btn-submit c-btn3"></div> </form>';
        return $html;
    }

    /**
     * 验签
     *
     * @param String $params_str        	
     * @param String $signature_str        	
     */
    function verify($params) {
        global $log;
        // 公钥
        $public_key = $this->getPulbicKeyByCertId($params ['certId']);
        // echo $public_key . '<br/>';
        // 签名串
        $signature_str = $params ['signature'];
        unset($params ['signature']);
        $params_str = $this->coverParamsToString($params);
        // $log->LogInfo('报文去[signature] key=val&串>' . $params_str);
        $signature = base64_decode($signature_str);
        //echo date('Y-m-d', time());
        $params_sha1x16 = sha1($params_str, FALSE);
        //$log->LogInfo('摘要shax16>' . $params_sha1x16);
        $isSuccess = openssl_verify($params_sha1x16, $signature, $public_key, OPENSSL_ALGO_SHA1);
        //$log->LogInfo($isSuccess ? '验签成功' : '验签失败' );
        return $isSuccess;
    }

    /**
     * 根据证书ID 加载 证书
     *
     * @param unknown_type $certId        	
     * @return string NULL
     */
    function getPulbicKeyByCertId($certId) {
        global $log;
        //$log->LogInfo ( '报文返回的证书ID>' . $certId );
        // 证书目录
        $cert_dir = SDK_VERIFY_CERT_DIR;
        //$log->LogInfo ( '验证签名证书目录 :>' . $cert_dir );
        $handle = opendir($cert_dir);
        if ($handle) {
            while ($file = readdir($handle)) {
                clearstatcache();
                $filePath = $cert_dir . '/' . $file;
                if (is_file($filePath)) {
                    if (pathinfo($file, PATHINFO_EXTENSION) == 'cer') {
                        if ($this->getCertIdByCerPath($filePath) == $certId) {
                            closedir($handle);
                            //$log->LogInfo ( '加载验签证书成功' );
                            return $this->getPublicKey($filePath);
                        }
                    }
                }
            }
            //$log->LogInfo ( '没有找到证书ID为[' . $certId . ']的证书' );
        } else {
            //$log->LogInfo ( '证书目录 ' . $cert_dir . '不正确' );
        }
        closedir($handle);
        return null;
    }

    /**
     * 取证书ID(.cer)
     *
     * @param unknown_type $cert_path        	
     */
    function getCertIdByCerPath($cert_path) {
        $x509data = file_get_contents($cert_path);
        openssl_x509_read($x509data);
        $certdata = openssl_x509_parse($x509data);
        $cert_id = $certdata ['serialNumber'];
        return $cert_id;
    }

    /**
     * 取证书公钥 -验签
     *
     * @return string
     */
    function getPublicKey($cert_path) {
        return file_get_contents($cert_path);
    }

    /**
     * 后台交易 HttpClient通信
     * @param unknown_type $params
     * @param unknown_type $url
     * @return mixed
     */
    function sendHttpRequest($params, $url) {
        $opts = $this->getRequestParamString($params);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //不验证证书
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); //不验证HOST
        curl_setopt($ch, CURLOPT_SSLVERSION, 3);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-type:application/x-www-form-urlencoded;charset=UTF-8'
        ));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $opts);

        /**
         * 设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
         */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // 运行cURL，请求网页
        $html = curl_exec($ch);
        // close cURL resource, and free up system resources
        curl_close($ch);
        return $html;
    }

    /**
     * 字符串转换为 数组
     *
     * @param unknown_type $str        	
     * @return multitype:unknown
     */
    function coverStringToArray($str) {
        $result = array();

        if (!empty($str)) {
            $temp = preg_split('/&/', $str);
            if (!empty($temp)) {
                foreach ($temp as $key => $val) {
                    $arr = preg_split('/=/', $val, 2);
                    if (!empty($arr)) {
                        $k = $arr ['0'];
                        $v = $arr ['1'];
                        $result [$k] = $v;
                    }
                }
            }
        }
        return $result;
    }

    /**
     * 组装报文
     *
     * @param unknown_type $params        	
     * @return string
     */
    function getRequestParamString($params) {
        $params_str = '';
        foreach ($params as $key => $value) {
            $params_str .= ($key . '=' . (!isset($value) ? '' : urlencode($value)) . '&');
        }
        return substr($params_str, 0, strlen($params_str) - 1);
    }

    /**
    * 格式订单号
    */
    function _formatSN($sn)
    {
        return str_repeat('0', 9 - strlen($sn)) . $sn;
    }

}