<?php

declare(strict_types=1);

namespace Ronappleton\LaravelConfigSave\Writers;

use JsonException;
use Symfony\Component\Finder\Finder;

class ConfigWriter
{
    private Finder $finder;

    private array $configs;

    /**
     * @throws JsonException
     */
    public function __construct(Finder $finder)
    {
        $this->finder = $finder;
        $this->configs = json_decode(
            file_get_contents(dirname(getcwd()) . '/Storage/configs.json'),
            true,
            512,
            JSON_THROW_ON_ERROR
        );
    }

    public function store()
    {
        dd($this->configs, $this->getFiles());
    }

    private function getFiles()
    {
        $configFiles = $this->finder->path(config_path())->files()->name('*.php');
    }
}
