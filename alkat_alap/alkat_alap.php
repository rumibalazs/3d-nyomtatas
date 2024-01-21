<meta charset="utf-8">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="alkat_alap/alkat_alap.css">



<body>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12 content">
                <h3>Alkatrészek:</h3>
                <p>Kínálatunk folyamatosan bővül, minősségi alkatrészekkel!</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-4 col-lg-4 pt-2 content">
                <img class="categories" src="kepek/alkat_alap/motor.jpg" alt="Motorok" title="Motor">
                <div class="pt-2">
                    <span>Motorok</span>
                    <button onclick="hideAndSeek()" class="HASB"><i class="material-icons"
                            id="more">&#xe313;</i></button>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 content">
                <img class="categories" src="kepek/alkat_alap/fuvoka.jpg" alt="Fúvókák" title="Fúvóka">
                <div>
                    Fúvókák
                    <button><i class="material-icons" id="more">&#xe313;</i></button> <!--le-->
                    <button><i class="material-icons" id="less">&#xe316;</i></button> <!--fel-->
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 content">
                <img class="categories" src="kepek/alkat_alap/elektronika.jpg" alt="Elektronikák"
                    title="Elektronika(kijelző)">
                <div>
                    Elektronikák
                    <button><i class="material-icons" id="more">&#xe313;</i></button> <!--le-->
                    <button><i class="material-icons" id="less">&#xe316;</i></button> <!--fel-->
                </div>
            </div>
        </div>
        <div class="row content" id="hideAndSeek">
            <div class="col-sm-12 col-md-6 col-lg-6 text-center tc">
                <img class="shop" src="kepek/alkat_alap/motor.jpg" alt="Léptetőmotor" title="Léptetőmotor">
                <h4>Léptetőmotor</h4>
                <h4>40 mm hossz, 1.8° lépésszög</h4>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 text-center tc">
                <img class="shop" src="kepek/alkat_alap/extruder.jpg" alt="Extrúder" title="Extruder">
                <h4>NAMA 14 Extrúder</h4>
                <h4>36 mm hossz, 0.9° lépésszög</h4>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>