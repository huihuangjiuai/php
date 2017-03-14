<?php 
namespace vendor\geetest\web;

use vendor\geetest\lib\GeetestLib;
/**
 * 使用Get的方式返回：challenge和capthca_id 此方式以实现前后端完全分离的开发模式 专门实现failback
 * @author Tanxu
 */
//error_reporting(0);
// require_once dirname(dirname(__FILE__)) . '/lib/class.geetestlib.php';
// require_once dirname(dirname(__FILE__)) . '/config/config.php';
// if($_GET['type'] == 'pc'){
// 	$GtSdk = new GeetestLib(CAPTCHA_ID, PRIVATE_KEY);
// }elseif ($_GET['type'] == 'mobile') {
// 	$GtSdk = new GeetestLib(MOBILE_CAPTCHA_ID, MOBILE_PRIVATE_KEY);
// }
// session_start();
// $user_id = "test";
// $status = $GtSdk->pre_process($user_id);
// $_SESSION['gtserver'] = $status;
// $_SESSION['user_id'] = $user_id;
// echo $GtSdk->get_response_str();
class StartCaptchaServlet{
	public function index($params){
//		require_once dirname(dirname(__FILE__)) . '/lib/class.geetestlib.php';
		require_once dirname(dirname(__FILE__)) . '/config/config.php';
		if($params['type'] == 'pc'){
			$GtSdk = new GeetestLib(CAPTCHA_ID, PRIVATE_KEY);
		}elseif ($params['type'] == 'mobile') {
			$GtSdk = new GeetestLib(MOBILE_CAPTCHA_ID, MOBILE_PRIVATE_KEY);
		}
		session_start();
		$user_id = "81405982@qq.com";
		$status = $GtSdk->pre_process($user_id);
		$_SESSION['gtserver'] = $status;
		$_SESSION['user_id'] = $user_id;
		return $GtSdk->get_response_str();
	}
}
?>