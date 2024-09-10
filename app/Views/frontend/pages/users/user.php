<?= $this->extend('frontend/master') ?>

<?= $this->section('content') ?>
<h3>All Users:-</h3>
<hr/>
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
        <?php $index = $pager->getPerPage() * ($pager->getCurrentPage() - 1) + 1; ?>
        <?php foreach ($users as $key => $user): ?>
            <tr>
                <td><?php echo $index + $key ?></td>
                <td><?php echo $user->name ?></td>
                <td><?php echo $user->email ?></td>
                <td><?php echo $user->created_at ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>