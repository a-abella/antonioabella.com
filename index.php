<?php require("sideandmenu.php"); ?>

<!-- <div class="bodyheader">&gt;cat .bash_history</div> -->
<div class="bodyheader">~$ cat .bash_history</div>
<div class="bodybody">
    <?php
        #$projects = preg_grep('/^([^.])/', scandir('proj', 1));
        $projects = yaml_parse_file("proj/projects.yml", 0);
        foreach($projects as $proj => $proj_content) {
            $link_section = "";
            if (array_key_exists('links', $proj_content)) {
                $link_entry = "";
                foreach($proj_content['links'] as $link) {
                    $link_entry .= "<a href=\"{$link['href']}\" target=\"_blank\" class=\"projlink\" rel=\"noopener\">{$link['title']}</a><br />\n";
                }
                $link_section = <<<EOD
                <div class="projdocs">
                    $link_entry
                </div>
EOD;
            }
            $entry = <<<EOD
            <div class="project" id="$proj">
                <h2 class="projhead" style="font-weight: 700">{$proj_content['title']}</h2>

                <p>{$proj_content["body"]}

                $link_section
            </div>
            <hr style="margin: 3rem 0 3.15rem 0;"></hr>
EOD;
            echo "$entry";
        }
    ?>
</div>

<?php require("foot.php"); ?>