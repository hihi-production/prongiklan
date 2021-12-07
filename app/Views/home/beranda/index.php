<?= $this->extend("layout/home"); ?>
<?= $this->section('content')  ?>
<?= $this->include("home/beranda/list_kategori") ?>
<div class="row list-iklan">
    <h1 class="title">Iklan Terbaru</h1>
    <?= $this->include("home/beranda/list_iklan") ?>
</div>
<?= $this->endsection()  ?>