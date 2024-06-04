<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Transaksi $model */

$this->title = 'Tambah Transaksi';
$this->params['breadcrumbs'][] = ['label' => 'Transaksi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
