<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
    include "components/header.html";
    class Question
    {
        public $title;
        public $body;

        public function __construct($title, $body)
        {
            $this->title = $title;
            $this->body = $body;
        }
    }
    $fileHandle = fopen("csv/data.csv", "r");
    $questions = array();
    fgetcsv($fileHandle, 0, ",");
    while (($row = fgetcsv($fileHandle, 0, ",")) !== FALSE) {
        $questions[] = new Question($row[0], $row[1]);
    }
    ?>
</head>

<body>
    <?php include 'components/navbar.php' ?>
    <div>
        <div class="container">
            <?php
            foreach ($questions as $qs => $q) {
                echo '<div class="q-container">';
                echo "<div><h2>{$q->title}</h2>";
                echo '<div class="q-body">' . $q->body . '</div></div>';
                echo '<h3>Accetti o non accetti?</h3>';
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <?php include('components/footer.php') ?>
</body>

</html>