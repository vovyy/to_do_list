<?php
class Main_model extends CI_Model {

  public function __construct() {
      parent::__construct();
}

public function insert(){
    $this->load->database();
    $data = array(

        "popis" => $this->input->post('popis'),
        "splněno" => $this->input->post('splněno'),
        "konec" => $this->input->post('konec'),
);

if ($this->db->insert('form', $data))
{
  return true;
}
else {
  return false;
}
}
protected $table = "form";
public function get_ukoly()
{
    $this->db->select('id, popis, konec, splněno');
	  $this->db->from('form');
		//$this->db->where('nakladatel.id', $id);
        $this->db->order_by('id', 'ASC');
       // $this->db->join('kniha', 'nakladatel.id = kniha.nakladatel');
        $resultset = $this->db->get();
        $result =  $resultset->result();

        return $result;
}

/**public function edit_id($id)
{
  $this->db->from('form');
  $this->db->where('id', $id);
  $resultset = $this->db->get();
  $result =  $resultset->result();

  return $result;

}
**/

function displayrecordsById($id)
	{
	/*$query= $this->db->query("SELECT * FROM form WHERE id='".$id."'");
	return $query->result();*/
  $this->db->select("*");
  $this->db->from("form");
  $this->db->where("id",$id);
  $return = $this->db->get()->result();
  return $return;
	}

 function delete_by_id($id)
 {
   $this->db->where("id",$id);
   $this->db->delete('form');

 }

	function updaterecords($popis,$konec,$splneno,$id)
	{
    $data = array(
          "popis" => $popis,
          "konec" => $konec,
          "splněno" => $splneno,
        );
    $this->db->where('id', $id);
    $result = $this->db->update('form', $data);
    return $result;
	//$query=$this->db->query("UPDATE form SET popis='$popis',konec='$konec', splněno='$splneno', WHERE id='".$id."'");
  //return $query->result();
	}






}
