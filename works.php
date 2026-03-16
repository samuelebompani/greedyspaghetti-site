<!DOCTYPE html>

<head>
    <?php include "./components/imports.php"; ?>
    <link rel="stylesheet" href="/css/works.css">
</head>

<body>
    <?php include "./components/header.php"; ?>
    <div class="page">
        <div class="w-grid">
            <?php
            // Definizione dei progetti
            $projects = [
                [
                    "title" => "Pirana Films",
                    "img" => "/media/img/works/pirana.png",
                    "desc" => "Developed a dynamic, visually rich portfolio website for Pirana Films, a Milan-based creative production house. The design, crafted by Bax Studio, focuses on showcasing their work in commercials, branded content, documentaries, and short films through an immersive and fluid browsing experience.",
                    "link" => "https://piranafilms.com",
                    "color" => "#f23d3d",
                    "btn" => "PHP",
                ],
                [
                    "title" => "Dexx Finance",
                    "img" => "/media/img/works/dexx.png",
                    "desc" => "Contributed to the development of Dexx Finance, a decentralized finance platform, working as part of the founding team to build the product from the ground up. I was primarily responsible for implementing the frontend architecture and crafting a responsive, intuitive user interface that connects seamlessly with on-chain data and backend services.",
                    "link" => "https://dexx.finance",
                    "color" => "#0a3e62",
                    "btn" => "React",
                ],
                [
                    "title" => "Hakiko Takeda",
                    "img" => "/media/img/works/at.png",
                    "desc" => "Developed a minimal and elegant website dedicated to Japanese artist Akihiko Takeda. Designed by Jacopo Caracci, the site highlights Takeda's sculptures, ceramics, and art jewelry through a clean, gallery-driven layout that keeps the focus on the artwork.",
                    "link" => "https://akihikotakeda.com",
                    "color" => "#fff",
                    "btn" => "PHP",
                ],
                [
                    "title" => "Tappetino Club",
                    "img" => "/media/img/works/tappetino.png",
                    "desc" => "Built a clean and modern website for Tappetino Club, a Pilates studio in Milan. Designed by Baxx Studio, the site emphasizes simplicity and ease of use, making it effortless for visitors to learn about the studio, explore classes, and get in touch.",
                    "link" => "https://tappetinoclub.com",
                    "color" => "#b68881",
                    "btn" => "PHP",
                ],
                [
                    "title" => "Fimart",
                    "img" => "/media/img/works/fimart.png",
                    "desc" => "Developed the website for Fimart, a fintech ecosystem that brings the art market into the digital age. The platform introduces a blockchain-based financial marketplace where artworks can be tokenized, tracked, and traded, enabling galleries, collectors, and investors to monetize and invest in art through a transparent and accessible digital infrastructure.",
                    "link" => "https://fimart.it",
                    "color" => "#589ced",
                    "btn" => "Astro JS",
                ]
            ];

            // Rendering dei progetti
            foreach ($projects as $project) {

                echo '<div class="boxed w-grid-item">
                        <div class="w-grid-item-content-div">
                            <h2>' . $project["title"] . '</h2>
                            <div class="boxed w-grid-item-img-container" style="background-color: ' . $project["color"] . '">
                                <img src="' . $project["img"] . '" class="w-grid-item-img" />
                            </div>
                            <div class="w-full">
                                <p>' . $project["desc"] . '</p>
                            </div>
                        </div>
                        <div class="w-grid-item-second">
                            <div class="w-grid-item-btns">
                                <a href="' . $project["link"] . '" class="boxed square-btn" target="_blank">
                                    <img src="/media/img/arrow.png"  width=50 height=50 />
                                </a>
                                <div class="boxed square-btn useless-btn large-button">
                                    ' . $project["btn"] . '
                                </div>
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