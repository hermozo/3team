<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$r = Yii::$app->controller->getRoute();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <!-- Basic -->
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
 
    <title>3Team - <?= Html::encode($this->title) ?></title>  
    <meta name="title" content="3Team">
	<meta name="description" content="<?= Yii::$app->controller->description ?>">
	<meta name="keywords" content="3team, 3-team, cursos, php, yii2, framework, javascript, jquery, css, mysql, base de datos, software">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="7 days">
	<meta name="author" content="3Team">
	
	<?php $urlRoute = Yii::$app->urlManager->createAbsoluteUrl(['']); ?>
	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?= Yii::$app->urlManager->createAbsoluteUrl([$r]) ?>">
	<meta property="og:title" content="3Team - <?= Html::encode($this->title) ?>">
	<meta property="og:description" content="<?= Yii::$app->controller->description ?>">
	<meta property="og:image" content="<?= Yii::$app->media->createAbsoluteUrl(['']) ?>images/logo-rrss.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?= Yii::$app->urlManager->createAbsoluteUrl([$r]) ?>">
	<meta property="twitter:title" content="3Team - <?= Html::encode($this->title) ?>">
	<meta property="twitter:description" content="<?= Yii::$app->controller->description ?>">
	<meta property="twitter:image" content="<?= Yii::$app->media->createAbsoluteUrl(['']) ?>images/logo-rrss.png">

    <link rel="shortcut icon" href="<?= Yii::$app->media->baseUrl ?>/images/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="<?= Yii::$app->media->baseUrl ?>/images/favicon.png" type="images/png" />

    <link rel="stylesheet" href="<?= Yii::$app->media->baseUrl ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= Yii::$app->media->baseUrl ?>/css/style.css">
    <link rel="stylesheet" href="<?= Yii::$app->media->baseUrl ?>/css/responsive.css">
    <script src="<?= Yii::$app->media->baseUrl ?>/js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php $this->head() ?>
</head>
<body class="host_version">
<?php $this->beginBody() ?>
	<!-- LOADER -->
	<div id="preloader">
		<div class="loading">
			
		</div>
	</div>
	<!-- END LOADER -->
	<header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand ccc" href="<?= Url::home(true)?>"><img src="<?= Yii::$app->media->baseUrl ?>/images/logo-oficial.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav nav navbar-right">
						<?php
						$r0=$r=='site/index'?'active':'';
						$r1=$r=='site/about'?'active':'';
						$r2=$r=='site/cursos'?'active':'';
						$r3=$r=='site/contactos'?'active':'';
						?>
                        <li><?= Html::a('Inicio', Url::home(true), ['class'=>$r0]) ?></li>
                        <li><?= Html::a('Quiénes somos', ['about'], ['class'=>$r1]) ?></li>
                        <!--li><a href="domain.html">Servicios</a></li-->
                        <li><?= Html::a('Cursos', ['cursos'], ['class'=>$r2]) ?></li>
                        <!--li><a href="pricing.html">Pricing</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li-->
                        <li><?= Html::a('Contactos', ['contactos'], ['class'=>$r3]) ?></li>
                    </ul>
                    <!--ul class="nav navbar-nav navbar-right">
                        <li><a class="btn-light btn-radius btn-brd log" href="#" data-toggle="modal" data-target="#login"><i class="flaticon-padlock"></i> Customer Login</a></li>
                    </ul-->
                </div>
            </div>
        </nav>
    </header>
	<?php /*Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	])*/ ?>
	<?= Alert::widget() ?>
	<?= $content ?>

	<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="<?= Yii::$app->media->baseUrl ?>/images/logo-oficial.png" alt="" style="width:160px;">
                            <!--<small>Ingeniería Digital</small>-->
                        </div>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-md-3 col-sm-3 col-xs-4">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Enlaces</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="<?= Url::to(['/site/cursos']) ?>"><i class="fa fa-youtube-play"></i> Cursos</a></li>
                            <li><a href="#"><i class="fa fa-users"></i> Servicios</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-md-3 col-sm-3 col-xs-4">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contactos</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:info@3team.com"><i class="fa fa-envelope-o"></i> info@3team.com</a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=59160533321&text=Buenas%20tardes%20necesito%20m%C3%A1s%20informaci%C3%B3n%20sobre..." target="_blank"><i class="fa fa-whatsapp"></i> +591 60533321</a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=59170598397&text=Buenas%20tardes%20necesito%20m%C3%A1s%20informaci%C3%B3n%20sobre..." target="_blank"><i class="fa fa-whatsapp"></i> +591 70598397</a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=59171274997&text=Buenas%20tardes%20necesito%20m%C3%A1s%20informaci%C3%B3n%20sobre..." target="_blank"><i class="fa fa-whatsapp"></i> +591 71274997</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 col-xs-4">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Social</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="https://www.facebook.com/dw3team/" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li><a href="https://www.youtube.com/channel/UCC4dkTS9BCpgq3bvYGUNGZw" target="_blank"><i class="fa fa-youtube"></i> YouTube</a></li>
                            <li><a href="#"><i class="fa fa-github"></i> Github</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

	<div class="copyrights" >
		<div class="container">
			<div class="footer-distributed">
				<p class="footer-company-name">Todos los derechos reservados. &copy; 2020; Diseñado por: <a href="#">3Team</a></p>
			</div>
		</div><!-- end container -->
	</div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<?php $this->endBody() ?>
    <!-- ALL JS FILES -->
    <script src="<?= Yii::$app->media->baseUrl ?>/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?= Yii::$app->media->baseUrl ?>/js/custom.js"></script>
</body>
</html>
<?php $this->endPage() ?>
