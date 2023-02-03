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
    <link rel="icon" href="images/clock-regular.svg" type="image/x-icon">
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
            <section class="h-[100%] flex flex-col items-center justify-between">
                <div>
                    <div id="containerHorloge">
                        <div id="horloge" class="text-[4em]">
                        </div>
                    </div>
                </div>
                <div id="timerWarpper" class="flex w-[85%] justify-center items-center px-4 py-2">
                    <div class="wrapper flex flex-col items-center space-y-5" id="wrapper">
                        <div id="timerTitle">
                            <h2 class="text-2xl uppercase font-bold">
                                <span>
                                    <i class="fa-solid fa-stopwatch-20"></i>
                                    Stopwatch
                                </span>
                            </h2>
                        </div>
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
                <div id="countdownWarpper" class="flex justify-center w-[85%] px-4 py-2">
                    <div id="timer" class="flex flex-col justify-center items-center ">
                        <div id="countdownTitle">
                            <h2 class="text-2xl uppercase font-bold">
                                <span>
                                    <i class="fa-solid fa-stopwatch-20"></i>
                                    Countdown
                                </span>
                            </h2>
                        </div>
                        <div id="time" class="p-2 m-2 text-2xl">00:00:00</div>
                        <div id="selects" class="flex justify-center space-x-2">
                            <select id="hours" class="p-[5%]">
                                <?php for ($i = 0; $i < 24; $i++) { ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                            <select id="minutes" class="p-[5%]">
                                <?php for ($i = 0; $i < 60; $i++) { ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                            <select id="seconds" class="p-[5%]">
                                <?php for ($i = 0; $i < 60; $i++) { ?>
                                    <option value="<?php echo $i; ?>" class="p-[4%]"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div id="buttonsControlCountdown" class="flex">
                            <button id="startButton">Start</button>
                            <button id="resetButton">Reset</button>
                            <button id="stopButton">Stop</button>
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


