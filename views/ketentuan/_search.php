<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\KetentuanTindakanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ketentuan-tindakan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Dosis_Obat') ?>

    <?= $form->field($model, 'Obat') ?>

    <?= $form->field($model, 'Deskripsi') ?>

    <?= $form->field($model, 'Nama_Tindakan') ?>

    <?= $form->field($model, 'Biaya') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
