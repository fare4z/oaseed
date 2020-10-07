<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admission extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load->view('apps_hots');
	}

	function submit_apps() {
		$this->output->enable_profiler(true);
	}
	
		public function seed_apps() {

		$data = array();

		$data['Courses'] = array(
			'' => 'Please Choose',
			'Certificate of Competency in Food & Beverage Operations' => 'Certificate of Competency in Food & Beverage Operations',
			'Certificate of Competency in Fast Food Operations' => 'Certificate of Competency in Fast Food Operations',
			'Certificate of Competency in Culinary Arts' => 'Certificate of Competency in Culinary Arts',
			'Certificate of Completion in Retail Operations' => 'Certificate of Completion in Retail Operations',
			'Certificate of Completion in Wellness Management' => 'Certificate of Completion in Wellness Management',
			'Certificate of Completion in Accommodation Services' => 'Certificate of Completion in Accommodation Services',
			'Certificate of Completion in Reception Operations Services' => 'Certificate of Completion in Reception Operations Services',
			'Certificate of Completion in Barista & Cafe Operation' => 'Certificate of Completion in Barista & Cafe Operations',
			'Certificate of Completion in Call Centre' => 'Certificate of Completion in Call Centre',
			'Certificate of Completion in Safety & Security Operations' => 'Certificate of Completion in Safety & Security Operations',
		);

		$data['gender'] = array(
			'' => 'Please Choose',
			'Male' => 'Male',
			'Female' => 'Female',
		);

		$data['nationality'] = array(
			'' => 'Please Choose',
			'Malaysian' => 'Malaysian',
			'Others' => 'Others',
		);

		$data['marital'] = array(
			'' => 'Please Choose',
			'Single' => 'Single',
			'Married' => 'Married',
		);

		$this->load->view('apps_seed', $data);
	}
}
