<!DOCTYPE html>

<head>
    <?php include "./components/imports.php"; ?>
    <link rel="stylesheet" href="./css/home.css">
</head>

<body>
    <?php include "./components/header.php"; ?>
    <div class="home-page" onClick="onTitleClick()" onscroll="onTitleClick()">
        <div class="big-title ">How do you<br>feel?</div>
        <div class="grid-item-btns">
            <a href="?theme=main" class="boxed large-button square-btn">Theme 1</a>
            <a href="?theme=wlike" class="boxed large-button square-btn">Theme 2</a>
            <a href="?theme=third" class="boxed large-button square-btn">Theme 3</a>
        </div>
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