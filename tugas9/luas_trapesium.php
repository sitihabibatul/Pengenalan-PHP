<?php

	// Mendefinisikan Konstanta Phi
	define("PHI", 1/2);

	// Variabel trapesium
	$jumlahpanjangsisisejajar = (20+12);
	$tinggi = 6;

	// Menghitung luas trapesium
	$luasTrapesium = PHI * $jumlahpanjangsisisejajar * $tinggi;

	// Menampilkan luas trapesium
	echo "Luas Trapesium: " . $luasTrapesium . "cm2";

?> 