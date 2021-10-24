<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_JpGraph {
    public function index(){
        include ("JpGraph/src/jpgraph.php");            
        include ("JpGraph/src/jpgraph_pie.php"); 
        include ("JpGraph/src/jpgraph_pie3d.php");
	}
}
?>