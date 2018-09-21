<?php

$valeur = $_GET['table'];

for($i=0; $i < 11; $i++)
{
    echo $valeur." x ".$i."=\t".$valeur * $i ."<br/>";
}