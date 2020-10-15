<? session_start(); ?>
<?
if(!empty($_POST['mit']))
{
	$selectedmit = $_POST['mit'];
}
if(!empty($_POST['mire']))
{
	$selectedmire = $_POST['mire'];
}
if(!empty($_POST['mire']))
{
	$mennyit = $_POST['mennyit'];
}

$strJsonFileContents = file_get_contents("https://api.exchangeratesapi.io/latest?base=EUR&symbols=HUF");
$array = json_decode($strJsonFileContents, true);
//var_dump($array);
$key = 'HUF';
//print_r($array[$key]);
$kesz = false;
foreach($array as $key1 => $value1)
{
	if($kesz == false)
	{
		//echo @$array[$key1]["HUF"];
	//($array[$key1]);
	//echo"<br>";
	$arfolyam = @$array[$key1]["HUF"];
	//echo $array[$key1]["HUF"] . "   asd";
	$vegeredmeny = $mennyit * $arfolyam;
    //print "<hr>:::$arfolyam:::<hr>";
	//$vegeredmeny = $mennyit * $arfolyam;
	$kesz = true;
	
	
	
	
	
	}
}
if($selectedmit == "EUR")
{
	$vegeredmeny = $mennyit * $arfolyam;
}
if($selectedmit == "HUF")
{
	$vegeredmeny = $mennyit / $arfolyam;
}
echo" ezt váltottam :". $selectedmit ." erre : ". $selectedmire ." és ez lett = ". $vegeredmeny ." " . $selectedmire ; 



echo "<br>";
echo "<br>";


/*echo $selectedmit;
echo $selectedmire;
echo $mennyit;*/
?>