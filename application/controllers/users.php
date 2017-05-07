<?php
class Users extends CI_controller {
    public function index()
    {
    $this->load->view( 'template/header');
    $this->load->view( 'template/navigation');
    $this->load->view( 'users/index');
    $this->load->view( 'template/footer');
    }

    public function __construct()
    {
        Parent::__construct();
        $this->load->model("users_model");
    }

    public function users_page()
    {
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));

        $users = $this->users_model->get_users();
        $data = array();

        foreach ($users->result() as $r) {
            $data[] = array (
                $r->id,
                $r->firstname,
                $r->lastname,
                $r->email
            );
        }

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $users->num_rows(),
            "recordsFiltered" => $users->num_rows(),
            "data" => $data
        );
        echo json_encode($output);
        exit();

    }


}