<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livros_model extends CI_Model {

    public function listarLivros()
    {
        //$this->db->where('nome_livro','Livro de PHP');
        //$this->db->order_by('nome_livro','DESC');
        $query = $this->db->get('livros');
        return $query->result();
    }

    public function getById($id=NULL)
    {
        if ($id) {
            
            $this->db->where('id', $id);
            $this->db->limit(1);
            $query = $this->db->get('livros');
            return $query->row();
        }
    }
}