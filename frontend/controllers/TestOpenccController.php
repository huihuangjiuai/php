<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;


use vendor\geetest\web\StartCaptchaServlet;
use vendor\geetest\web\VerifyLoginServlet;

/**
 * test opencc controller
 */
class TestOpenccController extends Controller
{
	public function actionIndex(){
		return $this->render('index');
	}
	public function actionStartCaptchaServlet(){
		$params['type'] = $_GET['type'];
		$params['t'] = $_GET['t'];

		$start = new StartCaptchaServlet;
		$result = $start->index($params);
		return $result;
	}
	public function actionVerifyLoginServlet(){
		$params['type'] = $_POST['type'];
		$params['geetest_challenge'] = $_POST['geetest_challenge'];
		$params['geetest_validate'] = $_POST['geetest_validate'];
		$params['geetest_seccode'] = $_POST['geetest_seccode'];
		$params['username'] = $_POST['username'];
		$params['password'] = $_POST['password'];

		$start = new VerifyLoginServlet;
		$result = $start->index($params);
		return $result;
	}
}
