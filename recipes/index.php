<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/header.css"> 
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/recipes.css">
        <?php include "../components/imports.php";
        $file = file_get_contents("./utils/credentials.txt");
        $secrets = explode("\n", $file);
        $server = $secrets[0];
        $db = $secrets[1];
        $user = $secrets[2];
        $pass = $secrets[3];
        
        // Create connection
        $mysqli = new mysqli($server, $user, $pass, $db);

        // Check connection
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        $mysqli->set_charset("utf8");
        $sql = "Select * from recipe";
        $result = $mysqli->query($sql);
        ?>
        
    </head>
    <body>
        <?php include "../components/header.php"; ?>
        <div class="page">
            <div class="grid-recipes">
                <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            error_log($row['descr_breve']);
                            echo '<div class="boxed grid-item card-recipes">
                                <div class="boxed bg-secondary title-menu-el-recipes">
                                    ' . $row['nome'] . '</div>
                                <div style="width: 100%; height: 100%;">
                                    <div class="content-menu-el-recipes">
                                        <div class="img-menu-el-recipes-container boxed"
                                            style="background-image: url(\'./uploads/'. $row['image_url'] .'\');">
                                        </div>
                                        <div class="boxed bg-secondary text-menu-el-recipes">
                                            '. $row['descr_breve'] .'
                                        </div>
                                        <div class="grid-item-btns">
                                            <div class="boxed bg-secondary">Preparazione</div>
                                            <a href="/recipes"
                                                class="boxed square-btn">
                                                <img src="/media/img/arrow.png" width=50 height=50/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                    }
                    $mysqli->close(); ?>
                <?php /*<div class="boxed grid-item card-recipes">
                    <div class="boxed bg-secondary title-menu-el-recipes">
                        Besciamella</div>
                    <div style="width: 100%; height: 100%;">
                        <div class="content-menu-el-recipes">
                            <div class="img-menu-el-recipes-container boxed"
                                style="background-image: url('../media/img/besciamella.jpg');">
                                
                            </div>
                            <div class="boxed bg-secondary text-menu-el-recipes">
                                La besciamella (in francese béchamelle) è una delle salse madri della cucina francese, 
                                che viene usata come elemento di partenza per salse più elaborate.
                            </div>
                            <div class="grid-item-btns">
                                <div class="boxed bg-secondary">Zuppa</div>
                                <a href="/"
                                    class="boxed square-btn">
                                    <img src="/media/img/arrow.png" width=50 height=50/>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>*/?>
            </div>
        </div>
    </body>
</html>