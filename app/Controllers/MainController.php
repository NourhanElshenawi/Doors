<?php namespace Doors\Controllers;
/**
 * Created by PhpStorm.
 * User: nourhan
 * Date: 20/02/2016
 * Time: 01:28
 */
class MainController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $title = 'Doors Escape Room';
        //name of the rooms to refer to!
        $room1='White House Down';
        $room2='Haunted Room';
        $room3='Wild West Jail';

        return $this->views->render('main', compact('title', 'room1', 'room2', 'room3'));
    }
}