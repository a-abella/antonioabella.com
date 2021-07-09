<!DOCTYPE html>
<html>
<head>
    <title>Antonio Abella - IT Professional and your new best candidate</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400|Montserrat:400,700'
          rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="styles/antonioabella.css"/>
    <link rel="icon" href="favicon.png" sizes="16x16 32x32" type="image/png">
</head>
<body>
<div class="wrapper">
    <div align="center" style="background: #27313e; color: #e6e6e6">
        <br/>

        <h1>Meet Antonio Abella</h1>
        <br/>
        <img src="/images/face.png" height="150"/>
        <br/>

        <h2>Tech-head, whizkid, and enthusiastic button pusher</h2>
        <br/>
        <br/>

        <div class="navcontainer">
            <a href="/" class="brownfont">
                <div class="navbutton">ABOUT ME</div>
            </a>

            <div class="divider"></div>
            <a href="projects" class="brownfont" id="navselected">
                <div class="navbutton">PROJECTS</div>
            </a>

            <div class="divider"></div>
            <a href="https://github.com/a-abella" class="brownfont">
                <div class="navbutton">GITHUB</div>
            </a>

            <div class="divider"></div>
            <a href="resume" class="brownfont" >
                <div class="navbutton">RESUME</div>
            </a>

            <div class="divider"></div>
            <a href="contact" class="brownfont">
                <div class="navbutton">CONTACT</div>
            </a>
        </div>
        <div class="line"></div>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>

    <div align="center">

        <div class="mainhead">
            <!--<h1 style="font-family: Montserrat; font-weight: 400">what I do for fun</h1>-->
            <h1 style="font-family: Montserrat; font-weight: 400">&gt;cat .bash_history</h1>
        </div>
        <div class="main">
            <br/>
            <?php
                $projects = preg_grep('/^([^.])/', scandir('proj', 1));
                foreach($projects as $p){
                    echo file_get_contents("proj/$p");
                    echo '<hr style="margin-bottom: 3.33rem;"></hr>';
                }

            ?>
            <br/>
            <br/>
            <br/>

        </div>
        <div style="background: #27313e; color: #242a31; width:100%; position:absolute; bottom:0; left:0; padding-top: 10px; padding-bottom: 10px; font-size: 10pt;">

            <a href="https://www.linkedin.com/in/antonio-abella-932908113" target="_blank" class="tanfont">LINKEDIN</a>

            <div class="bottomdivider"></div>
            <a href="https://github.com/a-abella" target="_blank" class="tanfont">GITHUB</a>

            <div class="bottomdivider"></div>
            <a href="resume" class="tanfont">RESUME</a>

            <div class="bottomdivider"></div>
            <a href="contact" class="tanfont">E-MAIL</a>
        </div>
    </div>
</div>
</body>
</html>
