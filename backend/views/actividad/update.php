<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Actividad */

$this->title = Yii::t('app', 'Update Actividad: ' . $model->idActividad, [
    'nameAttribute' => '' . $model->idActividad,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Actividads'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idActividad, 'url' => ['view', 'id' => $model->idActividad]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="actividad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
