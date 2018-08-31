<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <!-- $form->field($model, 'auth_key')->textInput(['maxlength' => true])

     $form->field($model, 'password_hash')->textInput(['maxlength' => true])

     $form->field($model, 'password_reset_token')->textInput(['maxlength' => true])

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

     $form->field($model, 'status')->textInput()

     $form->field($model, 'created_at')->textInput()

     $form->field($model, 'updated_at')->textInput() -->
    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'perfil')->dropDownList(['1' => 'Secretaria','2' => 'Jefe Municipal','3' => 'DAEM']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
