<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace Controller;

use Model\Home;
use Model\HomeManager;
use Model\Paint;
use Model\PaintManager;
use Model\Draw;
use Model\DrawManager;
use Model\BodyPaint;
use Model\BodyPaintManager;
use Model\WallManager;

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
    public function index()
    {
        $homeManager = new HomeManager();
        $homes = $homeManager->selectAll();

        return $this->twig->render('User/index.html.twig', ['homes' => $homes]);
    }

    /**
     * Display item informations specified by $id
     *
     * @param  int $id
     *
     * @return string
     */
    public function paint()
    {
        $paintManager = new PaintManager();
        $paints = $paintManager->selectAll();

        return $this->twig->render('User/paint.html.twig', ['paints' => $paints]);
    }

    /**
     * Display item edition page specified by $id
     *
     * @param  int $id
     *
     * @return string
     */
    public function draw()
    {
    	$drawManager = new DrawManager();
        $draws = $drawManager->selectAll();
        
        return $this->twig->render('User/draw.html.twig', ['draws' => $draws]);
    }

    /**
     * Display item creation page
     *
     * @return string
     */
    public function bodypaint()
    {
        $bodyPaintManager = new BodyPaintManager();
        $bodyPaints = $bodyPaintManager->selectAll();

        return $this->twig->render('User/bodypaint.html.twig', ['bodypaints' => $bodyPaints]);
    }

    /**
     * Display item creation page
     *
     * @return string
     */
    public function wall()
    {
        $wallManager = new WallManager();
        $walls = $wallManager->selectAll();

        return $this->twig->render('User/wall.html.twig', ['walls' => $walls]);
    }

    /**
     * Display item delete page
     *
     * @param  int $id
     *
     * @return string
     */
    public function delete(int $id)
    {
        // TODO : delete the item with id $id
        return $this->twig->render('Item/index.html.twig');
    }
}
