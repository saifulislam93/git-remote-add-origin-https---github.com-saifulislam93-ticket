<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Common_model','cm',true);
	}
	public function index()
	{
		$data['ships']=$this->cm->common_result("tbl_ship");
		$this->load->view('welcome',$data);
	}
	
	
	public function create_order(){
        $this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		
		$this->form_validation->set_rules('customer_name','Customer Name','trim|required');
		$this->form_validation->set_rules('contact_no','Contact No','trim|required');
		$this->form_validation->set_rules('from_location','Location','trim|required');
		$this->form_validation->set_rules('ship_id','Ship','trim|required');
		$this->form_validation->set_rules('journey_date','Date','trim|required');
		$this->form_validation->set_rules('journey_time','Time','trim|required');
		$this->form_validation->set_rules('fare','Fare','trim|required');
		$this->form_validation->set_rules('no_of_seat','Number of Seat','trim|required');
	
		if($this->form_validation->run()==FALSE){
			$data['ships']=$this->cm->common_result("tbl_ship");
			$this->load->view('welcome',$data);
		}else{
            $data['customer_name']=$this->input->post('customer_name',true);
            $data['contact_no']=$this->input->post('contact_no',true);
            $data['from_location']=$this->input->post('from_location',true);
            
			$data['to_location']=$this->input->post('from_location',true)=="CTG"?"Sandwip":"CTG";
			
            $data['ship_id']=$this->input->post('ship_id',true);
            $data['journey_date']=$this->input->post('journey_date',true);
            $data['journey_time']=$this->input->post('journey_time',true);
            $data['fare']=$this->input->post('fare',true);
            $data['no_of_seat']=$this->input->post('no_of_seat',true);
            $data['status']=0;
            $insert=$this->cm->common_insert('tbl_order',$data);
            if($insert){
				$this->session->set_flashdata('message','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a> Data save success.</div>');
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a> Data save fail. Please Try agian.</div>');
            }
            redirect('welcome');
        }
    }

	
}
