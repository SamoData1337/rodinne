public function _construct(){

parent::_construct();
$this->load->model(´Jedlo_model´);
$this->load->helper(´url_helper´);
}

public function index(){

$data[´jedla´] = $this->Jedlo_model->get_jedla();
$data[´title´] = ´jedla´;

$this->load->view(´template/header´, $data);
$this->load->view(´template/navigation´);
$this->load->view(´objednavky/index´, $data);
$this->load->view(´template/footer´);
}

