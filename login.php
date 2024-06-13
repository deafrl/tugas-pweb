<?php
    $NIM           = $_POST[ 'NIM'];
    $Password      = $_POST[ 'Password'];

    $N = 'A12.2022.06938'; //NIM
    $P = '12345';//Password

    if($NIM == $N AND $Password == $P)
    {
        session_start();
        $_SESSION['nama'] = $NIM;
        $_SESSION['is_logged_id'] = TRUE;

        header("Location: halaman1.php");
    
    }
    else
    {
        echo "NIM atau Password salah";
    }