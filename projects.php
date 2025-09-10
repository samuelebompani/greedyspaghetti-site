<!DOCTYPE html>

<head>
    <?php include "./components/imports.php"; ?>
</head>

<body>
    <?php include "./components/header.php"; ?>
    <div class="page">
        <div class="grid">
            <?php
            // Definizione dei progetti
            $projects = [
                [
                    "title" => "Easy Counter",
                    "img" => "/media/img/easy_counter_logo.png",
                    "desc" => "If you just need to count something, <br>here's your app.<br>Available for Android.",
                    "link" => "/apps/EasyCounter.apk",
                    "btn" => "EN",
                    "download" => true
                ],
                [
                    "title" => "Recipes",
                    "img" => "/media/img/r.png",
                    "desc" => "WIP. A collection of my favourite recipes.",
                    "link" => "/recipes/",
                    "btn" => "EN/IT"
                ],
                [
                    "title" => "Arriva Dio e ti dice",
                    "img" => "/media/img/adetd.png",
                    "desc" => "Arriva Dio e ti dice is a game of choices where you're given scenarios combining a
                                positive and a negative outcome, and you have to decide whether to accept them or not.",
                    "link" => "/pnd/",
                    "btn" => "IT"
                ],
                [
                    "title" => "A quick BBBreak",
                    "img" => "/media/img/bbblogo.jpg",
                    "desc" => "A newsletter I write with my friends. It's in italian and we send a new mail every month. You
                                can subscribe clicking here<br>",
                    "link" => "http://eepurl.com/hOhaeX",
                    "btn" => "IT"
                ],
                [
                    "title" => "Football Headers",
                    "img" => "/media/img/icona_FH_play.png",
                    "desc" => "A game for Android I developed in 2018. Control the ball with your head, collect coins to
                                unlock new players and backgrounds.<br>",
                    "link" => "/apps/FootballHeaders.apk",
                    "btn" => "EN",
                    "download" => true
                ],
                [
                    "title" => "Norimberga",
                    "img" => "/media/img/norimberga.jpg",
                    "desc" => "Norimberga is a debate and persuasion game for 3 or more players, inspired by the podcast
                                \"Pendolino\".<br>Overrated, underrated, or fairly rated?",
                    "link" => "/norimberga/",
                    "btn" => "IT"
                ],
                [
                    "title" => "Trattative in corso",
                    "img" => "/game/index.png",
                    "desc" => "WIP. A little platform game I'm developing. You can try it out here!",
                    "link" => "/game/",
                    "btn" => "IT"
                ]
            ];

            // Rendering dei progetti
            foreach ($projects as $project) {
                $rotateStyle = !empty($project["download"]) ? 'style="rotate: 90deg;"' : '';

                echo '<div class="boxed grid-item">
                        <div class="grid-item-content-div">
                            <h2>' . $project["title"] . '</h2>
                            <div class="justify-between w-full grid-item-img-txt">
                                <img src="' . $project["img"] . '" width=100 height=100 class="" />
                                <div class="w-full">
                                    <p>' . $project["desc"] . '</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item-btns">
                            <a href="' . $project["link"] . '" class="boxed square-btn" ' .
                                (!empty($project["download"]) ? 'download' : '') . '>
                                <img src="/media/img/arrow.png" ' . $rotateStyle . ' width=50 height=50 />
                            </a>
                            <div class="boxed square-btn useless-btn large-button">
                                ' . $project["btn"] . '
                            </div>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </div>
    <?php include "./components/footer.php"; ?>
</body>


</html>