<!DOCTYPE html>
    <head>
        <?php include "./components/imports.php"; ?>
        <link rel="stylesheet" href="./css/home.css">
    </head>
    <body>
        <?php include "./components/header.php"; ?>
        <div class="spaghetti">
            <div class="spaghetto" id="s1"></div>
            <div class="spaghetto" id="s2"></div>
            <div class="spaghetto" id="s3"></div>
            <div class="spaghetto" id="s4"></div>
            <div class="spaghetto" id="s5"></div>
            <div class="spaghetto" id="s6"></div>
            <div class="spaghetto" id="s7"></div>
            <div class="spaghetto" id="s8"></div>
            <div class="spaghetto" id="s9"></div>
            <div class="spaghetto" id="s10"></div>
        </div>
        <div class="home-page" onClick="onTitleClick()">
            
            
            <div class="big-title">Greedy<br>Spaghetti</div>
        </div>
        <?php include "./components/footer.php"; ?>
    </body>
    <script type="text/javascript">
        function addSpaghetti() {
            const s1 = document.getElementById("s1");
            const s2 = document.querySelector("#s2");
            const s3 = document.getElementById("s3");
            const s4 = document.querySelector("#s4");
            const s5 = document.getElementById("s5");
            const s6 = document.getElementById("s6");
            const s7 = document.querySelector("#s7");
            const s8 = document.getElementById("s8");
            const s9 = document.querySelector("#s9");
            const s10 = document.getElementById("s10");
            s1.style.marginLeft = "8px";
            s2.style.marginLeft = "4px";
            s3.style.marginLeft = "12px";
            s4.style.marginLeft = "16px";
            s5.style.marginLeft = "20px";
            s6.style.marginLeft = "24px";
            s7.style.marginLeft = "28px";
            s8.style.marginLeft = "32px";
            s9.style.marginLeft = "36px";
            s10.style.marginLeft = "40px";
            
        }

        addSpaghetti();

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