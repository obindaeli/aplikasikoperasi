<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_data');
    }

    public function generate_pdf() {
        $this->load->library('Dompdf_gen');
        $data['reports'] = $this->M_data->get_report_data();

        $this->load->view('report_view',$data);
        $tgl=date('Y-m-d');
        $paper_size='A4';
        $orientation="potrait";
        $html=$this->output->get_output();
        $this->dompdf->set_paper($paper_size,$orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Report_$tgl.pdf", array('attachment'=>0));
    }
}
