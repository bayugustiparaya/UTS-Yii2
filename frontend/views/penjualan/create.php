<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penjualan */

$this->title = 'Tambah Penjualan';
$this->params['breadcrumbs'][] = ['label' => 'Penjualan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjualan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
