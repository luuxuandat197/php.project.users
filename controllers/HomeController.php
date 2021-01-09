<?php

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->dataRequest();

        $data['username'] = 'Luu Xuan Dat';

        return $this->view('home/index', $data);
    }
}
