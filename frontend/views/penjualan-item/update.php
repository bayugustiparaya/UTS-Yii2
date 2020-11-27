<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PenjualanItem */

$this->title = 'Update Penjualan Item: ' . $model->no_penjualan;
$this->params['breadcrumbs'][] = ['label' => 'Penjualan Item', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_penjualan, 'url' => ['view', 'no_penjualan' => $model->no_penjualan, 'kd_obat' => $model->kd_obat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penjualan-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
