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

	public function __construct($postDataVanIndex)
	{
		$this->naam 		= $postDataVanIndex['name'];
		$this->locatie 		= $postDataVanIndex['locatie'];
		$this->datum        = $postDataVanIndex['datum'];
		$this->tijd 		= $postDataVanIndex['tijd'];
		$this->opmerking	= $postDataVanIndex['opmerking'];
		$this->urenGewerkt  = $postDataVanIndex['uren'];
	}

	public function maakGebruiker()
	{
		$gebruiker = new \Entiteit\Gebruiker(

		$this->naam,
		$this->locatie,
		$this->datum,
		$this->tijd,
		$this->opmerking,
		$this->urenGewerkt

		);

		return $gebruiker;
	}

	public function voegGebruikerToeAanDeSpreadsheet($gebruiker)
	{
		$zapierVerbinding = new \Client\Verbinding();
		$zapierVerbinding->voegGebruikerToeAanSpreadsheetLijst($gebruiker);	

		return "gebruiker: ".$gebruiker->getNaam()." is toegevoegd";
	}
}
