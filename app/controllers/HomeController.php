<?php

class HomeController extends Controller {

    public function actionIndex($id) {
        $user = User::find($id);
        Response::render("home", ["name" => $user->name, "age" => $user->age, "email" => $user->email]);
    }

    public function actionAbout() {
        echo "About this mvc project";
    }

}
