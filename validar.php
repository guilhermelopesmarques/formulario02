<?php
$altura = $_POST["altura"];
$idade = $_POST["idade"];


if ($altura && $idade == " "){
   echo "digite os numeros";
}
else{
    echo "sua altura é $altura e sua idade é $idade";
}
?>