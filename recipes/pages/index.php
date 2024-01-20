<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/header.css"> 
        <link rel="stylesheet" href="../../css/footer.css">
        <link rel="stylesheet" href="../../css/recipes.css">
        <?php include "../../components/imports.php";
        $file = file_get_contents("../utils/credentials.txt");
        $secrets = explode("\n", $file);
        $server = $secrets[0];
        $db = $secrets[1];
        $user = $secrets[2];
        $pass = $secrets[3];
        
        //// Create connection
        $mysqli = new mysqli($server, $user, $pass, $db);

        //// Check connection
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        
        $mysqli->set_charset("utf8");
        $sql = "SELECT * FROM `recipe` WHERE recipe.id = ". $_GET['id'];
        $result = $mysqli->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        }
        ?>
        
    </head>
    <body>
        <?php include "../../components/header.php"; ?>
        <div class="page">
            <div class="grid-recipes">
                
                <div class="boxed grid-item recipe-container">
                    <div class="boxed bg-secondary title-menu-el-recipes">
                        <?php echo $row['nome']; ?>
                    </div>
                    <div style="width: 100%; height: 100%;" class="recipe-body">
                        <div class="content-menu-el-recipes">
                            <div class="two-cols">
                                <div class="boxed bg-secondary">
                                    <div class="recipe-ingredients">
                                        Ingredienti:<br>
                                        <?php 
                                            echo $row['ingredienti'];
                                        ?>
                                    </div>
                                </div>
                                <div class="img-recipe-container boxed"
                                    style="background-image: url('/recipes/uploads/<?php echo $row['image_url']; ?>');">
                                </div>
                            </div>
                            
                            <div class="boxed bg-secondary text-menu-el-recipes">
                                <?php echo $row['descr_breve'];?>
                            </div>

                            <div class="boxed bg-secondary text-menu-el-recipes">
                                <?php echo $row['descr_lunga'];?>
                            </div>

                            <div class="grid-item-btns">
                                <a href="/recipes/"
                                    class="boxed square-btn">
                                    <img src="/media/img/arrow.png" width=50 height=50 style="rotate: 180deg; z-index:0;"/>
                                </a>
                                <div class="boxed bg-secondary">Preparazione</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>