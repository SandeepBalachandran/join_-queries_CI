<?php
defined('BASEPATH') or exit('No direct script access allowed');
class scaredModel extends CI_Model
{
    public function saveData()
    {
        $data=array('username'=>$this->input->post('name'),
                    'password'=>$this->input->post('password')
                );
        $result=$this->db->insert('details',$data);
        if($result)
        {
            return true;
        }
        else
        {
            return false;

        }


    }
    public function checkData()
    {
        $username=$this->input->post('uname');
        $password=$this->input->post('upassword');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result=$this->db->get('details');
        if($result->num_rows()>0)
        {
            return true;

        }
        else {
            return false;
        }

    }
    public function getData()
    {

    }
    public function addProject()
    {
        $data=array('name'=>$this->input->post('p_name'));
        $result=$this->db->insert('projects',$data);
        if($result)
        {
            return true;
        }
        else {
            return false;
        }
    }

    public function addModule()
    {
        $data=array('m_name'=>$this->input->post('m_name'),
                    'p_id'=>$this->input->post('p_Id')
                    );
        $result=$this->db->insert('modules',$data);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function addResource()
    {
        $data=array('r_name'=>$this->input->post('r_name'),
                    'p_id'=>$this->input->post('project_Id'),
                    'm_id'=>$this->input->post('m_Id')
                    );
        $result=$this->db->insert('resources',$data);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getProjectDatas()
    {
        $this->db->where('isDelete','0');
        $query=$this->db->get('projects');
        if($query->num_rows()>0)
        {
            $query->result();
        }
        else
        {
            return false;
        }
    }

}
