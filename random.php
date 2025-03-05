<!DOCTYPE html>

<head>
    <?php include "./components/imports.php"; ?>
    <script type="text/javascript">

        function getRandomArbitrary(min, max) {
            return Math.floor(Math.random() * (max - min) + min);
        }

        function newRandomPlace() {
            let x = getRandomArbitrary(12000, 44650)
            let y = getRandomArbitrary(61070, 79500)
            var iframe = document.getElementById("brianza-iframe");
            iframe.src = "https://www.openstreetmap.org/export/embed.html?bbox=9."
                + x + "%2C45." + y + "%2C9." + x + "%2C45." + y + "&amp;layer=mapnik"
        }

        function newColor() {
            let r = getRandomArbitrary(0, 250)
            let g = getRandomArbitrary(0, 250)
            let b = getRandomArbitrary(0, 250)
            var color = document.getElementById("color-box");
            color.style = "background-color: rgb(" + r + "," + g + "," + b + ");"
        }

        function newWiki() {
            var iframe = document.getElementById('wiki-iframe');
            iframe = iframe.src = "https://en.wikipedia.org/wiki/Special:Random"
        }

        function newCat() {
            var iframe = document.getElementById('cats-iframe');
            console.log(iframe.innerWidth)
            iframe.src = "https://cataas.com/cat?width=" + iframe.clientWidth + "&height=" + iframe.clientHeight;
        }

        window.onload = function () {
            newRandomPlace()
            newColor()
            newWiki()
            newCat()
        };
    </script>
</head>

<body>
    <?php include "./components/header.php"; ?>
    <div class="page">
        <div class="grid">
            <div class="boxed grid-item">
                <h2>Random place in Brianza</h2>
                <div style="width: 100%;">
                    <div style="width: 100%;">
                        <iframe id="brianza-iframe" class="iframe-boxed">
                        </iframe>
                        <div class="grid-item-btns">
                            <div class="boxed wide-btn" onClick="newRandomPlace()" style="margin-top: 5px;">
                                Refresh
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="boxed grid-item">
                <h2>Random cat</h2>
                <div style="width: 100%;">
                    <div style="width: 100%;">
                        <iframe id="cats-iframe" class="iframe-boxed">
                        </iframe>
                        <div class="grid-item-btns">
                            <div class="boxed wide-btn" onClick="newCat()" style="margin-top: 5px;">
                                Refresh
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="boxed grid-item">
                <h2>Random color</h2>
                <div style="width: 100%;">
                    <div style="width: 100%;">
                        <div id="color-box" class="iframe-boxed">
                        </div>
                        <div class="grid-item-btns">
                            <div class="boxed wide-btn" onClick="newColor()" style="margin-top: 9px;">
                                Refresh
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="boxed grid-item">
                <h2>Random wikipedia page</h2>
                <div style="width: 100%;">
                    <div style="width: 100%;">
                        <iframe id="wiki-iframe" class="iframe-boxed">
                        </iframe>
                        <div class="grid-item-btns">
                            <div class="boxed wide-btn" onClick="newWiki()" style="margin-top: 5px;">
                                Refresh
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "./components/footer.php"; ?>
</body>

</html>