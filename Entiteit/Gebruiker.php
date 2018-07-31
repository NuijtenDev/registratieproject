<?php
namespace Entiteit;

class Gebruiker
{
	private $naam;
	private $locatie;
	private $datum;
	private $tijd;
	private $opmerking;
	private $urenGewerkt;

	public function __construct
	(
			string $naam, 
			string $locatie, 
			string $datum, 
			string $tijd,
			string $opmerking,
			string $urenGewerkt
		)
	{

		$this->naam 		= $naam;
		$this->locatie 		= $locatie;
		$this->datum 		= $datum;
		$this->tijd 		= $tijd;
		$this->opmerking	= $opmerking;
		$this->urenGewerkt 	= $urenGewerkt;
	}

	public function getNaam()
	{
		return $this->naam;
	}	

	public function getLocatie()
	{
		return $this->locatie;
	}
	
	public function getDatum()
	{
		return $this->datum;
	}

	public function getTijd()
	{
		return $this->tijd;
	}

	public function getOpmerking()
	{
		return $this->opmerking;
	}

	public function getUrenGewerkt()
	{
		return $this->urenGewerkt;
	}
}
