<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RawatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rawat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rawat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Rawat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tgl_rawat',
            'nomor_rm',
            'hasil_diagnosa',
            'uang_bayar',
            //'kd_petugas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
