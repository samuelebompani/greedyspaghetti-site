<script type="text/javascript">
    function openCloseMenu() {
        var x = document.getElementById("burger-menu");
        var btnTop = document.getElementById("header-btn-top");
        var btnCenter = document.getElementById("header-btn-center");
        var btnBottom = document.getElementById("header-btn-bottom");
        var menu = document.querySelector(".header-btn");
        if (x.style.display === "flex") {
            x.style.display = "none";
            btnCenter.style.visibility = "visible";
            btnCenter.style.opacity = "100";
            btnTop.style.rotate = "0deg";
            btnTop.style.marginBottom = "4px";
            btnBottom.style.rotate = "0deg";
            btnBottom.style.marginTop = "4px";
        } else {
            x.style.display = "flex";
            btnCenter.style.visibility = "hidden";
            btnCenter.style.opacity = "0";
            btnTop.style.rotate = "45deg";
            btnTop.style.marginBottom = "-2px";
            menu.style.gap = "0px";
            btnBottom.style.rotate = "-45deg";
            btnBottom.style.marginTop = "-2px";
        }
    }
</script>
<div class="header">
    <a class="header-title boxed" href="/recipes/admin">
        Recipes admin area
    </a>
    <div class="header-menu">
        <a href="/" class="boxed">edit</a>
        <a href="/" class="boxed">new page</a>
    </div>
    <div class="header-btn boxed" onClick="openCloseMenu()">
        <div id="header-btn-top"></div>
        <div id="header-btn-center"></div>
        <div id="header-btn-bottom"></div>
    </div>
</div>
<div class="burger-menu" id="burger-menu">
    <a href="/" class="boxed">edit</a>
    <a href="/" class="boxed">new page</a>
</div>