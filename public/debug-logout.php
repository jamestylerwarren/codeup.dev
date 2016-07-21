<?php
session_start();
require_once 'debug-functions.php';

function pageController() {
    clearSession();
    redirect("debug-login.php");
}
pageController();