<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TmpPenjualan */

$this->title = 'Update Tmp Penjualan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tmp Penjualan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tmp-penjualan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
