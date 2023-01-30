<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="script/main.js"></script>
    <title>Horloge</title>
</head>
<body>
    <main>
        <article>
            <section>
                <div>
                    <div id="containerHorloge">
                        <div id="horloge">
                        </div>
                    </div>
                </div>
                <div id="timerWarpper">
                    <div id="timerContainer">
                        <div id="timer">
                            <form action="" method="post" id="formMinuterie">
                                <label for="timer">Timer</label>
                                <input type="time" name="timer" id="timer" min="0" max="60" step="1" value="0" class="border-2">
                                <button type="submit">Start</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>
</body>
</html>


