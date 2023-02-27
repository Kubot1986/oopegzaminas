<?php

namespace Rytis\Oopex\Service;

use DateTime;
use DateTimeInterface;

class ResultService
{
    const DATA_FILE_PATH = './src/Files/data.json';

    public function create(array $requestB)
    {
        $content = [
            'sunaudota' => $requestB['sunaudota'],
            'kaina'=>$requestB['kaina'],
            'dieninis'=>$requestB['dieninis'],
            'parinktaData'=>$requestB['parinktaData'],
            'dateCreated' => date('Y:m:d H:i:s'),
            'apmoketa'=>'0'

        ];

        $fileContent = $this->getContentFromFile();
        $fileContent[] = $content;
        $nowTime=new DateTime();
        $selectedTime=new Datetime($requestB['parinktaData']);
        $timeDiff=$nowTime->diff($selectedTime);
        if((intval($timeDiff->format('%M')))<1){
            die('Dar per anksti deklaruoti');
        };
        if((intval($timeDiff->format('%a')))>60){
            $velavimas=(intval($timeDiff->format('%a')))-30;
            die("Veluojate $velavimas d.");
        };
        if($requestB['sunaudota']<0){
            die('Free Beer');
        }
        if($requestB['kaina']<0){
            die('Free Vodka');
        }


        $this->putContentToFile($fileContent);
    }


    public function getContentFromFile(): array
    {
        return json_decode(file_get_contents(self::DATA_FILE_PATH), true);
    }

    public function putContentToFile(array $content): void
    {
        file_put_contents(self::DATA_FILE_PATH, json_encode($content));
    }

}