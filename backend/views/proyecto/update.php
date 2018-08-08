<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Proyecto */

$this->title = Yii::t('app', 'Update Proyecto: ' . $model->idProyecto, [
    'nameAttribute' => '' . $model->idProyecto,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Proyectos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idProyecto, 'url' => ['view', 'id' => $model->idProyecto]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="proyecto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
