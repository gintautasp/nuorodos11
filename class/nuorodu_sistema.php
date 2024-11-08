<?php

	class NuoroduSistema extends Controller {
	
		public 																				// nuorodų sąrašas
																										// požymiai
			$ar_atsiusta_nauja_nuoroda =false
			
			, $pasirinkta_zyma = ''
			, $paieskos_fraze = ''			
			
			, $zymos
			, $nuorodos			
				;
	
		public function __construct() {
		
			$this -> zymos = new Zymos();			
		}
		
		public function tikrintiUzklausosDuomenis() {
		
			/*	
			echo 'tikrinam užklausa ..'; 
			print_r ( $_POST );
			*/		
			if ( isset ( $_POST [ 'veiksmas' ] ) && (  $_POST [ 'veiksmas' ] == 'Saugoti' ) ) {
			
				if ( intval ( $_POST [ 'id_nuorodos' ]  ) > 0 ) {
				
					$this -> ar_atsiusti_pakeisti_nuorodos_duomenys = true;
	
				} else {
				
					$this -> ar_atsiusta_nauja_nuoroda  = true;			
				}
			}		
			echo $this -> ar_atsiusta_nauja_nuoroda . '?';
		}
	
		public function arSaugomaNaujaNuoroda() {
		
			return $this -> ar_atsiusta_nauja_nuoroda ;
		}
		
		public function arKeiciamaEsamaNuoroda() {
		
			return false;
		}
	
		public function issaugotiNaujaNuoroda() {
		
			$nuoroda  = new Nuoroda ( $_POST [ 'pav' ], $_POST [ 'url' ], $_POST [ 'tipas' ], $_POST [ 'ar_viesa' ], $_POST [ 'zymos' ] );
			$nuoroda -> issaugotiNauja();
			
			$this -> zymos -> atnaujintiZymas( $_POST [ 'zymos' ] );		
		}	
		
		public function issaugotiPakeistaNuoroda() {
			
		}		
	
		public function gautiDuomenis() {

			$this -> nuorodos = new Nuorodos( $this -> pasirinkta_zyma, $this -> paieskos_fraze );		
		
			$this -> nuorodos -> gautiSarasaIsDuomenuBazes();
			$this -> zymos -> gautiSarasaIsDuomenuBazes();
		}
	}