<?php require("sideandmenu.php"); ?>

<!-- <div class="bodyheader">&gt;cat .bash_history</div> -->
<div class="bodyheader">~$ cat .bash_history</div>
<div class="bodybody">
    <?php
        #$projects = preg_grep('/^([^.])/', scandir('proj', 1));
        $projects = yaml_parse_file("proj/projects.yml", 0);
        foreach($projects as $proj => $proj_content) {
            $link_section = "";
            foreach($proj_content['links'] as $link) {
                $link_section .= "<a href=\"{$link['href']}\" target=\"_blank\" class=\"projlink\">{$link['title']}</a><br />\n";
            }
            $entry = <<<EOD
            <div class=\"project\" id=\"$proj\">
                <h2 class="projhead" style="font-weight: 700">{$proj_content['title']}</h2>

                <p>{$proj_content["body"]}

                <div class="projdocs">
                    $link_section
                </div>
            </div>
            <hr style="margin: 3.5rem 0 3.15rem 0;"></hr>
EOD;
            echo "$entry";
        }
    ?>
</div>

<?php require("foot.php"); ?>