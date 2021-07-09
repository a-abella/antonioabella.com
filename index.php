<?php require("sideandmenu.php"); ?>

<div class="bodyheader">&gt;cat .bash_history</div>
<div class="bodybody">
    <?php
        $projects = preg_grep('/^([^.])/', scandir('proj', 1));
        foreach($projects as $p){
            echo file_get_contents("proj/$p");
            echo '<hr style="margin-bottom: 3.33rem;"></hr>';
        }
    ?>
</div>

<?php require("foot.php"); ?>