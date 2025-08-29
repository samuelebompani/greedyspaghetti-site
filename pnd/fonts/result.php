<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="/media/favicon.ico">
        <title>Pendolino test</title>
    </head>
    <body>
        <?php include('components/navbar.php')?>
        <?php 
            $appellativiE = array(
                'Pippa arcuata',
                "Cipolle nella pentola del bollito",
                "Carote del bollito",
                "Bollito",
                "Scommessa mancata",
                "Scommessa",
                "Giocatorino",
                "Mezzo giocatore", 
                "Giocatore stranissimo",
                "Giocatore strano",
                "Dopato",
                "Buon giocatore",
                "Mezzo forte",
                "Incredibile",
                "Forte vero",
                "Fortissimo",
                "Mezzo fenomeno",
                'Fenomeno'
                );
            
            $result = 0;
            $cunt = 0;
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                foreach($_POST as $ss => $s) {
                                    $res = (int)$s;
                                    $result += $res;
                                    $count +=1;
                                }
                            }
            ?>
        <div style="background-color: #ff594c; padding-bottom:5%;">
            <div class="container">
                <div style="text-align: center;" class="q-container">
                    <div>
                        <h2>Hai totalizzato <?php print($result."/".$count)?> punti Marco D'Ottavi!</h2>
                        Ti risvegli improvvisamente a casa. Era tutto un sogno. Sul tavolo in cucina però trovi un foglietto con scritto
                        <h2><?php print($appellativiE[$result])?></h2>
                    </div>
                    
                </div>
                <div style="text-align: center; margin-top: 2%;">
                    <a href="./test.php"><button class="submit-btn" type="submit">Torna al test</button></a>
                </div>
                <div style="text-align: center; margin-top: 2%;">
                    <a href="./"><button class="submit-btn" type="submit">Torna all'inizio</button></a>
                </div>
            </div>
        </div>
        <?php include("components/footer.php"); ?>
    </body>
</html>