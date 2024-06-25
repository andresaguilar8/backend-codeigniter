<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Promo Tiles CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php include 'layout/header.php'; ?>
    <div id="content">
    </div>
<section>
    <h1>Promo Tiles CRUD</h1>
    <p>The purpose of this page is to admin promo tiles using the MVC framework Codeigniter in PHP . </p>
    <p>With the functionality to add, edit, list and remove promo tiles.</p>
</section>

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
</body>
</html>
