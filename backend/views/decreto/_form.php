<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Decreto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="decreto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //=  $form->field($model, 'id_Decreto')->textInput() ?>

    <?= $form->field($model, 'numeroDecreto')->textInput() ?>

    <?php //= $form->field($model, 'fechaDeEnvio')->textInput() ?>
    <?= $form->field($model,'fechaDeEnvio')->widget(
        DatePicker::className(),[
          'language' => 'es',
          'options' =>['class'=>'form-control'],
          'clientOptions' => [
          //'defaultDate' => '2014-01-01'
          'minDate' =>'-3w',
            ]])
      ?>
    <?php //= $form->field($model, 'fechaDecreto')->textInput() ?>
    <?= $form->field($model,'fechaDecreto')->widget(
        DatePicker::className(),[
          'language' => 'es',
          'options' =>['class'=>'form-control'],
          'clientOptions' => [
          //'defaultDate' => '2014-01-01'
          'minDate' =>'-3w',
            ]])
      ?>

    <?= $form->field($model, 'proveedor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'monto')->textInput() ?>

    <?= $form->field($model, 'cuenta')->dropDownList(['JUNJI' => 'JUNJI','FAE' => 'FAE']) ?>

    <?php //= $form->field($model, 'fechaRecepcion')->textInput() ?>
    <?= $form->field($model,'fechaRecepcion')->widget(
        DatePicker::className(),[
          'language' => 'es',
          'options' =>['class'=>'form-control'],
          'clientOptions' => [
          //'defaultDate' => '2014-01-01'
          'minDate' =>'-3w',
            ]])
      ?>

    <?php //= $form->field($model, 'id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
