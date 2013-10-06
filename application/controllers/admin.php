<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['main_content'] = 'dashboard';
		$data['s'] = 'dashboard';
		$this->load->view('admin_template', $data);
	}

	public function post($op="", $id=null){
		$this->load->model('Post_model');
		if($op==""){
			//echo "all";
			$data['posts'] = $this->Post_model->get_all();
			$data['main_content'] = 'post/all';
		}else if($op=="new"){
			$data['main_content'] = 'post/new';
		}else if($op=="save"){
			$this->Post_model->insert($_POST);
			redirect('/admin/post');
		}else if($op=="view" && !is_null($id)){
			$data['post'] = $this->Post_model->get('id = '.$id);
			$data['main_content'] = 'post/view';
		}else if($op=="edit" && !is_null($id)){
			$data['post'] = $this->Post_model->get('id = '.$id);
			$data['main_content'] = 'post/edit';
		}else if($op=="update" && !is_null($id)){
			$this->Post_model->update($_POST, $id);
			redirect('/admin/post');
		}else if($op=="delete" && !is_null($id)){
			$this->Post_model->delete($id);
			redirect('/admin/post');
		}else if($op=="images"){
			$data['main_content'] = 'post/images';
		}else{
			//not well formed;
			redirect('/admin/post');
		}
		$data['s'] = 'posts';
		$this->load->view('admin_template', $data);
	}

	public function quote($op="", $id=null){
		$this->load->model('Quote_model');
		if($op==""){
			//echo "all";
			$data['quotes'] = $this->Quote_model->get_all();
			$data['main_content'] = 'quote/all';
		}else if($op=="new"){
			//echo "new";
			$data['main_content'] = 'quote/new';
		}else if($op=="save"){
			$this->Quote_model->insert($_POST);
			redirect('/admin/quote');
			//echo "save";
		}else if($op=="view" && !is_null($id)){
			//echo "view".$id;
		}else if($op=="edit" && !is_null($id)){
			//echo "edit".$id;
			$data['quote'] = $this->Quote_model->get('id = '.$id);
			$data['main_content'] = 'quote/edit';
		}else if($op=="update" && !is_null($id)){
			//echo "update".$id;
			$this->Quote_model->update($_POST, $id);
			redirect('/admin/quote');
		}else if($op=="delete" && !is_null($id)){
			//echo "delete".$id;
			$this->Quote_model->delete($id);
			redirect('/admin/quote');
		}else{
			//echo "not well formed";
			redirect('/admin/quote');
		}
		$data['s'] = 'quotes';
		$this->load->view('admin_template', $data);
	}

	public function state($op="", $id=null){
		$this->load->model('State_model');
		if($op==""){
			//echo "all";
			$data['states'] = $this->State_model->get_all();
			$data['main_content'] = 'state/all';
		}else if($op=="new"){
			//echo "new";
			$data['main_content'] = 'state/new';
		}else if($op=="save"){
			//echo "save";
			$this->State_model->insert($_POST);
			redirect('/admin/state');
		}else if($op=="view" && !is_null($id)){
			//echo "view".$id;
		}else if($op=="edit" && !is_null($id)){
			//echo "edit".$id;
			$data['state'] = $this->State_model->get('id = '.$id);
			$data['main_content'] = 'state/edit';
		}else if($op=="update" && !is_null($id)){
			//echo "update".$id;
			$this->State_model->update($_POST, $id);
			redirect('/admin/state');
		}else if($op=="delete" && !is_null($id)){
			//echo "delete".$id;
			$this->State_model->delete($id);
			redirect('/admin/state');
		}else{
			//echo "not well formed";
			redirect('/admin/state');
		}
		$data['s'] = 'map';
		$this->load->view('admin_template', $data);
	}

	public function city($op="", $id=null){
		$this->load->model('City_model');
		if($op==""){
			//echo "all";
			$data['cities'] = $this->City_model->get_all();
			$data['main_content'] = 'city/all';
		}else if($op=="new"){
			//echo "new";
			$this->load->model('State_model');
			$data['states'] = $this->State_model->get_all();
			//load all states
			$data['main_content'] = 'city/new';
		}else if($op=="save"){
			//echo "save";
			$this->City_model->insert($_POST);
			redirect('/admin/city');
		}else if($op=="view" && !is_null($id)){
			//echo "view".$id;
		}else if($op=="edit" && !is_null($id)){
			//echo "edit".$id;
			$this->load->model('State_model');
			$data['states'] = $this->State_model->get_all();
			$data['city'] = $this->City_model->get('id = '.$id);
			//load all states
			$data['main_content'] = 'city/edit';
		}else if($op=="update" && !is_null($id)){
			//echo "update".$id;
			$this->City_model->update($_POST, $id);
			redirect('/admin/city');
		}else if($op=="delete" && !is_null($id)){
			//echo "delete".$id;
			$this->City_model->delete($id);
			redirect('/admin/city');
		}else{
			//echo "not well formed";
			redirect('/admin/city');
		}
		$data['s'] = 'map';
		$this->load->view('admin_template', $data);
	}

	public function location($op="", $id=null){
		$this->load->model('Location_model');
		if($op==""){
			//echo "all";
			$data['locations'] = $this->Location_model->get_all();
			$data['main_content'] = 'location/all';
		}else if($op=="new"){
			//echo "new";
			$this->load->model('City_model');
			$data['cities'] = $this->City_model->get_all();
			$data['main_content'] = 'location/new';
		}else if($op=="save"){
			//echo "save";
			$this->Location_model->insert($_POST);
			redirect('/admin/location');
		}else if($op=="view" && !is_null($id)){
			//echo "view".$id;
		}else if($op=="edit" && !is_null($id)){
			//echo "edit".$id;
			$this->load->model('City_model');
			$data['cities'] = $this->City_model->get_all();
			$data['location'] = $this->Location_model->get('id = '.$id);
			$data['main_content'] = 'location/edit';
		}else if($op=="update" && !is_null($id)){
			//echo "update".$id;
			$this->Location_model->update($_POST, $id);
			redirect('/admin/location');
		}else if($op=="delete" && !is_null($id)){
			//echo "delete".$id;
			$this->Location_model->delete($id);
			redirect('/admin/location');
		}else{
			//echo "not well formed";
			redirect('/admin/location');
		}
		$data['s'] = 'map';
		$this->load->view('admin_template', $data);
	}

	public function piece($op="", $id=null){
		$this->load->model('Piece_model');
		if($op==""){
			//echo "all";
			$data['pieces'] = $this->Piece_model->get_all();
			$data['main_content'] = 'piece/all';
		}else if($op=="new"){
			//echo "new";
			$data['main_content'] = 'piece/new';
		}else if($op=="save"){
			//echo "save";
			$this->Piece_model->insert($_POST);
			redirect('/admin/piece');
		}else if($op=="view" && !is_null($id)){
			//echo "view".$id;
		}else if($op=="edit" && !is_null($id)){
			//echo "edit".$id;
			$data['piece'] = $this->Piece_model->get('id = '.$id);
			$data['main_content'] = 'piece/edit';
		}else if($op=="update" && !is_null($id)){
			//echo "update".$id;
			$this->Piece_model->update($_POST, $id);
			redirect('/admin/piece');
		}else if($op=="delete" && !is_null($id)){
			//echo "delete".$id;
			$this->Piece_model->delete($id);
			redirect('/admin/piece');
		}else{
			//echo "not well formed";
			redirect('/admin/piece');
		}
		$data['s'] = 'other';
		$this->load->view('admin_template', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
