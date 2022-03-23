<nav class="nav">

        <a class="nav-link" href="./index.php?Lundi">Lundi</a>
        <a class="nav-link" href="./index.php?Mardi">Mardi</a>
        <a class="nav-link" href="./index.php?Mercredi">Mercredi</a>
        <a class="nav-link" href="./index.php?Jeudi">Jeudi</a>
        <a class="nav-link" href="./index.php?Vendredi">Vendredi</a>
        <a class="nav-link" href="./index.php?Samedi">Samedi</a>
        <a class="nav-link" href="./index.php?Dimanche">Dimanche</a>
        

<div id="Nord">Nord</div>
<div id="Sud">Sud</div>
<div id="Est">Est</div>
<div id="Ouest">Ouest</div>

<?php
// ----code php pour déclarer les variables du lundi au dimanche---------
$Lundi=array(
        "Nord"=>array("10°", "12°", "10°", "15°"),
        "Sud"=> array("20°", "20°", "22°", "20°", "25°"),
        "Ouest"=> array("12°", "13°", "14°", "15°"),
        "Est"=> array("11°", "14°", "14°", "14°"));
// ----------------------------------------
$Mardi=array(
     "Nord"=>array ("20°","23°","22°","22°"),
     "Sud"=>array ("11°","11°","14°","13°"),
     "Ouest"=>array ("14°","13°","14°","14°"),
     "Est"=>array ("12°","13°","10°","15°"));
// ----------------------------------------
$Mercredi=array(
     "Nord"=>array ("11°","15°","14°","16°"),
     "Sud"=>array ("18°","18°","19°","20°"),
     "Ouest"=>array ("14°","16°","16°","15°"),
     "Est"=>array ("17°","16°","16°","18°"));
// ----------------------------------------
$Jeudi=array(
     "Nord"=>array ("18°","17°","17°","18°"),
     "Sud"=>array ("21°","22°","22°","23°"),
     "Ouest"=>array ("17°","19°","20°","18°"),
     "Est"=>array ("16°","16°","16°","15°"));
// ----------------------------------------
$Vendredi=array(
     "Nord"=>array ("14°","14°","14°","15°"),
     "Sud"=>array ("19°","18°","18°","19°"),
     "Ouest"=>array ("14°","13°","14°","10°"),
     "Est"=>array ("10°","12°","10°","15°"));
// ----------------------------------------
$Samedi=array(
     "Nord"=>array ("14°","12°","14°","14°"),
     "Sud"=>array ("18°","17°","17°","17°"),
     "Ouest"=>array ("13°","11°","13°","13°"),
    "Est"=>array ("10°","12°","10°","15°"));
// ----------------------------------------
$Dimanche=array(
    "Nord"=>array ("12°","12°","12°","12°"),
    "Sud"=>array ("18°","18°","17°","17°"),
    "Ouest"=>array ("14°","14°","14°","15°"),
    "Est"=>array ("10°","14°","10°","14°"));
// ----------------------------------------
if(isset($_GET["Lundi"]))   {
    foreach($Lundi as $key=>$value) {
        echo "<div id=\"$key\"> $key";
    foreach ($value as $value1){
        echo "<div> $value1 </div>";
                                }
        echo "</div>";
                                    }
                            }
// ----------------------------------------
if(isset($_GET["Mardi"]))   {
    foreach($Lundi as $key=>$value) {
        echo "<div id=\"$key\"> $key";
    foreach ($value as $value1){
        echo "<div> $value1 </div>";
                                    }
        echo "</div>";
                                    }
                            }
// ----------------------------------------
if(isset($_GET["Mercredi"])){
    foreach($Lundi as $key=>$value) {
        echo "<div id=\"$key\"> $key";
    foreach ($value as $value1)     {
        echo "<div> $value1 </div>";
                                    }
        echo "</div>";
                                    }
                            }
// ----------------------------------------
if(isset($_GET["Jeudi"]))   {
    foreach($Lundi as $key=>$value) {
        echo "<div id=\"$key\"> $key";
    foreach ($value as $value1)     {
        echo "<div> $value1 </div>";
                                    }
        echo "</div>";
                                    }
                            }
// ----------------------------------------
if(isset($_GET["Vendredi"])){
    foreach($Lundi as $key=>$value) {
        echo "<div id=\"$key\"> $key";
    foreach ($value as $value1){
        echo "<div> $value1 </div>";
                               }
        echo "</div>";
                                    }
                            }
// ----------------------------------------
if(isset($_GET["Samedi"]))  {
    foreach($Lundi as $key=>$value) {
        echo "<div id=\"$key\"> $key";
    foreach ($value as $value1) {
        echo "<div> $value1 </div>";
                                }
        echo "</div>";
                                    }
                            }
// ----------------------------------------
if(isset($_GET["Dimanche"])){
    foreach($Lundi as $key=>$value) {
        echo "<div id=\"$key\"> $key";
    foreach ($value as $value1) {
        echo "<div> $value1 </div>";
                                }
        echo "</div>";
                                    }
                            }

?>
