<?php


if (isset($toppings) && $toppings=="meatbased") echo "checked";
if (isset($toppings) && $toppings=="vegetablebased") echo "checked";
if (isset($toppings) && $toppings=="notoppings") echo "checked";

$largepizza= $_POST["LargePizza"];
$smallpizza= $_POST["SmallPizza"];
$mediumpizza=$_POST["MediumPizza"];
$topping= $_POST["toppings"];
$donate= $_POST["Donate"];


function calculate ($a,$b,$z,$c,$d){
$sum=$a*1000+$b*500+$z*800+$c+$d;
return $sum;
}
if (isset($_POST['Donate'])){
$donate=$donate+200;
echo "Thank you for donating";

}elseif (!isset($_POST['Donate'])) {
$donate=$donate+0;
}

echo "Your total is:" .calculate($largepizza,$smallpizza,$mediumpizza,$topping,$donate)
?>

