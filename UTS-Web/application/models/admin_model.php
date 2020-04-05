<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {

    public function index(){
       
    }

    // Research Groups
        public function getResearchGroupsAmount(){
            $this->db->get('tb_research_category');
            return $this->db->affected_rows();
        }

        public function getSubResearchGroupsAmount(){
            $this->db->get('tb_research_sub_category');
            return $this->db->affected_rows();
        }


        public function getResearchGroups(){
            return $this->db->order_by('rs_id','DESC')->get('tb_research_category')->result();
        }

        public function getSubResearchGroup($research = null){
            if($research){
                return $this->db->get_where('vu_research_group_details',['research' => $research] )->result();
            }else{
                return $this->db->get('vu_research_group_details')->result();
            }
        }
 
    //Classes
        public function getAmountClasses(){
            $this->db->get('tb_class');
            return $this->db->affected_rows();
        }

        public function getClasses(){
            return $this->db->get('tb_class')->result();
        }
 

    //Lecturers
        // Status
            public function getLecturerStatus($code = null){
                if($code){
                    return $this->db->get('vu_lecturer_status', ['code' => $code])->result();
                }else{
                    return $this->db->get('vu_lecturer_status')->result();
                }
            }

        // Status and Fields edit are available on editLecturer()

        // Field
            public function getLecturerField($code = null){
                if($code){
                    return $this->db->get('vu_lecturer_field', ['code' => $code])->result();
                }else{
                    return $this->db->get('vu_lecturer_field')->result();
                }
            }
        // Position
            public function getLecturerPosition($code = null){
                if($code){
                    return $this->db->get('vu_position_2019', ['code' => $code])->result();
                }else{
                    return $this->db->get('vu_position_2019')->result();
                }
            }
 
        // Research
            public function getLecturerResearch($code = null){
                if($code){
                    return $this->db->get('vu_research', ['code' => $code])->result();
                }else{
                    return $this->db->get('vu_research')->result();
                }
            }
        
  
        // DPA
            public function getLecturerDPA($code = null){
                if($code){
                    return $this->db->get('vu_dpa', ['code' => $code])->result();
                }else{
                    return $this->db->get('vu_dpa')->result();
                }
            }
 

        //Hour Distribution 
            public function getHourDistribution($code = null){
                if($code){
                    return $this->db->get('vu_hour_distribution', ['code' => $code])->result();
                }else{
                    return $this->db->get('vu_hour_distribution')->result();
                }
            }

        public function getAmountLecturers(){
            $this->db->get('tb_lecturer');
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
}

/* End of file admin.php */


?>