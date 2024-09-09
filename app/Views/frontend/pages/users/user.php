<?= $this->extend('frontend/master') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1>All Users:-</h1>
    <hr>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Sl</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
            <?php $Index = $pager->getPerPage() * ($pager->getCurrentPage() - 1) + 1; ?>
            <?php foreach ($users as $key => $user): ?>
                <tr>
                    <td><?php echo $Index + $key ?></td>
                    <td><?php echo $user->name ?></td>
                    <td><?php echo $user->email ?></td>
                    <td><?php echo $user->created_at ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>