<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RawatTindakanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rawat Tindakan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rawat-tindakan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Rawat Tindakan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tindakan',
            'tgl_tindakan',
            'no_rawat',
            'kd_tindakan',
            'harga',
            //'kd_dokter',
            //'bagi_hasil_dokter',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
