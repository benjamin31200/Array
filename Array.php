<?php

$IndianaMovies = [
    'Indiana Jones et le temple maudit' => 1984,
    'Les_aventuriers_de_larche_perdue' => 1981,
    'Indiana Jones et la dernière croisade' => 1989,
];

asort($IndianaMovies);
foreach($IndianaMovies as $movie => $date){ 
    echo $date;
    echo $movie;

}
?>