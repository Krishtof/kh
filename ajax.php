<?php
	error_reporting(0);
	session_start();
	
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
				$_SESSION["max_loan"] = $selection['loan_instalments'];
				$_SESSION["interest_rate"] = $selection['interest_rate'];
				$_SESSION["total_repaid"] = $selection['total_repaid'];
				
				
			}
		}
		$min = 999999999;
		foreach($datas as $key => $value){
			if($value['load_amount'] == $selected ){
				if($value['loan_instalments'] < $min){
					$selection['min_loan_instalments'] =number_format($value['loan_instalments'],0,',',' ');
					
				}					
			}
		}
		$_SESSION["min_loan"] = $selection['min_loan_instalments'] ;
		echo json_encode($selection);
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
					$_SESSION["interest_rate"] = $selection['interest_rate'];
					$_SESSION["total_repaid"] = $selection['total_repaid'];
				}
			}
		}
		echo json_encode($selection);
	}
	
?>