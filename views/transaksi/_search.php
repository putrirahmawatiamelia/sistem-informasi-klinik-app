<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TransaksiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_transaksi') ?>

    <!-- <?= $form->field($model, 'id_pasien') ?>

    <?= $form->field($model, 'id_tindakan') ?>

    <?= $form->field($model, 'id_obat') ?>

    <?= $form->field($model, 'jumlah_obat') ?> -->

    <?php // echo $form->field($model, 'total_biaya') ?>

    <div class="form-group">
        <?= Html::submitButton('Cari', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
