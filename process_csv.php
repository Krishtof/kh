<?php
	error_reporting(0);
	
	$file = fopen("mark2.csv","r");
	$csv = fgetcsv($file,100000,"x");
	
	$datas = array();
	
	foreach($csv as $key => $value){
		$data = explode(';', $value);
		$db = sizeof($datas);
		$datas[$db]['load_amount'] = number_format($data[0],0,',','');
		$datas[$db]['loan_instalments'] = number_format(($data[1]),0,',','');
		$datas[$db]['repaid_in'] = $data[2];
		$datas[$db]['total_repaid'] = number_format($data[3],0,',','');
		$datas[$db]['interest_rate'] = '13.99';
		$datas[$db]['total_saving'] =  number_format($data[16],0,',','');
		$datas[$db]['monthly_discount'] =  number_format($data[17],0,',','');
	}
	
	fclose($file);
?>