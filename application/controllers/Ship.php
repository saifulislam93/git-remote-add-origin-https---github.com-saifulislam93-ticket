<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ship extends CI_Controller {
	public function __construct(){
		parent::__construct();
        if(!$this->session->userdata('logged_in')){
			redirect('login');
			exit;
		}
		$this->load->model('Common_model','cm',true);
	}
    
    public function index(){
        $con['status != ']=0;
        $data['datas']=$this->cm->common_result("tbl_ship",'*',false,'id','DESC');
        $data['page']='ship/index.php';
        $this->load->view('master',$data);
    }

    public function create(){
        $this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		
		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('type','Type','trim|required');
		$this->form_validation->set_rules('capacity','Capacity','trim|required');
		$this->form_validation->set_rules('ctg_start','Start from CTG','trim');
		$this->form_validation->set_rules('sandwip_start','Start from Sandwip','trim');
		$this->form_validation->set_rules('fare','Fare','trim|required');
	

		if($this->form_validation->run()==FALSE){
			$data['page']='ship/add.php';
            $this->load->view('master',$data);
		}else{
            $data['name']=$this->input->post('name',true);
            $data['type']=$this->input->post('type',true);
            $data['capacity']=$this->input->post('capacity',true);
            $data['ctg_start']=$this->input->post('ctg_start',true);
            $data['sandwip_start']=$this->input->post('sandwip_start',true);
            $data['fare']=$this->input->post('fare',true);
            $data['status']=$this->input->post('status',true);
            $insert=$this->cm->common_insert('tbl_ship',$data);
            if($insert){
				$this->session->set_flashdata('message','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&time;</a> Data save success.</div>');
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&time;</a> Data save fail. Please Try agian.</div>');
            }
            redirect('ship');
        }

    }

    public function update($id){
        $this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		
		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('type','Type','trim|required');
		$this->form_validation->set_rules('capacity','Capacity','trim|required');
		$this->form_validation->set_rules('ctg_start','Start from CTG','trim');
		$this->form_validation->set_rules('sandwip_start','Start from Sandwip','trim');
		$this->form_validation->set_rules('fare','Fare','trim|required');
	
		if($this->form_validation->run()==FALSE){
			$con["id"]=$id;
            $data['data']=$this->cm->common_row("tbl_ship","*",$con);
			$data['page']='ship/update.php';
            $this->load->view('master',$data);
		}else{
            $data['name']=$this->input->post('name',true);
            $data['type']=$this->input->post('type',true);
            $data['capacity']=$this->input->post('capacity',true);
            $data['ctg_start']=$this->input->post('ctg_start',true);
            $data['sandwip_start']=$this->input->post('sandwip_start',true);
            $data['fare']=$this->input->post('fare',true);
            $data['status']=$this->input->post('status',true);
            $con['id']=$id;
            $up=$this->cm->common_update('tbl_ship',$data,$con);
            
            if($up)
                $this->session->set_flashdata('message','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&time;</a> Data update success.</div>');
            else
                $this->session->set_flashdata('message','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&time;</a> Data update fail. Please Try agian.</div>');

            redirect('ship');
        }

    }

    Public function delete_data($id){
        $con['id']=$id;
        if($this->cm->common_delete('tbl_ship',$con))
            $this->session->set_flashdata('message','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&time;</a> Data delete success.</div>');
        else
            $this->session->set_flashdata('message','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&time;</a> Data delete fail. Please Try agian.</div>');
        
        redirect('ship');
    }
}
