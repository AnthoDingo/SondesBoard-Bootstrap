<?php

    define("DB_SERVER", "172.16.49.2");
    define("DB_BASE", "sondes");
    define("DB_USER", "root");
    define("DB_PASSWORD", "toor");

    $options = array(
        PDO::ATTR_PERSISTENT => true
    );

    try {
        $dbh = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_BASE, DB_USER, DB_PASSWORD, $options);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }