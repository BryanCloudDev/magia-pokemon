<?php

require './modelo/conexion.php';

$resultados = (getPokemones('limit=100&offset=200')->results);

$nombrePokemones = [];

for($i = 0; $i < count($resultados);$i++){
    $nombrePokemones[] = $resultados[$i]->name;
}

$clavesAleatorias = array_rand($nombrePokemones,1);

$pokemon = $nombrePokemones[$clavesAleatorias];

$pokemon = getPokemon($pokemon);

function getImg($name){
    return $name->sprites->other->home->front_default;
}

function getName($name){
    return ucfirst($name->forms[0]->name);
}

function getNature($name){
    $nature = $name->types;
    for($i = 0;$i < count($nature);$i++){
        if(count($nature) == 0 || $i == (count($nature) - 1)){
            echo ucfirst($nature[$i]->type->name);
        }
        else{
            echo ucfirst($nature[$i]->type->name) . ", " ;
        }
    }
}

function clasNature($name){
    return $name->types[0]->type->name;
}

function getWeight($name){
    return $name->weight / 10;
}

function getHeight($name){
    //altura en metros
    return $name->height / 10;
}

function getAbilities($name){
    $abilities = $name->abilities;
    for($i = 0;$i < count($abilities);$i++){
        if(count($name->abilities) == 0 || $i == (count($abilities) - 1)){
            echo ucfirst($abilities[$i]->ability->name);
        }
        else{
            echo ucfirst($abilities[$i]->ability->name) . ", " ;
        }
    }
}

function getStats($name){
    $hp = $name->stats[0]->base_stat;
    $attack = $name->stats[1]->base_stat;
    $defense = $name->stats[2]->base_stat;
    $specialAttack = $name->stats[3]->base_stat;
    $specialDefense = $name->stats[4]->base_stat;
    $speed = $name->stats[5]->base_stat;
    return [
        'HP' => $hp,
        'Attack' => $attack,
        'Defense' => $defense,
        'Special Attack' => $specialAttack,
        'Special Defense' => $specialDefense,
        'Speed' => $speed
    ];
}

function getId($name){
    $id = $name->id;
    $id = sprintf("%03d", $id);
    $id = "#".$id;
    return $id;
}
?>