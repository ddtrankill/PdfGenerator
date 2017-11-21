<?php
require __DIR__ . '/vendor/autoload.php';

use App\FormHandler;

/* if method get, it redirects to form page, else it will process form */
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location:form.html');
    exit;
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    new FormHandler($_REQUEST);
}