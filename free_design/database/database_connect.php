<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=web_project', 'root', '');
} catch (PDOException $e) {
    print "Erreur :" . $e->getMessage() . "<br />";
    die();
}