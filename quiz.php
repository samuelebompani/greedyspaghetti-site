<!DOCTYPE html>
<html>
    <head>
        <?php include('utils/header.html'); ?>
        <title>
            Test
        </title>
    </head>
    <body>
        <div class="main-contents">
            <div class="row" style="padding-left:20px;padding-right:20px;">
                <img src="media/euro.png" class="col-2 lateral-logo">
                <div class="col-8" >
                    <h1>Che mascotte degli Europei sei?</h1>
                    <p>Ti sentiresti più a tuo agio nel morbido costume di Berni o tra i tunnel di Skillzy?</p>
                    <p style="font-size:10px;">unofficial Euro quiz</p>
                </div>
                <img src="media/euro.png" class="col-2 lateral-logo">
            </div>
            <form action="result.php" method="post">
                <div class="row">
                    <div class="col-6">
                        <div class="block first">
                            <h3>Come ti definiresti?</h3>
                            <input type="radio" id="mist" name="def" value="7">
                            <label for="mist">Misterios*</label><br>
                            <input type="radio" id="lucky" name="def" value="5">
                            <label for="lucky">Fortunat*</label><br>
                            <input type="radio" id="simp" name="def" value="2">
                            <label for="simp">simpatic* ed entusiasta</label><br>
                            <input type="radio" id="azione" name="def" value="1">
                            <label for="azione">pront* all’azione</label><br>
                            <input type="radio" id="skill" name="def" value="10">
                            <label for="skill">Skillat*</label><br>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="block second">
                            <h3>Canzone preferita:</h3>
                            <input type="radio" id="marshmello" name="canzone" value="9" required>
                            <label for="marshmello">Marshmello – Check this out (Mixed)</label><br>
                            <input type="radio" id="playa" name="canzone" value="0">
                            <label for="playa">Righeira – Vamos a la Playa</label><br>
                            <input type="radio" id="shaggy" name="canzone" value="7">
                            <label for="shaggy">Shaggy – Feel the rush</label><br>
                            <input type="radio" id="nanni" name="canzone" value="1">
                            <label for="nanni">Nanni Svampa - Se gh'hann de dì</label><br>
                            <input type="radio" id="tutto" name="canzone" value="3">
                            <label for="tutto">“Ascolto un po’ di tutto”</label><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="block third">
                            <h3>Foto di gruppo dopo una grigliata, come ti metti in posa?</h3>
                            <input type="radio" id="sorridi" name="foto" value="3" required>
                            <label for="sorridi">Sorridi educatamente</label><br>
                            <input type="radio" id="petto" name="foto" value="5">
                            <label for="petto">Trattieni il respiro e gonfi il petto</label><br>
                            <input type="radio" id="sdraia" name="foto" value="6">
                            <label for="sdraia">Ti sdrai davanti a tutti</label><br>
                            <input type="radio" id="occhiali" name="foto" value="4">
                            <label for="">Indossi una simpaticissima parrucca colorata</label><br>
                            <input type="radio" id="drone" name="foto" value="10">
                            <label for="drone">Proponi di farla con il tuo nuovo drone</label><br>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="block fourth">
                            <h3>Tre parole per la tua vacanza ideale:</h3>
                            <input type="radio" id="montagna" name="vacanza" value="7" required>
                            <label for="montagna">Montagna, mucche e formaggi</label><br>
                            <input type="radio" id="bici" name="vacanza" value="5">
                            <label for="bici">Bicicletta, ostelli e birra</label><br>
                            <input type="radio" id="spiaggia" name="vacanza" value="0">
                            <label for="spiaggia">Spiaggia, ombrellone e jukebox </label><br>
                            <input type="radio" id="casa" name="vacanza" value="3">
                            <label for="casa">Divano, condizionatore e tv</label><br>
                            <input type="radio" id="treno" name="vacanza" value="10">
                            <label for="treno">Interrail, zaino e foto</label><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="block second">
                            <h3>Piatto preferito:</h3>
                            <input type="radio" id="wurst" name="cibo" value="4" required>
                            <label for="wurst">Würstel e crauti</label><br>
                            <input type="radio" id="rac" name="cibo" value="7">
                            <label for="rac">Raclette</label><br>
                            <input type="radio" id="zap" name="cibo" value="8">
                            <label for="zap">Zapiekanka</label><br>
                            <input type="radio" id="franc" name="cibo" value="6">
                            <label for="franc">Francesinha</label><br>
                            <input type="radio" id="tir" name="cibo" value="10">
                            <label for="tir">Lasagne destrutturate</label><br>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="block first">
                            <h3>Nome del tuo cane:</h3>
                            <input type="radio" id="andrij" name="cane" value="8" required>
                            <label for="andrij">Andrij</label><br>
                            <input type="radio" id="giorgos" name="cane" value="6">
                            <label for="giorgos">Giorgos</label><br>
                            <input type="radio" id="alan" name="cane" value="4">
                            <label for="alan">Alan</label><br>
                            <input type="radio" id="renato" name="cane" value="3">
                            <label for="renato">Renato</label><br>
                            <input type="radio" id="bernard" name="cane" value="1">
                            <label for="bernard">Bernard</label><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="block fourth">
                            <h3>Hai la 9 sulle spalle, come segni nella finale dell'Europeo?</h3>
                            <input type="radio" id="gre" name="cane" value="0" required>
                            <label for="gre">Su calcio d'angolo, nel mucchio anticipi tutti di testa</label><br>
                            <input type="radio" id="spa1" name="cane" value="7">
                            <label for="spa1">Scatti sul filo del fuorigioco salti il difensore e la piazzi</label><br>
                            <input type="radio" id="ger" name="cane" value="0">
                            <label for="ger">Su calcio d'angolo, salti più in alto di tutti</label><br>
                            <input type="radio" id="por" name="cane" value="10">
                            <label for="por">Tiri una rasoiata da fuori area</label><br>
                            <input type="radio" id="spa2" name="cane" value="8">
                            <label for="spa2">Ricevi in area senza marcatura e la tiri angolata</label><br>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="block third">
                            <h3>Ti vesti elegante: a chi ti ispiri?</h3>
                            <div class="row">
                                <input type="radio" id="bon" name="celeb" value="4" required>
                                <label for="bon">Bon Jovi</label><br>
                                <input type="radio" id="gaga" name="celeb" value="5">
                                <label for="gaga">Lady Gaga</label><br>
                                <input type="radio" id="nadal" name="celeb" value="3">
                                <label for="nadal">Rafael Nadal</label><br>
                                <input type="radio" id="stone" name="celeb" value="7">
                                <label for="stone">Emma Stone</label><br>
                                <input type="radio" id="lino" name="celeb" value="0">
                                <label for="lino">Lino Banfi</label><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="block first">
                            <h3>Puoi scegliere il centravanti titolare dell'Italia, chi schieri?</h3>
                            <input type="radio" id="ciro" name="att" value="3" required>
                            <label for="ciro">Ciro Immobile</label><br>
                            <input type="radio" id="gallo" name="att" value="1">
                            <label for="gallo">Andrea Belotti</label><br>
                            <input type="radio" id="raspa" name="att" value="10">
                            <label for="raspa">Giacomo Raspadori</label><br>
                            <input type="radio" id="kean" name="att" value="9">
                            <label for="kean">Moise Kean</label><br>
                            <input type="radio" id="quaglia" name="att" value="0">
                            <label for="quaglia">Fabio Quagliarella</label><br>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="block second">
                            <h3>Film preferito:</h3>
                            <input type="radio" id="carnage" name="film" value="8" reuqired>
                            <label for="carnage">Carnage</label><br>
                            <input type="radio" id="diavolo" name="film" value="5">
                            <label for="diavolo">L’avvocato del diavolo</label><br>
                            <input type="radio" id="america" name="film" value="4">
                            <label for="america">C’era una volta in America</label><br>
                            <input type="radio" id="donnie" name="film" value="2">
                            <label for="donnie">Donnie Darko</label><br>
                            <input type="radio" id="ced" name="film" value="1">
                            <label for="ced">Gallo Cedrone</label><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="block third">
                            <h3>Scegli uno sposor tecnico per la tua nazionale:</h3>
                            <input type="radio" id="nike" name="sponsor" value="9" required>
                            <label for="nike">Nike</label><br>
                            <input type="radio" id="umbro" name="sponsor" value="4">
                            <label for="umbro">Umbro</label><br>
                            <input type="radio" id="coq" name="sponsor" value="1">
                            <label for="coq">Le coq sportif</label><br>
                            <input type="radio" id="adidas" name="sponsor" value="2">
                            <label for="adidas">Adidas</label><br>
                            <input type="radio" id="abibas" name="sponsor" value="3">
                            <label for="abibas">Abibas</label><br>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="block fourth">
                            <h3>Serata in compagnia, cosa bevi?</h3>
                            <input type="radio" id="birra" name="drink" value="5">
                            <label for="birra">Birra</label><br>
                            <input type="radio" id="vino" name="drink" value="1">
                            <label for="vino">Vino</label><br>
                            <input type="radio" id="vodka" name="drink" value="8">
                            <label for="vodka">Vodka lemon</label><br>
                            <input type="radio" id="porto" name="drink" value="6">
                            <label for="porto">Porto</label><br>
                            <input type="radio" id="coca" name="drink" value="9">
                            <label for="coca">Coca zero</label><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input type="submit" value="Conferma">
                    </div>
                </div>
            </form>
        </div>
    </body>
    <?php include("utils/footer.php"); ?>
</html>