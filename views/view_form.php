<?php $this->title = "Phasmo Hunt"; ?>

<!-- WHITEBOARD FORM -->
<section id="whiteboard">
    <form method="post" action="">
        <!-- OBJECTIVES -->
        <div>         
            <div>
                <label for="optional_objective_1">Optional objective 1</label>
                <select name="opt_obj_1" id="optional_objective_1">
                    <option>- Select an objective</option>
                    <?php foreach(getObjectives() as $opt_obj): ?>
                        <option value="<?= $opt_obj['id_objective']; ?>"><?= $opt_obj['objective']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label for="optional_objective_2">Optional objective 2</label>
                <select name="opt_obj_2" id="optional_objective_2">
                    <option>- Select an objective</option>
                    <?php foreach(getObjectives() as $opt_obj): ?>
                        <option value="<?= $opt_obj['id_objective']; ?>"><?= $opt_obj['objective']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label for="optional_objective_3">Optional objective 3</label>
                <select name="opt_obj_3" id="optional_objective_3">
                    <option>- Select an objective</option>
                    <?php foreach(getObjectives() as $opt_obj): ?>
                        <option value="<?= $opt_obj['id_objective']; ?>"><?= $opt_obj['objective']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <!-- FIRST NAMES -->
        <div>
            <label for="ghost_firstname">What's the ghost first name?</label>
            <select name="firstname" id="ghost_firstname">
                <option>- Select a first name</option>
                <?php foreach(getFirstName() as $fstn): ?>
                     <option value="<?= $fstn['firstname']; ?>"><?= $fstn['firstname']; ?></option>
                  <?php endforeach; ?>
            </select>
        </div>
        <!-- LAST NAMES -->
        <div>
            <label for="ghost_lastname">What's the ghost last name?</label>
            <select name="lastname" id="ghost_lastname">
                <option>- Select a last name</option>
                <?php foreach(getLastName() as $lstn): ?>
                    <option value="<?= $lstn['lastname']; ?>"><?= $lstn['lastname']; ?></option>
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