<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Quiénes somos';
$this->params['breadcrumbs'][] = $this->title;
Yii::$app->controller->description = "Somos un equipo profesional especializado en asistencia tecnológica en el desarrollo de aplicaciones web y móviles con el fin de brindar soluciones a la medida de tu empresa, trabajamos juntos para conseguir tus objetivos. En poco tiempo llegamos a empresas que necesitan la implementación de soluciones informáticas.";
?>
<div id="overviews" class="section wb section-top" style="background-image: url(<?= Yii::$app->media->baseUrl ?>/images/bg-op.jpg); background-size:cover; background-position: center; background-attachment: fixed;">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3>Equipo 3Team</h3>
                    <!--<p class="lead">Un equipo profesional, con la experiencia para el logro de los resultados efectivos</p>-->
                </div>
            </div><!-- end title -->
        
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <!--h4>Acerca de nosotros</h4-->
						<p>Somos un equipo profesional especializado en asistencia tecnológica en el desarrollo de aplicaciones web y móviles con el fin de brindar soluciones a la medida de tu empresa, trabajamos juntos para conseguir tus objetivos. En poco tiempo llegamos a empresas que necesitan la implementación de soluciones informáticas.</p>
						<p><b>Además brindamos cursos, capacitaciones en nuestro canal de YouTube para desarrolladores en web.</b></p>
                        
					</div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="<?= Yii::$app->media->baseUrl ?>/images/about1.png" alt="" class="img-responsive img-rounded">
                        <!--<a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>-->
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis">
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="domain" class="parallax section noover" data-stellar-background-ratio="0.7" style="background-image:url('<?= Yii::$app->media->baseUrl ?>/images/cursos-php-parallax1.jpg');">
        <div class="container">
            <div class="row text-center">
				<div class="col-md-6">
                    <div class="customwidget message-box wow fadeIn">
                        <!--h4>2017 BEST WEB HOSTING COMPANY</h4-->
                        <h2>Misión</h2>
						<p>3Team, es un equipo capacitado y con amplia experiencia en el desarrollo de aplicaciones web y móviles, para dar soporte a tu negocio y automatizar tu empresa. Además compartimos nuestro conocimiento con los estudiantes interesados en el area.</p>
                        
					</div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-md-6">
                    <div class="customwidget message-box wow fadeIn">
                       <h2>Visión</h2>
					   <p>Ser un equipo destacada en desarrollo de software digitalizando la información de tu empresa y alcanzando el más alto nivel, garantizando que nuestros servicios cumplan con las necesidades y espectativas esperados por tu compañía.</p>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	<div id="hosting" class="section wb" style="background: rgb(248, 248, 248)">
        <div class="container">
            <div class="section-title text-center">
                <h3>Nuestros valores</h3>
            </div><!-- end title -->

            <div class="row">
				<div class="col-md-3">
                    <div class="message-box wow fadeIn">
                       <h3>Pasión</h3>
					   <img src="<?= Yii::$app->media->baseUrl; ?>/images/pasion.jpg" class="img-responsive">
					</div><!-- end media -->
                </div><!-- end col -->
				<div class="col-md-3">
                    <div class="message-box wow fadeIn">
                       <h3>Dedicación</h3>
					   <img src="<?= Yii::$app->media->baseUrl; ?>/images/dedicacion.jpg" class="img-responsive">
					</div><!-- end media -->
                </div><!-- end col -->
				<div class="col-md-3">
                    <div class="message-box wow fadeIn">
                       <h3>Confianza</h3>
					   <img src="<?= Yii::$app->media->baseUrl; ?>/images/confianza.jpg" class="img-responsive">
					</div><!-- end media -->
                </div><!-- end col -->
				<div class="col-md-3">
                    <div class="message-box wow fadeIn">
                       <h3>Innovación</h3>
					   <img src="<?= Yii::$app->media->baseUrl; ?>/images/innovacion.jpg" class="img-responsive">
					</div><!-- end media -->
                </div><!-- end col -->
			</div>
        </div>
    </div>
