<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h1 class="mt-5 text-center">Články</h1>

<div class="row mt-4">

   <div class="col-12 col-md-6 mb-3 mb-md-0">

      <div class="ratio ratio-1x1 position-relative overflow-hidden rounded">

         <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background-size: cover; background-position:center; background-image: url('<?= base_url('images/stare-vlajky.jpg') ?>');">
         </div>

         <div
            class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex flex-column justify-content-center align-items-start text-white text-left p-3">
            <a class="mt-auto fw-bold fs-3 text-white text-decoration-none" href="">Vlajky, které už neexistují, ale byly</a>
            <div class="mt-3 fs-4 text-white">17.9.2025</div>
         </div>

      </div>

   </div>

   <div class="col-12 col-md-6">

      <div class="row g-3">

         <div class="col-6">

            <div class="ratio ratio-1x1 position-relative overflow-hidden rounded">

               <div class="position-absolute top-0 start-0 w-100 h-100"
                  style="background-size: cover; background-position:center; background-image: url('<?= base_url('images/vlajky-zbrane.jpg') ?>');">
               </div>

               <div
                  class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex flex-column justify-content-center align-items-start text-white text-left p-3">
                  <a class="mt-auto fw-bold fs-4 text-white text-decoration-none" href="">Které vlajky mají zbraně?</a>
                  <div class="mt-3 fs-4 text-white">17.9.2025</div>
               </div>

            </div>

         </div>

         <div class="col-6">

            <div class="ratio ratio-1x1 position-relative overflow-hidden rounded">

               <div class="position-absolute top-0 start-0 w-100 h-100"
                  style="background-size: cover; background-position:center; background-image: url('<?= base_url('images/cervena-modra-bila.jpg') ?>');">
               </div>

               <div
                  class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex flex-column justify-content-center align-items-start text-white text-left p-3">
                  <a class="mt-auto fw-bold fs-4 text-white text-decoration-none" href="">Proč jsou červená, bílá a modrá nejčastější barvy vlajek?</a>
                  <div class="mt-3 fs-4 text-white">17.9.2025</div>
               </div>

            </div>

         </div>

         <div class="col-6 mb-3 mb-md-0">

            <div class="ratio ratio-1x1 position-relative overflow-hidden rounded">

               <div class="position-absolute top-0 start-0 w-100 h-100"
                  style="background-size: cover; background-position:center; background-image: url('<?= base_url('images/malawi.png') ?>');">
               </div>

               <div
                  class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex flex-column justify-content-center align-items-start text-white text-left p-3">
                  <a class="mt-auto fw-bold fs-4 text-white text-decoration-none" href="">Proč se změnila vlajka Malawi?</a>
                  <div class="mt-3 fs-4 text-white">17.9.2025</div>
               </div>

            </div>

         </div>

         <div class="col-6 mb-3 mb-md-0">

            <div class="ratio ratio-1x1 position-relative overflow-hidden rounded">

               <div class="position-absolute top-0 start-0 w-100 h-100"
                  style="background-size: cover; background-position:center; background-image: url('<?= base_url('images/nepal.jpg') ?>');">
               </div>

               <div
                  class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex flex-column justify-content-center align-items-start text-white text-left p-3">
                  <a class="mt-auto fw-bold fs-4 text-white text-decoration-none" href="">Co znamenají barvy a symboly vlajky Nepálu?</a>
                  <div class="mt-3 fs-4 text-white">17.9.2025</div>
               </div>

            </div>

         </div>

      </div>

   </div>

</div>

<?= $this->endSection(); ?>