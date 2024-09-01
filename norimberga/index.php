<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/header.css"> 
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/recipes.css">
        <link rel="stylesheet" href="../css/norimberga.css">
        <?php include "../components/imports.php";?>
        <script type="text/javascript">
            
            function getRandomArbitrary(min, max) {
                return Math.floor(Math.random() * (max - min) + min);
            }

            async function getNewWord() {
                const names = await fetch('./words.csv', {mode: 'no-cors'})
                    .then(response => response.text())
                    .then(data => data)
                    .catch(error => console.error(error));
                const namesList = names.split(",")
                const rand = getRandomArbitrary(0,namesList.length)
                const word = document.getElementById("word-nor");
                word.innerHTML = namesList[rand]
            }
        </script>
        
    </head>
    <body>
        <?php include "../components/header.php"; ?>
        <div class="page">
            <div class="grid" style="grid-template-columns: repeat(1, minmax(0, 1fr));">
                <div class="boxed grid-item">
                    <div class="boxed bg-secondary title-menu-el-recipes">Norimberga</div>
                    <div class="boxed bg-primary word-nor-box" id="word-nor">Clicca per iniziare</div>
                    <div class="boxed bg-secondary jud-nor-box">Sopravvalutato? Sottovalutato? O giustamente valutato?</div>
                    <div class="grid-item-btns" style="margin-bottom: 10px;">
                        <div class="boxed wide-btn " style="padding-right: 0" onclick="getNewWord()">Avanti</div>
                    </div>
                </div>
                <div class="boxed grid-item">
                    <div class="boxed bg-secondary title-menu-el-recipes">Come giocare</div>
                    <div class="boxed bg-secondary istr-nor-box">
**Numero di giocatori:** 3 o più  <br>
**Durata del gioco:** 30-60 minuti  <br>
**Obiettivo:** Decidere se un elemento estratto a sorte è sopravvalutato, sottovalutato o giustamente valutato e convincere gli altri giocatori della propria opinione.<br>
### **Regole del gioco**<br>
1. **Estrarre l'elemento:** A turno, un giocatore estrae una carta dal sacchetto e legge ad alta voce l'elemento scritto.<br>
   
2. **Valutazione personale:** Dopo che l'elemento è stato letto, tutti i giocatori (compreso chi ha estratto la carta) devono decidere segretamente se l'elemento è:<br>
   - **Sopravvalutato**<br>
   - **Sottovalutato**<br>
   - **Giustamente valutato**<br>

3. **Dibattito:** Una volta che tutti hanno deciso la propria valutazione, si inizia un dibattito. Ogni giocatore esprime la propria opinione e cerca di convincere gli altri della propria posizione. Il turno dura circa 2 minuti per giocatore.<br>
   
4. **Votazione:** Dopo il dibattito, i giocatori votano in segreto quale valutazione ritengono corretta (non è necessario che i giocatori votino per la propria opinione iniziale). La votazione avviene scrivendo la valutazione scelta su un foglio o tramite alzata di mano se si gioca in un contesto informale.<br>

5. **Assegnazione dei punti:**
   - Se la maggioranza dei voti coincide con la propria valutazione iniziale, i giocatori che hanno indovinato guadagnano 1 punto ciascuno.
   - Se non c'è una maggioranza chiara, nessun punto viene assegnato.

6. **Passare il turno:** Il turno successivo inizia con un nuovo giocatore che estrae una carta dal sacchetto.

### **Vincitore**
Il gioco termina quando tutte le carte sono state estratte o quando i giocatori decidono di concludere la partita. Vince il giocatore con il maggior numero di punti.

### **Varianti**
- **Giudice rotante:** Un giocatore funge da giudice per un turno e non partecipa alla votazione. Il giudice può assegnare punti extra a chi ha esposto l’argomentazione più convincente.
- **Tempo limitato per il dibattito:** Per rendere il gioco più dinamico, limitare il tempo del dibattito a un massimo di 1 minuto per giocatore.

### **Consigli**
- Cerca di scegliere elementi che possano generare opinioni diverse per rendere il dibattito più interessante.
- Non esitare a usare esempi concreti per supportare la tua opinione durante il dibattito.

Divertitevi e buona valutazione!
                    </div>
                </div>
            </div>
        </div>
        <?php include "../components/footer.php"; ?>
    </body>
</html>