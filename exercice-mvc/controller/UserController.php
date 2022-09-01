<?php 

class UserController extends Controller {
    public function signUp() 
    {
        $categories = $this->getCategories();
        include '../' . VIEW_DIRECTORY . '/sign_up.php';
    }

    public function signUpPost()
    {
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $userModel = new User ();

        $results = $userModel  -> addUser($_POST);

        $result = false;

        include '../' . VIEW_DIRECTORY . '/sign_up.php';
    }
}