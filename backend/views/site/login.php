<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Acceso Sistema de Decretos';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">


    <div class="row">
        <div class="col-md-3"> </div>
          <div class="col-md-6">
            <center>
            <br>
            <h1><?= Html::encode($this->title) ?></h1>
            <br>
            <p>Llenar los campos requeridos correctamente para el acceso al sistema:</p>

            <?= Html::img('@web/Imagenes/logo.png', ['alt' => 'My logo','class'=>'Responsive image img-rounded']) ?>
          </center>
            <?php $form = ActiveForm::begin(['layout'=>'horizontal','id' => 'login-form']); ?>
            <br>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-md-3"> </div>

    </div>
</div>
