<?php
// store shared information in this file, such as headers, menu, and footers

//HTML Header
$HTMLHeader = 
"<!DOCTYPE html>
<html>
<head>
	<title>Maverick Advantage</title>
	<link rel='stylesheet' href='css/style.css' type='text/css'>
</head>
<body>
";

// Nav
$nav = "
<div class='container'>
    <div class='row'>
        <div class='col-lg-12'>
            <nav class='navigation'>
                    <h2>Maverick Advantage</h2>
                        <div class='navcol' id='nav'>
                            <ul class='navbar-nav'>
                                <li>
                                    <a href='index.php'>Home</a>
                                </li>
                                <li>
                                    <a href='what.php'>Resources</a>
                                </li>
                                <li>
                                    <a href='testimonials.php'>Testimonials</a>
                                </li>
                                <li>
                                    <a href='question.php'>FAQ</a>
                                </li>
                                <li>
                                    <a class='nav-link nav-link-callout' href='https://utaedu.questionpro.com/a/TakeSurvey?tt=BYILeA3qN6UECHrPeIW9eQ%3D%3D'>Apply
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
            </nav>
        </div>
    </div>
</div>";
//Page Footer
$footer = "
<footer>
    <div class='container footer'>
            <div class='row'>
                <div class='col-sm-12 col-md-3 col-lg-3'>
                    <div class='container'>
                        <a href='index.php'><img class='logo' src='images/logo.png' alt='Logo'/></a>
                    </div>
                </div>
                <div class='col-sm-4 col-md-3 col-lg-3'>
                    <ul class='unstyled footer-nav'>
                        <li><a href='index.php'>Home</a></li>
                        <li><a href='what.php'>Activities and Events</a></li>
                        <li><a href='resources.php'>Resources</a></li>
                        <li><a href='question.php'>FAQ</a></li>
                    </ul>
                </div>
                <div class='col-sm-4 col-md-3 col-lg-3'>
                    <ul class='unstyled'>
                        <h3>Contact Us</h3>
                        <li><b>Phone:</b> 817-272-6080</li>
                        <li><b>Location:</b> 300 West 1st Street, Suite 180H</li>
                        <li><b>Email:</b> jacob.croasdale@uta.edu</li>
                    </ul>
                </div>
                <div class='col-sm-4 col-md-3 col-lg-3'>
                    <ul class='unstyled'>
                        <h3>Social Media</h3>
                        <a href='#'><img class='sns' src='images/x-twitter.svg' alt='Twitter'/></a>
                        <a href='#'><img class='sns' src='images/instagram.svg' alt='Instagram'/></a>
                        <a href='#'><img class='sns' src='images/facebook.svg' alt='Facebook'/></a>
                    </ul>
                </div>
            </div>
        </div>
        <div class='container footer' style='text-align:center;'>
            <div class='row'>
                <div class='col-sm-12 col-md-12 col-lg-12'>
                    <p>For CTEC 4321 Final Project Purpose Only.<p>
                </div>
            </div>
        </div>
</footer>
";
?>