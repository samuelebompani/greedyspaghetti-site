<!DOCTYPE html>
<html>
    <head>
        <?php include('utils/header.html'); ?>
        <title>Risultato</title>
    </head>
    <body>
        <div class="main-contents">
            <div class="row">
                <div class="col-12" >
                    <h1>Che mascotte degli Europei sei?</h1>
                    <div class="block first">
                        <?php
                            $names = array(
                                "Pinocchio - Euro 1980",
                                "Peno - Euro 1984",
                                "Berni - Euro 1988",
                                "Rabbit - Euro 1992",
                                "Goaliath - Euro 1996",
                                "Benelucky - Euro 2000",
                                "Kinas - Euro 2004",
                                "Trix e Flix - Euro 2008",
                                "Slavek e Slavko - Euro 2012",
                                "Super Victor - Euro 2016",
                                "Skillzy - Euro 2020"
                            );
                            $images = array(
                                "pinocchio.jpg",
                                "peno.jpg",
                                "berni.jpg",
                                "rabbit.jpg",
                                "goaliath.jpg",
                                "benelucky.jpg",
                                "kinas.jpg",
                                "trixflix.jpg",
                                "slavekslavko.jpg",
                                "supervictor.jpg",
                                "skillzy.jpg"
                            );
                            $desc = array("Fin da piccoli, sappiamo bene che è pericoloso dire bugie: se menti, il naso ti cresce come una carota, se ti comporti bene passerai da burattino di legno a bambino in carne e ossa. Considerato tra i libri più tradotti al mondo, Pinocchio era il personaggio perfetto per la prima mascotte EURO.",
                                    "Mascotte pronta all'azione, Peno era vestito con la maglia della Francia padrona di casa, scarpini, pallone e tutto il resto. Chiamato come la parola colloquiale che indica il calcio di rigore, ha portato decisamente fortuna ai transalpini, vincitori davanti al loro pubblico.",
                                    'Se in pochi si aspettavano un coniglio, ancor meno pensavano che potesse chiamarsi Berni, ma era tutto calcolato. "Appassionato di calcio simpatico ed entusiasta" secondo la Federcalcio tedesca, è stato chiamato così per richiamare la città di Berna, dove allora risiedeva la UEFA e dove la Germania aveva vinto la finale del Mondiale FIFA 1954. Sfortunatamente, la campagna del 2006 per riproporre Berni ai mondiali non ha avuto successo.',
                                    'Quarta nazione a dover scegliere una mascotte per il torneo europeo più prestigioso, la Svezia doveva assolutamente pensare a qualcosa di evocativo, gioioso e originale. Insomma, doveva tirare fuori un coniglio dal cilindro... ed è proprio quello che ha fatto: un coniglio di nome "Coniglio" che indossava la maglia della Svezia.',
                                    "A fermare l'invasione di conigli ci ha pensato Goaliath nel 1996. Trent'anni dopo Willie e il suo panciotto colorato come la Union Jack, la nuova mascotte era chiamata a ripercorrerne le orme. Avendo tre leoni sulla maglia, l'Inghilterra poteva difficilmente scegliere un altro animale. Con la sua elegante casacca bianca e blu, Goaliath è stato il gigante buono che tutti aspettavano.",
                                    "Con 5000 contendenti tra i quali scegliere, le prime due nazioni a ospitare il torneo insieme non avevano scuse e hanno dato i risultati aspettati. Chiamato in parte come l'unione tra Belgio/Olanda/Lussemburgo, Benelucky è stato anche una combinazione tra il latino 'bene' e l'inglese 'luck' (fortuna), offrendo sensazioni positive a tutte le nazioni ospitate. Ma la strategia non si fermava qui. In parte diavolo per omaggiare i 'diavoli rossi' del Belgio, in parte leone per richiamare il simbolo della nazionale olandese, Benelucky è stato un trionfo da ogni punto di vista.",
                                    "Il Portogallo è andato molto vicino a diventare la prima nazione ospitante dopo la Francia a raccogliere i frutti del duro lavoro della mascotte: portare fortuna. La sconfitta in finale contro la Grecia ha lasciato l'amaro in bocca anche a quello che, onestamente, era solo un ragazzino vestito con la divisa della sua squadra, e il cui nome era stato preso da uno degli stemmi del Portogallo. Kinas, comunque, era un ragazzino con i superpoteri rappresentato in pose plastiche.",
                                    "Doppia presenza e doppio divertimento. Trix e Flix, i misteriosi gemelli delle Alpi, hanno divertito e confuso in egual misura. Ciascuno rappresentava una delle nazioni ospitanti, e hanno anche avuto l'onore di avere una colonna sonora tutta per loro. La loro musica di sottofondo, 'Feel the Rush' di Shaggy, ha fatto muovere molti bacini ed è stata la colonna sonora di diversi party. Ecco perché la loro immagine, al contrario di tutti i predecessori, non aveva bisogno nemmeno di un pallone.",
                                    "L'approvazione dei dirigenti locali è sempre importante e il presidente della Federcalcio polacca (PZPN) Grzegorz Lato ha subito accolto calorosamente Slavek e Slavko. \"Adoro i loro capelli, 40 anni fa li portavo così anch'io\", ha dichiarato riferendosi alle chiome dei due, colorate come le bandiere dei due paesi ospitanti nel caso le divise fossero troppo poco evidenti. I due gemelli sapevano anche giocare un po' a calcio.",
                                    "Metà bambino, metà supereroe. Cresciuto in Francia, un giorno ha acquisito dei superpoteri mentre giocava a calcio con gli amici. Dopo aver calciato la palla oltre una recinzione, nel tentativo di recuperarla ha scoperto uno scrigno misterioso contenente un mantello, un pallone e un paio di scarpini, che gli hanno permesso di volare da una città del torneo all'altra: un potere particolarmente utile per una mascotte di EURO!.",
                                    "Skillzy è stato scelto per EURO 2020 quasi per caso: mentre giocava con gli amici in un parcheggio, il pallone ha rotto una finestra ed è finito in una vicina audizione di freestyle, interrompendo un'esibizione. Mentre riprendeva il pallone, Skillzy ha stupito la giuria con le sue acrobazie: il resto è storia."
                            );
                            $mas = array(0,0,0,0,0,0,0,0,0,0,0);
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                foreach($_POST as $ss => $s) {
                                    $index = (int)$s;
                                    $mas[$index] += 1;
                                }
                            }
                            $max = 0;
                            foreach($mas as $i => $v) {
                                if($v > $mas[$max]) {
                                    $max = $i;
                                }
                            }
                            echo '<h2>'.$names[$max].'</h2>';
                            echo '<img style="max-width:500px;" src="media/'.$images[$max].'">';
                            echo '<p>'.$desc[$max].'<p>';
                        ?>
                    </div>
                    <div class="block secondary"><a href="test.php">Ripeti</a></div>
                    <p style="font-size:24px;"> Le descrizioni sono prese dal sito della <a href="https://it.uefa.com/uefaeuro-2020/news/0253-0d7c9ab64646-a161e0b21673-1000--mascotte-anno-per-anno/">UEFA</a></p>
                </div>
            </div>
        </div>
    </body>
    <?php include("utils/footer.php"); ?>
</html>