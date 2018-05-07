<?php

namespace Controller;

use Model\User;
use Model\UserManager;
use Controller\UserController;

/**
 * Class AdminController
 *
 */
class AdminController extends AbstractController
{

    /**
     * Display Admin Connexion
     *
     * @return string
     */
    public function login()
    {
        if ($_SESSION['connected'] === FALSE) {
            if (isset($_POST['email']) && isset($_POST['password'])) {
                $userMail = new UserManager();
                $existMail = $userMail->selectOneByMail($_POST['email']);

                if ($existMail !== FALSE) {
                    $password = $existMail->getPassword();

                    if ($_POST['password'] === $password){
                        session_unset();
                        $_SESSION['connected'] = TRUE;
                        header('Location: /');
                    }
                    else{
                        return $this->twig->render('Admin/connexion.html.twig', ['connexion' => $_SESSION['connected']]);
                    }
                }
                else{
                    return $this->twig->render('Admin/connexion.html.twig', ['connexion' => $_SESSION['connected']]);
                }
            }
            else{
                return $this->twig->render('Admin/connexion.html.twig', ['connexion' => $_SESSION['connected']]);
            }
        }
        else
        {
            header('Location: /');
        }

        return $this->twig->render('Admin/connexion.html.twig', ['connexion' => $_SESSION['connected']]);
    }

    public function disconnect()
    {
        if (isset($_POST['disconnect']))
        {
            session_unset();
            header('Location: /');
        }
    }

}
