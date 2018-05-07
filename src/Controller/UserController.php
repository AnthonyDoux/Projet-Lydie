<?php

namespace Controller;


/**
 * Class ItemController
 *
 */
class UserController extends AbstractController
{

    /**
     * Display item listing
     *
     * @return string
     */
    public function home()
    {


        return $this->twig->render('User/index.html.twig', ['connected' => $_SESSION['connected']]);
    }
}
