<?php
	error_reporting(0);
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
	
	echo '<pre>';
	
	$file = fopen("mark2.csv","r");
	$csv = fgetcsv($file,100000,"x");
	
	$datas = array();
	
	foreach($csv as $key => $value){
		$data = explode(';', $value);
		$db = sizeof($datas);
		$datas[$db]['load_amount'] = number_format($data[0],0,',',' ');
		$datas[$db]['loan_instalments'] = number_format(($data[1]),0,',',' ');
		$datas[$db]['repaid_in'] = $data[2];
		$datas[$db]['total_repaid'] = number_format($data[3],0,',',' ');
		$datas[$db]['interest_rate'] = '13.99';
		$datas[$db]['total_saving'] =  number_format($data[16],0,',',' ');
		$datas[$db]['monthly_discount'] =  number_format($data[17],0,',',' ');
	}
	
	print_r($datas);
	fclose($file);
?>