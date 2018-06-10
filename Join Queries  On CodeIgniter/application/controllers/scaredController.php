<?php
defined('BASEPATH') or exit('No direct script access allowed');
class scaredController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('scaredModel','s');
    }
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('data/index');
        $this->load->view('layout/footer');
    }
    public function saveData()
    {
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run())
        {
            $result=$this->s->saveData();
            if($result)
            {
                $this->session->set_flashdata('signupmsg','You account has been created.
                Login to find out more');
            }
            else
            {
                $this->session->set_flashdata('signupmsg','Error creating account');
            }

            redirect(base_url('scaredController/'));
        }
        else
        {
            $this->load->view('layout/header');
            $this->load->view('data/index');
            $this->load->view('layout/footer');

        }
    }
    public function checkData()
    {
        $this->form_validation->set_rules('uname','Username','required');
        $this->form_validation->set_rules('upassword','Password','required');
        if($this->form_validation->run())
        {
            $result=$this->s->checkData();
            if($result)
            {
                $username=$this->input->post('uname');
                $session_data=array('username'=>$username);
                $this->session->set_userdata($session_data);
                redirect('scaredController/userprofile');
            }
            else
            {
                $this->session->set_flashdata('signinmsg','Incorrect username
                and password');
                redirect(base_url('scaredController/'));
            }
        }
        else
        {
            $this->load->view('layout/header');
            $this->load->view('data/index');
            $this->load->view('layout/footer');
        }
    }

    public function userprofile()
    {
        if($this->session->userdata('username'))
        {
            $datas['infos']=$this->s->getProjectDatas();
            $this->load->view('layout/header');
            $this->load->view('data/userdata',$datas);
            $this->load->view('layout/footer');
        }
        else
        {
            redirect(base_url('scaredController/'));
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect('scaredController/');
    }
    public function newproject()
    {
        $this->form_validation->set_rules('p_name','Project Name','required');
        if($this->form_validation->run())
        {
            $result=$this->s->addProject();
            if($result)
            {
                $this->session->set_flashdata('projectAddMsg','New Project has been added succesfully');
                redirect(base_url('scaredController/userprofile'));
            }
            else
            {
                $this->session->set_flashdata('projectAddMsg','Error');
                redirect(base_url('scaredController/userprofile'));
            }

        }
        else
        {
            $this->load->view('layout/header');
            $this->load->view('data/userdata');
            $this->load->view('layout/footer');
        }
    }


    public function newmodule()
    {
        $this->form_validation->set_rules('m_name','Module Name','required');
        $this->form_validation->set_rules('p_Id','Project Id','required');
        if($this->form_validation->run())
        {
            $result=$this->s->addModule();
            if($result)
            {
                $this->session->set_flashdata('moduleAddMsg','New Module has been added succesfully');
                redirect(base_url('scaredController/userprofile'));
            }
            else
            {
                $this->session->set_flashdata('addmsg','Error');
                redirect(base_url('scaredController/userprofile'));
            }

        }
        else
        {
            $this->load->view('layout/header');
            $this->load->view('data/userdata');
            $this->load->view('layout/footer');
        }
    }

    public function newresource()
    {
        $this->form_validation->set_rules('r_name','Resource Name','required');
        $this->form_validation->set_rules('m_Id','Module Id','required');
        $this->form_validation->set_rules('project_Id','Project Id','required');
        if($this->form_validation->run())
        {
            $result=$this->s->addResource();
            if($result)
            {
                $this->session->set_flashdata('resourceAddMsg','New Module has been added succesfully');
                redirect(base_url('scaredController/userprofile'));
            }
            else
            {
                $this->session->set_flashdata('resourceAddMsg','Error');
                redirect(base_url('scaredController/userprofile'));
            }

        }
        else
        {
            $this->load->view('layout/header');
            $this->load->view('data/userdata');
            $this->load->view('layout/footer');
        }
    }
    public function getProject()
    {

    }
}
