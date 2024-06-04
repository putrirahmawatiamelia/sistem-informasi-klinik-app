<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Tindakan $model */

$this->title = $model->id_tindakan;
$this->params['breadcrumbs'][] = ['label' => 'Tindakan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tindakan-view">

    <h1>Tindakan: <?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_tindakan',
            'nama_tindakan',
            'biaya',
        ],
    ]) ?>

    <p>
        <?= Html::a('Ubah', ['update', 'id_tindakan' => $model->id_tindakan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id_tindakan' => $model->id_tindakan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda ingin menghapus data ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
