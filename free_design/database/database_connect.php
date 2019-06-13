<?php

try {
    $db = new PDO('mysql:host=devbdd.iutmetz.univ-lorraine.fr;dbname=franco337u_web_project', 'franco337u_appli', '31804052');
} catch (PDOException $e) {
    print "Error : " . $e->getMessage() . "<br />";
    die();
}