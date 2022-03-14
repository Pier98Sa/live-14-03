<?php

function getSommaNumeriCasuali($min, $max){

    $primoNumeroCasuale = rand($min, $max);
    $secondoNumeroCasuale = rand($min, $max);

    if($primoNumeroCasuale > $secondoNumeroCasuale){
        return 'il primo numero è più grande';
    }else if ($primoNumeroCasuale == $secondoNumeroCasuale){
        return ' i due numeri sono uguali';
    }else{
        return ' il secondo numero è più grande';
    }

}