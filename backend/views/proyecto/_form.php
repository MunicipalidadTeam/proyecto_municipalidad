<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Proyecto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyecto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NombreProyecto')->textInput(['maxlength' => true]) ?>

    <?php
      if (!$model->isNewRecord)
        echo $form -> field($model,'Activo')->checkbox();

     ?>

     <h2>Actividades</h2>

     <?=
     yii\grid\GridView::widget([
        'dataProvider'=> new \yii\data\ActiveDataProvider([
          'query' => $model ->getActividads(),
          'pagination' => false
        ]),
        'columns'=>[
          'NombreActividad',
          ['class' => 'yii\grid\ActionColumn',
            'controller' => 'actividad',
            'header' => Html::a('<i class="glyphicon-plus"></i>&nbsp;Agregar nueva', ['actividad/create-con-proyecto', 'idProyecto'=>$model ->idProyecto]),
          ],
        ]
     ]);
      ?>
       <?php  ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
