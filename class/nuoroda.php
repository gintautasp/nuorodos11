<?php

	class Nuoroda extends ModelDbIrasas {
	
		public $id,	$pav, $url, $tipas, $ar_viesa, $zymos;	

		function __construct( $pav, $url, $tipas, $ar_viesa, $zymos, $id = 0 ) {
		
			parent::__construct();
			
			$this -> id =$this -> db -> ercl_db -> real_escape_string ( $id );
			$this -> pav = $this -> db -> ercl_db -> real_escape_string ( $pav );
			$this -> url = $this -> db -> ercl_db -> real_escape_string ( $url );
			$this -> tipas = $tipas;
			$this -> ar_viesa = intval ( $ar_viesa ); 
			$this -> zymos = $this -> db -> ercl_db -> real_escape_string ( $zymos );
			// print_r ( $this );
		}
		
		public function pakeistiDuomenis() {
		
			$qw_pakeisti_duomenis =
					"
				UPDATE `nuorodos`
				SET
					`url`='" . $this -> url . "'
					, `pav`='" . $this -> pav . "'
					, `tipas`='" . $this -> tipas . "'	
					, `ar_viesa`='" . $this -> ar_viesa . "'					
					, `zymos`='" . $this -> zymos . "'
				WHERE
					`id`=" . $this -> id . "
					";
																																	//	echo $qw_pakeisti_duomenis;
			$this -> db -> uzklausa ( $qw_pakeisti_duomenis );
		}		
	
		public function issaugotiNauja() {

			$qw_saugoti = 
					"
				INSERT INTO `nuorodos` ( `pav`, `url`, `tipas`, `ar_viesa`, `zymos`)
				VALUES ( '" . $this -> pav  . "',  '" . $this -> url  . "',  '" . $this -> tipas  . "',  '" . $this -> ar_viesa  . "',  '" . $this -> zymos  . "' )
					";				
																																	// echo $qw_saugoti; exit;
			$this -> db -> uzklausa ( $qw_saugoti );
		}	
		
		public function pasiimtiDuomenis() {

			$qw_gauti_nuoroda =
					"
				SELECT 
					*
				FROM
					`nuorodos`
				WHERE
					`id`= " . $this -> id . "
					";
			$rs_list = $this -> db -> uzklausa ( $qw_gauti_nuoroda );
			
			if ( $row = $rs_list -> fetch_assoc() ) {
			
				$this -> url = $row [ 'url' ];
				$this -> pav = $row [ 'pav' ];
				$this -> tipas = $row [ 'tipas' ];
				$this -> ar_viesa = $row [ 'ar_viesa' ];
				$this -> zymos = $row [ 'zymos' ];				
			}
		}		

		public function pasalinti() {
		
			$qw_pasalinti =
					"
				DELETE FROM `nuorodos`
				WHERE
					`id`=" . $this -> id . "
					";
																																	//	echo $qw_issaugoti_nauja;
			$this -> db -> uzklausa ( $qw_pasalinti );		
		}		
	}