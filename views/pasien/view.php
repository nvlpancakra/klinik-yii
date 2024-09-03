<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Pasien $model */

$this->title = $model->Nama_Pasein;
$this->params['breadcrumbs'][] = ['label' => 'Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pasien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Nama_Pasein' => $model->Nama_Pasein], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Nama_Pasein' => $model->Nama_Pasein], [
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
            'Nama_Pasein',
            'Tgl_Lahir',
            'Jenis_Kelamin',
            'Alamat',
            'Kelurahan',
            'Kecamatan',
            'Provinsi',
        ],
    ]) ?>

</div>
