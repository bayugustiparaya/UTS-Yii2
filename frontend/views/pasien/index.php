<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pasien';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nomor_rm',
            'nm_pasien',
            'no_identitas',
            'jns_kelamin',
            'gol_darah',
            //'agama',
            //'tempat_lahir',
            //'tanggal_lahir',
            //'no_telepon',
            //'alamat',
            //'stts_nikah',
            //'pekerjaan',
            //'keluarga_status',
            //'keluarga_nama',
            //'keluarga_telepon',
            //'tgl_rekam',
            //'kd_petugas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
