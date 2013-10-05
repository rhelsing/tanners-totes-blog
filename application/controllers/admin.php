<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Post_model');
		//$this->Post_model->test("Hello");
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
		if($op==""){
			//echo "all";
		}else if($op=="new"){
			//echo "new";
		}else if($op=="save"){
			//echo "save";
		}else if($op=="view" && !is_null($id)){
			//echo "view".$id;
		}else if($op=="edit" && !is_null($id)){
			//echo "edit".$id;
		}else if($op=="update" && !is_null($id)){
			//echo "update".$id;
		}else if($op=="delete" && !is_null($id)){
			//echo "delete".$id;
		}else{
			//echo "not well formed";
		}
	}

	public function state($op="", $id=null){
		if($op==""){
			//echo "all";
		}else if($op=="new"){
			//echo "new";
		}else if($op=="save"){
			//echo "save";
		}else if($op=="view" && !is_null($id)){
			//echo "view".$id;
		}else if($op=="edit" && !is_null($id)){
			//echo "edit".$id;
		}else if($op=="update" && !is_null($id)){
			//echo "update".$id;
		}else if($op=="delete" && !is_null($id)){
			//echo "delete".$id;
		}else{
			//echo "not well formed";
		}
	}

	public function city($op="", $id=null){
		if($op==""){
			//echo "all";
		}else if($op=="new"){
			//echo "new";
		}else if($op=="save"){
			//echo "save";
		}else if($op=="view" && !is_null($id)){
			//echo "view".$id;
		}else if($op=="edit" && !is_null($id)){
			//echo "edit".$id;
		}else if($op=="update" && !is_null($id)){
			//echo "update".$id;
		}else if($op=="delete" && !is_null($id)){
			//echo "delete".$id;
		}else{
			//echo "not well formed";
		}
	}

	public function location($op="", $id=null){
		if($op==""){
			//echo "all";
		}else if($op=="new"){
			//echo "new";
		}else if($op=="save"){
			//echo "save";
		}else if($op=="view" && !is_null($id)){
			//echo "view".$id;
		}else if($op=="edit" && !is_null($id)){
			//echo "edit".$id;
		}else if($op=="update" && !is_null($id)){
			//echo "update".$id;
		}else if($op=="delete" && !is_null($id)){
			//echo "delete".$id;
		}else{
			//echo "not well formed";
		}
	}

	public function piece($op="", $id=null){
		if($op==""){
			//echo "all";
		}else if($op=="new"){
			//echo "new";
		}else if($op=="save"){
			//echo "save";
		}else if($op=="view" && !is_null($id)){
			//echo "view".$id;
		}else if($op=="edit" && !is_null($id)){
			//echo "edit".$id;
		}else if($op=="update" && !is_null($id)){
			//echo "update".$id;
		}else if($op=="delete" && !is_null($id)){
			//echo "delete".$id;
		}else{
			//echo "not well formed";
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
