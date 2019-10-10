<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Mymodel extends CI_Model {

	public $title;
	public $content;
	public $date;
	public $table;

	public function get_last_ten_entries($table) {
		$query = $this->db->get('PEMOHON_BUTIR_DIRI', 10);
		return $query->result();
	}

	public function insert_entry() {
		$this->title = $_POST['title']; // please read the below note
		$this->content = $_POST['content'];
		$this->date = time();

		$this->db->insert('entries', $this);
	}

	public function update_entry() {
		$this->title = $_POST['title'];
		$this->content = $_POST['content'];
		$this->date = time();

		$this->db->update('entries', $this, array('id' => $_POST['id']));
	}

	function get_info($table) {
		$this->db->select('*');
		$query = $this->db->get($table);
		$this->db->order_by('SESI_PENGAJIAN', 'DESC');
		$this->db->order_by('SESI_SEMESTER', 'DESC');

		return $query->result_array();
	}

	//Drop down SESISEM
	function get_sesisem($cols = array('key' => 'id', 'val' => 'name'), $with_select = 1) {
		extract($cols);
		$qry = "SELECT distinct year(date) as tahun
				from posteaduan
				order by tahun desc";

		$query = $this->db->query($qry);
		$arr = $query->result_array();
		if ($with_select) {
			$data[''] = '-- Select --';
		}

		foreach ($arr as $k => $v) {
			extract($v);
			$data[$$key] = $$val;
		}
		return $data;
	}

	function get_info_multiple_cond($table, $where = 0) {
		$this->db->select('*');
		$this->db->from($table);
		if ($where != 0) {
			foreach ($where as $key => $val) {
				$this->db->where($key, $val);
			}
		}
		/*$this->db->join('E_POHON_IPS ', 'AKK_NOMKPB= MBUT_NOMKPB', 'left');*/
		$query = $this->db->get();
		return $query->result_array();
	}

	function count_info_multiple_cond($table, $where = 0) {
		$this->db->select('*');
		$this->db->from($table);
		if ($where != 0) {
			foreach ($where as $key => $val) {
				$this->db->where($key, $val);
			}
		}
		/*$this->db->join('E_POHON_IPS ', 'AKK_NOMKPB= MBUT_NOMKPB', 'left');*/
		$query = $this->db->get();
		return $query->num_rows();
	}

	function get_count_aduan($status) {
		$query = $this->db->query("SELECT  count(*) as Jumlah FROM posteaduan
			WHERE status='$status'
			group by status");

		return $query->result_array();
	}

	function get_count_aduan_tahun() {
		$query = $this->db->query("SELECT count(*) as Jumlah, year(date) tahun FROM posteaduan p
			WHERE status not in ('Kembali kepada penga','Reject')
			group by tahun
			order by tahun");

		return $query->result_array();
	}

	function get_count_klasifikasi($year) {
		$query = $this->db->query("SELECT classification, count(name) as Jumlah FROM posteaduan
			WHERE status not in ('Kembali kepada penga','Reject')
			and year(date)='$year'
			group by classification;");

		return $query->result_array();
	}

	function get_count_jabatan($year) {
		$query = $this->db->query("SELECT for_action, count(name) as Jumlah,
			round((COUNT(*) / (SELECT COUNT(*) FROM posteaduan WHERE status not in ('Reject')
			and year(date)='$year')) * 100) AS 'Peratus' FROM posteaduan
			WHERE status not in ('Reject')
			and year(date)='$year'
			group by for_action;");

		return $query->result_array();
	}

	function get_year() {
		$query = $this->db->query("SELECT distinct year(date) as tahun
			from posteaduan
			where year(date)=year(CURDATE())
			order by tahun desc");

		return $query->result_array();
	}

	function get_list_aduan($status) {
		$query = $this->db->query("SELECT p.*,comp_reply, ir_reply, reminder,ur.name as upload_user FROM posteaduan p
                left join eaduan_reply er on p.ref_num=er.ref_num
                left join upload_receipt ur on p.ref_num=ur.receipt_id
                left join upload_admfile ua on p.ref_num = ua.receipt_id
                where p.status='$status' ");

		return $query->result_array();
	}

	function get_individu_aduan($status, $ref_num) {
		$query = $this->db->query("SELECT p.*,comp_reply, ir_reply, reminder,ur.name as upload_user FROM posteaduan p
                left join eaduan_reply er on p.ref_num=er.ref_num
                left join upload_receipt ur on p.ref_num=ur.receipt_id
                left join upload_admfile ua on p.ref_num = ua.receipt_id
                where p.status='$status'
                and p.ref_num='$ref_num' ");

		return $query->result_array();
	}

	function get_department($cols = array('key' => 'id', 'val' => 'name'), $with_select = 1) {
		extract($cols);
		$qry = "SELECT * FROM email";

		$query = $this->db->query($qry);
		$arr = $query->result_array();
		if ($with_select) {
			$data[''] = '-- Select --';
		}

		foreach ($arr as $k => $v) {
			extract($v);
			$data[$$key] = $$val;
		}
		return $data;
	}

}