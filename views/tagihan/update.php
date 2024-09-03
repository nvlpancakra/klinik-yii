<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tagihan $model */

$this->title = 'Update Tagihan: ' . $model->Nomor_Tagihan;
$this->params['breadcrumbs'][] = ['label' => 'Tagihans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Nomor_Tagihan, 'url' => ['view', 'Nomor_Tagihan' => $model->Nomor_Tagihan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tagihan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
