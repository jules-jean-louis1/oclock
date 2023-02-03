<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8b26d30613.js" crossorigin="anonymous"></script>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="script/main.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <title>Horloge</title>
</head>
<body>
<!-- Header -->
<?php
    include 'import/header.php';
?>
<!-- Main -->
    <main>
        <article class="h-[80vh]">
            <section class="flex flex-col items-center">
                <div>
                    <div id="containerHorloge">
                        <div id="horloge" class="text-[4em]">
                        </div>
                    </div>
                </div>
                <div id="timerWarpper" class="flex justify-center items-center px-4 py-2">
                    <div class="wrapper flex flex-col items-center space-y-5" id="wrapper">
                        <div class="display flex flex-row">
                            <p class="timerDisplay" id="timerHrs">00</p> :
                            <p class="timerDisplay" id="timerMins">00</p> :
                            <p class="timerDisplay" id="timerSec">00</p> :
                            <p class="timerDisplay" id="timerMilisec">00</p>
                        </div>

                        <div class="buttons">
                            <button type="button" id="startBtn">Start</button>
                            <button type="button" id="resetBtn">Reset</button>
                            <button type="button" id="lapBtn">Lap</button>
                        </div>
                        <h1>Laps :</h1>
                        <div id="laps">
                            <p id="lapRecord"></p>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>
<!-- Footer -->
<?php
    include 'import/footer.php';
?>
</body>
</html>


