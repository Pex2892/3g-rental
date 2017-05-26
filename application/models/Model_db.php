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

  public function get_prd_home() { 
    $q = $this->db->query('
      SELECT 
        prodotto.ID, LEFT(prodotto.nome, 23) AS nome, marca, img, prezzo, prezzo_vendita, view, likes, categoria.nome AS nomeCat 
      FROM prodotto 
      JOIN categoria ON categoria.ID = prodotto.ID_CATEGORIA 
      ORDER BY RAND() 
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
    $q = $this->db->query("
      SELECT prodotto.ID, LEFT(prodotto.nome, 23) AS nome, marca, img, prezzo, prezzo_vendita, view, likes, categoria.nome AS nomeCat 
      FROM prodotto 
      JOIN categoria ON categoria.ID = prodotto.ID_CATEGORIA 
      WHERE (prodotto.nome LIKE '%".$this->uri->segment(3)."%') OR (marca LIKE '%".$this->uri->segment(3)."%') 
      LIMIT 16");

    if($q->num_rows() == 0) {
      return 0;
    } else {
      return $q->result();
    }

  }

}