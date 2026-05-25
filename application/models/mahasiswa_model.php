<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa_model extends CI_Model
{
 private $table = 'mahasiswa';
 public function get_all()
 {
 return $this->db->order_by('id', 'DESC')->get($this->table)->result();
 }
 public function get_by_id($id)
 {
 return $this->db->get_where($this->table, array('id' => $id))->row();
 }
 public function insert($data)
 {
 return $this->db->insert($this->table, $data);
 }
 public function update($id, $data)
 {
 return $this->db->where('id', $id)->update($this->table, $data);
 }
 public function delete($id)
 {
 return $this->db->where('id', $id)->delete($this->table);
 }
 public function cek_nim_edit($nim, $id)
 {
 return $this->db
 ->where('nim', $nim)
 ->where('id !=', $id)
 ->get($this->table)
 ->row();
 }
}