<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.vI0u2rX' shared service.

return $this->privates['.service_locator.vI0u2rX'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function (): \Symfony\Component\HttpFoundation\Session\Session {
    return ($this->privates['.errored..service_locator.vI0u2rX.Symfony\Component\HttpFoundation\Session\Session'] ?? $this->load('getSession2Service.php'));
}));
