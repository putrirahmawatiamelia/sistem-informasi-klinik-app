<?php

/** @var yii\web\View $this */

$this->title = 'SI Klinik - Putri R. Amelia';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Selamat Datang!</h1>

        <p class="lead">Sistem Informasi Klinik</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Pasien</h2>
                <p><a class="btn btn-outline-secondary" href="/index.php?r=pasien/index">Data Pasien &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Pegawai</h2>
                <p><a class="btn btn-outline-secondary" href="/index.php?r=pegawai/index">Data Pegawai &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Obat</h2>
                <p><a class="btn btn-outline-secondary" href="/index.php?r=obat/index">Data Obat &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Tindakan</h2>
                <p><a class="btn btn-outline-secondary" href="/index.php?r=tindakan/index">Data Tindakan &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Wilayah</h2>
                <p><a class="btn btn-outline-secondary" href="/index.php?r=wilayah/index">Data Wilayah &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Transaksi hasil Tindakan</h2>
                <p><a class="btn btn-outline-secondary" href="/index.php?r=transaksi/index">Data Transaksi &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
