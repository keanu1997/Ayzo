<?php

	include "albums.php"; /* file uit boeken.php wordt uitgelezen en als onderdeel van de huidige php file gezien*/
	include "cart.php";
 

	$theAlbum = searchAlbum($_POST["isbn"]);

	echo "U heeft <i>". $theAlbum["name"]."</i> besteld.";

?>
<h3>uw winkelwagen:</h3>
<table>
<?php

	voegBoekToeAanWiWa($theAlbum["id"]);

	foreach( cart() as $albumId) {
		
		$album = searchAlbum($albumId);
		echo "<tr><td>";
		echo '<img height="80" src="img/'.$album['afbeelding'].'">';
		echo "</td><td>";
		echo $album["titel"];
		echo "</td><td>";
		echo number_format($album['prijs']/100,2);
		echo "</td></tr>";
	}
	echo "<tr><td></td><td>totaal:</td><td>".number_format(totaalBedrag()/100,2)."</td></tr>";
?>
</table>
doei...