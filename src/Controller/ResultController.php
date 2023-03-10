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
        // Getting all data from file.
        $resultList = $this->resultService->getContentFromFile();

        // Rendering Template with smarty.
        $smarty = new \Smarty();
        $smarty->assign('resultList', $resultList);
        $smarty->display(__DIR__ . '/../View/list.tpl');
    }
// ar apmoketa
    public function updateEntry(){
        $resultLists = $this->resultService->getContentFromFile();
        {
            foreach ($resultLists as $key => $resultList) {
                if ($resultList['apmoketa'] == '0') {
                    $resultLists[$key]['apmoketa'] = "1";
                }
            }
        $this->resultService->putContentToFile($resultLists);
        }

        header("Location: /oopex/list", TRUE, 301); exit;
    }


    public function create(array $request)
    {
//        if (empty($request)) {
//            throw new \Exception("Request is empty.');
//        }

        // Creating new ToDo.
        $this->resultService->create($request);

        // Redirecting to list.

       header("Location: /oopex/list", TRUE, 301); exit;
    }
}