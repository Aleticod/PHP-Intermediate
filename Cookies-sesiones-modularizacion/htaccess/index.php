<?php 

$page = $_GET['page'] ?? null;
switch ($page) {
    case 'contact':
        require 'pages/contact.php';
        break;
    case 'service':
        require 'pages/service.php';
        break;
    default:
        require 'pages/home.php';
        break;
}