<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Actividad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actividad-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NombreActividad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Activo')->textInput() ?>

    <?= $form->field($model, 'idProyecto')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
