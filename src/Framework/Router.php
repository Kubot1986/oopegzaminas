<?php

namespace Rytis\Oopex\Framework;

use Rytis\Oopex\Controller\HomePageController;
use Rytis\Oopex\Controller\ResultController;

class Router
{
    private HomePageController $homePageController;
    private ResultController $resultController;

    public function __construct(
        HomePageController $homePageController,
        ResultController $resultController
    ) {
        $this->homePageController = $homePageController;
        $this->resultController = $resultController;
    }

    public function process(string $route, array $request = null)
    {
        switch ($route) {
            case '/':
                $this->homePageController->loadHomePage();
                break;
            case '/list':
                $this->resultController->getList();
                break;
            case '/update':
                            $this->resultController->updateEntry();
                break;
            case '/create':
                $this->resultController->create($request);
                break;
            default:
                $this->homePageController->loadNotFoundPage();
                break;
        }
    }
}