<div class="kategori">
    <div class="row">
        <?php foreach (array_slice($kategori, 0, 5) as $value) : ?>
            <div class="col-4 col-sm-3 col-lg-3 kategori__list d-flex justify-content-center">
                <div>
                    <img src="<?= base_url('/uploads/kategori') . "/" ?><?= $value->gambar ?>" class="kategori__list__gambar mx-auto d-flex">
                    <p class="kategori__list__judul text-center"><?= $value->judul ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="col-4 col-sm-3 col-lg-3 kategori__list d-flex justify-content-center">
            <div>
                <img src="<?= base_url('/uploads/kategori') . "/" ?><?= $value->gambar ?>" class="kategori__list__gambar mx-auto d-flex">
                <p class="kategori__list__judul text-center">Semua</p>

            </div>
        </div>
    </div>
</div>