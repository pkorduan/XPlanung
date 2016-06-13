<?php
require_once ('CharacterString.php');
require_once ('Boolean.php');
require_once ('void.php');
require_once ('BP_Ueberlagerungsobjekt.php');

namespace Bebauungsplan\BP_Erhaltungssatzung_und_Denkmalschutz;



use Primitive\Text;
use Primitive\Truth;
use Implementation\Names;
use Bebauungsplan\BP__Basisobjekte;
/**
 * Umgrenzung eines Denkmalgesch�tzten Ensembles, sofern es sich um eine
 * Festsetzung des Bebauungsplans handelt (�9 Abs. 4 BauGB - landesrechtliche
 * Regelung). Weltkulturerbe kann eigentlich nicht vorkommen.
 * @author Kraetschmer
 * @created 29-Jul-2015 12:04:57
 */
class BP_DenkmalschutzEnsembleFlaeche extends BP_Ueberlagerungsobjekt
{

	/**
	 * N�here Bezeichnung des Denkmals.
	 */
	private $denkmal;
	/**
	 * Angabe, ob das Denkmal zum UNESCO Welkulturerbe geh�rt. <b>Dies Attribut wird
	 * nicht ben�tigt, da Welterbest�tten prinzipiell nur nachrichtlich �bernommen
	 * werden und nicht festgesetzt werden k�nnen. In einer zuk�nftigen Version des
	 * Standards wird das Attribut deshalb wegfallen.</b>
	 */
	private $weltkulturerbe = false;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getdenkmal()
	{
		return denkmal;
	}

	public function getweltkulturerbe()
	{
		return weltkulturerbe;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setdenkmal(CharacterString $newVal)
	{
		denkmal = newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setweltkulturerbe(Boolean $newVal)
	{
		weltkulturerbe = newVal;
	}

}
?>