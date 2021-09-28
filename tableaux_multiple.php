<?php
$MoviesIndianaJones = [
    'Les_aventuriers_de_larche_perdue' => ['Harrison_Ford','Karen_Hallen','Paul_Freeman'],
    'Indiana Jones et le temple maudit' => ['Harrison_Ford','Kate_Capshaw','Amrish_Puri'],
    'Indiana Jones et la dernière croisade' => ['Harrison_Ford','Sean_Connery','Denholm_Elliott']
];



foreach($MoviesIndianaJones as $movie_title => $actors) {
print_r ("Dans le film ".$movie_title."");

foreach ($actors as $actors) {
print_r("Les principaux acteurs sont : ".$actors."");
}
}


             
?>