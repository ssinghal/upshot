<?php
//Read the csv file 
$dataArray = array();
$header = null;
$handle = fopen("companydata.csv",'r');
//generate the header and associative array
while ($val = fgetcsv($handle)) {
    if ($header === null) {
        $header = $val;
        continue;
    }
    $dataArray[] = array_combine($header, $val);
}

usort($dataArray, function($a, $b){
return $a['company 1']<$b['company 1'];
});

//Displaying the informaiton in table!
$rander ='<table cellspacing="1" cellpadding="4" border="3"><tbody><tr>';
foreach($dataArray[0] as $key=>$companyval){
$rander .='<th colspan="'.sizeof($companyval).'">'.$key.'</th>';
}
$rander .='<tr>';
$j=0;
//Displaying the results!
for($j=0; $j<count($dataArray); $j++){
foreach(array_unique($dataArray[$j]) as $k=>$valmax){

$rander .='<td colspan="'.sizeof($valmax).'">'.$valmax.'</td>';

}
$rander .='</tr>';
}

$rander .='</table>';

echo $rander;
?>
