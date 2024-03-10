<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">



    <title>3D nyomtatás</title>
    <link rel="icon" href="kepek/icon.png">
</head>

<body class="body">
    <video src="kepek/main/hatter.mp4" playsinline autoplay muted loop></video>
    <div class="pb-5">
        <header class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="center col-sm-3 col-md-3 col-lg-3">
                        <a href="?p=info/info">
                            <h3>Főoldal</h3>
                        </a>
                    </div>
                    <div class="center col-sm-3 col-md-3 col-lg-3">
                        <a href="?p=alap/alap">
                            <h3>Alapanyagok</h3>
                        </a>
                    </div>
                    <div class="center col-sm-3 col-md-3 col-lg-3">
                        <a href="">
                            <h3>Nyomtatott tárgyak</h3>
                        </a>
                    </div>
                    <div class="center col-sm-3 col-md-3 col-lg-3">
                        <a href="">
                            <h3>Gyakori kérdések</h3>
                        </a>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <main class="pt-5 pb-5">
        <div class="container-fluid">
            <div class="row">
                <article class="col-12">
                    <?php
                    if (isset($_GET['p'])) {
                        $p = $_GET['p'];
                        $link = $p . ".php";
                        include($link);
                    } else {
                        include("info/info.php");
                    }
                    ?>
                </article>
            </div>
        </div>
    </main>

    <footer>
        <div class="container-fluid pt-2">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p>
                        Minden információ amit itt megtalál, ezeken a linkeken keresztül érhető el:
                        <br>
                        <a target="_blank" href="https://hu.wikipedia.org/wiki/3D_nyomtató">
                            wikipédiáról szedett információk
                        </a>
                        <br>
                        <a target="_blank" href="https://www.tonerpartners.hu/blog/ipar-rhajozas-es-orvostudomany-mire-hasznaljak-a-3d-nyomtatast-26370hu39018/">
                            "3D nyomtatás az iparban" rész
                        </a>
                        <br>
                        <a target="_blank" href="https://www.freedee.hu/3d-nyomtatas-az-egeszsegugyben/">
                            "Nyomtatás az egézségügyben" rész
                        </a>
                    </p>
                </div>
                <div class="col-lg-4 col-mg-6 col-sm-12">
                    <h4>Elérhetőségek:</h4>
                    <p>
                    <div class="row">
                        <div class="col-6">
                            <div>
                                <i class="material-icons">&#xe7fd;</i>
                                Rumi Balázs
                            </div>
                            <div>
                                <i class="material-icons">&#xe0cd;</i>
                                +36 30 713 6598
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <i class="material-icons">&#xe0be;</i>
                                balazs.rumi23@gmail.com
                            </div>
                            <div>
                                <a target="_blank" href="https://github.com/rumibalazs">
                                    <i style="font-size:24px" class="fa">&#xf09b;</i> Github</a>
                            </div>
                        </div>
                    </div>

                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p>
                        Az oldal folyamatosan bővül új és új elemekkel. <span>FONTOS!</span> Az oldalon található információkon kívül, semmi sem pontos, ez csak egy példa weboldal.<br>
                        Az információkat hiteles helyről gyüjtöttem de azon kívül minden mást én találtam ki.<br>
                        A weboldalon használt képek <span>NEM</span> saját képek, internetről kerestem mindet.<br>
                    </p>
                </div>

            </div>
        </div>
    </footer>
    <button onclick="visszaFel()" class="btn btn-dark" id="vgomb" title="Vissza a tetejére">&uarr;</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>