<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Tagihan $model */

$this->title = $model->Nomor_Tagihan;
$this->params['breadcrumbs'][] = ['label' => 'Tagihan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tagihan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Nomor_Tagihan' => $model->Nomor_Tagihan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Nomor_Tagihan' => $model->Nomor_Tagihan], [
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
            'Nomor_Tagihan',
            'Nama_Pasein',
            'Deskripsi_Tagihan:ntext',
            'Total_Tagihan',
            'Status_Pembayaran',
            'Tanggal_Pembayaran',
        ],
    ]) ?>

</div>
