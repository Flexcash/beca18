<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cap6 extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->lang->load('auth');

		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login');
		}

		$roles = $this->ion_auth->get_roles();
		$flag = FALSE;
		foreach ($roles as $role) {
			if ($role->id == 1 || $role->id == 2) {
				$flag = TRUE;
				break;
			}
		}

		if (!$flag) {
			show_404();
			die();
		}
	}

	public function index()
	{
		$data['user'] = $this->ion_auth->user()->row();
		$data['nav'] = TRUE;
		$data['title'] = 'Encuesta';
		$data['main_content'] = 'encuesta/forms/cap6_form';
		$this->load->view('backend/includes/template', $data);
	}
}

?>