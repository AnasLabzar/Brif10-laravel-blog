<?php
    class Pages extends Controller {
        public function __construct()
        {
            $this->userModel = $this->model('User');
        }

        public function index(){
            
            $this->view('pages/index');
        }

        public function about(){
            $this->view('pages/about');
        }

        public function app(){
            $this->view('pages/app');
        }

        public function signin(){
            $this->view('pages/s_in');
        }

        public function signup(){
            $this->view('pages/s_up');
        }

        public function contact(){
            $this->view('pages/contact');
        }

        public function dashboard(){
            $this->view('pages/dashboardadmin');
        }

        public function home(){
            $this->view('pages/Home');
        }
    }