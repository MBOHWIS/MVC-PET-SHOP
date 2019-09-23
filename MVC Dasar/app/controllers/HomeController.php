<?php
class HomeController extends Controller
{
    public function Index()
    {
        $modelUser = $this->model('pet')->all();
        $this->view('Home/header');
        $this->view('Home/Index', $modelUser);
        $this->view('Home/footer');
    }
    public function Insert()
    {
        $data = [
            "name" => $_POST['name'],
            "owner" => $_POST['owner'],
            "species" => $_POST['species'],
            "sex" => $_POST['sex'],
            "birth" => $_POST['birth'],
            "death" => $_POST['death'],
        ];
        $data = $this->model('pet')->Insert($data);
        header("Location: " . BASE_URL);
    }
    public function Detail($name)
    {
        $modelUser = $this->model('pet')->all();
        $data = $this->model('pet')->Find($name);
        $this->view('Home/header');
        $this->view('Home/Index', $modelUser);
        $this->view('Home/detail', $data);
        $this->view('Home/footer');
    }
    public function Edit($name)
    {
        $modelUser = $this->model('pet')->all();
        $data = $this->model('pet')->Find($name);
        $this->view('Home/header');
        $this->view('Home/Index', $modelUser);
        $this->view('Home/update', $data);
        $this->view('Home/footer');
    }
    public function Update()
    {
        $data = [
            "name" => $_POST['name'],
            "owner" => $_POST['owner'],
            "species" => $_POST['species'],
            "sex" => $_POST['sex'],
            "birth" => $_POST['birth'],
            "death" => $_POST['death'],
        ];
        $data = $this->model('pet')->Update($data);
        header("Location: " . BASE_URL);
    }
    public function Delete($name)
    {
        $modelUser = $this->model('pet')->all();
        $data = $this->model('pet')->Find($name);
        $this->view('Home/header');
        $this->view('Home/Index', $modelUser);
        $this->view('Home/delete', $data);
        $this->view('Home/footer');
    }

    public function Deleted($name)
    {
        $this->model('pet')->Delete($name);
        header("Location: " . BASE_URL);
    }
}
