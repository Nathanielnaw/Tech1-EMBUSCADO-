<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="card">
    <h1>About this application</h1>
    <p>This learning project uses CodeIgniter 4's MVC structure to create the foundation of a small point-of-sale system.</p>
    <p>The customer and user account pages read their records from a local MySQL database through CodeIgniter models.</p>
</section>
<?= $this->endSection() ?>
