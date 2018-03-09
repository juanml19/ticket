<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model("general_model");
        }

        public function index(){
            //$this->general_model->logueado();
            $data["dato_header"] = $this->general_model->dato_header("Plantilla");
            $this->load->view('home',$data);
        }

    }
?>