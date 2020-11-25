<?php
class Home_model extends CI_Model{
	public $table = 'login_session';
	public $id = 'id';
	

	function __construct(){
		parent::__construct();
	}
    //ambil data mahasiswa dari database
	function get_pasien(){
		$query = $this->db->get('pasien');
		return $query;
	}
	function tampil(){
		$level = 'Pasien';
		echo json_encode($this->db->get_where('login_session', ['level' => $level])->result());
	}
	function insert_pasien($data) {
		$query = $this->db->insert("pasien", $data);

		if($query){
			return true;
		}else{
			return false;
		}
	}
	function insert_login($data) {
		$query = $this->db->insert("login_session", $data);

		if($query){
			return true;
		}else{
			return false;
		}
	}
	function get_iduser($nama_d,$tgl,$nama_b) {
		$this->db->where('nama_depan',$nama_d);
		$this->db->where('tanggal_lahir',$tgl);
		$this->db->where('nama_belakang',$nama_b);
		return $this->db->get('login_session')->row();
	}
	function ajax_get_user($id) {
		$this->db->where('id_user',$id);
		return $this->db->get('login_session')->row();
	}

	function get_rencana_sebelum(){
		$this->db->select('*');
		$this->db->from('booking a');
		$this->db->join('rencana b','a.id_booking=b.id_booking');
		$this->db->join('pasien c','a.id_pasien=c.id_pasien');
		$this->db->join('dokter d',' a.id_dokter=d.id_dokter');
		$this->db->join('cabang e','a.id_cabang=e.id_cabang');
		$this->db->order_by('b.tanggal_rencana', 'asc');
		$this->db->order_by('b.jam_rencana', 'asc');
		$query = $this->db->get();
		return $query;
	}
	function get_booking(){
		$konf = '0';
		$this->db->select('*');
		$this->db->from('booking a');
		$this->db->join('rencana b','a.id_booking=b.id_booking');
		$this->db->join('pasien c','a.id_pasien=c.id_pasien');
		$this->db->join('dokter d',' a.id_dokter=d.id_dokter');
		$this->db->join('cabang e','a.id_cabang=e.id_cabang');
		$this->db->where('a.konfirmasi', $konf);
		return $this->db->get();
	}

	function get_medis($id_dokter){
		$konf = '1';
		$this->db->select('a.id_booking ,d.nama_depan, d.nama_belakang, b.jam_rencana, b.tanggal_rencana, d.tanggal_lahir, c.id_rekam_medis, a.status, d.id_pasien, e.nama_dokter');
		$this->db->from('booking a');
		$this->db->join('rencana b','a.id_booking=b.id_booking');
		$this->db->join('rekam_medis c','a.id_booking=c.id_booking');
		$this->db->join('pasien d','a.id_pasien=d.id_pasien');
		$this->db->join('dokter e',' a.id_dokter=e.id_dokter');
		$this->db->where('a.konfirmasi', $konf);
		$this->db->where('a.id_dokter', $id_dokter);
		$this->db->order_by('d.id_pasien', 'DESC');
		return $this->db->get();
	}

	public function periksa_edit_status($id_pasien, $id_rekam_medis, $data){
		$this->db->where('id_pasien', $id_pasien);
		$this->db->where('id_rekam_medis', $id_rekam_medis);
		$this->db->update('rekam_medis', $data);
	}

	public function add_rekam_medis($data)
	{

		$query = $this->db->insert("rekam_medis", $data);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	function update_booking($id, $data) {
		$this->db->where("id_booking", $id);
		$this->db->update("booking", $data);
	}

	function get_data_janji(){
		$status = '0';
		$this->db->select('*');
		$this->db->from('booking a');
		$this->db->join('rencana b','a.id_booking=b.id_booking');
		$this->db->join('pasien c','a.id_pasien=c.id_pasien');
		$this->db->join('dokter d',' a.id_dokter=d.id_dokter');
		$this->db->join('rekam_medis e','a.id_booking=e.id_booking');
		// $this->db->join('metode_pembayaran f','b.id_metode=f.id_metode');
		$this->db->join('cabang g','a.id_cabang=g.id_cabang');
		$this->db->where('e.status', $status);
		return $this->db->get();
	}

	function update_rekam_medis($id, $data) {
		$this->db->where("id_booking", $id);
		$this->db->update("rekam_medis", $data);
	}

	public function add_antrian($data)
	{
		$query = $this->db->insert("antrian", $data);
		if($query){
			return true;
		}else{
			return false;
		}
	}

	function update_rencana($id, $data) {
		$this->db->where("id_rcn", $id);
		$this->db->update("rencana", $data);
	}

	function update_rencana_bayar($id, $data) {
		$this->db->where("id_booking", $id);
		$this->db->update("rencana", $data);
	}

	function get_data_bayar(){
		$status = '2';
		$this->db->select('*');
		$this->db->from('booking a');
		$this->db->join('rencana b','a.id_booking=b.id_booking');
		$this->db->join('pasien c','a.id_pasien=c.id_pasien');
		$this->db->join('dokter d',' a.id_dokter=d.id_dokter');
		$this->db->join('rekam_medis e','a.id_booking=e.id_booking');
		// $this->db->join('metode_pembayaran f','b.id_metode=f.id_metode');
		$this->db->join('cabang g','a.id_cabang=g.id_cabang');
		$this->db->where('e.status', $status);
		return $this->db->get();
	}

	public function edit_pembayaran($id_booking)
	{

		$query = $this->db->where("id_booking", $id_booking)
		->get("rencana");
		$query2 = $this->db->where("id_booking", $id_booking)
		->get("rekam_medis");

		if($query && $query2){
			return $query->row();
			return $query2->row();
		}else{
			return false;
		}

	}

	public function edit_pasien($id_user)
	{

		$query = $this->db->where("id_user", $id_user)
		->get("pasien");

		if($query){
			return $query->row();
		}else{
			return false;
		}

	}

	function get_proses_bayar($id_booking){
		$status = '2';
		$this->db->select('*');
		$this->db->from('booking a');
		$this->db->join('rencana b','a.id_booking=b.id_booking');
		$this->db->join('pasien c','a.id_pasien=c.id_pasien');
		$this->db->join('dokter d',' a.id_dokter=d.id_dokter');
		$this->db->join('cabang g','a.id_cabang=g.id_cabang');
		$this->db->join('rekam_medis e','a.id_booking=e.id_booking');
		$this->db->join('metode_pembayaran f','b.id_metode=f.id_metode');
		$this->db->where('a.id_booking', $id_booking);
		$this->db->where('e.status', $status);
		return $this->db->get();
	}

	function get_data_user($id_user){
		$this->db->select('*');
		$this->db->from('login_session');
		$this->db->where('id_user', $id_user);
		return $this->db->get();
	}

	function get_layanan($id_booking){
		$status = '1';
		$this->db->select('*');
		$this->db->from('booking a');
		$this->db->join('rekam_medis b','a.id_booking=b.id_booking');
		$this->db->join('pilih_layanan c','b.id_rekam_medis=c.id_rekam_medis');
		$this->db->join('layanan d','c.id_layanan=d.id_layanan');
  // $this->db->where('e.status', $status);
		$this->db->where('a.id_booking', $id_booking);
		return $this->db->get();
	}

	function get_diskon(){
		$this->db->order_by('id_diskon', 'DESC');
		return $this->db->get('diskon')->result_array();
	}

	function get_laporan_pemeriksaan($id_dokter){
		$stat1 = '3';
		$stat2 = '3';
		$this->db->select('*');
		$this->db->from('booking a');
		$this->db->join('rencana b','a.id_booking=b.id_booking');
		$this->db->join('pasien c','a.id_pasien=c.id_pasien');
		$this->db->join('dokter d',' a.id_dokter=d.id_dokter');
		$this->db->join('cabang e','a.id_cabang=e.id_cabang');
		$this->db->join('rekam_medis f','a.id_booking=f.id_booking');
		$this->db->join('login_session g','a.id_user=g.id_user');
		$this->db->where('a.status', $stat1);
		$this->db->where('f.status', $stat2);
		$this->db->where('a.id_dokter', $id_dokter);
		return $this->db->get();
	}

	function get_laporan_pendapatan($id_dokter = ''){
		$this->db->select('tanggal_periksa, nama_dokter, spesialis, tanggal_rencana,SUM(rekam_medis.grandtotal) AS money, DAYNAME(tanggal_rencana) as hari');
		$this->db->from('rencana');
		$this->db->join('rekam_medis','rencana.id_booking= rekam_medis.id_booking');
		$this->db->join('booking','booking.id_booking= rencana.id_booking');
		$this->db->join('dokter','dokter.id_dokter= booking.id_dokter');
		$this->db->where('rekam_medis.status',3);
		$this->db->where('booking.status',3);
		$this->db->group_by('rencana.tanggal_rencana');

		if ($id_dokter){
            $this->db->where('booking.id_dokter', $id_dokter);
        }

		return $this->db->get();
	}

	function get_laporan_pendapatan_m($id_dokter = ''){

		$this->db->select('tanggal_periksa, nama_dokter, spesialis, tanggal_rencana,SUM(rekam_medis.grandtotal) AS money, DAYNAME(tanggal_rencana) as hari');
		$this->db->from('rencana');
		$this->db->join('rekam_medis','rencana.id_booking= rekam_medis.id_booking');
		$this->db->join('booking','booking.id_booking= rencana.id_booking');
		$this->db->join('dokter','dokter.id_dokter= booking.id_dokter');
		$this->db->where('rekam_medis.status',3);
		$this->db->where('booking.status',3);
		$this->db->group_by('YEARWEEK(tanggal_periksa)');
		// $this->db->group_by('rencana.tanggal_rencana');
		$this->db->order_by('rencana.tanggal_rencana','ASC');
		$this->db->limit(7);

		if ($id_dokter){
            $this->db->where('booking.id_dokter', $id_dokter);
        }

		return $this->db->get();
	}

	function get_laporan_pendapatan_b($id_dokter = ''){
		$this->db->select('MONTH(tanggal_periksa) AS bulan,tanggal_periksa, nama_dokter, spesialis, tanggal_rencana,SUM(rekam_medis.grandtotal) AS money, DAYNAME(tanggal_rencana) as hari');
		$this->db->from('rencana');
		$this->db->join('rekam_medis','rencana.id_booking= rekam_medis.id_booking');
		$this->db->join('booking','booking.id_booking= rencana.id_booking');
		$this->db->join('dokter','dokter.id_dokter= booking.id_dokter');
		$this->db->where('rekam_medis.status',3);
		$this->db->where('booking.status',3);
		$this->db->group_by('MONTH(tanggal_periksa)');
		// $this->db->group_by('rencana.tanggal_rencana');
		$this->db->order_by('rencana.tanggal_rencana','ASC');
		$this->db->limit(30);

		if ($id_dokter){
            $this->db->where('booking.id_dokter', $id_dokter);
        }

		return $this->db->get();
	}	

	function get_laporan_pendapatan_t($id_dokter = ''){
		$this->db->select('YEAR(tanggal_periksa) AS thn,tanggal_periksa, nama_dokter, spesialis, tanggal_rencana,SUM(rekam_medis.grandtotal) AS money, DAYNAME(tanggal_rencana) as hari');
		$this->db->from('rencana');
		$this->db->join('rekam_medis','rencana.id_booking= rekam_medis.id_booking');
		$this->db->join('booking','booking.id_booking= rencana.id_booking');
		$this->db->join('dokter','dokter.id_dokter= booking.id_dokter');
		$this->db->where('rekam_medis.status',3);
		$this->db->where('booking.status',3);
		$this->db->group_by('YEAR(tanggal_periksa)');
		// $this->db->group_by('rencana.tanggal_rencana');
		$this->db->order_by('rencana.tanggal_rencana','ASC');
		$this->db->limit(365);

		if ($id_dokter){
            $this->db->where('booking.id_dokter', $id_dokter);
        }

		return $this->db->get();
	}

	function get_laporan($id_dokter = ''){
		$stat1 = '1';
		$stat2 = '3';
		$this->db->select('*');
		$this->db->from('booking a');
		$this->db->join('rencana b','a.id_booking=b.id_booking');
		$this->db->join('pasien c','a.id_pasien=c.id_pasien');
		$this->db->join('dokter d',' a.id_dokter=d.id_dokter');
		$this->db->join('cabang e','a.id_cabang=e.id_cabang');
		$this->db->join('rekam_medis f','a.id_booking=f.id_booking');
		$this->db->join('login_session g','a.id_user=g.id_user');
		$this->db->where('a.status', $stat1);
		$this->db->where('f.status', $stat2);

		if ($id_dokter){
            $this->db->where('a.id_dokter', $id_dokter);
        }

		return $this->db->get();
	}
	function get_harian(){
		$this->db->select('tanggal_rencana, SUM(rekam_medis.grandtotal) AS money');
		$this->db->from('rencana');
		$this->db->join('rekam_medis','rencana.id_booking= rekam_medis.id_booking');
		$this->db->where('rekam_medis.status',3);
		$this->db->group_by('tanggal_rencana');
		return $this->db->query("select *,SUM(rekam_medis.grandtotal) AS money,DAYNAME(tanggal_rencana) as hari FROM rencana join rekam_medis on rencana.id_booking= rekam_medis.id_booking where rekam_medis.status = 3 GROUP BY tanggal_rencana");
	}
	function get_perdokter(){
		return $this->db->query("select nama_dokter, spesialis, tanggal_rencana,SUM(rekam_medis.grandtotal) AS money FROM rencana join rekam_medis on rencana.id_booking= rekam_medis.id_booking JOIN booking on booking.id_booking=rencana.id_booking join dokter on dokter.id_dokter = booking.id_dokter where rekam_medis.status = 3  GROUP by booking.id_dokter");
	}
} 