<?php

	// Mendefinisikan Konstanta Phi
	define("PHI", 3.14);

	// Variabel permukaan tabung
	$angka = 2;
	$jarijaritabung = 7;
	$tinggitabung = 18;

	// Menghitung luas permukaan tabung
	$luasPermukaanTabung = $angka * PHI * $jarijaritabung  * ($jarijaritabung + $tinggitabung);

	// Menampilkan luas permukaan tabung
	echo "Luas Permukaan Tabung: " . $luasPermukaanTabung . "cm2";

?> 