<?php

namespace Rytis\Oopex\Controller;

use Rytis\Oopex\Service\ResultService;

class ResultController
{

    private ResultService $resultService;

    public function __construct(ResultService $resultService)
    {
        $this->resultService = $resultService;
    }

    public function getList()
    {
        // Getting all todos.
        $resultList = $this->resultService->getContentFromFile();

        // Rendering Template with smarty.
        $smarty = new \Smarty();
        $smarty->assign('resultList', $resultList);
        $smarty->display(__DIR__ . '/../View/list.tpl');
    }

    public function create(array $request)
    {
        if (empty($request)) {
            throw new \Exception('Request is empty.');
        }

        // Creating new ToDo.
        $this->resultService->create($request);

        // Redirecting to list.
        header("Location: /Oopex/list", TRUE, 301);
    }
}