<?php
$conn = oci_connect('magua', 'magua', '10.17.10.66/aguas');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Carreras
$stid = oci_parse($conn, 'SELECT ID_CARRERA,DESCRIP,ID_SEDE FROM JOS_MUNDOS_CARRERAS ORDER BY DESCRIP ASC');
if (!$stid) {
    $e = oci_error($conn);
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($stid);
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
header('Content-Type: text/xml');

print "<ResultElement>\n";

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    print "<listaElementos>\n";
    print "<codigo>".$row['ID_CARRERA']."</codigo>\n";
    print "<descripcion>".$row['DESCRIP']."</descripcion>\n";
    print "</listaElementos>\n";
}
print "</ResultElement>\n";

oci_free_statement($stid);
oci_close($conn);

?>
