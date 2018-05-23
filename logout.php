<?php
require_once("./autoload.php");
SessionManager::start();
BLL\UserBLL::logOut();
header("HTTP/1.1 302 Redirect");
header("Location: index.php");
