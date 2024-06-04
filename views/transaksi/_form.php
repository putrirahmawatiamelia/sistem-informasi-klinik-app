<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Pasien;
use app\models\Tindakan;
use app\models\Obat;

/** @var yii\web\View $this */
/** @var app\models\Transaksi $model */
/** @var yii\widgets\ActiveForm $form */

$pasienItems = Pasien::find()->select(['nama', 'id_pasien'])->indexBy('id_pasien')->column();
$tindakanItems = Tindakan::find()->select(['nama_tindakan', 'id_tindakan'])->indexBy('id_tindakan')->column();
$obatItems = Obat::find()->select(['nama_obat', 'id_obat'])->indexBy('id_obat')->column();
?>

<div class="transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pasien')->dropDownList($pasienItems, ['prompt' => 'Pilih Pasien']) ?>

    <?= $form->field($model, 'id_tindakan')->dropDownList($tindakanItems, ['prompt' => 'Pilih Tindakan']) ?>

    <?= $form->field($model, 'id_obat')->dropDownList($obatItems, ['prompt' => 'Pilih Obat']) ?>

    <?= $form->field($model, 'jumlah_obat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
