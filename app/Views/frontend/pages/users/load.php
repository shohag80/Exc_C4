<?= $this->extend('frontend/master') ?>

<?= $this->section('content') ?>
<h3>Scroll Load Users:-</h3>
<hr />
<table class="table table-hover">
    <thead>
        <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody id="dataContainer">
        <?php echo view('frontend/pages/users/load_more', compact('users')); ?>
    </tbody>
</table>
<?= $this->endsection(); ?>

<?= $this->section('script') ?>
<!-- jQuery script to load more data on scroll -->
<script>
    var start = 10; // Starting point for loading more data
    var limit = 10; // Number of records to load per request
    var isLoading = false; // Prevent multiple AJAX calls

    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100 && !isLoading) {
            isLoading = true;
            loadMoreData();
        }
    });

    function loadMoreData() {
        $.ajax({
            url: '<?php echo site_url('load-more-data'); ?>',
            type: 'GET',
            data: {
                start: start
            },
            beforeSend: function() {
                // Optional: Show a loader here while loading data
            },
            success: function(data) {
                if (data.trim().length == 0) {
                    // If no more data is available, stop further requests
                    return;
                }
                $('#dataContainer').append(data);
                start += limit; // Increment start to load next batch of records
                isLoading = false;
            },
            error: function(xhr, status, error) {
                console.log('Error loading data: ' + error);
                isLoading = false;
            }
        });
    }
</script>
<?= $this->endsection() ?>