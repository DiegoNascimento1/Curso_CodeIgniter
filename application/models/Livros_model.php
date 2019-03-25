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

            $this->db->select('livros.*,resumo.resumo');
            $this->db->from('livros');
            $this->db->join('resumo', 'livros.id = resumo.id_livro', 'left');
            
            $this->db->where('livros.id', $id);
            $this->db->limit(1);
            $query = $this->db->get();
            return $query->row();
        }
    }
}