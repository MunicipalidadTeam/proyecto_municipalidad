<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Decreto */

$this->title = Yii::t('app', 'Update Decreto: ' . $model->id_Decreto, [
    'nameAttribute' => '' . $model->id_Decreto,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Decretos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_Decreto, 'url' => ['view', 'id' => $model->id_Decreto]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="decreto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
