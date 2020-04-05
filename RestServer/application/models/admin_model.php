<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {

    public function index(){
       
    }

    // Research Groups

        public function getResearchGroups(){
            return $this->db->order_by('rs_id','DESC')->get('tb_research_category')->result();
        }

        public function createResearchGroups($data){
            $this->db->insert('tb_research_category', $data);
            return $this->db->affected_rows();

        }

        public function updateResearchGroup($data){
            $this->db->where('rs_id',$data['rs_id'] );
            $this->db->update('tb_research_category', $data);
            return $this->db->affected_rows();
        }


        public function deleteResearchGroup($id){
            $this->db->where('rs_id', $id);
            $this->db->delete('tb_research_category');
            return $this->db->affected_rows();
        }

   
    //Classes
        public function getAmountClasses(){
            $this->db->get('tb_class');
            return $this->db->affected_rows();
        }

        public function getClasses(){
            return $this->db->get('tb_class')->result();
        }

        public function createClass($data){
            $this->db->insert('tb_class', $data);
            return $this->db->affected_rows();
        }

        public function updateClass($data){
            $this->db->where('cl_id',$data['cl_id']);
            $this->db->update('tb_class', $data);
            return $this->db->affected_rows();

        }

        public function deleteClass($id){
            $this->db->where('cl_id', $id);
            $this->db->delete('tb_class');
            return $this->db->affected_rows();

        }

   //Subjects
        public function getAmountSubjectsByMajor($major){
            $this->db->get_where('tb_subjects',['major' => $major]);
            return $this->db->affected_rows();
        }

        public function getSubjects(){
            return $this->db->get('tb_subjects')->result();
        }

        public function createSubject( $data){
            $this->db->insert('tb_subjects', $data);
            return $this->db->affected_rows();

        }

        public function updateSubject($data){
            $this->db->where('subject_code', $data['subject_code']);
            $this->db->update('tb_subjects', $data);
            return $this->db->affected_rows();
        }

        public function deleteSubject($subj_code){
           $this->db->where('subject_code', $subj_code);
           $this->db->delete('tb_subjects');
            return $this->db->affected_rows();
        }
}

/* End of file admin.php */

?>