<?= $this->extend('frontend/master') ?>

<?= $this->section('content') ?>

<div class="text-center">
    <a class="btn btn-outline-primary btn-sm" href="<?= base_url('/users') ?>">User List</a>
    <a class="btn btn-outline-success btn-sm" href="<?= base_url('/load-data') ?>">Scroll Load User List</a>
</div>

<?= $this->endSection() ?>