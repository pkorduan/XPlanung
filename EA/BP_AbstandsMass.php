<?php
require_once ('Angle.php');
require_once ('Length.php');
require_once ('void.php');
require_once ('BP_Geometrieobjekt.php');

namespace Bebauungsplan\BP_Sonstiges;



use ;
use ;
use Implementation\Names;
use Bebauungsplan\BP__Basisobjekte;
/**
 * Darstellung von Ma�pfeilen oder Ma�kreisen in BPl�nen um eine eindeutige
 * Vermassung einzelner Festsetzungen zu erreichen.
 * @author Kraetschmer
 * @created 29-Jul-2015 12:04:54
 */
class BP_AbstandsMass extends BP_Geometrieobjekt
{

	/**
	 * Endwinkel f�r Darstellung eines Abstandsma�e (nur relevant f�r Ma�kreise).
	 */
	private $endWinkel;
	/**
	 * Startwinkel f�r Darstellung eines Abstandsma�es (nur relevant f�r Ma�keise)
	 */
	private $startWinkel;
	/**
	 * L�ngenangabe des Abstandsmasses.
	 */
	private $wert;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getendWinkel()
	{
		return endWinkel;
	}

	public function getstartWinkel()
	{
		return startWinkel;
	}

	public function getwert()
	{
		return wert;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setendWinkel(Angle $newVal)
	{
		endWinkel = newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setstartWinkel(Angle $newVal)
	{
		startWinkel = newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setwert(Length $newVal)
	{
		wert = newVal;
	}

}
?>