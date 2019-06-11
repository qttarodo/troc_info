<?php

if ($_SESSION){
    header('location: view/index.php');

}
else{
    header('location: view/landingPage.php');

}