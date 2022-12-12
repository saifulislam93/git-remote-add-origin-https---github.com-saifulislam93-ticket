<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
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
        $data['datas']=$this->cm->common_query_result("select tbl_order.*, tbl_ship.name, tbl_ship.type from tbl_order join tbl_ship on tbl_ship.id=tbl_order.ship_id order by tbl_order.id DESC");
        $data['page']='order/index.php';
        $this->load->view('master',$data);
    }

    public function create(){
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
			$data['available_seat']=$this->cm->common_query_result('select ship_id,journey_date,journey_time,from_location,sum(no_of_seat) FROM tbl_order GROUP BY from_location,journey_time,journey_date,ship_id');
			$data['page']='order/add.php';
            $this->load->view('master',$data);
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
            $insert=$this->cm->common_insert('tbl_order',$data);
            if($insert){
				$this->session->set_flashdata('message','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a> Data save success.</div>');
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a> Data save fail. Please Try agian.</div>');
            }
            redirect('order');
        }
    }

    public function update($id){
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
			$con["id"]=$id;
			$data['ships']=$this->cm->common_result("tbl_ship");
            $data['data']=$this->cm->common_row("tbl_order","*",$con);
			$data['page']='order/update.php';
            $this->load->view('master',$data);
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
            $con['id']=$id;
            $up=$this->cm->common_update('tbl_order',$data,$con);
            
            if($up)
                $this->session->set_flashdata('message','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a> Data update success.</div>');
            else
                $this->session->set_flashdata('message','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a> Data update fail. Please Try agian.</div>');

            redirect('order');
        }

    }

    Public function delete_data($id){
        $con['id']=$id;
        if($this->cm->common_delete('tbl_order',$con))
            $this->session->set_flashdata('message','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a> Data delete success.</div>');
        else
            $this->session->set_flashdata('message','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a> Data delete fail. Please Try agian.</div>');
        
        redirect('order');
    }
	
	Public function approve_order($status,$id){
		$data['status']=$status;
        $con['id']=$id;
        if($this->cm->common_update('tbl_order',$data,$con))
            $this->session->set_flashdata('message','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a> Data update success.</div>');
        else
            $this->session->set_flashdata('message','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a> Data update fail. Please Try agian.</div>');
        
        redirect('order');
    }
	
	public function token_gen($id){
		$data['data']=$this->cm->common_query_row("select tbl_order.*, tbl_ship.name, tbl_ship.type from tbl_order join tbl_ship on tbl_ship.id=tbl_order.ship_id where tbl_order.id=$id");
        $data['page']='order/token.php';
        $this->load->view('master',$data);
	}
}
