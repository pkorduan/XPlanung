<?php
class Inspire {

  function Inspire() {
    global $conn;
    $this->conn = $conn;
  }
  
  /*
  * Diese Funktion fragt INSPIRE-Daten aus der Datenbank ab und gibt diese als Array zurueck
  */
  function get($params) {
    # Erzeugt ein json file mit planzeichen
    $xplan_featuretype = $params['xplan_featuretype'];
    $hsrcl = $params['hsrcl'];
    $sql  = "
      SELECT DISTINCT
        xplan_featuretype,
        hsrcl
      FROM
        inspire.featuretypetoinspire
      ORDER BY
        xplan_featuretype
    ";
    #echo $sql;
    $result = pg_query($this->conn, $sql);
    $data = pg_fetch_all($result);
    if ($data == false) $data = array();
    return $data;
  } # end of get
}
?>