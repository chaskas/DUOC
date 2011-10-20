<?php
$conn = oci_connect('magua', 'magua', '10.17.10.66/aguas');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Carreras
$stid = oci_parse($conn, 'SELECT ID_SEDE FROM JOS_MUNDOS_CARRERAS WHERE ID_CARRERA='.$_GET['idCarrera']);
if (!$stid) {
    $e = oci_error($conn);
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($stid);
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);



$idSede =  $row['ID_SEDE'];

$stid2 = oci_parse($conn, "SELECT ID_SEDE,DESCRIP FROM JOS_MUNDOS_SEDES WHERE ID in (".$idSede.")" );
if (!$stid2) {
    $e2 = oci_error($conn);
    trigger_error(htmlentities($e2['message'], ENT_QUOTES), E_USER_ERROR);
}

$r2 = oci_execute($stid2);
if (!$r2) {
    $e2 = oci_error($stid2);
    trigger_error(htmlentities($e2['message'], ENT_QUOTES), E_USER_ERROR);
}

header('Content-Type: text/xml');

print "<ResultElement>\n";

while ($row = oci_fetch_array($stid2, OCI_ASSOC+OCI_RETURN_NULLS)) {
    print "<listaElementos>\n";
    print "<codigo>".$row['ID_SEDE']."</codigo>\n";
    print "<descripcion>".$row['DESCRIP']."</descripcion>\n";
    print "</listaElementos>\n";
}
print "</ResultElement>\n";

oci_free_statement($stid);
oci_free_statement($stid2);
oci_close($conn);

?>
