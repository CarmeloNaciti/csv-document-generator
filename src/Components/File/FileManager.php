<?php

namespace Components\File;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\File\File;
use League\Csv\Reader;

class FileManager
{
    /**
     * @var Container
     */
    private $container;

    /**
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * @param File $file
     *
     * @return array
     */
    public function getFileContent(File $file): array
    {
        $reader = Reader::createFromPath($file->getRealPath());
        $header = $this->getHeader($reader);
        $config = sprintf('%s/%s', $this->container->getParameter('csv_config_directory'), 'default.txt');

        if (file_exists($config . 'default.txt')) {

        } else {
            file_put_contents($config, $header);
        }


        $results = $reader->setOffset(1)->fetchAll(function ($row) {
            return $this->parseRow($row);
        });


        return $results;
    }

    public function getHeader(Reader $reader)
    {
        return $this->parseRow($reader->fetchOne());
    }

    private function parseRow($row): string
    {
        return gettype($row) === 'array' ? $row[0] : $row;
    }

}