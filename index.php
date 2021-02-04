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
        <!-- WHITEBOARD FORM -->
        <section id="whiteboard">
            <form method="post" action="">
                <!-- OBJECTIVES -->
                <div>
                    <?php foreach(getObjectives() as $secObj): ?>
                        <div>
                            <input type="checkbox" id="objective_checkbox_id_<?php echo $secObj['id_objective']; ?>" name="choose_objective[<?php echo $secObj['short_objective']; ?>]" value = "<?php echo $secObj['id_objective']; ?>">
                            <label for="objective_checkbox_id_<?php echo $secObj['id_objective']; ?>"><?php echo $secObj['objective']; ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- FIRST NAMES -->
                <div>
                    <label for="ghost_firstname">What's the ghost first name?</label>
                    <select name="firstname" id="ghost_firstname">
                        <option>- Select a first name</option>
                        <?php foreach(getFirstname() as $frtn): ?>
                            <option value="<?php echo $frtn['firstname']; ?>"><?php echo $frtn['firstname']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!-- LAST NAMES -->
                <div>
                    <label for="ghost_lastname">What's the ghost last name?</label>
                    <select name="lastname" id="ghost_lastname">
                        <option>- Select a last name</option>
                        <?php foreach(getLastname() as $lstn): ?>
                            <option value="<?php echo $lstn['lastname']; ?>"><?php echo $lstn['lastname']; ?></option>
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
                <input type="submit" name="submit" value="let the investigation begins">
            </form>
        </section>

        <?php
            if(isset($_POST['submit'])){
                foreach($_POST['choose_objective'] as $key => $choice){
                    foreach(getObjectives() as $selectShortObj){
                        if($key == $selectShortObj['short_objective']){
                            echo '<p>' . $selectShortObj['objective'] . '</p>';
                        }
                    }
                };
                $selFrtn = $_POST['firstname'];
                $selLstn = $_POST['lastname'];
                    echo '<p>' . $_POST['firstname'] . ' ' . $_POST['lastname'] . '</p>';
                $radioResp = $_POST['talk'];
                    echo '<p>' . $_POST['talk'] . '</p>';

                var_dump($_POST);
            }
        ?>
    </main>

    <footer></footer>
</body>
</html>