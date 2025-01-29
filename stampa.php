<?php

$file = file_get_contents("convenzione.html");

$terms = array(
    ["keyword" => "{{nome_azienda}}", "value" => "Rossotech Srl"],
    ["keyword" => "{{sede_legale}}", "value" => "Rossotech Srl"],
    ["keyword" => "{{codice_fiscale_partita_iva}}", "value" => "Rossotech Srl"],
    ["keyword" => "{{ceo_nome}}", "value" => "Rossotech Srl"],
    ["keyword" => "{{ceo_luogo_nascita}}", "value" => "Rossotech Srl"],
    ["keyword" => "{{ceo_data_nascita}}", "value" => "Rossotech Srl"],
);

foreach($terms as $term) {
    $file = str_replace($term["keyword"], $term["value"], $file);
}


echo $file;