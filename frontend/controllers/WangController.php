<?php
namespace frontend\controllers;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class WangController extends Controller {

	public $layout = 'clean';

	public function behaviors() {
		return [
			'access' => [
				'class' => AccessControl::className(),
				'only' => ['logout', 'signup'],
				'rules' => [
					[
						'actions' => ['signup'],
						'allow' => true,
						'roles' => ['?'],
					],
					[
						'actions' => ['logout'],
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'logout' => ['post'],
				],
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function actions() {
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
			],
			'captcha' => [
				'class' => 'yii\captcha\CaptchaAction',
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
			],
		];
	}

	public function actionPoi() {
		$this->layout = "clean";
		$this->render('poi');
	}

	public function actionIndex() {
		$this->layout = "layout_clear";
		return $this->render('index');
	}

	public function actionAbout() {
		$this->layout = "clean";
		$this->render('test');
	}

	public function actionSearch() {
		$this->layout = "clean";
		$this->render('search');
	}

	public function actionTest() {
		$this->layout = "clean";
		$this->render('index');
	}

	public function actionFramework() {
		// $type = Yii::app()->data->getValue("type", "project");
		// $this->pageTitle = $type;
		$this->layout = "framework";
		return $this->render('framework');
	}

	public function actionError() {
		echo "????";
		exit;
	}

	public function actionLogin() {
		$this->layout = "clean";
		$this->render('login');
	}

	public function actionGetCode() {
		$data = array();
		$continue = true;
		while ($continue) {
			$number = rand(1, 45);
			if (!in_array($number, $data)) {
				array_push($data, $number);
			}
			if (count($data) == 6) {
				$continue = false;
			}
		}
		sort($data);
		print_r($data);
	}

	public function actionLog() {
		$this->layout = "clean";
		$this->render('dailylog');
	}

	public function actionStore() {
		$this->layout = "clean";
		$this->render('storelog');
	}

	public function actionShow() {
		$this->layout = "clean";
		$this->render('showLog');
	}

}

?>