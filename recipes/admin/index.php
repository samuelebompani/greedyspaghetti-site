<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/header.css"> 
        <link rel="stylesheet" href="../../css/footer.css">
        <link rel="stylesheet" href="../../css/recipes.css">
        <link rel="stylesheet" href="./admin/admin.css">
        <link rel="stylesheet" href="./admin.css">
        <?php include "../../components/imports.php";

        /*$file = file_get_contents("../utils/credentials.txt");
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
        }*/

        function sendRequest() {
            $file = file_get_contents("../utils/credentials.txt");
            $secrets = explode("\n", $file);
            $server = $secrets[0];
            $db = $secrets[1];
            $user = $secrets[2];
            $pass = $secrets[3];
            $mysqli = new mysqli($server, $user, $pass, $db);
            if ($mysqli->connect_errno) {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
            }
            $mysqli->set_charset("utf8");
            $ins = $mysqli->prepare("INSERT INTO `recipe` (`id`, `name_`, `descr_short`, `descr_long`, `image_url`, 
                `ingredients`, `nome`, `descr_breve`, `descr_lunga`, `ingredienti`) 
                VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); 
            $ins->bind_param('sssssssss', $_POST['name_'], $_POST['descr_short'], $_POST['descr_long'], $_POST['image_url'],
                $_POST['ingredients'], $_POST['nome'], $_POST['descr_breve'], $_POST['descr_lunga'], $_POST['ingredienti']);
            $ins->execute();
            printf("%d row inserted.\n", $stmt->affected_rows);
            //mysqli_stmt_bind_param($ins, 's', $_POST['name_']);
            if($ins === FALSE){ die(mysqli_error($db_conx)); }
            //$result = $mysqli->query($ins);
            echo var_dump(mysqli_error($mysqli));

            
        }
        if(isset($_POST['submit'])) {
            sendRequest();
        }
        ?>
        
    </head>
    <body>
        <div class="page">
            <div>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data"
                        class="recipe-form">
                    <div class="title-center title-menu-el-recipes boxed bg-secondary">New Recipe</div>
                    
                    <div class="two-columns">
                        <div style="width:100%; text-align:center;">
                            <label for="image_url">Image url:</label><br>
                            <input type="text" id="image_url" name="image_url"><br>
                        </div>
                        <div>
                            <label for="name_">Name:</label><br>
                            <input type="text" id="name_" name="name_"><br>
                            <label for="descr_short">Short Description:</label><br>
                            <textarea type="text" id="descr_short" name="descr_short" cols="30" rows="4"></textarea><br>
                            <label for="descr_long">Long Description:</label><br>
                            <textarea type="text" id="descr_long" name="descr_long" cols="30" rows="10"></textarea><br>
                            <label for="ingredients">Ingredients:</label><br>
                            <textarea type="text" id="ingredients" name="ingredients" cols="30" rows="6"></textarea><br>
                        </div>
                        <div>
                            <label for="nome">Nome:</label><br>
                            <input type="text" id="nome" name="nome"><br>
                            <label for="descr_breve">Descrizione breve:</label><br>
                            <textarea type="text" id="descr_breve" name="descr_breve" cols="30" rows="4"></textarea><br>
                            <label for="descr_lunga">Descrizione lunga:</label><br>
                            <textarea type="text" id="descr_lunga" name="descr_lunga" cols="30" rows="10"></textarea><br>
                            <label for="ingredienti">Ingredienti:</label><br>
                            <textarea type="text" id="ingredienti" name="ingredienti" cols="30" rows="6"></textarea><br>
                        </div>
                    </div>
                    <input type="submit" value="Submit" name="submit" class="bg-quaternary">
                </form> 
                <form method="post" action="upload.php" enctype="multipart/form-data"
                            class="recipe-form">
                    <div style="width:100%; text-align: center;">
                        <label for="rimg">Image:</label><br>
                        <input type="file" id="rimg" name="rimg" style="background-color: var(--tertiary);">
                        <input type="submit" value="Submit" name="submit" class="bg-quaternary">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>