<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Clientes extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model("general_model");
            $this->load->model("clientes_model");
        }

        public function index(){
            //$this->general_model->logueado();
            $data["dato_header"] = $this->general_model->dato_header("Clientes");
            $data["clientes"] = json_decode($this->clientes_model->read_all());
            $this->load->view('clientes',$data);
        }
        
        public function add(){
            if($this->input->post("submit")){
                $cliente = json_decode($this->clientes_model->read("id","id = ".$this->input->post("identificacion")));
                if(!empty($cliente[0]->id)){
                    echo "
                    <script>
                        window.location.href = '". base_url()."clientes?m=cl1';
                    </script>
                    ";
                }else{
                    $data = array(
                        'id'=>$this->input->post("identificacion"),
                        'nombre'=>$this->input->post("nombre"),
                        'telefono'=>$this->input->post("telefono"),
                        'correo'=>$this->input->post("correo"),
                        'direccion'=>$this->input->post("direccion"),
                        'estado'=>$this->input->post("estado")
                    );
                    $add=$this->clientes_model->create($data);
                    if($add == true){
                        echo "
                        <script>
                            window.location.href = '". base_url()."clientes?m=1';
                        </script>
                        ";
                    }else{
                        echo "
                        <script>
                            window.location.href = '". base_url()."clientes?m=2';
                        </script>
                        ";
                    }
                }
            }else{
                echo "
                <script>
                    window.location.href = '". base_url()."clientes';
                </script>
                ";
            }
        }
        
        public function form_clientes($id){
            $data["cliente"] = json_decode($this->clientes_model->read("*","id = ".$id));
            $data["id"] = $id; 
            $this->load->view('formulario/form-cliente',$data);
        }
        
        public function update($id){
            if($this->input->post("submit")){
                $cliente = json_decode($this->clientes_model->read("id","id = ".$id));
                if(!empty($cliente[0]->id)){
                    $data = array(
                        'id'=>$this->input->post("identificacion"),
                        'nombre'=>$this->input->post("nombre"),
                        'telefono'=>$this->input->post("telefono"),
                        'correo'=>$this->input->post("correo"),
                        'direccion'=>$this->input->post("direccion"),
                        'estado'=>$this->input->post("estado")
                    );
                    $update=$this->clientes_model->update($data,"id = ".$id);
                    if($update == true){
                        echo "
                        <script>
                            window.location.href = '". base_url()."clientes?m=1';
                        </script>
                        ";
                    }else{
                        echo "
                        <script>
                            window.location.href = '". base_url()."clientes?m=2';
                        </script>
                        ";
                    }
                }else{
                    echo "
                    <script>
                        window.location.href = '". base_url()."clientes?m=cl3';
                    </script>
                    ";
                }
            }else{
                    echo "
                    <script>
                        window.location.href = '". base_url()."clientes';
                    </script>
                    ";
            }
        }
        
        public function form_estado($id){
            $cliente = json_decode($this->clientes_model->read("estado","id = ".$id));
            $data["id"] = $id; 
            $data["estado"] = $cliente[0]->estado; 
            $this->load->view('formulario/estado-cliente',$data);
        }
        
        public function update_estado($id){
            if($this->input->post("submit")){
                $cliente = json_decode($this->clientes_model->read("id","id = ".$id));
                if(!empty($cliente[0]->id)){
                    $data = array(
                        'estado'=>$this->input->post("estado")
                    );
                    $update = $this->clientes_model->update($data,"id = ".$id);
                    if($update == true){
                        echo "
                        <script>
                            window.location.href = '". base_url()."clientes?m=1';
                        </script>
                        ";
                    }else{
                        echo "
                        <script>
                            window.location.href = '". base_url()."clientes?m=2';
                        </script>
                        ";
                    }
                }else{
                     echo "
                    <script>
                        window.location.href = '". base_url()."clientes?m=cl3';
                    </script>
                    ";
                }
            }else{
                echo "
                    <script>
                        window.location.href = '". base_url()."clientes';
                    </script>
                    ";
            }
        }

        public function delete($id){
            $clientes = json_decode($this->clientes_model->read("id","id = ".$id));
            if(!empty($clientes[0]->id)){
                $delete = $this->clientes_model->delete("id = ".$id);
                if($delete == true){
                    echo "
                    <script>
                        window.location.href = '". base_url()."clientes?m=1';
                    </script>
                    ";
                }else{
                    echo "
                    <script>
                        window.location.href = '". base_url()."clientes?m=2';
                    </script>
                    ";
                }
            }else{
                echo "
                <script>
                    window.location.href = '". base_url()."clientes?m=cl3';
                </script>
                ";
            }
        }
        
    }
?>