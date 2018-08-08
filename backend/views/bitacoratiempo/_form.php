<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Proyecto;
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

  

    <?= $form->field($model, 'ActividadNoPlaneada')->textInput(['maxlength' => true]) ?>



    <?php
     $proyecto = ArrayHelper::map(Proyecto::find()->where(['Activo'=>1])->orderby('NombreProyecto')->all(),'idProyecto','NombreProyecto');
     ?>

   <?= $form->field($model, 'idProyecto')->dropDownList($proyecto) ?>

    <?= $form->field($model, 'Artefacto')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
