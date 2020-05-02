<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
			<li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
			<li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div id="home" class="first-section" style="background-image: url('<?= Yii::$app->request->baseUrl ?>/images/bg.jpg');
					background-position: center;
					background-size: cover;
					background-repeat: no-repeat;">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 text-center">
								<div class="big-tagline">
									<img src="<?= Yii::$app->request->baseUrl ?>/images/logo-oficial.png" alt="image">
									<h2 data-animation="animated zoomInRight">Cursos <strong>Desarrollo Web</strong></h2>
									<p class="lead" data-animation="animated fadeInLeft" style="font-size: 40px;">Aprovecha tu tiempo y aprende con nosotros.</p>
									<!--<a data-scroll href="#pricing" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInLeft">View Plans</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a data-scroll href="#overviews" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInRight">All Features</a>-->
								</div>
							</div>
						</div><!-- end row -->            
					</div><!-- end container -->
				</div><!-- end section -->
			</div>
			<div class="item">
				<div id="home" class="first-section" style="background-image: url('<?= Yii::$app->request->baseUrl ?>/images/yii2.jpg');
					background-position: center;
					background-size: cover;
					background-repeat: no-repeat;">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 text-center">
								<div class="big-tagline">
									<img src="<?= Yii::$app->request->baseUrl ?>/images/logo-yii.png" alt="image" style="max-width: 350px;" >
									<h2 data-animation="animated zoomInRight">Cursos de <strong>Php con Yii framework</strong></h2>
									<p class="lead" data-animation="animated fadeInLeft">Con este curso aprenderás trucos, componentes básicos, y cómo utilizar correctamente esta herramienta para desarrollar tu propio proyecto web.</p>
									<a data-scroll href="#pricing" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInLeft">Ver cursos</a>
								</div>
							</div>
						</div><!-- end row -->            
					</div><!-- end container -->
				</div><!-- end section -->
			</div>
			<div class="item">
				<div id="home" class="first-section" style="background-image:url('<?= Yii::$app->request->baseUrl ?>/images/about.jpg');
					background-position: center;
					background-size: cover;
					background-repeat: no-repeat;">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 text-center">
								<div class="big-tagline">
									<img src="<?= Yii::$app->request->baseUrl ?>/images/logo-oficial.png" alt="image">
									<h2 data-animation="animated zoomInRight">Desarrollamos <strong>Software</strong></h2>
									<p class="lead" data-animation="animated fadeInLeft">
										Realizamos Sistemas de Información, Tiendas en línea (E-Comerce), Administrador de contenidos(CMS), LandingPages, Aplicaciones Móviles con servicios API Rest.
									</p>
									 <a data-scroll href="#pricing" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInLeft">View Plans</a>
								</div>
							</div>
						</div><!-- end row -->            
					</div><!-- end container -->
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
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
                        <!--h4>2017 BEST WEB HOSTING COMPANY</h4-->
                        <h2>Nosotros</h2>
						<p>Somos un equipo profesional especializado en asistencia tecnológica en el desarrollo de aplicaciones web y aplicaciones móviles con el fin de brindar soluciones a la medida de tu empresa, trabajamos juntos para conseguir tus objetivos. En poco tiempo llegamos a empresas que necesitan la implementación de soluciones informáticas.</p>
						<p><b>Además brindamos cursos, capacitaciones en nuestro canal de YouTube para desarrolladores en web.</b></p>
                        
						<a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Leer mas</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="<?= Yii::$app->request->baseUrl ?>/images/slider-04.jpg" alt="" class="img-responsive img-rounded">
                        <!--<a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>-->
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis">

            <!--<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="flaticon-world-wide-web global-radius effect-1 alignleft"></i>
                        <h3>Dominio</h3>
                        <p>¡Ofrecemos íconos de píxeles perfectos, fuentes gráficas para dispositivos de alta resolución! ¡Pantalla retina compatible con THREE TEAM!<small class="readmore"><a href="#">Read more</a></small></p>
                    </div>
                </div> 
				
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="flaticon-cer-file-format global-radius effect-1 alignleft"></i>
                        <h3>Certificación SSL gratuita</h3>
                        <p>¡Ofrecemos íconos de píxeles perfectos, fuentes gráficas para dispositivos de alta resolución! ¡Pantalla retina compatible con THREE TEAM! <small class="readmore"><a href="#">Read more</a></small></p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <i class="flaticon-locked global-radius effect-1 alignleft"></i>
                        <h3>Alta Seguridad</h3>
                        <p>Cuando necesite algo sobre la plantilla de THREE TEAM, simplemente envíe un correo electrónico o deje un comentario de TF.<small class="readmore"><!a href="#">Read more</a></small></p>
                    </div>
                </div>
            </div>-->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="domain" class="parallax section noover" data-stellar-background-ratio="0.7" style="background-image:url('<?= Yii::$app->request->baseUrl ?>/images/cursos-php-parallax1.jpg');">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-5 col-sm-12">
                    <div class="customwidget text-left">
                        <h1>Cursos en Linea</h1>
                        <p>El curso online de Experto en Programación Web responde a las necesidades del mercado laboral actual, donde estar permanentemente actualizado es fundamental.</p>
						<p>Además aprenderás los principales lenguajes de programación usados en la actualidad. Programar sitios dinámicos que interactúen con bases de datos. Conocer la integración de lenguajes y herramientas de desarrolo que permiten realizar sitios multiplataforma.</p>
                        <!-- end list -->
                        <a href="#hosting" data-scroll class="btn btn-light grd1 effect-1 btn-radius btn-brd">Ver cursos</a>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-md-7">
                    <div class="post-media wow fadeIn">
                        <img src="<?= Yii::$app->request->baseUrl ?>/images/cursos1.jpg" alt="" class="img-responsive img-rounded">
                        <a href="https://www.youtube.com/watch?v=ndQh5pE4cMo" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="hosting" class="section wb" style="background: rgb(248, 248, 248)">
        <div class="container">
            <div class="section-title text-center">
                <h3>Otros Servicios</h3>
                <p class="lead"><b>Desarrollamos con las mejores herramientas</b></p>
				<p>Nuestra estrategia de desarrollo empieza por elegir la infraestructura y lenguaje de programación adecuado. Conocemos las principales tecnologías de desarrollo y estamos en constante actualización.</p>
            </div><!-- end title -->

            <div class="row dev-list text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="widget clearfix">
                        <img src="<?= Yii::$app->request->baseUrl ?>/images/pagina-web5.png" alt="" class="img-responsive">
                        <div class="widget-title">
                            <h3>Páginas Web</h3>
                            <!--small>Starting from $40/month</small-->
                        </div>
                        <!-- end title -->
						<p>Hacemos tu sitio web personalizado de acuerdo al estilo de tu negocio y adaptables a distintos sistemas operativos.</p><!-- con las tecnologías actuales-->
                        <hr>
                        <a href="web.html" data-scroll class="btn btn-light grd1 effect-1 btn-radius btn-brd">Ver más</a>

                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="widget clearfix">
                        <img src="<?= Yii::$app->request->baseUrl ?>/images/app-moviles.jpg" alt="" class="img-responsive">
                        <div class="widget-title">
                            <h3>Aplicaciones Móviles</h3>
                            <!--small>Starting from $80/month</small-->
                        </div>
                        <!-- end title -->
                        <p>Desarrollamos aplicaciones móviles con herramientas basadas en las tecnologías actuales y estándares de calidad.</p>
                        <hr>
						<a href="android.html" data-scroll class="btn btn-light grd1 effect-1 btn-radius btn-brd">Ver más</a>

                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="widget clearfix">
                        <img src="<?= Yii::$app->request->baseUrl ?>/images/sis-inf2.jpg" alt="" class="img-responsive">
                        <div class="widget-title">
                            <h3>Sistemas de Información</h3>
                            <!--small>Starting from $120/month</small-->
                        </div>
                        <!-- end title -->
                        <p>Analizamos y automatizamos tus procesos de negocio según tu requerimiento, permitiéndote ahorrar tiempo y dinero.</p>
						<hr>
                        <a href="software.html" data-scroll class="btn btn-light grd1 effect-1 btn-radius btn-brd">Ver más</a>

                    </div><!--widget -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </div>