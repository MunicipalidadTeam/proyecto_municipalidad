<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Decreto */

$this->title = Yii::t('app', 'Create Decreto');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Decretos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="decreto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
