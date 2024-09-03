<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Obat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nama_Obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kode_Obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Deskripsi_Obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kategori_Obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Aturan_Pakai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Harga_Obat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
