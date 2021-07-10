<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/styles/font-faces.css"/>
        <link rel="stylesheet" type="text/css" href="/styles/fontawesome/css/fontello.css" />
        <link rel="stylesheet" type="text/css" href="/styles/base.css"/>
        <link rel="icon" href="favicon.ico" sizes="16x16 32x32" type="image/png" />
        <?php 
            $titles = array("Console Commander","Command-line Captain","Webscale Warrior","Uptime Avenger","Cloud Conqueror","Data Defender","Automation Adjucator");
            $myTitle = $titles[mt_rand(0, count($titles) - 1)];
        ?>
        <title>Antonio Abella - <?php echo $myTitle; ?></title>
    </head>
    <body>
        <?php 
            $activePage = basename($_SERVER['PHP_SELF'], ".php");
        ?>
        <div class="sidebar">
            <div class="faceimg"></div>
            <h1>Antonio Abella</h1>
            <div class="sep"></div>
            <h2>DevOps | Site Reliability</h2>
            <h3>Miami, FL</h3>
            <div class="reachme">
                <div class="sidelinks">
                    <a href="https://www.linkedin.com/in/antonio-abella-932908113" target="_blank">
                        <span class="icon-linkedin"></span>
                    </a>
                    <a href="https://github.com/a-abella" target="_blank">
                        <span class="icon-github-circled"></span>
                    </a>
                    <a href="mailto:me@antonioabella.com">
                        <span class="icon-mail-alt"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="right-content">
            <div class="menubar">
                <ul>
                    <a href="/" class="menulink">
                        <li class="menulist <?= ($activePage == 'index') ? 'currentitem':''; ?>">
                            PROJECTS
                        </li>
                    </a>
                    <a href="/resume.php" class="menulink">
                        <li class="menulist  <?= ($activePage == 'resume') ? 'currentitem':''; ?>">
                            R&Eacute;SUM&Eacute;
                        </li>
                    </a>
                </ul>
            </div>
            <div class="bodycontent">
                
