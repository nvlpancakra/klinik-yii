<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Customer $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-6">
        <?= $form->field($model, 'id_User')->textInput() ?>

        <?= $form->field($model, 'Nama_Lengkap')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'Nomor_Telepon')->textInput() ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>