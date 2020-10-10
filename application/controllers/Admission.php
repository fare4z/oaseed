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
		$this->output->enable_profiler(true);
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
	
		public function submit_apps_elpp() {

		$this->form_validation->set_rules('nationality', 'Nationality', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('marital', 'Marital Status', 'required');

		if ($this->form_validation->run() == false) {
			$this->seed_apps();
		} else {

			$data_pemohon = array(
				'nric' => $this->input->post('nric'),
				'name' => strtoupper($this->input->post('name')),
				'nationality' => strtoupper($this->input->post('nationality')),
				'gender' => strtoupper($this->input->post('gender')),
				'dob' => $this->input->post('dob'),
				'phone' => strtoupper($this->input->post('hp')),
				'marital_status' => strtoupper($this->input->post('marital')),
				'email' => $this->input->post('email'),
				'address' => strtoupper($this->input->post('address')),
				'highest_education' => strtoupper($this->input->post('highest_education')),
				'institution_name' => strtoupper($this->input->post('institution_name')),
				'sector' => strtoupper($this->input->post('sector')),
				'job_title' => strtoupper($this->input->post('job_title')),
				'name_of_organization' => strtoupper($this->input->post('nama_of_organization')),
				'organization_phone' => strtoupper($this->input->post('organization_number')),
				'organization_address' => strtoupper($this->input->post('org_address')),
				'organization_email' => $this->input->post('org_email'),
				'officer_in_charge' => strtoupper($this->input->post('officer_in_charge')),
				'nok_name' => strtoupper($this->input->post('nok_name')),
				'nok_address' => strtoupper($this->input->post('nok_address')),
				'nok_phone' => strtoupper($this->input->post('nok_phone')),
				'nok_relation' => strtoupper($this->input->post('nok_relation')),
				'program' => 'ELPP',
			);

			$this->db->insert('pemohon_elpp', $data_pemohon);

			$config = array(
				'protocol' => 'mail',
				'mailtype' => 'html',
				'charset' => 'iso-8859-1',
				'mailpath' => '/usr/sbin/sendmail',
			);

			$this->load->library('email');
			$this->email->initialize($config);

			$subject = "Application Notification";
			$message = "Salam Sejahtera, <br><br>";
			$message .=
				"Email Notification. <br>
 ";
			$message .= '<br><table rules="none" bordercolor="#ffffff" cellpadding="10" border="0" style = "border-collapse: collapse;">';
			$message .= "<tr><td><strong>Full Name: </td><td>" . strtoupper($this->input->post('name')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Nationality: </td><td>" . strtoupper($this->input->post('nationality')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>NRIC/Passport: </td><td>" . strtoupper($this->input->post('nric')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Gender: </td><td>" . strtoupper($this->input->post('gender')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Date of Birth  : </td><td>" . $this->input->post('dob') . "</strong></td></tr>";
			$message .= "<tr><td><strong>Permanent Address</strong> </td><td>" . strtoupper($this->input->post('address')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Telephone Number : </td><td>" . $this->input->post('hp') . "</strong></td></tr>";
			$message .= "<tr><td><strong>Marital Status : </td><td>" . strtoupper($this->input->post('marital')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>E-mail : </td><td>" . $this->input->post('email') . "</strong></td></tr>";

			$message .= "<tr><td><strong>Sector : </td><td>" . strtoupper($this->input->post('sector')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Job Title : </td><td>" . strtoupper($this->input->post('job_title')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Name of Organization </td><td>" . strtoupper($this->input->post('nama_of_organization')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Office Number</td><td>" . strtoupper($this->input->post('organization_number')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Office Address</td><td>" . strtoupper($this->input->post('org_address')) . "</strong></td></tr>";

			$message .= "<tr><td><strong>Office Email : </td><td>" . $this->input->post('org_email') . "</strong></td></tr>";
			$message .= "<tr><td><strong>Officer In Charge : </td><td>" . strtoupper($this->input->post('officer_in_charge')) . "</strong></td></tr>";

			$message .= "<tr><td><strong>Next of Kin Name: </td><td>" . strtoupper($this->input->post('nok_name')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Next of Kin Address </td><td>" . strtoupper($this->input->post('nok_address')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Next of Kin Number </td><td>" . strtoupper($this->input->post('nok_phone')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Relationship</td><td>" . strtoupper($this->input->post('nok_relation')) . "</strong></td></tr>";
			$message .= "</table>";

			$message .= "------<br><br>";

			$message .= "</body></html>";

			// $this->load->library('email');

			$this->email->from('from@mail.com', 'From Namme');
			$this->email->to('to@mail.com');
			$this->email->bcc('bcc@mail.com');

			$this->email->subject($subject);
			$this->email->message($message);

			$this->email->send();

			echo "<script>
    			  window.alert('Borang permohonan berjaya dihantar');
    			  window.location.href = 'elpp_apps';
			</script>";

			$this->elpp_apps();

		}

		$this->output->enable_profiler(false);
	}
	
		public function iel_apps() {

		$data = array();

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

		$this->load->view('apps_iel', $data);
	}
	
		public function submit_apps_iel() {

		$this->form_validation->set_rules('nationality', 'Nationality', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('marital', 'Marital Status', 'required');

		if ($this->form_validation->run() == false) {
			$this->seed_apps();
		} else {

			$data_pemohon = array(
				'nric' => $this->input->post('nric'),
				'name' => strtoupper($this->input->post('name')),
				'nationality' => strtoupper($this->input->post('nationality')),
				'gender' => strtoupper($this->input->post('gender')),
				'dob' => $this->input->post('dob'),
				'phone' => strtoupper($this->input->post('hp')),
				'marital_status' => strtoupper($this->input->post('marital')),
				'email' => $this->input->post('email'),
				'address' => strtoupper($this->input->post('address')),
				'highest_education' => strtoupper($this->input->post('highest_education')),
				'institution_name' => strtoupper($this->input->post('institution_name')),
				'sector' => strtoupper($this->input->post('sector')),
				'job_title' => strtoupper($this->input->post('job_title')),
				'name_of_organization' => strtoupper($this->input->post('nama_of_organization')),
				'organization_phone' => strtoupper($this->input->post('organization_number')),
				'organization_address' => strtoupper($this->input->post('org_address')),
				'officer_in_charge' => strtoupper($this->input->post('officer_in_charge')),
				'nok_name' => strtoupper($this->input->post('nok_name')),
				'nok_address' => strtoupper($this->input->post('nok_address')),
				'nok_phone' => strtoupper($this->input->post('nok_phone')),
				'nok_relation' => strtoupper($this->input->post('nok_relation')),
				'program' => 'IEL',
			);

			$this->db->insert('pemohon_elpp', $data_pemohon);

			$config = array(
				'protocol' => 'mail',
				'mailtype' => 'html',
				'charset' => 'iso-8859-1',
				'mailpath' => '/usr/sbin/sendmail',
			);

			$this->load->library('email');
			$this->email->initialize($config);

			$subject = "INTENSIVE ENGLISH LANGUAGE Application";
			$message = "Salam Sejahtera, <br><br>";
			$message .=
				"<br>
 ";
			$message .= '<br><table rules="none" bordercolor="#ffffff" cellpadding="10" border="0" style = "border-collapse: collapse;">';
			$message .= "<tr><td><strong>Full Name: </td><td>" . strtoupper($this->input->post('name')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Nationality: </td><td>" . strtoupper($this->input->post('nationality')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>NRIC/Passport: </td><td>" . strtoupper($this->input->post('nric')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Gender: </td><td>" . strtoupper($this->input->post('gender')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Date of Birth  : </td><td>" . $this->input->post('dob') . "</strong></td></tr>";
			$message .= "<tr><td><strong>Permanent Address</strong> </td><td>" . strtoupper($this->input->post('address')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Telephone Number : </td><td>" . $this->input->post('hp') . "</strong></td></tr>";
			$message .= "<tr><td><strong>Marital Status : </td><td>" . strtoupper($this->input->post('marital')) . "</strong></td></tr>";

			$message .= "<tr><td><strong>Guardian Name: </td><td>" . strtoupper($this->input->post('nok_name')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Guardian Address </td><td>" . strtoupper($this->input->post('nok_address')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Guardian Number </td><td>" . strtoupper($this->input->post('nok_phone')) . "</strong></td></tr>";
			$message .= "<tr><td><strong>Relationship</td><td>" . strtoupper($this->input->post('nok_relation')) . "</strong></td></tr>";
			$message .= "</table>";

			$message .= "------<br><br>

[Cetakan Komputer] ";

			$message .= "</body></html>";

			// $this->load->library('email');

			$this->email->from('');
			$this->email->to('');
			// $this->email->cc('');
			$this->email->bcc('');

			$this->email->subject($subject);
			$this->email->message($message);

			$this->email->send();

			echo "<script>
    			  window.alert('Borang permohonan berjaya dihantar');
    			  window.location.href = 'elpp_apps';
			</script>";

			$this->iel_apps();

		}

		$this->output->enable_profiler(false);
	}


}
