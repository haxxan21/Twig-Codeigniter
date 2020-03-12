<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once ((dirname(__DIR__).'/models/New_model.php'));
use application\models\New_model;
use Illuminate\Support\Facades\DB;
class Welcome extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$array_name = DB::table('categories')->select('name')->get();
		$array_name = json_decode(json_encode($array_name), true);
		$this->load->view('Test_template', ['array_name' => $array_name]);
	}
}
