<?php
function weixin_notice($order,$wxch_order_name){
	$time = time();
	$wxch_user_id = $_SESSION['user_id'];
	if(empty($wxch_user_id)){

	$wxch_user_id=$order['user_id'];

	}

	$query_sql = "SELECT wxid FROM " . $GLOBALS['ecs']->table('users') . " WHERE user_id = '$wxch_user_id'";
	$ret_w = $GLOBALS['db']->getRow($query_sql);
	$wxid = $ret_w['wxid'];

	if($wxch_user_id > 0 && $wxid) 
	{
		$access_token = access_token2($db);
		$url = 'https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token='.$access_token;
		if(empty($order['order_id'])) 
		{
			$order['order_id'] = $order_id;
		}
		if(empty($order_id)) 
		{
			$order_id = $order['order_id'];
		}
    $sql = "SELECT * FROM " . $GLOBALS['ecs']->table('order_info') . " WHERE order_id = '$order_id'";
    $orders = $GLOBALS['db']->getRow($sql);
    $sql = "SELECT * FROM " . $GLOBALS['ecs']->table('order_goods') . " WHERE order_id = '$order_id'";
    $order_goods = $GLOBALS['db']->getAll($sql);
		$shopinfo = '';
		if(!empty($order_goods)) 
		{
			foreach($order_goods as $v) 
			{
				if(empty($v['goods_attr']))
				{
					$shopinfo .= $v['goods_name'].'('.$v['goods_number'].'),';
				}
				else
				{
					$shopinfo .= $v['goods_name'].'（'.$v['goods_attr'].'）'.'('.$v['goods_number'].'),';
				}
			}
			$shopinfo = substr($shopinfo, 0, strlen($shopinfo)-1);
		}
		$sql = "SELECT * FROM ". $GLOBALS['ecs']->table('weixin_order') ." WHERE order_name = '$wxch_order_name'";
		$cfg_order = $GLOBALS['db']->getRow($sql);
        $cfg_baseurl = $GLOBALS['db']->getOne("SELECT cfg_value FROM ". $GLOBALS['ecs']->table('weixin_cfg') ." WHERE cfg_name = 'baseurl' ");
        $cfg_murl = $GLOBALS['db']->getOne("SELECT cfg_value FROM ". $GLOBALS['ecs']->table('weixin_cfg') ." WHERE cfg_name = 'murl' ");
		if($orders['pay_status'] == 0) 
		{
			$pay_status = '支付状态：未付款';
		}
		elseif($orders['pay_status'] == 1) 
		{
			$pay_status = '支付状态：付款中';
		}
		elseif($orders['pay_status'] == 2) 
		{
			$pay_status = '支付状态：已付款';
		}
		$wxch_address = "\r\n收件地址：".$orders['address'];
		$wxch_consignee = "\r\n收件人：".$orders['consignee'];
		$w_title = $cfg_order['title'];
		if($orders['order_amount'] == '0.00') 
		{
			$orders['order_amount'] = $orders['money_paid'];
		}
		$w_description = '订单号：'.$orders['order_sn']."\r\n".'商品信息：'.$shopinfo."\r\n".$pay_status.$wxch_consignee.$wxch_address;
		$w_url = $cfg_baseurl.$cfg_murl.'user.php?act=order_detail&order_id='.$order['order_id'].'&wxid='.$wxid;
		$http_ret1 = stristr($cfg_order['image'],'http://');
		$http_ret2 = stristr($cfg_order['image'], 'http:\\');
		if($http_ret1 or $http_ret2) 
		{
			$w_picurl = $cfg_order['image'];
		}
		else 
		{
			$w_picurl = $cfg_baseurl."/mobile/".$cfg_order['image'];

		}



		$post_msg = '{
		   "touser":"'.$wxid.'",
		   "msgtype":"news",
		   "news":{
			   "articles": [
				{
					"title":"'.$w_title.'",
					"description":"'.$w_description.'",
					"url":"'.$w_url.'",
					"picurl":"'.$w_picurl.'"
				}
				]
		   }
	   }';
		$ret_json = curl_grab_page($url, $post_msg);
		$ret = json_decode($ret_json);
	}
}

function weixin_notice_tow($order,$wxch_order_name){
	$time = time();
	$wxch_user_id = $_SESSION['user_id'];
	if(empty($wxch_user_id)){

	$wxch_user_id=$order['user_id'];

	}
	if($wxch_user_id > 0) 
	{
		$access_token = access_token2($db);
		$url = 'https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token='.$access_token;
		$query_sql = "SELECT wxid FROM " . $GLOBALS['ecs']->table('users') . " WHERE user_id = '$wxch_user_id'";
		$ret_w = $GLOBALS['db']->getRow($query_sql);
		$wxid = $ret_w['wxid'];
		if(empty($order['order_id'])) 
		{
			$order['order_id'] = $order_id;
		}
		if(empty($order_id)) 
		{
			$order_id = $order['order_id'];
		}
    $sql = "SELECT * FROM " . $GLOBALS['ecs']->table('order_info') . " WHERE order_id = '$order_id'";
    $orders = $GLOBALS['db']->getRow($sql);

		//商城新增支付成功，对应上级提醒功能
        $nickname = $GLOBALS['db']->getOne("SELECT `nickname` FROM ".$GLOBALS['ecs']->table('weixin_user')." WHERE `wxid` = '$wxid'");
        $affiliate = unserialize($GLOBALS['_CFG']['affiliate']);
        $num = count($affiliate['item']);
		$money=$orders['fencheng'];
		if($orders['pay_status'] == 0) 
		{
			$pay_status = '支付状态：未付款';
		}
		elseif($orders['pay_status'] == 1) 
		{
			$pay_status = '支付状态：付款中';
		}
		elseif($orders['pay_status'] == 2) 
		{
			$pay_status = '支付状态：已付款';
		}
		if($orders['pay_status'] == 2) 
		{
			$orders['order_amount'] = $orders['money_paid'];
		}
		$sql = "SELECT * FROM ".$GLOBALS['ecs']->table('weixin_order')." WHERE order_name = '$wxch_order_name'";
		$cfg_order = $GLOBALS['db']->getRow($sql);
        $cfg_baseurl = $GLOBALS['db']->getOne("SELECT cfg_value FROM ". $GLOBALS['ecs']->table('weixin_cfg') ." WHERE cfg_name = 'baseurl' ");
        $cfg_murl = $GLOBALS['db']->getOne("SELECT cfg_value FROM ". $GLOBALS['ecs']->table('weixin_cfg') ." WHERE cfg_name = 'murl' ");
		$http_ret1 = stristr($cfg_order['image'],'http://');
		$http_ret2 = stristr($cfg_order['image'], 'http:\\');
		if($http_ret1 or $http_ret2) 
		{
			$w_picurl = $cfg_order['image'];
		}
		else 
		{
			$w_picurl = $cfg_baseurl."mobile/".$cfg_order['image'];
		}
        
        for($i=0; $i<$num; $i++){
                $sql = "SELECT `parent_id` FROM ".$GLOBALS['ecs']->table('users')." WHERE `wxid` = '$wxid'";
                $parent_id = $GLOBALS['db']->getOne($sql);
                
				//修复如果相对平台来讲是第一二级的问题
                if($parent_id == 0 || $money == 0 || $money < 0){
                        break;
                }else{
						$num_mb5=$i+1;
						$w_title="您的".$num_mb5."级会员".$nickname."付款了";
						$affiliate['item'][$i]['level_money'] = (float)$affiliate['item'][$i]['level_money'];
						if ($affiliate['item'][$i]['level_money'])
						{
						   $affiliate['item'][$i]['level_money'] /= 100;
						}
						$yongjin_mb5= round($money*$affiliate['item'][$i]['level_money'],2);
						$w_description= "订单号：".$orders['order_sn']."\r\n您将获得".$yongjin_mb5."元佣金\r\n".$pay_status;
						$wp_url = $cfg_baseurl.$cfg_murl."distribute.php?act=myorder&user_id=".$wxch_user_id."&level=".$num_mb5;
                        $sql_2 = "SELECT `wxid` FROM ".$GLOBALS['ecs']->table('users')." WHERE `user_id` = '$parent_id'";
                        $wxid = $GLOBALS['db']->getOne($sql_2);         
						$post_msg = '{
					    "touser":"'.$wxid.'",
					    "msgtype":"news",
					    "news":{
						   "articles": [
							{
								"title":"'.$w_title.'",
								"description":"'.$w_description.'",
								"url":"'.$wp_url.'",
								"picurl":"'.$w_picurl.'"
							}
							]
							}
					    }';
                        
                        $ret_json = curl_grab_page($url, $post_msg);
                        $ret = json_decode($ret_json);
                        if($ret->errmsg != 'ok') 
                        {
                                $access_token = new_access_token($db);
                                $url = 'https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token='.$access_token;
                                $ret_json = curl_grab_page($url, $post_msg);
                                $ret = json_decode($ret_json);
                        }        
                }
        }
        //商城新增支付成功，对应上级提醒功能}
	}
}

function new_access_token($db) 
{
	$time = time();
	$ret = $GLOBALS['ecs']->getRow("SELECT * FROM ". $GLOBALS['ecs']->table('weixin_config') ." WHERE `id` = 1");
	$appid = $ret['appid'];
	$appsecret = $ret['appsecret'];
	$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
	$ret_json = curl_get_contents2($url);
	$ret = json_decode($ret_json);
	if($ret->access_token)
	{
		$GLOBALS['ecs']->query("UPDATE ". $GLOBALS['ecs']->table('weixin_config') ." SET `access_token` = '$ret->access_token',`dateline` = '$time' WHERE `id` =1;");
	}
	return $ret->access_token;
}
function access_token2($db) 
{
    $sql = "SELECT * FROM ". $GLOBALS['ecs']->table('weixin_config') ." WHERE id = 1";
    $ret = $GLOBALS['db']->getRow($sql);
	$appid = $ret['appid'];
	$appsecret = $ret['appsecret'];
	$access_token = $ret['access_token'];
	$dateline = $ret['dateline'];
	$time = time();
	if(($time - $dateline) >= 7200) 
	{
		$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
		$ret_json = curl_get_contents2($url);
		$ret = json_decode($ret_json);
		if($ret->access_token)
		{
			$GLOBALS['db']->query("UPDATE ". $GLOBALS['ecs']->table('weixin_config') ." SET `access_token` = '$ret->access_token',`dateline` = '$time' WHERE `id` =1;");
			return $ret->access_token;
		}
	}
	elseif(empty($access_token)) 
	{
		$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
		$ret_json = curl_get_contents2($url);
		$ret = json_decode($ret_json);
		if($ret->access_token)
		{
			$GLOBALS['ecs']->query("UPDATE ". $GLOBALS['ecs']->table('weixin_config') ." SET `access_token` = '$ret->access_token',`dateline` = '$time' WHERE `id` =1;");
			return $ret->access_token;
		}
	}
	else 
	{
		return $access_token;
	}
}
function curl_get_contents2($url) 
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	$r = curl_exec($ch);
	curl_close($ch);
	return $r;
}
function curl_grab_page($url,$data,$proxy='',$proxystatus='',$ref_url='') 
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
	curl_setopt($ch, CURLOPT_TIMEOUT, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	if ($proxystatus == 'true') 
	{
		curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, TRUE);
		curl_setopt($ch, CURLOPT_PROXY, $proxy);
	}
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_URL, $url);
	if(!empty($ref_url))
	{
		curl_setopt($ch, CURLOPT_HEADER, TRUE);
		curl_setopt($ch, CURLOPT_REFERER, $ref_url);
	}
	curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_POST, TRUE);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	ob_start();
	return curl_exec ($ch);
	ob_end_clean();
	curl_close ($ch);
	unset($ch);
}

?>