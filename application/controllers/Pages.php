<?php

class Pages extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->helper('date');
    }
    public function view(){


            $page = "home";

            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
               show_404();
            }
            $data['title'] = "Vítejte na mém webu";
            $datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
            $time = time();
            $data['form'] = $this->Main_model->get_ukoly();
            $this->load->view('templates/header',$data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');

    }

    public function pridat_ukol()
    {
      $result = $this->Main_model->insert();
      redirect(base_url());
    /*if ($result == 1) {
        echo "<h1><center>Úkol byl přidán</center></h1> ";
        ?>
        <button><a href="<?= base_url() ?>">Zpět na hlavní stránku</a></button>
        <?php

      }
      else
      {
        echo "Error!";
      }
      */
}


public function edit_ukol($id)
	{
  $page='edit_ukol';
	$result['data']=$this->Main_model->displayrecordsById($id);
  $this->load->view('templates/header',$result);
  $this->load->view('pages/'.$page, $result);
  $this->load->view('templates/footer');


		/*if($this->input->post('update'))
		{
    $id_get=$this->input->post('id');
		$popis=$this->input->post('popis');
		$konec=$this->input->post('konec');
		$splněno=$this->input->post('splněno');
		$this->Hello_Model->updaterecords($popis,$konec,$splněno,$id_get);
		redirect("Pages");
  }*/
}
public function delete($id)
{
$this->Main_model->delete_by_id($id);
redirect(base_url());



}
public function edit($id)
{
  $popis=$this->input->post('popis');
  $konec=$this->input->post('konec');
  $splneno=$this->input->post('splneno');
  $this->Main_model->updaterecords($popis,$konec,$splneno,$id);
  redirect(base_url());
}
}
