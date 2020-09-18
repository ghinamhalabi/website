<?php
/**
 * @author: Symatic Solutions
 * @web: https://symaticsolutions.com
 * @email: info@symaticsolutions.com
 * @skype: symatic.solutions
 */
?>

<!DOCTYPE HTML>
<!--
Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo $title;?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.min.css" />
		<!-- Added by Ghina for favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	</head>

    <body class="<?php echo $bodyClass;?>">
        <div id="page-wrapper">
            <!-- Header -->
            <section id="header" class="wrapper">
                <!-- Logo -->
                <div id="logo">
                    <h1>
                        <a href="index.php">
                            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>Ghina M<font color="Crimson">.</font> Halabi
                        </a>
                    </h1>
                    <?php
                        if($isHomePage):
                    ?>
                            <p><font color="White">Space Scientist <font color="Crimson">&#9679;</font> Consultant <font color="Crimson">&#9679;</font> Storyteller <font color="Crimson">&#9679;</font> Public Speaker</font></p>
                    <?php
                        endif;
                    ?>
                </div>

                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li class="current">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="Bio.php" >Who I am</a>
                        </li>
                        <li>
                            <a href="#highlights">Portfolio</a>
                            <ul>
                                <li><a href="consultancy.php">Consultancy</a></li>
                                <li><a href="entrepreneurship.php">Entrepreneurship</a></li>
                                <li><a href="public-speaking.php">Public Speaking</a></li>
                                <li><a href="research.php">Space Research</a></li>
                                <li><a href="media.php">In the Media</a></li>
                                <!--  submenu removed by Ghina <li>
                                    <a href="#">TBD</a>
                                    <ul>
                                        <li><a href="#">Lorem dolor</a></li>
                                        <li><a href="#">Amet consequat</a></li>
                                        <li><a href="#">Magna phasellus</a></li>
                                        <li><a href="#">Etiam nisl</a></li>
                                        <li><a href="#">Sed feugiat</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </li>
                        <li><a href="entrepreneurship.php">She Speaks Science</a></li>
                        <!--	<li><a href="no-sidebar.html">No Sidebar</a></li> -->
                        <li><a href="#footer">Get in touch</a></li>
                        <!-- Removed by Ghina <li><a href="left-sidebar.html" >Left Sidebar</a></li> -->
                    </ul>
                </nav>
            </section>