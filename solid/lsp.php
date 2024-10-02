<?php 

interface ISendProject{
    public function send();
}

interface ISendMail{
    public function send();
}

class SendMail implements ISendMail{
    public function send(){
        echo "Se envia un correo electrónico";
    }

}

class Project{
    public function create(){
        echo "Se ha creado el proyeco";
    }

}

class SalesProject extends Project implements ISendProject{
    private ISendMail $sender;

    public function __construct(ISendMail $sender)
    {
        $this->sender = $sender;
    }

    // aquí más funcionamiento
    public function send(){
        $this->sender->send();
    }
}

class InternalProject extends Project{
 // extra
}

function send(ISendProject $project){
    $project->send();
}

$sendMail = new SendMail();
send(new SalesProject($sendMail));

