<?php
require __DIR__ . '/vendor/autoload.php';

use App\Controller;

$controller = new Controller();

$request = $_SERVER['REQUEST_URI'];

switch ($request)
{
    case '/':
        $controller->home();
        break;
    case '/my':
        $controller->my();
        break;
    case '/penguin':
        $controller->penguin();
        break;
    case substr($request, 0, strlen('/book/')) == '/book/':
        $bookId = substr($request, strlen('/book/'));
        if (strlen($bookId) == 36)
        {
            echo json_encode($controller->getBook($bookId)->toArray(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        }
        break;
    default:
        http_response_code(404);
        break;
}
