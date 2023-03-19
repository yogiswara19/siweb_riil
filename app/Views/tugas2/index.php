<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Container</h1>
        <div class="row bg-warning" align='middle'>
            <h5>Container 1 - Gambar</h5>

            <div class=" col-6 bg-primary d-flex flex-column align-items-center justify-content-center" style="height: 50vh;">
                <img src="img/DSC_6071-removebg-preview.png" class="rounded mx-auto d-block" style="height: 50%; padding-top: 30px;">
                <h5>Gambar 1</h5>
            </div>

            <div class="col-6 bg-success d-flex flex-column align-items-center justify-content-center" style="height: 50vh;">
                <img src="img/UAJY-LOGOGRAM_-01.png" width="200" height="200">
                <h5>Gambar 2</h5>
            </div>
        </div>

        <!-- <br>
        <br> -->
        <div class="bg-light">
            <ol>
                <li class="text-light"></li>
                <li class="text-light"></li>
            </ol>
        </div>

        <div class="row bg-warning">
            <h5 class="text-center">Container 2 - Pesan dan Kesan</h5>

            <div class=" col-7 bg-info d-flex flex-column " style="height: 20vh;">
                <h3 class="text-center">Pengalaman Belajar Siweb :</h3>
                <br>
                <p>Pengalaman baru yang mantap, bisa eksplor banyak hal.</p>
            </div>

            <div class="col-5 bg-primary d-flex flex-column " style="height: 20vh;">
                <h3 class="text-center">Pesan dan Kesan kepada Asdos :</h3>
                <p class="text-center">Pesan : mantap</p>
                <p class="text-center">Kesan : ya gitu</p>
            </div>
        </div>
    </div>
    </div>
</main>
<?= $this->endSection() ?>