<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phasmo Hunt</title>
</head>
<body>
<?php
  include_once('components/functions.php');
?>
    <header></header>

    <main>
        <!-- WHITEBOARD -->
        <section id="whiteboard">
            <form method="post" action="">
                <div>
                    <?php
                        objective();
                    ?>
                </div>

                <!-- <label for="ghost_firstname">What's you ghost first name?</label>
                <select name="firstname" id="ghost_firstname" value="">
                    <option>- Select a first name</option>

                </select>
                <label for="ghost_lastname">What's you ghost last name?</label>
                <select name="lastname" id="ghost_lastname" value="">
                    <option>- Select a last name</option>
                    
                </select>
                <input type="radio" id="talk_solo" name="talk" value="talk_solo">
                <label for="talk_solo">Huey</label>
                <input type="radio" id="talk_multi" name="talk" value="talk_multi">
                <label for="talk_multi">Huey</label> -->
            </form>
        </section>

        <!-- HUNT -->
        <section id="hunt">
        </section>
    </main>

    <footer></footer>
</body>
</html>