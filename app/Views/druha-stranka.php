<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h1 class="mt-5 text-center">Nejčastější barvy vlajek</h1>

<div id="carouselExampleIndicators" class="carousel slide mt-4 d-flex flex-column" data-bs-ride="carousel">

    <div class="carousel-indicators position-static d-flex justify-content-center mt-3 order-2">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner order-1">

        <div class="carousel-item active">

            <div class="row">

                <div class="col-md-6">
                    <img src="<?= base_url('img/cervena.jpg') ?>" class="d-block w-100" alt="První slide">
                </div>

                <div class="col-md-6 d-flex align-items-center p-4 bg-primary text-white">
                    <div>
                        <h3>Červená</h3>
                        <p>Červená barva ve vlajkách často symbolizuje odvahu, statečnost a krev prolitou za svobodu.</p>
                    </div>
                </div>

            </div>

        </div>

        <div class="carousel-item">

            <div class="row">

                <div class="col-md-6">
                    <img src="<?= base_url('img/modra.jpg') ?>" class="d-block w-100" alt="Druhý slide">
                </div>

                <div class="col-md-6 d-flex align-items-center p-4 bg-primary text-white">
                    <div>
                        <h3>Modrá</h3>
                        <p>Modrá představuje klid, svobodu a někdy i víru nebo pravdu. Často odkazuje na oblohu nebo moře.</p>
                    </div>
                </div>

            </div>

        </div>

        <div class="carousel-item">

            <div class="row">

                <div class="col-md-6">
                    <img src="<?= base_url('img/bila.jpg') ?>" class="d-block w-100" alt="Třetí slide">
                </div>

                <div class="col-md-6 d-flex align-items-center p-4 bg-primary text-white">
                    <div>
                        <h3>Bílá</h3>
                        <p>Bílá je tradičně spojována s mírem, čistotou a poctivostí. Ve vlajkách značí jednotu, naději nebo nový začátek.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

</div>


<?= $this->endSection(); ?>