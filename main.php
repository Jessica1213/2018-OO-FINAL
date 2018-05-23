<?php
/**
 * Created by PhpStorm.
 * User: jessica
 */
?>
<?php
    require_once("autoload.php");
    SessionManager::start();
    require_once("checkLogin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("head.php"); ?>
    <?php
    $bll = new BLL\UserBLL();
    ?>
        <link rel="stylesheet" href = "./css/main.css" >
    <title>Shopping Website</title>
</head>
<body>
    <?php require_once("navbar.php"); ?>
    <div class="container">
        <div class="catalog" id="game">
            <a href="./blockly-games/"><img class="icon" src = "./resource/icon/icon_blockly.png"></a>
        </div>
        <div class="catalog" id="demo">
            <a href="./examplecodeindex.php"><img class="icon" src = "./resource/icon/icon_example.png"></a>
        </div>
        <div class="catalog" id="homework">
            <a href="./practiceindex.php"><img class="icon" src = "./resource/icon/icon_practice.png"></a>
        </div>
        <?php
        if($userlevel==="student"){ ?>
            <div class="catalog" id = "exam">
                <a href="./examindex.php"><img class="icon" src = "./resource/icon/icon_exam.png"></a>
            </div>
        <?php } ?>
    </div>
        <?php
        if($userlevel==="teacher" || $userlevel==="TA"){
            ?>
        <div class="container">
            <div class="catalog2" id = "studenthw">
                <a href="./studenthw.php"><img class="icon" src = "./resource/icon/icon_student.png"></a>
            </div>
            <div class="catalog2" id = "exam">
                <a href="./examindex.php"><img class="icon" src = "./resource/icon/icon_exam.png" style="width: 26em; height: 26em;"></a>
            </div>
        <div>
        <?php } ?>
    </div>
    <?php require_once("footer.php");?>
</body>
</html>