<?php
namespace Client;

class Verbinding
{
	private $adres;

	private function MaakVerbindingMetZapier($postdata)
	{
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"zapier webhook url");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
	}

	public function voegGebruikerToeAanSpreadsheetLijst(\Entiteit\Gebruiker $gebruiker)
	{
		$postData = [
			'naam' 		=> $gebruiker->getNaam(),
			'locatie'	=> $gebruiker->getLocatie(),
			'datum' 	=> $gebruiker->getDatum(),
			'tijd'		=> $gebruiker->getTijd(),
			'opmerking' => $gebruiker->getOpmerking(),
			'uren'		=> $gebruiker->getUrenGewerkt()
		];

		$this->MaakVerbindingMetZapier(json_encode($postData));
	}

}
