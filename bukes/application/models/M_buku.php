<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_buku extends CI_Model {

	public $_table = "buku";

	public $idBuku;
	public $namaBuku;
	public $pengarang;
	public $harga;
	public $deskripsi;
	public $jumlahHalaman;
	public $tanggalTerbit;
	public $ISBN;
	public $bahasa;
	public $Penerbit;
	public $berat;
	public $panjang;
	public $lebar;
}

?>