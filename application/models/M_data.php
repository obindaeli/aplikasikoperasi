<?php

class M_data extends CI_Model{

        public function tampil_data($table)
        {
            return $this->db->get($table);
        }

        public function input_data($table, $data)
        {
            $this->db->insert($table, $data);
        }

        public function hapus_data($where,$table)
        {
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function edit_data($where,$table){
            return $this->db->get_where($table,$where);
        }
        

        public function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }

        public function detail_data($id=NULL){
            $query=$this->db->get_where('koperasi',array('id_koperasi' =>$id))->row();
            return $query;
        } 

        public function getrat($id=NULL){
            $query=$this->db->query("SELECT * FROM `tb_rat` 
                                    LEFT JOIN koperasi ON koperasi.id_koperasi=tb_rat.id_koperasi
                                    LEFT JOIN jenis_koperasi ON jenis_koperasi.id_jenis_koperasi=koperasi.id_jenis_koperasi 
                                    WHERE koperasi.id_koperasi='$id'");
            return $query->result();
        } 

        public function viewleftjointwotabel($table1, $table2, $field1){
            $query=$this->db->query("SELECT * FROM `$table1` LEFT JOIN `$table2` ON `$table1`.`$field1`=`$table2`.`$field1`");
            return $query->result();
        }

        public function getdata($table, $field,$id){
            $query=$this->db->query("SELECT * FROM `$table` WHERE `$field` ='$id'");
            return $query->result();
        }

        public function getpermohonanbaru($step, $status){
            $query=$this->db->query("SELECT *, opd.nama_opd FROM `pengajuan` 
                                    JOIN opd ON opd.id_opd=pengajuan.id_opd
                                    WHERE status_pengajuan='$status' AND step ='$step'");
            return $query->result();
        }

        public function getdetailpermohonanbaru($id){
            $query=$this->db->query("SELECT *, opd.nama_opd FROM `pengajuan` 
                                    JOIN opd ON opd.id_opd=pengajuan.id_opd
                                    WHERE id_pengajuan ='$id'");
            return $query->result();
        }

        public function getdokumen($id){
            $query=$this->db->query("SELECT *FROM `dokumen` WHERE id_pengajuan ='$id'");
            return $query->result();
        }

       
    }

?>