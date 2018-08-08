<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Proyecto;
/* @var $this yii\web\View */
/* @var $model backend\models\Actividad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actividad-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NombreActividad')->textInput(['maxlength' => true]) ?>

    <?php
      if (!$model->isNewRecord) {
        echo $form -> field($model,'Activo')->checkbox();
      }
     ?>
     <?php
      $proyecto = ArrayHelper::map(Proyecto::find()->where(['Activo'=>1])->orderby('NombreProyecto')->all(),'idProyecto','NombreProyecto');
      ?>

    <?= $form->field($model, 'idProyecto')->dropDownList($proyecto) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
