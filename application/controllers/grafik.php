<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Grafik extends CI_Controller{
	public function index(){
		require_once (APPPATH.'/libraries/JpGraph/src/jpgraph.php');
		require_once (APPPATH.'/libraries/JpGraph/src/jpgraph_pie.php');
		require_once (APPPATH.'/libraries/JpGraph/src/jpgraph_pie3d.php');
		require_once (APPPATH.'/libraries/JpGraph/src/jpgraph_bar.php');
		require_once (APPPATH.'/libraries/JpGraph/src/jpgraph_line.php');
		
		$sql = mysql_query("
			SELECT m.nama, k.dateOne+k.dateTwo+k.dateThree+k.dateFour+k.dateFive+k.dateSix+k.dateSeven+k.dateEight+k.dateNine+k.dateTen+k.dateEleven+k.dateTwelve FROM cash_mhs m, cash_date k WHERE m.id = k.dateId
		") or die(mysql_error()); 
		while($row = mysql_fetch_array($sql)){ 
			$data[] = $row[1];
			$leg[] = $row[0];
		}

		$graph = new Graph(1000,500,"auto"); 
		$graph->SetScale('textint'); 
		$graph->img->SetMargin(100,30,50,50); 
		$graph->SetShadow();  
		$graph->title->Set("Grafik Data Kas"); 
		$graph->title->SetFont(FF_ARIAL,FS_BOLD,14);
		$graph->title->SetColor('blue');
		$graph->xaxis->SetTickLabels($leg);
		$graph->xaxis->SetLabelAngle(45);
		$graph->yscale->ticks->SupressZeroLabel(false);
		
		$bplot = new BarPlot($data);
		//$bplot->mark->SetType(MARK_CIRCLE);
		$bplot->value->Show();  
		$bplot->value->SetFont(FF_ARIAL,FS_BOLD); 
		$bplot->value->SetAngle(45); 
		$bplot->SetLegend("Banyak data"); 
		$graph->Add($bplot);
		$graph->Stroke();
	}
}
