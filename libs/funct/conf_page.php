<?php error_reporting(0);
    include "config.php";
    //setting page maodul
    $modul = isset($_GET['pg']) ? $_GET['pg'] : null;
    if ($_GET['pg'] =="") {
        include ("pages/web/home.php");
    }
     elseif ($_GET['pg']=="home") {
        include ("pages/web/home.php");
    }
    elseif ($_GET['pg']=="contact") {
        include ("pages/web/contact.php");
    }
    elseif ($_GET['pg']=="about") {
        include ("pages/web/about.php");
    }
    elseif ($_GET['pg']=="consultasi") {
        include ("pages/web/consultasi.php");
    }
    elseif ($_GET['pg']=="gallery") {
        include ("pages/web/gallery.php");
    }
    elseif ($_GET['pg']=="achivements") {
        include ("pages/web/achivements.php");
    }
    elseif ($_GET['pg']=="career") {
        include ("pages/web/career.php");
    }
    elseif ($_GET['pg']=="careerdetail") {
        include ("pages/web/careerdetail.php");
    }
    elseif ($_GET['pg']=="news") {
        include ("pages/web/news.php");
    }
    elseif ($_GET['pg']=="event") {
        include ("pages/web/event.php");
    }
    elseif ($_GET['pg']=="eventdetail") {
        include ("pages/web/eventdetail.php");
    }
    elseif ($_GET['pg']=="newsdetail") {
        include ("pages/web/newsdetail.php");
    }
   