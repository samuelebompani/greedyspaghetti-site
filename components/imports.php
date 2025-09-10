<title>Greedy Spaghetti</title>
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/header.css">
<link rel="stylesheet" href="/css/footer.css">
<link rel="icon" type="image/x-icon" href="/media/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap,wght@50..200,200..900');
</style>
<?php
    session_start();

    if (isset($_GET['theme'])) {
        $theme = $_GET['theme'];
        $_SESSION['theme'] = $theme;
    } elseif (isset($_SESSION['theme'])) {
        $theme = $_SESSION['theme'];
    } else {
        $theme = 'main'; // default theme
    }
    ?>
<link rel="stylesheet" href="/css/themes/<?php echo htmlspecialchars($theme); ?>.css">