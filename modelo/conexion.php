<?php
function  getPokemones($lista){

    $api = curl_init("https://pokeapi.co/api/v2/pokemon?$lista");
    curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($api);
    curl_close($api);
    $result = json_decode($response);

    return $result;
}

function  getPokemon($pokemon){

    $api = curl_init("https://pokeapi.co/api/v2/pokemon/$pokemon");
    curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($api);
    curl_close($api);
    $result = json_decode($response);

    return $result;
}
?>