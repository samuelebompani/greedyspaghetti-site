<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/recipes.css">
    <link rel="stylesheet" href="../css/norimberga.css">
    <?php include "../components/imports.php"; ?>
    <script type="text/javascript">

        function getRandomArbitrary(min, max) {
            return Math.floor(Math.random() * (max - min) + min);
        }

        let fileName = './words.csv'

        function changeFilename(newName) {
            fileName = newName
        }
        async function getNewWord() {
            const names = await fetch(fileName, { mode: 'no-cors' })
                .then(response => response.text())
                .then(data => data)
                .catch(error => console.error(error));
            const namesList = names.split(",")
            const rand = getRandomArbitrary(0, namesList.length)
            const word = document.getElementById("word-nor");
            word.innerHTML = namesList[rand]
        }
    </script>
    <?php
    class Category
    {
        public $name;
        public $path;
        public function __construct(string $name, string $path)
        {
            $this->name = $name;
            $this->path = $path;
        }
    }
    $cat = [
        new Category("Calciatori serie A", "./words.csv"),
        new Category("Capitali europee", "./citta.csv"),
        
    ]
        ?>

</head>

<body>
    <?php include "../components/header.php"; ?>
    <div class="page">
        <div class="grid" style="grid-template-columns: repeat(1, minmax(0, 1fr));">
            <div class="boxed grid-item">
                <div class="boxed bg-secondary title-menu-el-recipes">Norimberga</div>
                <div class="boxed bg-primary word-nor-box">
                    <div id="word-nor" style="padding: 10px;">Clicca "Prossimo" per iniziare</div>
                </div>
                <div class="boxed bg-secondary jud-nor-box">Sopravvalutato? Sottovalutato? O giustamente valutato?</div>
                <div class="grid-item-btns" style="margin-bottom: 10px;">
                    <div class="boxed wide-btn " style="padding-right: 0" onclick="getNewWord()">Prossimo</div>
                </div>
            </div>
            <div class="boxed grid-item">
                <div class="boxed bg-secondary title-menu-el-recipes">Categorie</div>
                <div class="" style="margin-top: 10px;">
                    <?php
                    foreach ($cat as $c) { ?>
                        <div class="cat-nor boxed bg-secondary title-menu-el-recipes wide-btn"
                            onclick="changeFilename('<?php echo $c->path?>')"><?php echo $c->name?></div>
                    <?php }
                    ?>
                </div>
            </div>
            <div class="boxed grid-item">
                <div class="boxed bg-secondary title-menu-el-recipes">Come giocare</div>
                <div class="boxed bg-secondary istr-nor-box" style="display:grid;">
                    <div>
                        <b>Numero di giocatori</b><br> 3 o più<br><br>
                        <b>Obiettivo</b><br>
                        Decidere se un elemento estratto a sorte è sopravvalutato, sottovalutato o
                        giustamente valutato e convincere gli altri giocatori della propria opinione.<br>
                        <br>
                        <b>Regole del gioco</b>
                        <ol>
                            <li>Estrarre l'elemento: Un giocatore clicca sul pulsante "Prossimo"</li>
                            <li>Valutazione personale: Dopo che l'elemento è stato visualizzato, tutti i giocatori
                                devono decidere segretamente se l'elemento è:<br>
                                - Sopravvalutato<br>
                                - Sottovalutato<br>
                                - Giustamente valutato<br>
                            </li>
                            <li>Dibattito: Una volta che tutti hanno deciso la propria valutazione, si inizia un
                                dibattito. Ogni giocatore esprime la propria opinione e cerca di convincere gli altri
                                della propria posizione.</li>
                            <li>Votazione: Dopo il dibattito, i giocatori votano in segreto quale valutazione ritengono
                                corretta. La votazione avviene scrivendo la valutazione scelta su un foglio o
                                dichiarandola simultaneamente per evitare influenze.</li>
                            <li>Assegnazione dei punti:<br>
                                - Se la maggioranza dei voti coincide con la propria valutazione iniziale, i giocatori
                                che hanno indovinato guadagnano 1 punto ciascuno.<br>
                                - Se non c'è una maggioranza chiara, nessun punto viene assegnato.
                            </li>
                        </ol>

                        <b>Vincitore</b><br>
                        Il gioco termina quando sono stati discussi un numero predeterminato di elementi o quando i
                        giocatori decidono di concludere la partita. Vince il giocatore con il maggior numero di
                        punti.
                    </div>
                </div>
            </div>
            <div class="boxed grid-item">
                <div class="boxed bg-secondary title-menu-el-recipes">?</div>
                <div class="boxed bg-secondary istr-nor-box">
                    <div>
                        Il gioco "Norimberga" è direttamente ispirato al podcast "Pendolino" di Ultimo Uomo.
                        Il formato del gioco riprende lo spirito del podcast, offrendo ai giocatori la possibilità di
                        esprimere le proprie opinioni in modo divertente e coinvolgente
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../components/footer.php"; ?>
</body>

</html>