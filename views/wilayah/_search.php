<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\WilayahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="wilayah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!-- <?= $form->field($model, 'id_wilayah') ?>

    <?= $form->field($model, 'kode_wilayah') ?> -->

    <?= $form->field($model, 'nama_wilayah') ?>

    <div class="form-group">
        <?= Html::submitButton('Cari', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
