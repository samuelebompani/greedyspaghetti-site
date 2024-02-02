<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./admin/admin.css">
        <link rel="stylesheet" href="/css/recipes.css">
        <?php include "../../components/imports.php";
        
        $file = file_get_contents("../utils/credentials.txt");
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
        <?php include "../../components/admin-header.php"; ?>
        <div class="page">
            <div class="grid-recipes">
                <div class="new-recipe">
                    <div class="boxed new-recipe-card">
                        <a href="/recipes/admin/new-page.php" 
                            class="square-btn boxed">+</a>
                    </div>
                </div>
                <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            // set variables depending on the language
                            $isEnglish = $lan==="en";
                            $name = $isEnglish ? $row['name_'] : $row['nome'];
                            $descr = $isEnglish ? $row['descr_short'] : $row['descr_breve'];
                            echo '<div class="boxed grid-item card-recipes">
                                <div class="boxed bg-secondary title-menu-el-recipes">
                                    ' . $name . '</div>
                                <div style="width: 100%; height: 100%;">
                                    <div class="content-menu-el-recipes">
                                        <div class="img-menu-el-recipes-container boxed"
                                            style="background-image: url(\'./uploads/'. $row['image_url'] .'\');">
                                        </div>
                                        <div class="boxed bg-secondary text-menu-el-recipes">
                                            '. $descr .'
                                        </div>
                                        <div class="grid-item-btns">
                                            <div class="language-btns">
                                                <div class="boxed square-btn " onclick="changeLanguage(`en`)">EN</div>
                                                <div class="boxed square-btn " onclick="changeLanguage(`ita`)">ITA</div>
                                            </div>
                                            <a href="/recipes/admin/edit-page.php?id='. $row['id'].'"
                                                class="boxed square-btn place-center">
                                                Edit
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                    }
                    $mysqli->close(); ?>
            </div>
        </div>
    </body>
</html>