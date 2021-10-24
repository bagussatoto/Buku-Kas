<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Fpdf_test extends CI_Controller {
	public function index() {	
		
		$query = "
			SELECT m.id, m.nrp, m.nama, k.dateOne, k.dateTwo, k.dateThree, k.dateFour, k.dateFive, k.dateSix, k.dateSeven, k.dateEight, k.dateNine, k.dateTen, k.dateEleven, k.dateTwelve
			FROM cash_mhs m, cash_date k
			WHERE m.id = k.dateId
			ORDER BY id";
		$sql = mysql_query($query);
		$data =  array();
		while ($row = mysql_fetch_assoc($sql)){
			array_push($data, $row);
		}

		$judul = "LAPORAN KAS MAHASISWA";
		$header = array(
			array("label"=>"NO", "length"=>8, "align"=>"L"),
			array("label"=>"NRP", "length"=>20, "align"=>"L"),
			array("label"=>"NAMA", "length"=>25, "align"=>"L"),
			array("label"=>"1", "length"=>10, "align"=>"L"),
			array("label"=>"2", "length"=>10, "align"=>"L"),
			array("label"=>"3", "length"=>10, "align"=>"L"),
			array("label"=>"4", "length"=>10, "align"=>"L"),
			array("label"=>"5", "length"=>10, "align"=>"L"),
			array("label"=>"6", "length"=>10, "align"=>"L"),
			array("label"=>"7", "length"=>10, "align"=>"L"),
			array("label"=>"8", "length"=>10, "align"=>"L"),
			array("label"=>"9", "length"=>10, "align"=>"L"),
			array("label"=>"10", "length"=>10, "align"=>"L"),
			array("label"=>"11", "length"=>10, "align"=>"L"),
			array("label"=>"12", "length"=>10, "align"=>"L"),
			array("label"=>"TOTAL", "length"=>17, "align"=>"L"),
		);
		
		//---AGENDA---
		$query2 = "SELECT agendaId, agendaNama, agendaLokasi, agendaTgl, agendaBiaya FROM cash_agenda ORDER BY agendaId";
		$sql2 = mysql_query($query2);
		$data2 =  array();
		while ($row2 = mysql_fetch_assoc($sql2)){
			array_push($data2, $row2);
		}
		$judul2 = "LAPORAN AGENDA TAHUN";
		$header2 = array(
			array("label"=>"NO", "length"=>8, "align"=>"L"),
			array("label"=>"NAMA", "length"=>30, "align"=>"L"),
			array("label"=>"LOKASI", "length"=>30, "align"=>"L"),
			array("label"=>"TANGGAL", "length"=>20, "align"=>"L"),
			array("label"=>"BIAYA", "length"=>15, "align"=>"L"),
		);
		
		//---SUM DATA KAS---
		$query3 = "SELECT sum(dateOne)+sum(dateTwo)+sum(dateThree)+sum(dateFour)+sum(dateFive)+sum(dateSix)+sum(dateSeven)+sum(dateEight)+sum(dateNine)+sum(dateTen)+sum(dateEleven)+sum(dateTwelve) FROM cash_date ORDER BY dateId";
		$sql3 = mysql_query($query3);
		$data3 =  array();
		while ($row3 = mysql_fetch_assoc($sql3)){
			array_push($data3, $row3);
		}
		$header3 =array(
			array("label"=>"TOTAL KAS", "length"=>23, "align"=>"L"),
		);
		
		//---SUM DATA AGENDA---
		$query4 = "SELECT sum(agendaBiaya) FROM cash_agenda ORDER BY agendaId";
		$sql4 = mysql_query($query4);
		$data4 =  array();
		while ($row4 = mysql_fetch_assoc($sql4)){
			array_push($data4, $row4);
		}
		$header4 =array(
			array("label"=>"TOTAL BIAYA AGENDA", "length"=>45, "align"=>"L"),
		);
		
		//---PAGE---
		$this->load->library('fpdf_gen');
		$pdf = new FPDF(); 
		$pdf->AddPage();  
		 
		//---KAS---
		$pdf->SetFont('Arial','B',14);
		$pdf->SetFillColor(0,0,255);
		$pdf->SetTextColor(0,0,255);
		$pdf->Cell(0,20, $judul, '0', 1, 'L');
		
		$pdf->SetFont('Arial','B','10');
		$pdf->SetFillColor(255); 
		$pdf->SetTextColor(0); 
		$pdf->SetDrawColor(128,0,0);  
		foreach ($header as $kolom){
			$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);  
		}
		$pdf->Ln();
		$pdf->SetFillColor(224,235,255);
		$pdf->SetTextColor(0);
		$pdf->SetFont('Arial','','8');  
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
		$pdf->Ln();
		
		//---TOTAL KAS---
		$pdf->SetFont('Arial','B',10);
		foreach ($header3 as $kolom3){
			$pdf->Cell($kolom3['length'], 5, $kolom3['label'], 1, '0', $kolom3['align'], true);  
		}
		$pdf->SetFont('Arial','B',10);
		$pdf->SetFillColor(0,0,0);
		$pdf->SetTextColor(0,0,0);
		$fill3=false;
		foreach ($data3 as $baris3){
			$i = 0;
			foreach ($baris3 as $cell3){
				$pdf->Cell($header3[$i]['length'], 5, $cell3, 1, '0', $kolom['align'], $fill3); 
				$i++;
			}
			$fill3 = !$fill3;
			$pdf->Ln();
		}
		
		//---AGENDA---
		$pdf->SetFont('Arial','B',14);
		$pdf->SetFillColor(0,0,255);
		$pdf->SetTextColor(0,0,255);
		$pdf->Cell(0,20, $judul2, '0', 1, 'L');
		
		$pdf->SetFont('Arial','B','10');
		$pdf->SetFillColor(255);
		$pdf->SetTextColor(0);
		$pdf->SetDrawColor(128,0,0);
		foreach ($header2 as $kolom2){
			$pdf->Cell($kolom2['length'], 5, $kolom2['label'], 1, '0', $kolom2['align'], true);  
		}
		$pdf->Ln();
		
		$pdf->SetFillColor(224,235,255);
		$pdf->SetTextColor(0);
		$pdf->SetFont('Arial','','8');  
		$fill2=false;
		foreach ($data2 as $baris2){
			$i = 0;
			foreach ($baris2 as $cell2){
				$pdf->Cell($header2[$i]['length'], 5, $cell2, 1, '0', $kolom2['align'], $fill2); 
				$i++;
			}
			$fill2 = !$fill2;
			$pdf->Ln();
		}
		//---END AGENDA---
		$pdf->Ln();
		//---TOTAL AGENDA---
		$pdf->SetFont('Arial','B',10);
		foreach ($header4 as $kolom4){
			$pdf->Cell($kolom4['length'], 5, $kolom4['label'], 1, '0', $kolom['align'], true);  
		}
		$pdf->SetFont('Arial','B',10);
		$pdf->SetFillColor(0,0,0);
		$pdf->SetTextColor(0,0,0);
		$fill4=false;
		foreach ($data4 as $baris4){
			$i = 0;
			foreach ($baris4 as $cell4){
				$pdf->Cell($header4[$i]['length'], 5, $cell4, 1, '0', $kolom['align'], $fill4); 
				$i++;
			}
			$fill4 = !$fill4;
			$pdf->Ln();
		}
		$pdf->Ln();

		$ket1 = "Demikian laporan kas dan agenda mahasiswa ini saya buat dengan sebenar-benarnya, bilamana di kemudian ";
		$ket2 = "hari ditemukan ketidaksesuaian dengan pernyataan ini, maka saya bersedia dituntut dan diproses sesuai ";$ket3 = "dengan ketentuan yang berlaku.";
		$ttd = "__________,___________";
		$user = "(___________)";
		$pdf->SetFont('Arial','','10');
		$pdf->Cell(0,5, $ket1, 0, 1, 'L');
		$pdf->Cell(0,5, $ket2, 0, 1, 'L');
		$pdf->Cell(0,5, $ket3, 0, 1, 'L');
		$pdf->Cell(0,20, $ttd, 0, 1, 'R');
		$pdf->Ln();
		$pdf->Cell(0,0, $user, 0, 1, 'R');
		
		$pdf->Output();		
	}
}
