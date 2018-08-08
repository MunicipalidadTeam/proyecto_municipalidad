<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bitacoratiempo */

$this->title = Yii::t('app', 'Update Bitacoratiempo: ' . $model->idBitacoraTiempo, [
    'nameAttribute' => '' . $model->idBitacoraTiempo,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bitacoratiempos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idBitacoraTiempo, 'url' => ['view', 'id' => $model->idBitacoraTiempo]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="bitacoratiempo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>