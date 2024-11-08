<?php
	/*
	patikrinti užklausos duomenis

	 ar saugoma nauja nuoroda
	
		išsaugoti naują nuorodą
		
	ar keičiama esama nuoroda
	
		išsaugoti pakeistą nuorodą
	
	pasiimti nuorodų sąrašą
	*/
	define ( 'DIR_BENDRAM', realpath ( __DIR__ . '/../bendram/' ) . '/' );
	
	include DIR_BENDRAM . 'duomenu_baze.class.php';

	$db = new DuomenuBaze ( 'nuorodos11' );	
	
	include DIR_BENDRAM . 'controller.class.php';
	include DIR_BENDRAM . 'model_db.class.php';
	include DIR_BENDRAM . 'model_db_irasas.class.php';
	include DIR_BENDRAM . 'model_db_sarasas.class.php';
	
	include 'class/zymos.php';
	include 'class/nuoroda.php';
	include 'class/nuorodos.php';	
	include 'class/nuorodu_sistema.php';
	
	$nuorodu_app = new NuoroduSistema();
	
	$nuorodu_app -> tikrintiUzklausosDuomenis();
	
	if ( $nuorodu_app -> arSaugomaNaujaNuoroda() ) {
	
		$nuorodu_app -> issaugotiNaujaNuoroda();
	}
	
	if ( $nuorodu_app -> arKeiciamaEsamaNuoroda() ) {
	
		$nuorodu_app -> issaugotiPakeistaNuoroda();
	}	
	
	$nuorodu_app -> gautiDuomenis();
	
	include 'main.html.php';