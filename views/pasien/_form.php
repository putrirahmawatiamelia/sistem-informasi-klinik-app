<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'placeholder' => 'Nama Lengkap Pasien']) ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList([
        'Laki-laki' => 'Laki-laki',
        'Perempuan' => 'Perempuan',
    ], ['prompt' => 'Pilih Jenis Kelamin']) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput(['placeholder' => 'yyyy/mm/dd']) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
