<?php 
$query_stewarding = "SELECT * FROM judging_locations";
if ($section == "list") $query_stewarding .= sprintf(" WHERE id='%s'", $row_brewer['brewerStewardLocation']);
if (($section == "brewer") || ($section == "admin")) $query_stewarding .= " ORDER BY judgingDate,judgingLocName";
$stewarding = mysql_query($query_stewarding, $brewing) or die(mysql_error());
$row_stewarding = mysql_fetch_assoc($stewarding);
$totalRows_stewarding = mysql_num_rows($stewarding);

$query_stewarding2 = "SELECT * FROM judging_locations";
if ($section == "list") $query_stewarding2 .= sprintf(" WHERE id='%s'", $row_brewer['brewerStewardLocation2']);
if (($section == "brewer") || ($section == "admin")) $query_stewarding2 .= " ORDER BY judgingDate,judgingLocName";
$stewarding2 = mysql_query($query_stewarding2, $brewing) or die(mysql_error());
$row_stewarding2 = mysql_fetch_assoc($stewarding2);
$totalRows_stewarding2 = mysql_num_rows($stewarding2);
?>