<?php

class IndexController
{
    private $view;

    function __construct()
    {
        require 'model/UsersModel.php';

        $this->view = new View();
    }

    public function index()
    {
        $object = new UsersModel();

        $items = $object->all();
        $data['users'] = $items;

        $this->view->view('home.php', $data);
    }

    public function create()
    {
        $object = new UsersModel();

        $result = $object->add($_POST['name'], $_POST['lastname']);
        $data['added'] = $result;

        $items = $object->all();
        $data['users'] = $items;

        $this->view->view('home.php', $data);
    }

    public function update()
    {
        $object = new UsersModel();

        $item = $object->find($_POST['uid']);
        $data['user'] = $item;

        $this->view->view('update.php', $data);
    }

    public function save()
    {
        $object = new UsersModel();

        $result = $object->save($_POST['uid'], $_POST['name'], $_POST['lastname']);
        $data['updated'] = $result;

        $list = $object->all();
        $data['users'] = $list;

        $this->view->view('home.php', $data);
    }

    public function remove()
    {
        $object = new UsersModel();

        $result = $object->remove($_POST['uid']);
        $data['removed'] = $result;

        $list = $object->all();
        $data['users'] = $list;

        $this->view->view('home.php', $data);
    }
}
