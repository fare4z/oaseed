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

        $subject = "Tajuk Email";
        $message .= "Email Content, <br><br>";
        $message .=
            "Content 2 <br>
 <br>";
        $message .= '<br><table rules="none" bordercolor="#ffffff" cellpadding="10" border="0" style = "border-collapse: collapse;">';
             $message .= "</table>";

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
