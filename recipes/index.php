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
        $lan = $_GET['lan']
        ?>
        <script>
            function changeLanguage(lan) {
                url = new URL(window.location.href);
                url.searchParams.set("lan", lan);
                console.log(url)
                window.location.href = url.href
            }
        </script>
    </head>
    <body>
        <?php include "../components/header.php"; ?>
        <div class="page">
            <div class="grid-recipes">
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
                                            <a href="/recipes/pages?lan='.$lan.'&id='. $row['id'].'"
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
            </div>
        </div>
        <?php include "../components/footer.php"; ?>
    </body>
</html>