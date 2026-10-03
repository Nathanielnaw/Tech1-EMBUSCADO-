<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="card">
    <h1>About this application</h1>
    <p>This learning project uses CodeIgniter 4's MVC structure to create the foundation of a small point-of-sale system.</p>
    <p>The customer and user account pages currently use temporary static arrays supplied by their controllers. No database or database-backed model is included in this activity.</p>
</section>
<?= $this->endSection() ?>
