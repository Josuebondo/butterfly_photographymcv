<?php
class userControler extends controler
{
    public function index()
    {
        $this->view('users/dashboard');
    }
}
//     public function reservationView()
//     {
//         $this->view('users/reservationView');
//     }    
//     public function message()
//     {        
//         $this->view('users/message');
//     }
//     public function profile()
//     {
//         $this->view('users/profile');
//     }
//     public function favorite()
//     {
//         $this->view('users/favorite');
//     }