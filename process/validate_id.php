<?php
$idnr = $_POST["id_num"];
$party = $_POST["party"];
//8706255908083
function validate_idnum($idnr)
{
$idnr = trim($idnr);
$idlen = strlen($idnr);
if($idlen == 13){
	if($idnr == "0000000000000"){
		return false;
	}
	$idmonth = (INT) substr($idnr,2,2);
	if(($idmonth >12) OR ($idmonth <= 0)){
		return false;
	}
	$iddate = (INT) substr($idnr,4,2);
	if(($iddate >31) OR ($iddate <= 0)){
		return false;
	}
        $idyear = (INT) substr($idnr,0,2);
	if(($idyear <86) ){
		return false;
	}
	$idgender = (INT) substr($idnr,6,1);
	if(($idgender >9) OR ($idgender < 0)){
		return false;
	}
	//if(($idgender <= 4) AND ($genn =="Male")){
	//	return false;
	//}
	
	//if(($idgender >= 5) AND ($genn =="Female")){
	//	return false;
	//}
	$idcitizen = (INT) substr($idnr,10,1);
	if(($idcitizen != 0) AND ($idcitizen != 1)){
		return false;
	}
	//var_dump($idcitizen);
	$d = -1; $b=0;
	$a = 0;
	for($i=0;$i<6;$i++)
		$a += substr($idnr,$i*2,1);
	for($i=0;$i<6;$i++)
		$b = $b * 10 + substr($idnr,(2*$i)+1,1);
	$b *= 2;
	//var_dump($a);
	//var_dump($b);
	$c = 0;

	while($b > 0) {
		$c += $b % 10;
		$b = $b / 10;
	}
	$c += $a;
	$d = 10 - ($c % 10);
	//var_dump($c);
	//var_dump($d);
	if($d == 10)
		$d = 0;
	if($d == substr($idnr,strlen($idnr)-1,1))
		return true;
	else
		return false;
	}else{
		return false;
	}
}
if(validate_idnum($idnr)) 
	{

		$ok = array('ANC', 'AGANG', 'EFF', 'DA', 'MO','IFP','COPE','UDM','MF','AZAPO','PAC','ACDP', 'PA');
		$link = mysqli_connect('localhost', 'yfm2011_v4', 'y0n5key0n5', "elections_db");
		if (!$link) {
		    //die('Could not connect: ' . mysql_error());
		}
		else {

			//$q = mysqli_query($link , "SELECT * FROM ep_id_votes WHERE id_num = '" . $idnr . "' ");
			$stmt = mysqli_prepare($link, "SELECT * FROM ep_id_votes WHERE id_num = '" . $idnr . "'");
				    mysqli_stmt_execute($stmt);
				    mysqli_stmt_store_result($stmt);
			//echo mysqli_stmt_num_rows($stmt);
			if(mysqli_stmt_num_rows($stmt)>0){
			echo "voted";
			}
			else {
			$q = mysqli_query($link , "INSERT INTO ep_id_votes (id_num ,party_name)VALUES ('".$idnr."', '".$party."')");
			$q = mysqli_query($link , "UPDATE wp_colorcounter SET votecount = votecount + 1 WHERE partyname = '" . $party . "'  ");
			echo "success"; 
			}
		}
		//mysql_close($link);
	}
	else echo  "failure";
?>