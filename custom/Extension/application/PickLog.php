<?php
/**
 * Classe che contiene le funzioni comuni necessarie allo scaricamento delle voci di fattura da eSolver
 * dei cedolini da Dom2 e la loro sincronizzazione con il sistema dei punti sul sito.
 * Ogni funzione è esplicitamente commentata in linea ed ha un'intestazione con la descrizione generale.
 */


    function sendLog($params) {

        $curlSES=curl_init();

        curl_setopt($curlSES,CURLOPT_URL,"http://logs.pickcenter.com/API/create_log.php");
        curl_setopt($curlSES,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curlSES,CURLOPT_HEADER, false);
        curl_setopt($curlSES, CURLOPT_POST, true);
        curl_setopt($curlSES, CURLOPT_POSTFIELDS,$params);
        curl_setopt($curlSES, CURLOPT_CONNECTTIMEOUT,10);
        curl_setopt($curlSES, CURLOPT_TIMEOUT,30);
        $return = curl_exec($curlSES);
        curl_close($curlSES);

        return $return;
    }


