<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger

 http://localhost:8000/index.php?page=home&foo=bar

*/

function getContent(){
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	}// else {
		// le reste du code
		elseif( $_GET['page'] == 'contact'){
			include __DIR__.'/../pages/contact.php';
		}
		elseif( $_GET['page'] == 'bio'){
			include __DIR__.'/../pages/bio.php';
		}		
}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}
