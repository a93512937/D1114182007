<?php
    $account = $_POST['account'];
    $password = $_POST['pass'];
    $check_code = $_POST['code'];

    echo '帳號:'. $account .', 密碼:'. $password .', 驗證碼:'. $check_code;
    
?>