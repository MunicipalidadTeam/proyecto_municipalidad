<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Bitacoratiempo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bitacoratiempo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Fecha')->textInput() ?>

    <?= $form->field($model, 'HoraInicio')->textInput() ?>

    <?= $form->field($model, 'HoraFinal')->textInput() ?>

    <?= $form->field($model, 'Interrupcion')->textInput() ?>

    <?= $form->field($model, 'Total')->textInput() ?>

    <?= $form->field($model, 'ActividadNoPlaneada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idActividadPlaneada')->textInput() ?>

    <?= $form->field($model, 'idProyecto')->textInput() ?>

    <?= $form->field($model, 'Artefacto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idUsuario')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
