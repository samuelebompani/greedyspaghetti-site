<!DOCTYPE html>
<html>
    <head>
        <title>Greedy Spaghetti</title>
        <?php include("utils/header.php"); ?>
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include("utils/navigation.php"); ?>
        <div class="main-contents">
            <div class="row">
                <div class="col-6">
                    <div class="block first">
                        <h2 class="block-title">Bip39</h2>
                        <div class="row">
                            <p class="col-7">A tool to generate unsecure mnemonic for crypto wallets. It is developed with JavaScript. The random function is <a href="https://developer.mozilla.org/en-US/docs/Web/API/Crypto/getRandomValues">getRandomValues</a></p>
                            <div class="col-5">
                                <br>
                                <button onclick="window.location.href='#'">Here</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="block second">
                        <h2 class="block-title">Easy Counter</h2>
                        <div class="row">
                            <p class="col-7">
                                If you need to count something, here's your app. Easy to use, easy to implement.<br>
                                Download available in the <a href="https://play.google.com/store/apps/details?id=com.easy.counter">Play Store</a>
                            </p>
                            <div class="col-5">
                                <img src="media/easy_counter_logo512.png" alt="EasyCounter logo" width="128" height="128">        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="block second">
                        <h2 class="block-title">Como Accoglie</h2>
                        <div class="row">
                            <p class="col-7">We developed with WordPress a site for Como Accoglie odv, a voluntary association. It was a free contribution.</p>
                            <div class="col-5">
                                <br>
                                <button onclick="window.location.href='https://www.comoaccoglie.it'">Here</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('utils/footer.php'); ?>
    </body>
</html>