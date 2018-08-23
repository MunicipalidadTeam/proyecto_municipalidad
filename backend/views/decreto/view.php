<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Decreto */

$this->title = $model->id_Decreto;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Decretos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="decreto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_Decreto], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_Decreto], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'numeroDecreto',
            'fechaDeEnvio',
            'fechaDecreto',
            'proveedor',
            'monto',
            'cuenta',
            'fechaRecepcion',
            'estado',
        ],
    ]) ?>
</div>
