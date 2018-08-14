<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Decreto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="decreto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_Decreto')->textInput() ?>

    <?= $form->field($model, 'numeroDecreto')->textInput() ?>

    <?= $form->field($model, 'fechaDeEnvio')->textInput() ?>

    <?= $form->field($model, 'fechaDecreto')->textInput() ?>

    <?= $form->field($model, 'proveedor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'monto')->textInput() ?>

    <?= $form->field($model, 'cuenta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fechaRecepcion')->textInput() ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
