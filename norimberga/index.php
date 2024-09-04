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

        let fileName = 'food.csv'
        let alreadyUsed = []

        function changeFilename(newName) {
            const btn1 = document.getElementById(fileName);
            fileName = newName
            const btn2 = document.getElementById(newName);
            if (btn1) btn1.style.background = "var(--secondary)";
            btn2.style.background = "#ffed5d";
            alreadyUsed = []
        }

        function reset() {
            const word = document.getElementById("word-nor");
            alreadyUsed = []
            word.innerHTML = 'Clicca "Prossima" per iniziare'
        }

        async function getNewWord() {
            const word = document.getElementById("word-nor");
            if()
            const names = await fetch('./words/'+fileName, { mode: 'no-cors' })
                .then(response => {if(response.status !== 200) return ""; return response.text()})
                .then(data => data)
                .catch(error => console.error(error));
            if(names === ""){
                word.innerHTML = "File non valido"
                return
            }
            const namesList = names.split(",")
            if (alreadyUsed.length === namesList.length) {
                word.innerHTML = 'Parole terminate! Clicca "reset" per ricominciare'
                return
            }
            let rand = getRandomArbitrary(0, namesList.length)
            while (alreadyUsed.includes(rand)) {
                rand = getRandomArbitrary(0, namesList.length)
            }
            alreadyUsed.push(rand)
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
        new Category("Cibo italiano", 'food.csv'),
        new Category("Calciatori serie A", "words.csv"),
        new Category("Capitali europee", "citta.csv"),
        new Category("Registi", "directors.csv"),
        new Category("Mani Pulite", "../index.php")
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
                    <div id="word-nor" style="padding: 10px;">Clicca "Prossima" per iniziare</div>
                </div>
                <div class="boxed bg-secondary jud-nor-box">Sopravvalutato? Sottovalutato? O giustamente valutato?</div>
                <div class="grid-item-btns" style="margin-bottom: 10px;">
                    <div class="boxed wide-btn " style="padding-right: 0" onclick="reset()">Reset</div>
                    <div class="boxed wide-btn " style="padding-right: 0" onclick="getNewWord()">Prossima</div>
                </div>
            </div>
            <div class="boxed grid-item">
                <div class="boxed bg-secondary title-menu-el-recipes">Categorie</div>
                <div class="cat-nor-box">
                    <?php
                    foreach ($cat as $c) { ?>
                        <div class="cat-nor boxed bg-secondary title-menu-el-recipes wide-btn" style="<?php if ($c->path == "food.csv")
                            echo "background-color: #ffed5d"; ?>" id="<?php echo $c->path ?>"
                            onclick="changeFilename('<?php echo $c->path ?>')">
                            <?php echo $c->name ?>
                        </div>
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
                        Il gioco "Norimberga" è direttamente ispirato al podcast "Pendolino" di "UltimoUomo".
                        Il formato del gioco riprende lo spirito del podcast, offrendo ai giocatori la possibilità di
                        esprimere le proprie opinioni in modo divertente e coinvolgente
                    </div>
                </div>
            </div>
            <div class="boxed grid-item">
                <div class="boxed bg-secondary title-menu-el-recipes">Miglioramenti</div>
                <div class="boxed bg-secondary istr-nor-box">
                    <div>
                        Se ti piace Norimberga e vuoi contribuire al suo sviluppo, segnalare idee, proporre
                        miglioramenti o semplicemente collaborare, sei il benvenuto! In particolare, più categorie - e
                        quindi liste di nomi - ci sono e più divertente diventa il gioco. Le liste sono dei semplici
                        csv.<br>
                        Per qualsiasi proposta o richiesta, puoi contattarmi via email a samuele [at]
                        greedyspaghetti [dot] com.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../components/footer.php"; ?>
</body>

</html>