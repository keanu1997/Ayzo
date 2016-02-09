<?php include "connection.php"; 

	$sql = "SELECT `id`, `image`, `name`, `desc`, `price`, `quantity` FROM cart WHERE `quantity` > '0'";
	$result = $conn->query($sql);

	function searchAlbum($id) {
		foreach($GLOBALS['result'] as $album) {
			if($album['id'] === $id) {
				return $album
			}
		}
		return NULL;
	}