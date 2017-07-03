<?php

use Xtreamwayz\Pimple\Container;
/**
 *
 */
class ServiceContainer implements ServiceContainerInterface
{
  private $container;
  function __construct()
  {
    $this->container = new Container();
  }
  public function add(string $name, $service)
  {
    $this->Container[$name]=$service;
  }
  public function addLazy(string $name, callable $callable)
  {
    $this->Container[$name]=$this->Container->factory($callable);
  }
  public function get(string $name)
  {
    return $this->Container->get($name);
  }
  public function has(string $name)
  {
    return $this->container->has($name);
  }
}

 ?>
