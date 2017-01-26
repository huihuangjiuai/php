<?php
namespace frontend\controllers;

use Yii;
<<<<<<< HEAD
use yii\web\Controller;


use vendor\geetest\web\StartCaptchaServlet;
use vendor\geetest\web\VerifyLoginServlet;
=======
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
>>>>>>> 81b309045df63628e92ac65d99bb5e36897e0e9f

/**
 * test opencc controller
 */
class TestOpenccController extends Controller
{
	public function actionIndex(){
<<<<<<< HEAD
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
=======

>>>>>>> 81b309045df63628e92ac65d99bb5e36897e0e9f
	}
}
