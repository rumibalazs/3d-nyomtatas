<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">



    <title>3D nyomtatás</title>
    <link rel="icon" href="kepek/icon.png">
</head>

<body>

    <header class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="center col-sm-3 col-md-3 col-lg-3">
                    <a href="">
                        <h3>Alkatrészek és Kiegészítők</h3>
                    </a>
                </div>
                <div class="center col-sm-3 col-md-3 col-lg-3">
                    <a href="">
                        <h3>Nyomtatott tárgyak</h3>
                    </a>
                </div>
                <div class="center col-sm-3 col-md-3 col-lg-3">
                    <a href="">
                        <h3>Gyakran felmerülő kérdések</h3>
                    </a>
                </div>
                <div class="center col-sm-3 col-md-3 col-lg-3">
                    <a href="">
                        <h3>Elérhetőségek</h3>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <article class="col-12">
                <?php
                include("info.php");
                ?>
            </article>
        </div>
        <div class="row">
            <article class="col-12">
                <?php
                include("alkat_kieg.html")
                ?>
            </article>
        </div>
    </div>

    <footer>

    </footer>

    <button onclick="visszaFel()" class="btn btn-dark" id="vgomb" title="Vissza a tetejére">&uarr;</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>