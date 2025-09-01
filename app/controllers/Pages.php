<?php 
    class Pages extends Controller{
        public function __construct(){
            /* echo 'Pages'; */
        }

        public function about($name, $age){
            $data = [
                'userName' => $name,
                'userAge' => $age
            ];
            $this->view('v_about', $data);
        }

        public function home(){
            $this->view('v_home');
        }

        public function login(){
            $this->view('v_login');
        }
    }
?>