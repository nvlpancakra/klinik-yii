<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\KetentuanTindakan $model */

$this->title = $model->Dosis_Obat;
$this->params['breadcrumbs'][] = ['label' => 'Ketentuan Tindakan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ketentuan-tindakan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Dosis_Obat' => $model->Dosis_Obat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Dosis_Obat' => $model->Dosis_Obat], [
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
            'Dosis_Obat',
            'Obat',
            'Deskripsi:ntext',
            'Nama_Tindakan',
            'Biaya',
        ],
    ]) ?>

</div>
