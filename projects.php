<!DOCTYPE html>
    <head>
        <?php include "./components/imports.php"; ?>
    </head>
    <body>
        <?php include "./components/header.php"; ?>
        <div class="page">
            <div class="grid">
                <div class="boxed grid-item">
                    <h2>Easy Counter</h2>
                    <div>
                        <img src="/media/img/easy_counter_logo.png" width=100 height=100 class=""/>
                        <div>
                            <p>If you need to count something, <br>here's your app.<br>
                                    Download available in the Play Store.
                            </p>
                            <div class="grid-item-btns">
                                <a href="https://play.google.com/store/apps/details?id=com.easy.counter&gl=US"
                                    class="boxed square-btn">
                                    <img src="/media/img/playstore.png" width=50 height=50/>
                                </a>
                                <div class="boxed square-btn">
                                    <img src="/media/img/info.png" width=50 height=50/>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
                <?php /*<div class="boxed grid-item">
                    <h2>Football stats</h2>
                    <div>
                        <img src="/media/img/fs1.png" width=100 height=100 class=""/>
                        <div>
                            <p>A collection of football stats, starting<br> from the 2023/2024
                                    season.<br><br>
                            </p>
                            <div class="grid-item-btns">
                                <a href="/fs/"
                                    class="boxed square-btn">
                                    <img src="/media/img/arrow.png" width=50 height=50/>
                                </a>
                                <div class="boxed square-btn">
                                    <img src="/media/img/info.png" width=50 height=50/>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>*/ ?>
                <div class="boxed grid-item">
                    <h2>Recipes</h2>
                    <div>
                        <img src="/media/img/r.png" width=100 height=100 class=""/>
                        <div>
                            <p>A collection of my favourite recipes. <br><br><br>
                            </p>
                            <div class="grid-item-btns">
                                <a href="/recipes/"
                                    class="boxed square-btn">
                                    <img src="/media/img/arrow.png" width=50 height=50/>
                                </a>
                                <div class="boxed square-btn">
                                    <img src="/media/img/info.png" width=50 height=50/>
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