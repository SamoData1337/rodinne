public function _construct(){

parent::_construct();
$this->load->model(´objednavky_model´);
$this->load->helper(´url_helper´);
}

public function index(){

$data[´objednavky´] = $this->objednavky_model->get_objednavky();
$data[´title´] = ´objednavky´;

$this->load->view(´template/header´, $data);
$this->load->view(´template/navigation´);
$this->load->view(´objednavky/index´, $data);
$this->load->view(´template/footer´);
}

public function view($id = NULL){

$data[´objednavka_item´] = $this->objednavky_model->get_objednavky($id);

if(empty($data[´objednavka_item´]))
    {
    show_404();
    }
$data[´title´] = $data[´objednavka_item´][´ID´];
$data[´subtitle´] = $data[´objednavka_item´][´Typ_oslavy´] . $data[´objednavka_item´][´Miesto_konania_ID´];

$this->load->view(´template/header´,$data);
$this->load->view(´template/navigation´);
$this->load->view(´operacie/view´,$data);
$this->load->view(´template/footer´);

}

public function edit()
{

$id = $this->uri->segment(3);
if(empty($id))
{
show_404();
}

$this->load->helper(´form´);
$this->load->library(´form_validation´);

$data[´objednavky_item´] = $this->objednavky_model->get_objednavky_by_id($id);

$data[´title´] = ´Edituj objednavku´;
$data[´subtitle´] = $data[´objednavky_item´][´ID´] . $data[´objednavky_item´][´Typ_oslavy´];

$this->form_validation->set_rules(´Specialne_poziadavky_ID´,´Specialne poziadavky´,´required´);
$this->form_validation->set_rules(´Typ_oslavy´,´Typ oslavy´,´required´);
$this->form_validation->set_rules(´Miesto_konania_ID´,´Miesto konania´,´required´);
$this->form_validation->set_rules(´Vyzdoba_ID´,´Vyzdoba´,´required´);
$this->form_validation->set_rules(´Menu_ID´,´Menu´,´required´);

if($this->form_validation->run() === FALSE)
{
$this->load->view(´template/header´,$data);
$this->load->view(´template/navigation´);
$this->load->view(´operacie/edit´, $data);
$this->load->view(´template/footer´);
}else {
$this->objednavky_model->set_objednavky($id);
redirect(uri: base_url() . ´index.php/objednavky´);
}

}