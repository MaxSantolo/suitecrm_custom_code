<?php
/**
 * Created by PhpStorm.
 * User: msantolo
 * Date: 19/10/2018
 * Time: 16:45
 */
$servername = "10.8.0.10";
$username = "pick";
$password = "Pick.2017";
$db = "asteriskcdrdb";
$db2 = "asterisk";
$conn = new mysqli($servername, $username, $password, $db); //asteriskcdrdb
$conn2 = new mysqli($servername, $username, $password, $db2); //asterisk
$servername_prod = '192.168.1.10';
$username_prod = 'root';
$password_prod = 'fm105pick';
$db_prod1 = 'booking';
$db_prod2 = 'intranet';
$db_prod3 = 'radius';
$db_prod4 = 'crm';
$db_prod5 = 'crm_punti';
$conn_prod_booking = new mysqli($servername_prod,$username_prod,$password_prod,$db_prod1); //produzione.booking
$conn_prod_intranet = new mysqli($servername_prod,$username_prod,$password_prod,$db_prod2); //produzione.intranet
$conn_prod_radius = new mysqli($servername_prod,$username_prod,$password_prod,$db_prod3); //produzione.radius
$conn_prod_crm = new mysqli($servername_prod,$username_prod,$password_prod,$db_prod4); //produzione.crm
$conn_prod_punti = new mysqli($servername_prod,$username_prod,$password_prod,$db_prod5); //produzione.crm_punti