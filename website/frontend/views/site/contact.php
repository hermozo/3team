<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contáctanos';
$this->params['breadcrumbs'][] = $this->title;
Yii::$app->controller->description = "Si tiene consultas comerciales u otras preguntas, complete el siguiente formulario para contactarnos.";
?>
<div id="overviews" class="section wb section-top" style="background-image: url(<?= Yii::$app->media->baseUrl ?>/images/bg-op.jpg); background-size:cover; background-position: center; background-attachment: fixed;">
	<div class="container">
		<div class="section-title row text-center">
			<div class="col-md-8 col-md-offset-2">
				<h3><?= Html::encode($this->title) ?></h3>
				<!--<p class="lead">Un equipo profesional, con la experiencia para el logro de los resultados efectivos</p>-->
			</div>
		</div><!-- end title -->
		<div class="section-title row">
			<div class="col-md-9 col-md-offset-2">
				<!--<p class="lead">Un equipo profesional, con la experiencia para el logro de los resultados efectivos</p>-->
				<p class="text-center">Si tiene consultas comerciales u otras preguntas, complete el siguiente formulario para contactarnos. Gracias.</p>

				<div class="row">
					<div class="col-lg-6">
						<img src="<?= Yii::$app->media->baseUrl ?>/images/contacto.jpg" alt="" class="img-responsive img-rounded img-contact">
					</div>
					<div class="col-lg-6">
						<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

							<?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

							<?= $form->field($model, 'email') ?>

							<?= $form->field($model, 'subject') ?>

							<?= $form->field($model, 'body')->textarea(['rows' => 3]) ?>

							<?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
								'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
							]) ?>

							<div class="form-group">
								<?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
							</div>

						<?php ActiveForm::end(); ?>
					</div>
				</div>
			</div>
		</div><!-- end title -->
		
	</div>
</div>
