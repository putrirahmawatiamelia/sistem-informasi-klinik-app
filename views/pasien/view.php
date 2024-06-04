<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Pasien $model */

$this->title = $model->id_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Data Pasien', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pasien-view">

    <h1>Data Pasien: <?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pasien',
            'nama',
            'jenis_kelamin',
            'alamat:ntext',
            'tanggal_lahir',
        ],
    ]) ?>

    <p>
        <?= Html::a('Ubah', ['update', 'id_pasien' => $model->id_pasien], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id_pasien' => $model->id_pasien], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda ingin menghapus data ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
