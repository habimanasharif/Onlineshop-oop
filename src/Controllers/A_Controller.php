<?php

namespace OnlineshopOop\Controllers;
use OnlineshopOop\App\View;
abstract class A_Controller implements I_Controller
{
    protected  View $view;
    abstract  protected function indexAction(): void;
    abstract protected function editAction():void;
    abstract protected function deleteAction(int $id):void;
    abstract protected function addAction():void;

    public function __construct(View $view){
        $this->view = $view;
    }

    public function __call($name,$args){
        if(method_exists($this,$name)){
            $this->view->setActionNameForViews(str_replace('Action','',$name));
            $this->view->setClassNameForViews( str_replace('Controller','',get_class($this)));
            return call_user_func_array(array($this,$name),$args);
        }
    }



}