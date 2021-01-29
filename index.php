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
                <!-- OBJECTIVES -->
                <div>
                    <?php 
                        $objectivesList = objectives();

                        foreach($objectivesList as $secObj):

                        $objString = $secObj['objective'];
                        $objShort = $secObj['short_objective'];
                    ?>
                    <div>
                        <input type="checkbox" id="<?php echo $objShort; ?>" name="<?php echo $objShort; ?>">
                        <label for="<?php echo $objShort; ?>"><?php echo $objString; ?></label>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- FIRST NAMES -->
                <div>
                    <label for="ghost_firstname">What's you ghost first name?</label>
                    <select name="firstname" id="ghost_firstname">
                        <option>- Select a first name</option>
                        <?php
                            $firstnList = firstname();

                            foreach($firstnList as $frtn):

                            $frtnItem = $frtn['firstname'];
                        ?>
                        <option value="<?php echo $frtnItem; ?>"><?php echo $frtnItem; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!-- LAST NAMES -->
                <div>
                    <label for="ghost_lastname">What's you ghost last name?</label>
                    <select name="lastname" id="ghost_lastname">
                        <option>- Select a last name</option>
                        <?php
                            $lastnList = lastname();

                            foreach($lastnList as $lstn):

                            $lstnItem = $lstn['lastname'];
                        ?>
                        <option value="<?php echo $lstnItem; ?>"><?php echo $lstnItem; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!-- TALK TO -->
                <div>
                    <p>Respond to:</p>
                    <input type="radio" id="talk_solo" name="talk" value="talk_solo">
                    <label for="talk_solo">people who are alone</label>
                    <input type="radio" id="talk_multi" name="talk" value="talk_multi">
                    <label for="talk_multi">everyone</label>
                </div>
            </form>
        </section>

        <!-- HUNT -->
        <section id="hunt">
        </section>
    </main>

    <footer></footer>
</body>
</html>