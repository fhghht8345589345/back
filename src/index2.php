<?php 
$HP=[1,2,3,4,5];
//print_r($HP);

$GR=["Mowcow","Doneck","Kazan","Kaluga"];
//print_r($GR);

/*array_push($HP,9,5,8,90,10,67);
print_r($HP);

array_push($GR,"volsgeski");
print_r($GR);*/

array_unshift($HP,89,100,78);
//print_r($HP);

array_unshift($GR,"volgograd","Razan","Domodedovo");
//print_r($GR);

array_pop($HP);
//print_r($HP);

array_pop($GR);
//print_r($GR);

//print_r($HP);
unset($HP[1]);
//print_r($HP);

//print_r($GR);
unset($GR[0]);
//print_r($GR);

print_r($GR);
$GR[4]= "Pokrovsck";
print_r($GR);

$GR[5]= "Astana";
print_r($GR);

foreach($GR as $row){
echo $row . PHP_EOL;
}
?>