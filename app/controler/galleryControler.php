<?php
class galleryControler extends controler
{
    public function index()
    {
        $model = $this->model('galleryModel');
        $photos = $model->getAllPhotos();
        $this->view('gallery/gallery', ['photos' => $photos]);
    }
    public function client()

    {
        if (isset($_SESSION['user_id'])) {
            $model = $this->model('galleryModel');
            $photos = $model->getAllPhotos();
            $this->view('gallery/client', ['photos' => $photos]);
        } else {
            header('Location: ' . URLROOT . '/users/login');
        }

        $model = $this->model('galleryModel');
        $photos = $model->getclientPhotos($_SESSION['user_id']);
        $this->view('gallery/client', ['photos' => $photos]);
    }
    public function upload()
    {
        $model = $this->model('galleryModel');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $filename = $_FILES['photo']['name'];
            $tempname = $_FILES['photo']['tmp_name'];
            $description = $_POST['description'];

            $target = '/butterfly_photography/public/images/' . basename($filename);
            if (move_uploaded_file($tempname, $target)) {
                $model->addphoto($filename, $description);
                header('Location: ' . URLROOT . '/gallery/client');
            } else {
                die('Failed to upload image');
            }
        }
        $this->view('gallery/upload');
    }
}
