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
        $sql = "SELECT t.name, COALESCE(c.points,0) as total, COALESCE(c.g,0) as g, COALESCE(c.w,0) as w, COALESCE(c.d,0) as d, 
		COALESCE(c.l,0) as l, COALESCE(c.xg,0) as xg, COALESCE(c.xa,0) as xa
    FROM team as t
    LEFT JOIN (
        SELECT z.team, SUM(z.po) as points, SUM(z.g) as g, SUM(z.w) as w, SUM(z.d) as d, SUM(z.l) as l,
        	SUM(z.xg) as xg, SUM(z.xa) as xa
        FROM (
            SELECT game.team_b as team, COUNT(*) as po, COUNT(*) as g,
            	0 as w, count(*) as d, 0 as l, SUM(game.xg_b) as xg,
            	SUM(game.xa_b) as xa
            FROM game
            WHERE result = 1
            GROUP BY game.team_b
            UNION ALL
            SELECT game.team_a as team, COUNT(*) as po, COUNT(*) as g,
            	0 as w, count(*) as d, 0 as l, SUM(game.xg_a) as xg,
            	SUM(game.xa_a) as xa
            FROM game
            WHERE result = 1
            GROUP BY game.team_a
            
            UNION ALL 
            SELECT game.team_b as team, COUNT(*)*3  as po, COUNT(*) as g,
            	count(*) as w, 0 as d, 0 as l, SUM(game.xg_b) as xg,
            	SUM(game.xa_b) as xa
            FROM game
            WHERE result = 2
            GROUP BY game.team_b
            UNION ALL 
            SELECT game.team_a as team, COUNT(*)*3 as po, COUNT(*) as g,
            	count(*) as w, 0 as d, 0 as l, SUM(game.xg_a) as xg,
            	SUM(game.xa_a) as xa
            FROM game
            WHERE result = 0
            GROUP BY game.team_a
            
            UNION ALL 
            SELECT game.team_b as team, 0  as po, COUNT(*) as g,
            	0 as w, 0 as d, count(*) as l, SUM(game.xg_b) as xg,
            	SUM(game.xa_b) as xa
            FROM game
            WHERE result = 0
            GROUP BY game.team_b
            UNION ALL 
            SELECT game.team_a as team, 0 as po, COUNT(*) as g,
            	0 as w, 0 as d, count(*) as l, SUM(game.xg_a) as xg,
            	SUM(game.xa_a) as xa
            FROM game
            WHERE result = 2
            GROUP BY game.team_a
        ) as z
        GROUP BY z.team) as c
    on t.id = c.team
	ORDER BY total DESC, g DESC, name";
            
            $result = $mysqli->query($sql);
        ?>
    </head>
    <body>
        <?php include "../components/header.php"; ?>
        <div class="page">
            <div class="grid">
                <div class="boxed leaderboard-box">
                    <h1 class="title-center">Standings</h1>
                    <table class="leaderboard">
                        <tr>
                            <th>Team</th>
                            <th>P</th>
                            <th>W</th>
                            <th>D</th>
                            <th>L</th>
                            <th>xG</th>
                            <th>xA</th>
                            <th>Pts</th>
                        </tr>
                        <?php 
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["name"].
                                        "</td><td> " . $row["g"].
                                        "</td><td> " . $row["w"].
                                        "</td><td> " . $row["d"].
                                        "</td><td> " . $row["l"].
                                        "</td><td> " . round($row["xg"],3).
                                        "</td><td> " . round($row["xa"],3).
                                        "</td><td>" . $row["total"].
                                        "</td><tr>";
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