<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\KetentuanTindakan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ketentuan-tindakan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Dosis_Obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Nama_Tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Biaya')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
