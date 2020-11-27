<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PenjualanItem */

$this->title = $model->no_penjualan;
$this->params['breadcrumbs'][] = ['label' => 'Penjualan Item', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penjualan-item-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_penjualan' => $model->no_penjualan, 'kd_obat' => $model->kd_obat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_penjualan' => $model->no_penjualan, 'kd_obat' => $model->kd_obat], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no_penjualan',
            'kd_obat',
            'harga_modal',
            'harga_jual',
            'jumlah',
        ],
    ]) ?>

</div>
