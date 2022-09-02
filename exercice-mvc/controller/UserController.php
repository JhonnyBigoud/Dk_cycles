<?php 

class UserController extends Controller {
    public function signUp() 
    {
        $categories = $this->getCategories();

        include '../' . VIEW_DIRECTORY . '/sign_up.php';
    }

    public function signUpPost()
    {

        $categories = $this->getCategories();

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $userModel = new User ();

        $results = $userModel->addUser($_POST);


        include '../' . VIEW_DIRECTORY . '/sign_up.php';
    }

    public function login() 
    {
        $categories = $this->getCategories();

        include '../' . VIEW_DIRECTORY . '/login.php';
    }

    public function loginPost()
    {
        $categories = $this->getCategories();

        $userModel = new User();
        $user = $userModel->getUserByEmail($_POST['email']);

        if($user !==false) {
            $password = $_POST['password'];
            
            if(password_verify($password, $user['password'])) {
                $_SESSION['userId'] = $user['user_id'];

                header('location: /boutique');
        }
    }

    $error = 'Echec de la quête, email ou mot de passe invalide.';

    include '../' . VIEW_DIRECTORY . '/login.php';
}
    public function logout()
    {
        unset($_SESSION['userId']);

        header('location: /boutique');
    }

}