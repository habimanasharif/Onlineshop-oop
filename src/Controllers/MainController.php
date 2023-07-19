<?php

namespace OnlineshopOop\Controllers;

class MainController extends A_Controller
{
    public function indexAction(): void
    {
       $dataToRender = [
           'page Title'=>'Online Shop Jagaad Academy Iteration 2',
           'test'=>'test view'
       ];
        echo $this->view->render('index',$dataToRender);
    }

    public function editAction(): void
    {
        // TODO: Implement editAction() method.
    }

    public function deleteAction(int $id): void
    {
        // TODO: Implement deleteAction() method.
    }

    public function addAction(): void
    {
        // TODO: Implement addAction() method.
    }
}