<?php namespace Doors\Controllers;

use Doors\Repositories\QuoteRepositories\StaticQuoteRepository;
use Doors\Repositories\UserRepositories\StaticUserRepository;

/**
 * @author Rizart Dokollari
 * @since 6/14/2015
 */
class WelcomeController extends Controller
{
    private $userRepository;
    private $quotesRepository;

    public function __construct()
    {
        parent::__construct();


        $this->userRepository = new StaticUserRepository();
        $this->quotesRepository = new StaticQuoteRepository();
    }

    /**
     * Show all users
     */
    public function index()
    {
        $title = 'Doors Escape Room';
        //name of the rooms to refer to!
        $room1='White House Down';
        $room2='Haunted Room';
        $room3='Wild West Jail';

        $users = $this->userRepository->getAll();

        shuffle($users);

        $randomQuote = $this->quotesRepository->getRandom();

        return $this->views->render('welcome', compact('users', 'title', 'randomQuote'));
    }
}