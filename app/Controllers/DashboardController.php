<?php

use app\Core\Controller;

class DashboardController extends Controller{ 

    public function index(){ 
        return view("dashboard");
    }

}