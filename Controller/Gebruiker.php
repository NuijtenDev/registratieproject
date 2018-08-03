<?php
namespace Controller;

class Gebruiker
{
	private $naam;
	private $locatie;
	private $datum;
	private $tijd;
	private $opmerking;
	private $urenGewerkt;

	public function __construct(
		$naam, 
		$locatie, 
		$datum, 
		$tijd, 
		$opmerking, 
		$uren
		)
	{
		$this->naam = $naam;
		$this->locatie = $locatie;
		$this->datum = $datum;
		$this->tijd = $tijd;
		$this->opmerking = $opmerking;
		$this->urenGewerkt = $urenGewerkt;

	}

	public static function maakGebruiker($postDataVanIndex)
	{
		$naam 			= $postDataVanIndex['name'];
		$locatie 		= $postDataVanIndex['locatie'];
		$datum      	= $postDataVanIndex['datum'];
		$tijd 			= $postDataVanIndex['tijd'];
		$opmerking		= $postDataVanIndex['opmerking'];
		$urenGewerkt	= $postDataVanIndex['uren'];

		return new self($naam, $locatie, $datum, $tijd, $opmerking, $uren);
	}

	public function voegGebruikerToeAanDeSpreadsheet($gebruiker)
	{
		$zapierVerbinding = new \Client\Verbinding();
		$zapierVerbinding->voegGebruikerToeAanSpreadsheetLijst($gebruiker);	

		return "gebruiker: ".$gebruiker->getNaam()." is toegevoegd";
	}
}
