<?php
	error_reporting(0);
	session_start();
	/*$loan_amount = array();
	for($i = 300000;$i<=3000000;$i+=50000){
		$loan_amount[] = $i;
	}
	
	$repaid = array();
	for($i = 24;$i<=84;$i+=12){
		$repaid[] = $i;
	}
	
	$interest_rate = 13.99;
	
	function pmt2($interest, $months, $loan) {
       $months = $months;
       $interest = $interest / 1200;
       $amount = $interest * -$loan * pow((1 + $interest), $months) / (1 - pow((1 + $interest), $months));
       return number_format($amount, 2);
    }
	
	function loan_instalments($interest_rate,$value2,$value){
		return pmt2($interest_rate,$value2,$value);
	}
	
	function total_repaid($interest_rate,$repaid_in,$loan_amount){
		$loan_instalments = pmt2($interest_rate,$repaid_in,$loan_amount);
		return $loan_instalments*$repaid_in;
	}
	
	function total_saving(){
		
	}
	
	function monthly_discount($total_saving){
		return $total_saving/12;
	}*/
	
	include_once('process_csv.php');
	
	
	if(isset($_POST['mode']) && $_POST['mode'] == 'amountChange'){
		$selected = $_POST['value'];
		$selection = array();
		foreach($datas as $key => $value){
			if($value['load_amount'] == $selected && $value['repaid_in'] == 24){
				$selection['load_amount'] = number_format($value['load_amount'],0,',',' ');
				$selection['loan_instalments'] = number_format($value['loan_instalments'],0,',',' ');
				$selection['repaid_in'] = $value['repaid_in'];
				$selection['total_repaid'] = number_format($value['total_repaid'],0,',',' ');
				$selection['interest_rate'] = $value['interest_rate'];
				$selection['total_saving'] = number_format($value['total_saving'],0,',',' ');
				$selection['monthly_discount'] = number_format($value['monthly_discount'],0,',',' ');
				
				$_SESSION["loan_amount"] = $selection['load_amount'];
				$_SESSION["loan_instalments"] = $selection['loan_instalments'];
				$_SESSION["repaid_in"] = $selection['repaid_in'];
				
				echo json_encode($selection);
			}
		}
	}
	
	if(isset($_POST['mode']) && $_POST['mode'] == 'monhtlyChange'){
		$monthly = $_POST['monthly'];
		$amount = $_POST['amount'];
		$selection = array();
		$min = 9999999999;
		foreach($datas as $key => $value){
			if($value['load_amount'] == $amount ){
				$diff = abs($value['loan_instalments'] - $monthly);
				if($diff<$min){
					$min = $diff;
					$selection['load_amount'] = number_format($value['load_amount'],0,',',' ');
					$selection['loan_instalments'] = number_format($value['loan_instalments'],0,',',' ');
					$selection['repaid_in'] = $value['repaid_in'];
					$selection['total_repaid'] = number_format($value['total_repaid'],0,',',' ');
					$selection['interest_rate'] = $value['interest_rate'];
					$selection['total_saving'] = number_format($value['total_saving'],0,',',' ');
					$selection['monthly_discount'] = number_format($value['monthly_discount'],0,',',' ');
					
					$_SESSION["loan_amount"] = $selection['load_amount'];
					$_SESSION["loan_instalments"] = $selection['loan_instalments'];
					$_SESSION["repaid_in"] = $selection['repaid_in'];
				}
			}
		}
		echo json_encode($selection);
	}
	
?>