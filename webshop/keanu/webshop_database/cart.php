<?php 
	session_start();

		if( ! isset($_SESSION["shoppingcart"]) ) {
			$_SESSION["shoppingcart"] = [];
		}

		function addCart($isbn) {
			$_SESSION["shoppingcart"][]= $isbn;
		}

		function cart() {
			return $_SESSION["shoppingcart"];
		}

		function total() {
			$totaal = 0;
			foreach( cart() as $albumId) {
				$totaal += searchAlbum($albumId)["price"];
			}
			return $totaal;
		}					