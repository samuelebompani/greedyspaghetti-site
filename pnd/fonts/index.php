<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="/media/favicon.ico">
        <title>Pendolino test</title>
    </head>
    <body>
        <?php include('components/navbar.php')?>
        <div style="padding-bottom:5%;">
            <div class="container">
                <div class="q-container">
                    Ti svegli in una stanza che non conosci, non ricordi nulla e senti del leggero odore di muffa. Non ci vedi bene e hai la sensazione di essere stato drogato.
                    Dopo qualche minuto, riconosci la sagoma di una persona. È Emanuele Atturo e ti sta facendo delle domande. Vuole sapere da dove arrivi:
                    <form action="/" method="get" style="text-align: center; margin-top: 2%;">
                        <input type="text" name="place"></input>
                    </form>
                </div>
                
                <?php
                    $place = $_GET['place'];
                    if(!empty($place)) {
                        print("
                        <div class='q-container'>«Pazzesco! Allora potresti essere tu \"il Marco D'Ottavi di ".$place."\" di cui mi parlano da Danzica!».
                        Emanuele inizia ad agitarsi e ti accorgi solo ora che c'è un'altra persona di fianco a lui, che non riesce a smettere di ripetere «Pazzesco».
                        È Dario Saltari, insieme ti spiegano che stanno cercando il \"nuovo Marco D'Ottavi\" e che potresti essere tu; per questo devi rispondere 
                        a delle domande. Sei pronto?
                        </div>

                        <div style='text-align: center; margin-top: 2%;'>
                            <a href='./test.php'><button class='submit-btn' type='submit'>Continua</button></a>
                        </div>
                        ");
                    }
                ?>
                
            </div>
        </div>
        <?php include("components/footer.php"); ?>
    </body>
    
</html>