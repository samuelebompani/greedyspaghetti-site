<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="/media/favicon.ico">
        <title>Pendolino test</title>
        <?php 
            class Question {
                public $title;
                public $body;
                public $opt1;
                public $opt2;
            
                public function __construct($title, $body, $val1, $val2) {
                    $this->title = $title;
                    $this->body = $body;
                    $this->opt1 = $val1;
                    $this->opt2 = $val2;
                }
            }
            $fileHandle = fopen("csv/data.csv", "r");
            $questions = array();
            fgetcsv($fileHandle, 0, ",");
            while (($row = fgetcsv($fileHandle, 0, ",")) !== FALSE) {
                $questions[] = new Question($row[0], $row[1], $row[2], $row[3]);
            }
        ?>
    </head>
    <body>
        <?php include('components/navbar.php')?>
        <div style="background-color: #ff594c; padding-bottom:5%;">
            <div class="container">
                <form action="result.php" method="post">
                    <?php
                    foreach($questions as $qs => $q) {
                        print('<div class="q-container">');
                        print("<div><h2>".$q ->title."</h2>");
                        print('<div class="q-body">'.$q->body.'</div></div>');
                        print('<div class="q-option">
                                    <div>
                                        <input type="radio" id="'.$q ->title.'0" name="'.$q ->title.'" value="'.$q->opt1.'" required>
                                        <label for="'.$q ->title.'0">Accetti</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="'.$q ->title.'1" name="'.$q ->title.'" value="'.$q->opt2.'">
                                        <label for="'.$q ->title.'1">Non accetti</label>
                                    </div>
                                </div>');
                        print("</div>");
                    }?>
                    <div style="text-align: center; margin-top: 2%;">
                        <button class="submit-btn" type="submit">Conferma</button>
                    </div>
                </form>
                
            </div>
        </div>
        
        <?php include('components/footer.php')?>
    </body>
</html>