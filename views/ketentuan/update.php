<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\KetentuanTindakan $model */

$this->title = 'Update Ketentuan Tindakan: ' . $model->Dosis_Obat;
$this->params['breadcrumbs'][] = ['label' => 'Ketentuan Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Dosis_Obat, 'url' => ['view', 'Dosis_Obat' => $model->Dosis_Obat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ketentuan-tindakan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
