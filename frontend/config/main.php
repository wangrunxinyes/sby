<?php
$params = array_merge ( require (__DIR__ . '/../../common/config/params.php'), require (__DIR__ . '/../../common/config/params-local.php'), require (__DIR__ . '/params.php'), require (__DIR__ . '/params-local.php') );

return [ 
		'id' => 'app-frontend',
		'basePath' => dirname ( __DIR__ ),
		'bootstrap' => [ 
				'log' 
		],
		'controllerNamespace' => 'frontend\controllers',
		'components' => [ 
				'user' => [ 
						'identityClass' => 'common\models\User',
						'enableAutoLogin' => true 
				],
				'errorHandler' => [ 
						'errorAction' => 'site/error' 
				],
				'urlManager' => [ 
						'enablePrettyUrl' => true,
						'showScriptName' => false,
						'rules' => [ 
								'' => 'site/index',
								// 'test/index/<id:\d+>/<page:\d+>'=>'test/index',
								// 'test/index/<id:\d+>/<cate>'=>'test/index',
								'<_a:(test|test2)>/<id:\d+>' => '<_a>/index' 
						] 
				] 
		],
		'modules' => [ 
				'cms' => [ 
						'class' => 'frontend\modules\cms\cms' 
				],
				'property' => [ 
						'class' => 'frontend\modules\property\property' 
				] 
		],
		'params' => $params 
];
