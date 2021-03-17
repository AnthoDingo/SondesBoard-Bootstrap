<?php

if(isset($_GET['page'])){
    switch ($_GET['page']){
        case '404':
            include 'pages/404.html';
            break;
        case 'sonde':
            if(!isset($_GET['id'])){
                header('Location: /?page=404');
            }
            include 'pages/chart.php';
            break;
        default:
            header('Location: /?page=404');
    }
} else {
    include 'pages/home.php';
}