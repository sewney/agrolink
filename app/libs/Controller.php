<?php 
    class Controller{
        //to load the model
        public function model($model){
            require_once '../app/models/'.$model.'.php';

            //instantiate model and pass to controller member var
            return new $model();
        }

        //to load the view
        public function view($view, $data = []){
            if(file_exists('../app/views/'.$view.'.php')){
                require_once '../app/views/'.$view.'.php';
            }else{
                die('Corresponding view doesnt exist!');
            }
        }
    }
?>