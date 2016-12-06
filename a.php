<script src="jquery.js"></script>
<script>
$(function() {
//document.location='http://localhost/tpPhp/out/a.csv';
//document.location.href='out/a.txt';
});
</script>
<body>
<?php
//$timestamp_debut = microtime(true);
// Allowed memory size of 134217728 bytes exhausted : 1 million de lignes : 50000 ok pas 80000
file_put_contents('out/output.gz', gzencode(file_get_contents("out/a.txt")),9);
/*
$timestamp_fin = microtime(true);
$difference_ms = $timestamp_fin - $timestamp_debut;
echo 'Exécution du script : ' . $difference_ms . ' secondes.';
*/
?>
<script>
$(function() {
document.location='http://localhost/tpPhp/out/output.gz';
});
</script>
</body>