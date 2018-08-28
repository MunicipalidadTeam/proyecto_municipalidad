<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\DecretoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Decretos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="decreto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Reset', ['decreto'], ['class' => 'btn btn-warning']); ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_Decreto',
            'numeroDecreto',
            //'fechaDeEnvio',
            /*Hace la busqueda por fecha*/
            [
              'attribute' => 'fechaDeEnvio',
              'label' => 'fecha',
              'value' => 'fechaDeEnvio',
              'filter' => \yii\jui\DatePicker::widget([
              'model'=>$searchModel,
              'attribute'=>'fechaDeEnvio',
              'language' => 'es',
              'dateFormat' => 'yyyy-MM-dd',
              'options' => ['class'=>'form-control'],
            ]),
            'format' => 'html',
          ],
          [
            'attribute' => 'fechaDecreto',
            'value' => 'fechaDecreto',
            'filter' => \yii\jui\DatePicker::widget([
            'model'=>$searchModel,
            'attribute'=>'fechaDecreto',
            'language' => 'es',
            'dateFormat' => 'yyyy-MM-dd',
            'options' => ['class'=>'form-control'],
          ]),
          'format' => 'html',
        ],
            'proveedor',
            'monto',
            'cuenta',
            [
              'attribute' => 'fechaRecepcion',
              'value' => 'fechaRecepcion',
              'filter' => \yii\jui\DatePicker::widget([
              'model'=>$searchModel,
              'attribute'=>'fechaRecepcion',
              'language' => 'es',
              'dateFormat' => 'yyyy-MM-dd ',
              'options' => ['class'=>'form-control'],
            ]),
          ],
            //'id',
            //'estado',
            [
              'attribute' => 'estado',
              'format' => 'raw',
              'value' => function($data){
                return Html::a($data->estado,'',['class'=>'col-centered '.$data->estadocolordecreto]);
              },
              'filter'=>['PENDIENTE' => 'PENDIENTE','MUNICIPIO' => 'ENVIADO A MUNICIPIO','TERMINADO' => 'TERMINADO'],
            ],
        ],
  ]);?>
</div>
