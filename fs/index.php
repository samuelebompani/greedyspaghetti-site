<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/header.css"> 
        <link rel="stylesheet" href="../css/footer.css">
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
        $sql = "SELECT t.name, COALESCE(c.points,0) as total FROM team as t
            LEFT JOIN
                (SELECT z.team, SUM(z.po) as points
                FROM (
                    SELECT game.team_b as team, COUNT(*) as po
                    FROM game
                    WHERE result = 1
                    GROUP BY game.team_b
                    UNION ALL
                    SELECT game.team_a as team, COUNT(*) as po
                    FROM game
                    WHERE result = 1
                    GROUP BY game.team_a
                    UNION ALL 
                    SELECT game.team_b as team, COUNT(*)*3 as po
                    FROM game
                    WHERE result = 2
                    GROUP BY game.team_b
                    UNION ALL 
                    SELECT game.team_a as team, COUNT(*)*3 as po
                    FROM game
                    WHERE result = 0
                    GROUP BY game.team_a
                ) as z
                GROUP BY z.team) as c
            on t.id = c.team
            ORDER BY total DESC;";
            
            $result = $mysqli->query($sql);
        ?>
    </head>
    <body>
        <?php include "../components/header.php"; ?>
        <div class="page">
            <div class="grid">
                <div class="boxed">
                    <table class="leaderboard">
                        <tr>
                            <th>Team</th>
                            <th>Points</th>
                        </tr>
                        <?php 
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["name"].
                                        "</td><td> " . $row["total"].  "</td><tr>";
                                }
                            }
                            $mysqli->close();
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>