<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RawatTindakan */

$this->title = 'Tambah Rawat Tindakan';
$this->params['breadcrumbs'][] = ['label' => 'Rawat Tindakan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rawat-tindakan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
