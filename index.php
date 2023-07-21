<!DOCTYPE html>
    <head>
        <?php include "./components/imports.php"; ?>
        <link rel="stylesheet" href="./css/home.css">
    </head>
    <body>
        <?php include "./components/header.php"; ?>
        <div class="home-page" onClick="onTitleClick()">
            <div class="big-title">Greedy Spaghetti</div>
        </div>
        <?php include "./components/footer.php"; ?>
    </body>
    <script type="text/javascript">
        function onTitleClick() {
            var menu = document.querySelector(".header");
            var page = document.querySelector(".page");
            var title = document.querySelector(".big-title");
            menu.style.opacity = "100";
            menu.style.visibility = "visible"
            title.style.fontSize = "400%";
        }
    </script>
</html>