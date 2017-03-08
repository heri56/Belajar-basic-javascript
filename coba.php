<?php
$stringdata="mangga,jambu,alpukat,melon,semangka,pisang";
$data=explode(',', $stringdata);
echo "<b>Buah Yang Dipilih</b> : " .$data[1] ." Dan " .$data[5];
?>