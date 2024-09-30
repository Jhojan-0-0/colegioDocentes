<?php
Class Dashboard extends Controller{
    function __construct(){
        parent::__construct();
    }
    public function render()
    {
        $this->view->Render('dashboard/index');
    }

}



?>