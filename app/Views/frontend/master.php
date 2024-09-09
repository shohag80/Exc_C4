<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>

    <!-- HEADER: MENU + HEROE SECTION -->
    <header>

        <?php include 'partials/header.php'; ?>

    </header>

    <!-- CONTENT -->



    <div class="container" style="min-height: 70vh;">

        <?= $this->renderSection('content') ?>

    </div>

    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

    <footer>

        <?php include 'partials/footer.php'; ?>

    </footer>

    <!-- SCRIPTS -->

    <script {csp-script-nonce}>
        document.getElementById("menuToggle").addEventListener('click', toggleMenu);

        function toggleMenu() {
            var menuItems = document.getElementsByClassName('menu-item');
            for (var i = 0; i < menuItems.length; i++) {
                var menuItem = menuItems[i];
                menuItem.classList.toggle("hidden");
            }
        }
    </script>

    <!-- -->

</body>

</html>