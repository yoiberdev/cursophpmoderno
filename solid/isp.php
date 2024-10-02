<?php 

interface CrudBaseInterface{
    public function add();
    public function get();
}

interface UpdateCrudInterface{
    public function update();
}

interface DeleteCrudInterface{
    public function delete();
}

interface GeneralCrudInterface extends CrudBaseInterface,
    UpdateCrudInterface, DeleteCrudInterface{
}

class UserCrud implements GeneralCrudInterface{
    public function add(){
        echo "se agrega";
    }
    public function get(){
        echo "se obtiene";
    }
    public function update(){
        echo "se modifica";
    }
    public function delete(){
        echo "se elimina";
    }
}

class SaleCrud implements CrudBaseInterface, 
DeleteCrudInterface{
    public function add(){
        echo "se agrega";
    }
    public function get(){
        echo "se obtiene";
    }
    public function delete(){
        echo "se elimina";
    }
}


function general(GeneralCrudInterface $crud){
    $crud->add();
    $crud->update();
    $crud->delete();
    $crud->get();
}

function get(CrudBaseInterface $crud){
    $crud->get();
}

general(new UserCrud());
get(new SaleCrud());