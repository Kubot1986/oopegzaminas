<?php

namespace Rytis\Oopex\Service;

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
            'dateCreated' => date('Y:m:d H:d:s'),
            'apmoketa'=>boolval(false)

        ];

        $fileContent = $this->getContentFromFile();
        $fileContent[] = $content;

        $this->putContentToFile($fileContent);
    }

    public function getContentFromFile(): array
    {
        return json_decode(file_get_contents(self::DATA_FILE_PATH), true);
    }

    private function putContentToFile(array $content): void
    {
        file_put_contents(self::DATA_FILE_PATH, json_encode($content));
    }
}