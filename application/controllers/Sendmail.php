<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Sendmail extends CI_Controller
{

/*    function __construct() {
parent::__construct();
$this->check_isvalidated();
}

private function check_isvalidated() {
if (!$this->session->userdata('validated')) {
redirect('login');
}
}
 */
    public function mailrelevantpersonnel()
    {
        $config = array(
            'protocol' => 'mail',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 587,
            'smtp_user' => '',
            'smtp_pass' => '',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'mailpath' => '/usr/sbin/sendmail',
        );

        $this->load->library('email');
        $this->email->initialize($config);

        $subject = "The Communicative English Programme APPLICATION FORM FROM UMCCed Website";
        $message .= "Salam Sejahtera, <br><br>";
        $message .=
            "Maklumat permohonan program The Communicative English Programme yang dihantar melalui laman web UMCCed. <br>
 <br>";
        $message .= '<br><table rules="none" bordercolor="#ffffff" cellpadding="10" border="0" style = "border-collapse: collapse;">';
        $message .= "<tr><td><strong>Full Name: </td><td>" . $name . "</strong></td></tr>";
        $message .= "<tr><td><strong>Nationality: </td><td>" . $nationality . "</strong></td></tr>";
        $message .= "<tr><td><strong>IC Number/Passport: </td><td>" . $icno . "</strong></td></tr>";
        $message .= "<tr><td><strong>Gender: </td><td>" . $gender . "</strong></td></tr>";
        $message .= "<tr><td><strong>Date of Birth  : </td><td>" . $dob . "</strong></td></tr>";
        $message .= "<tr><td><strong>Permanent Address</strong> </td><td><strong>" . $address . "</strong></td></tr>";
        $message .= "<tr><td><strong>Telephone Number : </td><td>" . $mobile_num . "</strong></td></tr>";
        $message .= "<tr><td><strong>Marital Status : </td><td>" . $marital . "</strong></td></tr>";
        $message .= "<tr><td><strong>E-mail : </td><td>" . $email . "</strong></td></tr>";

        $message .= "<tr><td><strong>Sector : </td><td>" . $sector . "</strong></td></tr>";
        $message .= "<tr><td><strong>Job Title : </td><td>" . $job_title . "</strong></td></tr>";
        $message .= "<tr><td><strong>Name of Organization </strong> </td><td><strong>" . $organization . "</strong></td></tr>";
        $message .= "<tr><td><strong>Office Number</strong> </td><td><strong>" . $office_num . "</strong></td></tr>";
        $message .= "<tr><td><strong>Office Address</strong> </td><td><strong>" . $office_address . "</strong></td></tr>";

        $message .= "<tr><td><strong>Office Email : </td><td>" . $job_email . "</strong></td></tr>";
        $message .= "<tr><td><strong>Officer In Charge : </td><td>" . $job_oic . "</strong></td></tr>";

        $message .= "<tr><td><strong>Next of Kin Name: </td><td>" . $nok_name . "</strong></td></tr>";
        $message .= "<tr><td><strong>Next of Kin Address </strong> </td><td><strong>" . $nok_address . "</strong></td></tr>";
        $message .= "<tr><td><strong>Next of Kin Number </strong> </td><td><strong>" . $nok_number . "</strong></td></tr>";
        $message .= "<tr><td><strong>Relationship</strong> </td><td><strong>" . $relationship . "</strong></td></tr>";
        $message .= "</table>";

/*$message .= "<br><br><br>Sila berikan jawapan dengan melayari laman pentadbir e-Maklumbalas@UMCCed <br>
(http://www.umcced.edu.my/emaklumbalas/administrator).<br><br>
Terima Kasih atas kerjasama pihak tuan/puan.<br><br>";
 */
        $message .= "------<br><br>
Pentadbir Laman Web UMCCed<br>
[Cetakan Komputer] ";

        $message .= "</body></html>";

        // $this->load->library('email');

        $this->email->subject($subject);
        $this->email->message($message);

        $this->email->send();

        echo $this->email->print_debugger();

    }

}
