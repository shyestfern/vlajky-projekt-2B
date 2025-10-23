<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h1 class="mt-5 text-center">Neobdélníkové vlajky</h1>

<div class="table-responsive mt-4">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="w-25">Země</th>
                <th scope="col" class="w-50">Tvar</th>
                <th scope="col" class="w-25">Poměr stran</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><span class="fi fi-np me-2"></span>Nepál</td>
                <td>Složená ze dvou trojúhelníků.</td>
                <td>Nepravidelný</td>
            </tr>
            <tr>
                <td><span class="fi fi-ch me-2"></span>Švýcarsko</td>
                <td>Čtverec</td>
                <td>1:1</td>
            </tr>
            <tr>
                <td><span class="fi fi-va me-2"></span>Vatikán</td>
                <td>Čtverec</td>
                <td>1:1</td>
            </tr>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>