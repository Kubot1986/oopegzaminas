<?php

namespace Rytis\Oopex\Framework;

use Rytis\Oopex\Controller\HomePageController;
use Rytis\Oopex\Controller\ResultController;
use Rytis\Oopex\Service\HomePageService;
use Rytis\Oopex\Service\ResultService;
use RuntimeException;

class DiContainer
{
    private array $entries = [];

    public function get(string $id)
    {
        if (!$this->has($id)) {
            throw new RuntimeException('Class ' . $id . 'not found in container.');
        }
        $entry = $this->entries[$id];

        return $entry($this);
    }

    public function has(string $id): bool
    {
        return isset($this->entries[$id]);
    }

    public function set(string $id, callable $callable): void
    {
        $this->entries[$id] = $callable;
    }

    public function loadDependencies()
    {
        $this->set(
            Router::class,
            function (DiContainer $container) {
                return new Router(
                    $container->get(HomePageController::class),
                    $container->get(ResultController::class)
                );
            }
        );

        $this->set(
            HomePageController::class,
            function (DiContainer $container) {
                return new HomePageController();
            }
        );

        $this->set(
            ResultController::class,
            function (DiContainer $container) {
                return new ResultController(
                    $container->get(ResultService::class)
                );
            }
        );

        $this->set(
            ResultService::class,
            function (DiContainer $container) {
                return new ResultService();
            }
        );
    }
}