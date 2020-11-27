<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TmpPenjualanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tmp Penjualan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmp-penjualan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Tmp Penjualan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kd_obat',
            'jumlah',
            'kd_petugas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
