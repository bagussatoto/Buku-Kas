<?php

	$query = "SELECT * FROM cash_mhs ORDER BY id";
	$sql = mysql_query ($query); 
	$data =  array();  
	while ($row = mysql_fetch_assoc($sql)){
		array_push($data, $row);
	}
	
	$judul = "LAPORAN DATA MAHASISWA";
	$header = array(
		array("label"=>"NO", "length"=>30, "align"=>"L"),
		array("label"=>"NRP", "length"=>30, "align"=>"L"),
		array("label"=>"NAMA", "length"=>50, "align"=>"L"),
	);
	
	require_once ("fpdf181/fpdf.php");
	$pdf = new FPDF(); 
	$pdf->AddPage(); 
	
	$pdf->SetFont('Arial','B','16');
	$pdf->Cell(0,20, $judul, '0', 1, 'C');
	$pdf->Cell(0,20, $ket, '0', 1, 'L');
	
	$pdf->SetFont('Arial','','10');
	$pdf->SetFillColor(255,0,0); 
	$pdf->SetTextColor(255); 
	$pdf->SetDrawColor(128,0,0);  
	foreach ($header as $kolom){
		$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);  
	}
	$pdf->Ln();
	
	$pdf->SetFillColor(224,235,255);
	$pdf->SetTextColor(0);
	$pdf->SetFont('');  
	$fill=false;
	foreach ($data as $baris){
		$i = 0;
		foreach ($baris as $cell){
			$pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill); 
			$i++;
		}
		$fill = !$fill;
		$pdf->Ln();
	}
	
	$pdf->Output();
?>