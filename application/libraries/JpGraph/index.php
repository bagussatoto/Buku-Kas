<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_JpGraph {
    public function index(){
        include ("src/jpgraph.php");            
        include ("src/jpgraph_pie.php"); 
        include ("src/jpgraph_pie3d.php");
	}
}
?>