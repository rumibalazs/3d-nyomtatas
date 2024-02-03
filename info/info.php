<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="info/info.css">
<main>
    <div class="container">
        <div class="row">
            <div class="info col-12 content">
                <!-- Bevezetés -->
                <h3 class="center">Mi a 3D nyomtatás?</h3>
                <p>
                    A 3D nyomtató digitális modellekből háromdimenziós tárgyak alkotására képes eszköz.
                    Jelenlegi fő alkalmazásterülete a gyors prototípuskészítés és a hobbi szintű használat, de a
                    technológia fejlődésével az ipari és orvosi alkalmazásra is lehetőség nyílhat.
                    A 3D nyomtató additív gyártási eljárás, vagyis anyag hozzáadásával, például vékony rétegek
                    lerakásával készít tárgyakat, szemben a hagyományos megmunkálással, melynek során nagyobb nyers
                    darabból választják le a felesleges anyagot, és a megmaradó rész lesz a kész termék.
                    Amióta a 3D nyomtatás előtérbe került, az additív gyártás ellentéteként a hagyományos eljárást
                    szubtraktív gyártásnak is szokták nevezni.
                    A 3D nyomtatás egyike a 21. század forradalmian új technológiáinak, az utóbbi időben rohamosan
                    növekszik az eladott nyomtatók száma.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row content">
            <div class="info col-lg-4 col-sm-12 pb-2">
                <!-- alapelvek -->
                <h3>Nyomtatás alapelvei</h3>
                <p class="text">
                    Az additív gyártási eljárást megelőzi digitális modell készítése.
                    Ezt egy számítógéppel segített tervező (CAD) vagy egy 3D modellező szoftver segítségével lehet
                    felépíteni.
                    <br>
                    Meglévő testről 3D szkenner segítségével is készíthető digitális modell.
                    A leggyakoribb adatformátum a CAD szoftver és a 3D printer között az STL (Standard Tessellation
                    Language / STereoLithography) fájl, mely a térbeli test felületét apró közelítő háromszögekre
                    bontva tárolja.
                    Minél kisebbek a háromszögek, annál pontosabb a közelítés.
                    Kevésbé általános a VRML formátumú fájlok használata, melynek előnye az volt, hogy ez a formátum
                    nem csak a geometriai formát, hanem a színeket is tartalmaz.
                    <span class="moreTxt">
                        Olyan nyomtatók esetén, mely egyszerre több nyersanyaggal képes dolgozni, a színek alapján
                        szétválasztható, hogy melyik szín, melyik nyersanyaggal legyen nyomtatva.
                        A többféle nyersanyag használatának lényege, hogy a túllógó felületek alátámasztására nyomtatott
                        elemek ezáltal feloldható anyagból is készülhetnek, mely megkönnyíti az utómunkálatokat.
                        A másik alkalmazási lehetősége, az csak és kizárólag dekorációs célból valóban több színű modell
                        nyomtatása.
                        Azonban a 3D nyomtatást támogató szoftverek fejlődésével a VRML formátumú fájlok használata
                        háttérbe szorult.
                    </span>
                </p>
                <button id="more" class="more">Tovább...</button>
            </div>
            <div class="info col-lg-4 col-sm-12">
                <!-- szeletelő program -->
                <h3>A szeletelő program</h3>
                <p>
                    A szeletelő program állítja elő a nyomtatási fájlt.
                    A beolvasott 3D-s modellt rétegekre szeleteli, és legenerálja a hozzájuk tartozó szerszámpályát.
                    A kimenete általában a CNC gépeknél bevált G-Code.
                    Néhány nyomtató gyártó saját formátumot használ, ezek egyedi szeletelő programot mellékelnek a
                    nyomtató mellé.
                    A szabad szoftver, szabad hardver alapú nyomtatók kompatibilisek a legtöbb szeletelő programmal.
                    <br>
                    A szeletelő programban történnek a technológiai és nyomtatási beállítások.
                    Itt lehet kiválasztani, hogy milyen technológiát használva akarjuk kinyomtatni a modellt.
                    Akarunk-e alapot, illetve alátámasztásokat adni a modellhez.
                    Akarjuk-e menet közben tisztítani a nyomtatófejet.
                    A nyomtatási alap hőmérséklete, a nyomtatás hőmérséklete és sebessége.
                    A modell hűtése, várakozási idő két réteg nyomtatása között… és még sok paraméter lehet
                    beállítani.
                </p>
            </div>
            <div class="info col-lg-4 col-sm-12 pb-2">
                <!-- nyomtatás -->
                <h3>Nyomtatás</h3>
                <p class="text">
                    Nyomtatáskor a gép beolvassa a modell adatait és sorban egymásra illeszkedő rétegeket képez
                    folyadékból, porból vagy sík lemezekből, ilyenformán fokozatosan felépíti a modellt a
                    metszetekből.
                    Ezeket a rétegeket, melyek alakra és vastagságra megegyeznek a virtuális modell metszeteivel,
                    egymáshoz köti vagy automatikusan egymáshoz tapadnak.
                    Ennek a módszernek legnagyobb előnye, hogy majdnem minden formát vagy geometriai testet elő tud
                    állítani.
                    A nyomtató felbontását a rétegek vastagsága és a réteg síkjában a szokásos dpi-ben vagy
                    mikrométerben (μm) adják meg.
                    A szokásos rétegvastagság körülbelül 100 μm (0,1 mm), de vannak olyan nyomtatók, melyek 16 μm
                    vastag rétegeket képeznek.
                    A réteg síkjában a felbontás a lézernyomtatókéhoz hasonló.
                    A részecskék (3D "pontok") átmérője mintegy 50-100 μm (0,05-0,1 mm).
                    <span class="moreTxt">
                        A mai technológiákkal egy modell kinyomtatása néhány perctől néhány óráig tart az alkalmazott
                        módszer, valamint a test méretétől és bonyolultságától függően.
                        A hagyományos gyártási eljárások (például a fröccsöntés) polimer alkatrészek tömeggyártása
                        esetén általában olcsóbbak, de kis darabszám esetén az additív gyártás a gyorsabb, a rugalmasabb
                        és az olcsóbb.
                        A 3D nyomtatók lehetővé teszik termékfejlesztő csoportok számára, hogy asztali méretű
                        nyomtatókkal tudjanak alkatrészeket és koncepcionális modelleket készíteni.
                    </span>
                </p>
                <button id="more" class="more">Tovább...</button>
            </div>
        </div>
        <div class="row content">
            <div class="info col-lg-5 col-sm-12 pb-2">
                <!-- ipari nyomtatás -->
                <h3>3D nyomtatás az iparban</h3>
                <p class="text">
                    A 3D nyomtatás népszerű eszköz, különösen az autóiparban és a repülőgépiparban, ahol lerövidíti
                    a prototípus tervezése és elkészítése közötti időt.
                    Ezenkívül a 3D nyomtatók szerszámokat és egyéb segédeszközöket, továbbá préseket vagy fém
                    alkatrészeket gyártanak a különböző gyártóberendezésekhez.
                    <br>
                    A karbantartóknak nem kell heteket várniuk az alkatrészekre, hanem csak néhány órát - amíg az
                    alkatrész kinyomtatásra kerül.
                    A fémből (titán, alumínium, acél és mások) történő nyomtatás a fémpor lézeres szinterelésén
                    alapszik.
                    <br>
                    A kerámianyomtatás is egyre népszerűbb. Használják például tűzálló alkatrészek gyártására
                    kemencékhez vagy nagyfeszültségű rendszerek alkatrészeinek előállítása során.
                    Relatív újdonság a szén-kompozitból készült könnyű, szilárd alkatrészek nyomtatása.
                    <br>
                    <br>
                    <span class="moreTxt">
                        <b>3D nyomtatók, mint az emberi tudás úttörői:</b>
                        <br>
                        Léteznek egyéb területek is az üzemanyagrendszer- és más repülőgép alkatrészek nyomtatásán
                        kívül, ahol a tudósok és a mérnökök a 3D-s nyomtatást alkalmazzák.
                        Ilyen például a Hold és a Mars gyarmatosításának modellezése is.
                        <br>
                        Kutatják az építőanyagokból (beton, homok és üvegszál keverékek) történő nyomtatás
                        technológiáját, és habár ez még nem került alkalmazásra az építési gyakorlatban, de
                        előrevetítheti a Naprendszer égitestjeinek jövőbeli gyarmatosításának egy lehetséges módját.
                        <br>
                        A lakóépületek 3D nyomtatása jelentősen lecsökkentené a Mars és a Hold gyarmatosításának idejét
                        és módját.
                        Elegendő lenne csupán az épületek kulcsfontosságú elemeit az új kolónia helyszínére szállítani,
                        a fennmaradó részeket pedig helyi alapanyagokból lehetne előállítani a nyomtatók segítségével.
                        <br>
                        Ez többek között azért nagyon fontos, mivel a Holdon és Marson felépülő épületeket védeni kell
                        az erős, nagyon veszélyes UV-sugárzástól.
                        A Holdon egy regolitnak nevezett anyag áll rendelkezésre, míg a Marson a mindenütt jelen lévő
                        vörös homokot lehetne használni építési célokra.
                        Az űrbeli 3D nyomtatásban nincs semmi újdonság.
                        A Nemzetközi Űrállomáson évek óta folytatnak 3D nyomtatás kísérleteket.
                    </span>
                </p>
                <button id="more" class="more">Tovább...</button>
            </div>
            <div class="info col-lg-7 col-sm-12 pb-2">
                <!-- egészségügyben való nyomtatás -->
                <h3>Nyomtatás az egészségügyben</h3>
                <p class="text">
                    Orvosi eszközök:<br>
                    - Műtéti sablonok<br>
                    - Egyedi orvosi eszközök, kellékek <br>
                    <br>

                    Ide tartoznak a műtétek során felhasznált vágó, fúró sablonok is.
                    Egyszerűen fogalmazva azok a tárgyak amik elengedhetetlenek a betegellátásban, elsősorban az orvos
                    munkájának javítása által segítik a beteg gyógyulási lehetőségeit.
                    Más szempontból úgy is kategorizálhatnám, hogy azokról az eszközökről beszélünk, amik tartósan nem
                    válnak a beteg testének részeivé, például egy-egy belső rögzítés hetekig-hónapokig akár évekig is
                    része lehet a páciens testének, de idővel eltávolításra kerül.
                    Nem mellékesen érdemes megjegyezni a fenti eszközöknél nem csak a fejlesztés igen komplikált, de
                    ezen a területen a mai magyarországi szabályozás szempontjából minősíteni kell a tárgyakat, ami csak
                    speciális engedélyeztetési folyamat után lehetséges.
                    <br>
                    <br>
                    <span class="moreTxt">
                        <b>Vizualizáció:</b>
                        <br>
                        Az orvosképzésben, betegtájékoztatásban és műtétek előkészítésében használt 3D nyomtatott
                        tárgyak
                        világa ez. <br>

                        - Oktatási modellek<br>
                        - Műtéti felkészülést segítő modellek<br>
                        - Páncienssel való kommunikációt segítő modellek<br>
                        <br>
                        Még ha a laikusnak szinte sosem látható dolgokról is van itt szó, a beteg életét megmentő,
                        műtéti
                        időket jelentősen csökkentő eszközökről beszélünk.
                        Nem csak az elméleti tanulás eszközeiként hasznos tárgyakról van szó, hanem a gyakorlati tudás
                        megszerzéséhez használt sablonok, szimulációk is ide tartoznak.
                        Az orvosképzésben jelenleg használt sablonok általában magas beszerzési költségűek, gyakran
                        probléma
                        a gyors elhasználódás is.
                        Itt sokszor nem az egyedi gyártás miatt előnyös a 3D nyomtatás, hanem a gyors helyben történő
                        utángyártás, és a desktop 3D nyomtatók költséghatékony anyaghasználata a legfőbb előny.
                        Ugyanakkor a részletgazdag, több színnel nyomtatott anatómiai bemutatódarabok
                        gyártástechnológiailag
                        adnak nagyon egyedi megoldást a kézzel fogható ábrázolásra.
                        <br>
                        <br>
                        <b>Alkalmazott ergonómia:</b><br>

                        - Implantátumok<br>

                        - Protézisek<br>

                        - Ortézisek<br>

                        - Egészség megőrzését szolgáló eszközök<br>
                        <br>

                        Ehhez fontos megkülönböztetni az implantátum, protézis, ortézis és az egészség megőrzésére,
                        javítására, a jó közérzet érdekében felhasznált lehetőségeket.
                        Természetesen nem lehet ezeket egymástól teljesen elkülöníteni, átfedések nem csak az
                        eljárásokban,
                        de a felhasználási módokban, a finanszírozási lehetőségekben is vannak.
                        <br>
                        Egymásra intenzíven ható, egymást befolyásoló területekről beszélünk.
                        A 3D nyomtatás nem csak önmagában létező szuper megoldás a problémákra.
                        A képalkotó módszerek, a 3D szkennelés legalább olyan nagy jelentőségű technológiai fejlődésen
                        megy
                        keresztül, és természetesen a nyomtatással szorosan együttműködve kerülnek alkalmazásra.
                        Mindkettő azon új digitális technológiákhoz tartozik, ami elősegíti a gyors prototípus gyártást
                        és
                        -fejlesztést, továbbá az egészségügy szempontjából különösen hasznos, hogy tulajdonságaikból
                        adódóan
                        egyedi igények széles spektrumát is ki tudják szolgálni.
                        Jelenlegi kultúránk tömeggyártáson alapszik, így ezek az egyedi méretek és formák által készült
                        tárgyak még az egészséget megőrző, javító területeken is leginkább csak standardizált méretekkel
                        vagy nagyon magas költséggel tudnak létrejönni.
                    </span>
                </p>
                <button id="more" class="more">Tovább...</button>
            </div>
        </div>
    </div>
</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<script src="app.js"></script>