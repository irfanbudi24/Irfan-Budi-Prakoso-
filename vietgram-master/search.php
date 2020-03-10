<?php

	require_once 'koneksi.php';

	function query($query) {

    global $koneksi;
    $result = mysqli_query($conn, $query);
    $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] =  $row;
        }
    return $rows;
	}

	function cariCaption($cari){

		$query = "SELECT * FROM foto WHERE caption LIKE '%$cari' ";
		return query($query);
	}
?>
