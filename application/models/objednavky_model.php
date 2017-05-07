public function _construct()
{
$this->load->database();
}

public function get_objednavky($id = FALSE)
{
if($id == FALSE)
{
$query = $this->db->get(´objednavky´);
return $query->result_array();
}

$query = $this->db->get_where(´objednavky´,array(´ID´ => $id));
return $query->row_array();


}

public function set_objednavky($id = 0){
$this->load->helper(´url´);

foreach ($_POST as $key => $value) {
if($key != ´submit´) $data[$key] = $value;

}

if($id == 0) {
return $this->db->insert(´objednavky´, $data);

}   else {
$this->db->where(´ID´, $id);
return $this->db->update(´objednavky´, $data);
}

}

public function delete_objednavky($id) {
$this->db->where(´ID´, $id);
return $this->db->delete(´objednavky´);
}