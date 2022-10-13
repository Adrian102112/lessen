<?php
$brief="
Beste <b>abbonee<br>
U heeft het laatste nummer van ons magazine ontvangen.<br>
Omdat we u heel graag als abonnee willen behouden, bieden we u een aantrekkelijke en exclusieve korting:<br>
U betaalt <b>bedrag-met-korting</b> in plaats van 65 euro.<br><br>
<i>Profiteer nu van deze aanbieding!</i><br><br>
Met vriendelijke groet <br>
Sam Simon<br>
Hoofdredacteur<br>";
$woorden = array("abbonee");
$brief = str_replace($woorden, "Jan Davids", $brief);
$woorden2 = array("bedrag-met-korting");
$brief = str_replace($woorden2, "50", $brief);
echo "$brief";
?>