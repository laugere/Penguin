<?php

namespace App;

use App\ClassController\BookController;
use App\ClassController\AuthorController;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Controller
{
    // Properties
    private $bookController;
    private $authorController;

    private $twig;

    public function __construct()
    {
        $this->bookController = new BookController();
        $this->authorController = new AuthorController();

        $loader = new FilesystemLoader(__DIR__ . '/templates');
        $this->twig = new Environment($loader);
    }

    public function getBooks(): array
    {
        return $this->bookController->getBooks();
    }

    public function getBook($id)
    {
        return $this->bookController->getBook($id);
    }

    public function getAuthor($id)
    {
        return $this->authorController->getAuthor($id);
    }

    #region NAVIGATION
    public function home()
    {
        echo $this->twig->render('index.html.twig', [
            'index' => 0,
            'books' => $this->getBooks()
        ]);
    }

    public function my()
    {
        echo $this->twig->render('index.html.twig', [
            'index' => 1,
            'books' => $this->getBooks()
        ]);
    }

    public function penguin()
    {
        echo $this->twig->render('index.html.twig', [
            'index' => 2,
            'books' => $this->getBooks()
        ]);
    }
    #endregion
}
