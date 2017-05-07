class Users extends CI_controller {
    public function index()
    {
    $this->load->view(´template/header´);
    $this->load->view(´template/navigation´);
    $this->load->view(´users/index´);
    $this->load->view(´template/footer´);
    }


}