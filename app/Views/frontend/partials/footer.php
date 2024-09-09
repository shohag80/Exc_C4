<div class="container text-center">
    <?php if(!empty($pager)) echo $pager->links(); ?>
    Page rendered in {elapsed_time} seconds using {memory_usage} MB of memory.
    Environment: <?= ENVIRONMENT ?>
    <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT open source licence.</p>
</div>