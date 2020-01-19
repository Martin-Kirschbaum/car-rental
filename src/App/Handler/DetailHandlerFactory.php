<?php


namespace App\Handler;


use Psr\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class DetailHandlerFactory
{
    public function __invoke(ContainerInterface $container): DetailHandler
    {
        return new DetailHandler(
            $container->get(TemplateRendererInterface::class)
        );
    }
}