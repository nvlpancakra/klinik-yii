<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Obat $model */

$this->title = $model->Nama_Obat;
$this->params['breadcrumbs'][] = ['label' => 'Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="obat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Nama_Obat' => $model->Nama_Obat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Nama_Obat' => $model->Nama_Obat], [
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
            'Nama_Obat',
            'Kode_Obat',
            'Deskripsi_Obat',
            'Kategori_Obat',
            'Aturan_Pakai',
            'Harga_Obat',
        ],
    ]) ?>

</div>
