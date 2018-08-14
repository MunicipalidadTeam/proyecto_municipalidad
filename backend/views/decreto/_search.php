<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\DecretoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="decreto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_Decreto') ?>

    <?= $form->field($model, 'numeroDecreto') ?>

    <?= $form->field($model, 'fechaDeEnvio') ?>

    <?= $form->field($model, 'fechaDecreto') ?>

    <?= $form->field($model, 'proveedor') ?>

    <?php // echo $form->field($model, 'monto') ?>

    <?php // echo $form->field($model, 'cuenta') ?>

    <?php // echo $form->field($model, 'fechaRecepcion') ?>

    <?php // echo $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
