<?php /*error_reporting(0);*/
    include "../config.php";
    //setting page modul
    $modul = isset($_GET['pg']) ? $_GET['pg'] : null;

    if ($_GET['pg'] =="") {
        //default loads
        include ("pages/dashboard.php");
    }
    elseif ($_GET['pg']=="dashboard") {
        include ("pages/dashboard.php");
    }
    elseif ($_GET['pg']=="addnews") {
        //add news
        include ("pages/addnews.php");
    }
    elseif ($_GET['pg']=="editnews") {
        //edit news
        include ("pages/editnews.php");
    }
    elseif ($_GET['pg']=="news") {
        //view news
        include ("pages/news.php");
    }
    elseif ($_GET['pg']=="addcareer") {
        //add career
        include ("pages/addcareer.php");
    }
    elseif ($_GET['pg']=="editcareer") {
        //edit career
        include ("pages/editcareer.php");
    }
    elseif ($_GET['pg']=="career") {
        //view career
        include ("pages/career.php");
    }
    elseif ($_GET['pg']=="addslider") {
        //add slider
        include ("pages/addslider.php");
    }
    elseif ($_GET['pg']=="editslider") {
        //edit slider
        include ("pages/editslider.php");
    }
    elseif ($_GET['pg']=="slider") {
        //view slider
        include ("pages/slider.php");
    }
    elseif ($_GET['pg']=="addevent") {
        //add event
        include ("pages/addevent.php");
    }
    elseif ($_GET['pg']=="editevent") {
        //edit event
        include ("pages/editevent.php");
    }
    elseif ($_GET['pg']=="event") {
        //view event
        include ("pages/event.php");
    }
    elseif ($_GET['pg']=="adduser") {
        //add usermanager
        include ("pages/adduser.php");
    }
    elseif ($_GET['pg']=="edituser") {
        //edit usermanager
        include ("pages/edituser.php");
    }
    elseif ($_GET['pg']=="user") {
        //view usermanager
        include ("pages/user.php");
    }
    elseif ($_GET['pg']=="addgallery") {
        //add gallery
        include ("pages/addgallery.php");
    }
    elseif ($_GET['pg']=="editgallery") {
        //add gallery
        include ("pages/editgallery.php");
    }
    elseif ($_GET['pg']=="gallery") {
        //view gallery
        include ("pages/gallery.php");
    }
    elseif ($_GET['pg']=="answertesti") {
        //view testimoni
        include ("pages/answertesti.php");
    }
    elseif ($_GET['pg']=="mantestimoni") {
        //view testimoni
        include ("pages/mantestimoni.php");
    }
    elseif($_GET['pg']=="contactus"){
        //view contactus
        include ("pages/contactus.php");
    }
     elseif($_GET['pg']=="viewcontactus"){
        //view contactus
        include ("pages/viewcontactus.php");
    }
    elseif($_GET['pg']=="visimisi"){
        //view visi& misi
        include ("pages/visimisi.php");
    }
    elseif($_GET['pg']=="tujuan"){
        //view tujuan
        include ("pages/tujuan.php");
    }