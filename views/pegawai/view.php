<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Pegawai $model */

$this->title = $model->id_pegawai;
$this->params['breadcrumbs'][] = ['label' => 'Data Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pegawai-view">

    <h1>Data Pegawai: <?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pegawai',
            'nama',
            'jenis_kelamin',
            'alamat:ntext',
            'tanggal_lahir',
        ],
    ]) ?>

    <p>
        <?= Html::a('Ubah', ['update', 'id_pegawai' => $model->id_pegawai], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id_pegawai' => $model->id_pegawai], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda ingin menghapus data ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
