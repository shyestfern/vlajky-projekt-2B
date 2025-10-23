<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h1 class="mt-5 text-center">Symboly ve vlajkách</h1>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 mt-4">

    <div class="col">
        <div class="card text-bg-primary">
            <div class="row g-0 d-flex align-items-stretch">
                <div class="col-6 position-relative">
                    <img src="<?= base_url('img/slunce.jpg') ?>" class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="První karta">
                    <span class="flag-icon fi fi-jp position-absolute top-0 start-0 m-2" style="font-size: 2rem;"></span>
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <h5 class="card-title">Červený kruh</h5>
                        <p class="card-text">Je Slunce.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card text-bg-primary">
            <div class="row g-0 d-flex align-items-stretch">
                <div class="col-6 position-relative">
                    <img src="<?= base_url('img/hvezdy.jpg') ?>" class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="První karta">
                    <span class="flag-icon fi fi-br position-absolute top-0 start-0 m-2" style="font-size: 2rem;"></span>
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <h5 class="card-title">Hvězdy</h5>
                        <p class="card-text">Obloha nad Riem</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card text-bg-primary">
            <div class="row g-0 d-flex align-items-stretch">
                <div class="col-6 position-relative">
                    <img src="<?= base_url('img/jednota.jpg') ?>" class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="První karta">
                    <span class="flag-icon fi fi-za position-absolute top-0 start-0 m-2" style="font-size: 2rem;"></span>
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <h5 class="card-title">Barvy</h5>
                        <p class="card-text">Reprezentují jednotu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card text-bg-primary">
            <div class="row g-0 d-flex align-items-stretch">
                <div class="col-6 position-relative">
                    <img src="<?= base_url('img/himalaje.jpg') ?>" class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="První karta">
                    <span class="flag-icon fi fi-np position-absolute top-0 start-0 m-2" style="font-size: 2rem;"></span>
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <h5 class="card-title">Tvar</h5>
                        <p class="card-text">Symbolizuje Himálaje.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card text-bg-primary">
            <div class="row g-0 d-flex align-items-stretch">
                <div class="col-6 position-relative">
                    <img src="<?= base_url('img/klice.jpg') ?>" class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="První karta">
                    <span class="flag-icon fi fi-va position-absolute top-0 start-0 m-2" style="font-size: 2rem;"></span>
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <h5 class="card-title">Klíče a tiára</h5>
                        <p class="card-text">Klíče symbolizují moc papeže.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card text-bg-primary">
            <div class="row g-0 d-flex align-items-stretch">
                <div class="col-6 position-relative">
                    <img src="<?= base_url('img/javorovy-list.jpg') ?>" class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="První karta">
                    <span class="flag-icon fi fi-ca position-absolute top-0 start-0 m-2" style="font-size: 2rem;"></span>
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <h5 class="card-title">Javorový list</h5>
                        <p class="card-text">Symbolem přírody.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?= $this->endSection(); ?>