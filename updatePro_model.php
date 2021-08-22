<?php
    require_once ('database/database.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        updatePro($_POST);
    }