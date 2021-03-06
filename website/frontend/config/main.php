<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
	'language'=>'es',
	'homeUrl' => '',
    'components' => [
		'assetManager' => [  
			'bundles' => [
				//'yii\web\Jquery'=> ['js'=>[]],
				'yii\bootstrap\BootstrapPluginAsset' => ['js'=>[]],
				'yii\bootstrap\BootstrapAsset' => ['css' => []]
			],
			//'basePath' => __DIR__ . '/../web/assets',
			'baseUrl' => '/webapp/assets',
			'basePath' => '@frontend/web/assets',
			//'basePath' => Yii::$app->media->baseUrl,
		],
        'request' => [
            'csrfParam' => '_csrf-frontend',
			'baseUrl' => '',
        ],
		'media' => [
			'class' => 'yii\web\UrlManager',
			'baseUrl' => '/webapp',
			'enablePrettyUrl' => true,
            'showScriptName' => false,
		],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],
    'params' => $params,
];
