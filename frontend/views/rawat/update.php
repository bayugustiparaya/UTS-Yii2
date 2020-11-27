<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rawat */

$this->title = 'Update Rawat: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Rawat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'id' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rawat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
