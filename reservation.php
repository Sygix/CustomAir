
<!-- Ajout du header via PHP -->

<?php
    include("header.php");
?>

<!-- Barre d'étapes de reservation -->

<div class="container-progress">
    <ul class="progressbar">
        <li class="active">Step 1</li>
        <li>Step 2</li>
        <li>Step 3</li>
        <li>Step 4</li>
    </ul>
</div>

<!-- Formulaire pour la réservation -->


<form action="#" method="post">


    <!-- Premier bloc avec les différents formulaire a remplir -->

    <h2>Reserve your flight</h2>
    <div id="step1">

        <!-- La destination -->

        <div id="destination">
            <div id="dest1">
                <h3 class="h3-title">Destination</h3>
            </div>
            <div id="dest2">
                <div id="dest-col1">
                    <img src="img/flight-departures.svg" alt="flight departure logo">
                    <img src="img/flight-arrival.svg" alt="flight arrival logo">
                </div>
                <div id="dest-col2">
                    <p>Departing from : <input name="dest-departing" type="text"></p>
                    <p>Arriving at : <input name="dest-arriving" type="text"></p>
                </div>
            </div>
        </div>

        <!-- Les passagers -->

        <div id="passengers">
            <div id="pass1">
                <h3 class="h3-title">Passengers</h3>
            </div>
            <div id="passengers-inputs">
                <div id="container-selector">
                    <p>Number of passengers : <span id="f"></span> <input type="range" min="1" max="10" value="1" class="slider" id="range"></p>
                </div>
                <span id="passengers-span">
                        <select class="added customselect">
                            <option value="0">Adult (25 years and older)</option>
                            <option value="1">Young (12 – 24 years)</option>
                            <option value="2">Child (2 – 11 years)</option>
                            <option value="3">Infant (0 – 23 months)</option>
                        </select>
                    </span>
            </div>
        </div>

        <!-- Les dates -->

        <div id="dates">
            <h3 id="date1" class="h3-title">Dates</h3>
            <div id="date2">
                <div id="date-col1">
                    <img src="img/calendar.svg" alt="date logo">
                </div>
                <div id="date-col2">
                    <p>Departure : <input name="date-departure" type="date"></p>
                    <p>Return : <input name="date-return" type="date"></p>
                </div>
            </div>
        </div>

        <!-- Les repas -->

        <div id="meals">
            <div id="meal1">
                <h3 class="h3-title">Meals</h3>
            </div>
            <div id="meal2">
                <p>Do you want us to prepare a meal for you ? <input type="radio" name="yes_no" checked> Yes</input> <input type="radio" name="yes_no"> No</input></p>
                <p>Meal 1 - <select class="customselect">
                                <option value="0">breakfast</option>
                                <option value="1">lunch</option>
                                <option value="2">dinner</option>
                                <option value="3">snack</option>
                                <option value="3">refreshment</option>
                                <option value="3">cocktail</option>
                            </select>
                </p>
                <p>Meal 2 - <select class="customselect">
                                <option value="0">breakfast</option>
                                <option value="1">lunch</option>
                                <option value="2">dinner</option>
                                <option value="3">snack</option>
                                <option value="3">refreshment</option>
                                <option value="3">cocktail</option>
                            </select>
                </p>
                <p>Meal 3 - <select class="customselect">
                                <option value="0">breakfast</option>
                                <option value="1">lunch</option>
                                <option value="2">dinner</option>
                                <option value="3">snack</option>
                                <option value="3">refreshment</option>
                                <option value="3">cocktail</option>
                            </select>
                </p>
                <a id="addMealbutton" href="#" onclick="addMeal()"><img id="meal-add" src="img/add.svg"></a>
            </div>
        </div>
    </div>

    <!-- Deuxième bloc pour le choix de l'avion -->

    <h2>Choose your plane</h2>
    <div id="step2">
        <div id="step2-title">
            <h3 class="h3-title">Model</h3>
        </div>
        <div id="model-column">
            <div>
                <select class="customselect">
                    <optgroup label="Citation">
                        <option value="hemesphere">Citation - Hemesphere</option>
                        <option value="longitude">Citation - Longitude</option>
                        <option value="sovereign">Citation - Sovereign</option>
                        <option value="latitude">Citation - Latitude</option>
                        <option value="m2" selected>Citation - M2</option>
                    </optgroup>
                    <optgroup label="Turboprops">
                        <option value="url_21">Turboprops - Cessna Denali</option>
                        <option value="url_22">Turboprops - Grand Caravan Ex</option>
                        <option value="url_23">Turboprops - Cassna Caravan</option>
                    </optgroup>
                    <optgroup label="Pistons">
                        <option value="url_21">Pistons - Cessna Stationair</option>
                        <option value="url_22">Pistons - Cessna Skylane</option>
                        <option value="url_23">Pistons - Cessna Skyhawk</option>
                    </optgroup>
                </select>
            </div>
            <img src="img/avion_citation_m2.jpg">
        </div>
    </div>

    <!-- Bouton d'envoi et fin du formulaire -->

    <button id="submit" type="submit">Submit your reservation</button>
</form>

    <!-- Bloc visite 360° de l'avion -->

<article id="rv">
    <h2>360° tour</h2>
    <p class="show">Move your mouse over the image to pause.</p>
    <p class="hiden">Touch the image to pause.</p>
    <!-- Zone carousel -->
    <div class="container-carousel">
        <img class="imgSlides" src="img/reservation_360_1.jpg" style="width:100%; margin-top:6%">
        <img class="imgSlides" src="img/reservation_360_2.jpg" style="width:100%; margin-top:6%">
        <img class="imgSlides" src="img/reservation_360_3.jpg" style="width:100%; margin-top:6%">
        <img class="imgSlides" src="img/reservation_360_4.jpg" style="width:100%; margin-top:6%">
        <img class="imgSlides" src="img/reservation_360_5.jpg" style="width:100%; margin-top:6%">
        <img class="imgSlides" src="img/reservation_360_6.jpg" style="width:100%; margin-top:6%">
        <img class="imgSlides" src="img/reservation_360_8.jpg" style="width:100%; margin-top:6%">
        <img class="imgSlides" src="img/reservation_360_9.jpg" style="width:100%; margin-top:6%">
    </div>
    <div class="show" style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</article>

    <!-- Bloc pour voir l'intérieur de nos avions -->

<article id="interior">
    <h2>Interior</h2>
    <p>Treat yourself to comfort</p>
    <div class="container-button">
        <button id="standard" onclick="changeInterior('img/reservation_interior_1_default.jpg')">standard</button>
        <button id="forward" onclick="changeInterior('img/reservation_interior_2.jpg')">forward cabinet</button>
    </div>
    <div id="interior-img">
        <img src="img/reservation_interior_1_default.jpg">
    </div>
</article>

    <!-- Ajout de la page JS nécéssaire -->

    <script src="js/main.js"></script>

    <!-- Ajout du footer via php -->

<?php
    include("footer.php");
?>