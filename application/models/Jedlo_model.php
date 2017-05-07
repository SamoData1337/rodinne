public function _construct()
{
$this->load->database();
}

public function get_jedla($id = FALSE)
{
    if($id == FALSE)
    {
    $query = $this->db->get(´Jedla´);
    return $query->result_array();
    }

    $query = $this->db->get_where(´Jedla´,array(´ID´ => $id));
    return $query->row_array();


}

public function set_jedla($id = 0){
    $this->load->helper(´url´);

    foreach ($_POST as $key => $value) {
    if($key != ´submit´) $data[$key] = $value;

    }

    if($id == 0) {
    return $this->db->insert(´Jedla´, $data);

}   else {
    $this->db->where(´ID´, $id);
    return $this->db->update(´Jedla´, $data);
}

}

public function delete_customers($id) {
$this->db->where(´ID´, $id);
return $this->db->delete(´customers´);
}