<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="hero">
    <h1>Point-of-Sale Foundations</h1>
    <p>A simple four-page CodeIgniter 4 application demonstrating routes, controllers, views, and static PHP arrays.</p>
    <div class="actions">
        <a class="button" href="<?= url_to('customers') ?>">View customer accounts</a>
        <a class="button" href="<?= url_to('users') ?>">View user accounts</a>
    </div>
</section>
<?= $this->endSection() ?>
