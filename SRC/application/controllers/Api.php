<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	//Ritorna una lista di prodotti random
	public function getProductsList($token) {
		//convalido il token dell'utente

		//Parametri: [categoria, nuovi arrivi, prezzo noleggio, prezzo vendita]

		//TokenValido
			//eseguo la query (basata sui parametri passati) per prelevare i prodotti

		//TokenInvalido
			//salvo stringa errore 

		//ritorno il JSON dell'errore oppure dei prodotti
	}

	//Mostra le informazioni di un singolo prodotto
	public function getProductInfo($token) {
		//convalido il token dell'utente

		//Parametri: [prodotto]

		//TokenValido
			//eseguo la query (basata sui parametri passati) per prelevare le informazioni del prodotto

		//TokenInvalido
			//salvo stringa errore 

		//ritorno il JSON dell'errore oppure del prodotto
	}

	//Controlla la disponibilità di un prodotto
	public function productAvailability($token) {
		//convalido il token dell'utente
		
		//Parametri: [prodotto]

		//TokenValido
			//eseguo la query (basata sui parametri passati) per verificare la disponibilità

		//TokenInvalido
			//salvo stringa errore 

		//ritorno il JSON dell'errore oppure un booleano
	}
	
	public function searchProduct($token) {
		//convalido il token dell'utente

		//Parametri: [keyword, categoria, prezzo noleggio, prezzo vendita]

		//TokenValido
			//eseguo la query (basata sui parametri passati) per prelevare i prodotti

		//TokenInvalido
			//salvo stringa errore 

		//ritorno il JSON dell'errore oppure dei prodotti
	}
}