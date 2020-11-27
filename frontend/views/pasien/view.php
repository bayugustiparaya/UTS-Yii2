<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pasien */

$this->title = $model->nomor_rm;
$this->params['breadcrumbs'][] = ['label' => 'Pasien', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pasien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nomor_rm], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nomor_rm], [
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
            'nomor_rm',
            'nm_pasien',
            'no_identitas',
            'jns_kelamin',
            'gol_darah',
            'agama',
            'tempat_lahir',
            'tanggal_lahir',
            'no_telepon',
            'alamat',
            'stts_nikah',
            'pekerjaan',
            'keluarga_status',
            'keluarga_nama',
            'keluarga_telepon',
            'tgl_rekam',
            'kd_petugas',
        ],
    ]) ?>

</div>
