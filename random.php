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
                    +x+"%2C45."+y+"&amp;layer=mapnik"
                console.log(x,y)
            }
            
            window.onload = function() {
                newRandomPlace()
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
                            <iframe id="brianza-iframe" class="iframe-boxed"
                                >
                            </iframe>
                            <div class="grid-item-btns">
                                <div class="boxed wide-btn" onClick="newRandomPlace()">
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