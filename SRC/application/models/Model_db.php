<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_db extends CI_Model {
  public function insert_prd() {
    $data = array(
      'num_serie' => $this->input->post('num_serie'),
      'nome' => $this->input->post('nome'),
      'ID_CATEGORIA' => $this->input->post('categoria'),
      'marca' => $this->input->post('marca'),
      'img' => $this->previewupload->data('file_name'),
      'prezzo' => $this->input->post('prezzo'),
      'prezzo_vendita' => $this->input->post('prezzo_vend')
    );

    if($this->db->insert('prodotto', $data)) {
      $last_id = $this->db->insert_id();
      
      foreach ($this->input->post('nome_dett') as $key => $value) {
        //echo $value." - ".$this->input->post('desc_dett')[$key];
        $data = array(
          'ID_PRODOTTO' => $last_id,
          'dettaglio' => $value,
          'descrizione' => $this->input->post('desc_dett')[$key]
        );
        $this->db->insert('prodotto_dettagli', $data);
      }

      return true;
      } else return false;
  }

  public function get_prd() { 
    $q = $this->db->query('
      SELECT 
        prodotto.ID, LEFT(prodotto.nome, 23) AS nome, ID_CATEGORIA, marca, img, prezzo, prezzo_vendita, view, likes, DATE_FORMAT(data, "%d / %m / %Y") AS data, categoria.nome AS nomeCat 
      FROM prodotto 
      JOIN categoria ON categoria.ID = prodotto.ID_CATEGORIA
      WHERE prodotto.ID = "'.$this->uri->segment(2).'"');
    
    if($q->num_rows() == 0) {
      return 0;
    } else {
      return $q->result();
    }    
  }

  public function get_prd_dtl($id) { 
    $q = $this->db->query('SELECT dettaglio, descrizione FROM prodotto_dettagli WHERE ID_PRODOTTO = "'.$id.'"');
    
    if($q->num_rows() == 0) {
      return 0;
    } else {
      return $q->result();
    }  
  }

  public function get_prd_corr($id_prd, $id_cat) { 
    $q = $this->db->query('
      SELECT 
        prodotto.ID, LEFT(prodotto.nome, 23) AS nome, marca, img, prezzo, prezzo_vendita, view, likes, categoria.nome AS nomeCat 
      FROM prodotto 
      JOIN categoria ON categoria.ID = prodotto.ID_CATEGORIA 
      WHERE ID_CATEGORIA = "'.$id_cat.'" AND prodotto.ID != "'.$id_prd.'"
      ORDER BY RAND()
      LIMIT 8');

    if($q->num_rows() == 0) {
      return 0;
    } else {
      return $q->result();
    }
  }

  public function set_prd_view($id_prd) { 
    $this->db->query('UPDATE prodotto SET view = view+1 WHERE ID = "'.$id_prd.'"');
  }

  public function get_prd_home() { 
    $q = $this->db->query('
      SELECT 
        prodotto.ID, LEFT(prodotto.nome, 23) AS nome, marca, img, prezzo, prezzo_vendita, view, likes, categoria.nome AS nomeCat 
      FROM prodotto 
      JOIN categoria ON categoria.ID = prodotto.ID_CATEGORIA 
      ORDER BY prodotto.ID DESC
      LIMIT 16');

    /*SELECT prodotto.ID, LEFT(prodotto.nome, 23) AS nome, marca, img, prezzo, prezzo_vendita, view, likes, categoria.nome AS nomeCat
    FROM prodotto AS r1 
    JOIN categoria ON categoria.ID = prodotto.ID_CATEGORIA
    JOIN (SELECT CEIL(RAND() *
            (SELECT MAX(prodotto.ID)
              FROM prodotto)) AS id) AS r2
    WHERE r1.ID >= r2.ID
    ORDER BY r1.ID ASC
    LIMIT 16 */

    if($q->num_rows() == 0) {
      return 0;
    } else {
      return $q->result();
    }
  }


  public function get_prd_cat() { 
    $q = $this->db->query('
      SELECT 
        prodotto.ID, LEFT(prodotto.nome, 23) AS nome, marca, img, prezzo, prezzo_vendita, view, likes, categoria.nome AS nomeCat 
      FROM prodotto 
      JOIN categoria ON categoria.ID = prodotto.ID_CATEGORIA 
      WHERE categoria.ID = "'.$this->uri->segment(2).'"
      LIMIT 16');

    if($q->num_rows() == 0) {
      return 0;
    } else {
      return $q->result();
    }
  }

  public function get_new_prd_week() { 
    $q = $this->db->query('
      SELECT 
        prodotto.ID, LEFT(prodotto.nome, 23) AS nome, marca, img, prezzo, prezzo_vendita, view, likes, categoria.nome AS nomeCat 
      FROM prodotto 
      JOIN categoria ON categoria.ID = prodotto.ID_CATEGORIA 
      WHERE YEARWEEK(data, 1) = YEARWEEK(CURDATE(), 1) 
      ORDER BY data DESC 
      LIMIT 16');

    if($q->num_rows() == 0) {
      return 0;
    } else {
      return $q->result();
    }
  }

  public function get_prd_search() { 
    $cat = '';
    $price = '';
    $price_ven = '';
    if($this->uri->segment(4) != 'all') $cat = 'AND categoria.ID = "'.$this->uri->segment(4).'"';
    if($this->uri->segment(5) != '0,1000') { $arr = explode(",", $this->uri->segment(5)); $price = 'AND prezzo BETWEEN '.$arr[0].' AND '.$arr[1]; }
    if($this->uri->segment(6) != '0,1000') { $arr = explode(",", $this->uri->segment(6)); $price_ven = 'AND prezzo_vendita BETWEEN '.$arr[0].' AND '.$arr[1]; }

    $q = $this->db->query("
      SELECT prodotto.ID, LEFT(prodotto.nome, 23) AS nome, marca, img, prezzo, prezzo_vendita, view, likes, categoria.nome AS nomeCat 
      FROM prodotto 
      JOIN categoria ON categoria.ID = prodotto.ID_CATEGORIA 
      WHERE (prodotto.nome LIKE '%".$this->uri->segment(3)."%') OR (marca LIKE '%".$this->uri->segment(3)."%')
      ".$cat."
      ".$price."
      ".$price_ven."
      LIMIT 16");

    if($q->num_rows() == 0) {
      return 0;
    } else {
      return $q->result();
    }
  }

  public function check_prd_available() { 
    $q = $this->db->query('SELECT * FROM noleggio WHERE ID_PRODOTTO = "'.$this->input->post('prd').'" AND data_fine >= "'.$this->input->post('dateStart').'"');

    if($q->num_rows() > 0)
      return false;
    else
      return true;
  }

  public function add_user() {
    $data = array(
      'nome_comp' => $this->input->post('fullname'),
      'email' => $this->input->post('email'),
      'password' => $this->input->post('psw')
    );

    if($this->db->insert('utente', $data))
      return true;
    else
      return false;
  }

  public function can_login() {
    $this->db->where('email', $this->input->post('email'));
    $this->db->where('password', md5(md5($this->input->post('psw'))));

    $query = $this->db->get('utente');

    if($query->num_rows() == 1)
      return true;
    else
      return false;
  }
}