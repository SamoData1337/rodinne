public function _construct()
{
$this->load->database();
}

public function get_jedla($id = FALSE)
{
    if($id == FALSE)
    {
    $query = $this->db->get()
    }


}