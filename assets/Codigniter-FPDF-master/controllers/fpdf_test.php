<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fpdf_test extends CI_Controller {

	/**
	 * Example: FPDF 
	 *
	 * Documentation: 
	 * http://www.fpdf.org/ > Manual
	 *
	 */
	public function index() {	
		$this->load->library('fpdf_gen');
		
		$this->fpdf->SetFont('Arial','B',16);
		$this->fpdf->Cell(40,10,'Hello World!');
		
		echo $this->fpdf->Output('hello_world.pdf','D');
	}
}
