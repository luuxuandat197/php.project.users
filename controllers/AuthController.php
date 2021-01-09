<?php

class AuthController
{
    public function login(){
        $model = User::find();
        header("Location: /");
        exit();
    }

    public function register(){

        header("Location: /");
        exit();
    }

    public function logout(Request $request){
        /*
         * code...
         * */

        header("Location: /");
        exit();
    }
}
