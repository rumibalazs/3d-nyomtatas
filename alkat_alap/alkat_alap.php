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
                <img class="categories" src="kepek/alkat_alap/motor/motor.jpg" alt="Motorok" title="Motor">
                <div class="pt-2">
                    <span>Motorok</span>
                    <button class="HASB"><i class="material-icons">&#xe313;</i></button><!--&#xe316; felfele nyil-->
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 pt-2 content">
                <img class="categories" src="kepek/alkat_alap/fuvoka/fuvoka.jpg" alt="Fúvókák" title="Fúvóka">
                <div class="pt-2">
                    <span>Fúvókák</span>
                    <button class="HASB"><i class="material-icons">&#xe313;</i></button>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 pt-2 content">
                <img class="categories" src="kepek/alkat_alap/elektronika/elektronika.jpg" alt="Elektronikák"
                    title="Elektronika(kijelző)">
                <div class="pt-2">
                    <span>Elektronikák</span>
                    <button class="HASB"><i class="material-icons">&#xe313;</i></button>
                </div>
            </div>
        </div>
        <div class="row" id="hideAndSeekMot">
            <div class="col-sm-12 col-md-6 col-lg-6 text-center content">
                <img src="kepek/alkat_alap/motor/motor.jpg" alt="Léptetőmotor" title="Léptetőmotor" class="shop">
                <h4>Léptetőmotor</h4>
                <h4>40 mm hossz, 1.8° lépésszög</h4>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 text-center content">
                <img src="kepek/alkat_alap/motor/extruder.jpg" alt="Extrúder" title="Extruder" class="shop">
                <h4>NAMA 14 Extrúder</h4>
                <h4>36 mm hossz, 0.9° lépésszög</h4>
            </div>
        </div>
        <div class="row" id="hideAndSeekFuv">
            <div class="col-sm-12 col-md-6 col-lg-6 text-center content">
                <img src="kepek/alkat_alap/fuvoka/fuvoka_1.jpg" alt="Fúvóka fajta 1" title="Fúvóka" class="shop">
                <h4>Sárgaréz fúvóka</h4>
                <select name="rezfuvoka" id="rezfuvoka" class="form-select meret">
                    <option selected disabled>Válasszon méretet!</option>
                    <option value="0.1">0.1 mm</option>
                    <option value="0.2">0.2 mm</option>
                    <option value="0.3">0.3 mm</option>
                    <option value="0.4">0.4 mm</option>
                    <option value="0.5">0.5 mm</option>
                    <option value="0.6">0.6 mm</option>
                    <option value="0.7">0.7 mm</option>
                    <option value="0.8">0.8 mm</option>
                    <option value="0.9">0.9 mm</option>
                    <option value="1.0">1.0 mm</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 text-center content">
                <img src="kepek/alkat_alap/fuvoka/fuvoka_2.jpg" alt="Fúvóka fajta 2" title="Fúvóka" class="shop">
                <h4>Rozsdamentes acél fúvóka</h4>
                <select name="rozsdafuvoka" id="rozsdafuvoka" class="form-select meret">
                    <option selected disabled>Válasszon méretet!</option>
                    <option value="0.1">0.1 mm</option>
                    <option value="0.2">0.2 mm</option>
                    <option value="0.3">0.3 mm</option>
                    <option value="0.4">0.4 mm</option>
                    <option value="0.5">0.5 mm</option>
                    <option value="0.6">0.6 mm</option>
                    <option value="0.7">0.7 mm</option>
                    <option value="0.8">0.8 mm</option>
                    <option value="0.9">0.9 mm</option>
                    <option value="1.0">1.0 mm</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 text-center content">
                <img src="kepek/alkat_alap/elektronika/elektronika.jpg" alt="Kijelző elektronika" title="kijelző" class="shop">
                <h4>RAMPS 1.4 kijelző</h4>
                <h4>12864 LCD kijelző</h4>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 text-center content">
                <img src="kepek/alkat_alap/elektronika/motor_vezerlo.jpg" alt="Motor vezérlő elektronika" title="Motor vezérlő" class="shop">
                <h4>A4988 léptetőmotor verérlő</h4>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>