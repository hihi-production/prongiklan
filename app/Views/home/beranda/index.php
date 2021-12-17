<?= $this->extend("layout/home"); ?>
<?= $this->section('content')  ?>
<?= $this->include("home/beranda/list_kategori") ?>
<div class="row list-iklan">
    <img src="<?= base_url('assets/img/Banner-prongiklan.png') ?>" alt="" srcset="" class="banner">
    <h1 class="title">PRONGIKLAN Cara Gampang Jual Cepat</h1>
    <?= $this->include("home/beranda/list_iklan") ?>
</div>
<?= $this->endsection()  ?>