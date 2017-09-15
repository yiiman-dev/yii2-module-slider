<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model amintado\slider\models\base\SlideComposer */

$this->title = Yii::t('atslider', 'Save As New {modelClass}: ', [
    'modelClass' => 'Slide Composer',
]). ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('atslider', 'Slide Composers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('atslider', 'Save As New');
?>
<div class="slide-composer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
