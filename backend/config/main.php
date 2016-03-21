<?php
$params = array_merge ( require (__DIR__ . '/../../common/config/params.php'), require (__DIR__ . '/../../common/config/params-local.php'), require (__DIR__ . '/params.php'), require (__DIR__ . '/params-local.php') );

return [ 
		'id' => 'app-backend',
		'basePath' => dirname ( __DIR__ ),
		'controllerNamespace' => 'backend\controllers',
		'bootstrap' => [ 
				'log' 
		],
		'modules' => [ 
				'admin' => [ 
						'class' => 'backend\modules\admin\admin' 
				],
				'weixin' => [ 
						'class' => 'backend\modules\weixin\weixin' 
				] 
		],
		'components' => [ 
				'user' => [ 
						'identityClass' => 'common\models\User',
						'enableAutoLogin' => true 
				],
				'errorHandler' => [ 
						'errorAction' => 'site/error' 
				],
				'db' => [ 
						'class' => '\yii\db\Connection',
						'dsn' => 'mysql:host=127.0.0.1;dbname=wangrunxin',
						'username' => 'root',
						'password' => 'wrx52691',
						'charset' => 'utf8' 
				],
		/*
			        'urlManager' => [
			            'enablePrettyUrl' => true,
			            'showScriptName' => false,
			            'rules' => [
			            ],
			        ],
		*/
	],
		'params' => $params 
];
