<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */
use yii\helpers\Html;

$this->title = $name;
if($exception->statusCode==404){
	$this->title = 'Página no encontrada (404)';
	$message = 'La página solicitada puede no estar disponible o pudo haber cambiado de dirección (URL)';
}
?>
<div id="overviews" class="section wb section-top" style="background-image: url(<?= Yii::$app->media->baseUrl ?>/images/bg-op.jpg); background-size:cover; background-position: center; background-attachment: fixed;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<img src="<?= Yii::$app->media->baseUrl ?>/images/page-404.png" alt="" class="img-responsive img-rounded">
			</div>
			<div class="col-lg-6 col-md-6">
				<h1><?= Html::encode($this->title) ?></h1>
				<div class="alert alert-danger">
					<?= nl2br(Html::encode($message)) ?>
					<p>Ir a:<br/> <?= Html::a('Página principal', yii\helpers\Url::home(), ["class"=>"btn btn-primary"])?></p>
				</div>
			</div>
		</div>
	</div>
</div>