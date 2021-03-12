<?php $this->title = "Phasmo Hunt: Investigation"; ?>

<section id="whiteboard">
    <h2>Optional Objectives</h2>
    <p>Objective 1: Discover what type of ghost we are dealing with</p>
    <p>Objective 2: <?= $whiteboard->getObj1(); ?></p>
    <p>Objective 3: <?= $whiteboard->getObj2(); ?></p>
    <p>Objective 4: <?= $whiteboard->getObj3(); ?></p>
    <p>I've done some investigating for you. Looks like the ghost's name is <?= $whiteboard->getFirstn() . ' ' . $whiteboard->getLastn(); ?>. This Ghost also seems to only respond to <?= $whiteboard->getResp(); ?>. You should be albi to use it's name to anger it and get some paranormal activity. Make sure to refer to your Journal and write down any evidence you find.</p>
</section>
