<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TmpPenjualan */

$this->title = 'Tambah Tmp Penjualan';
$this->params['breadcrumbs'][] = ['label' => 'Tmp Penjualan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmp-penjualan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
