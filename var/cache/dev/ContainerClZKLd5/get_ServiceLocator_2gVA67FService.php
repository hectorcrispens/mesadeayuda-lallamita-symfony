<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.2gVA67F' shared service.

return $this->privates['.service_locator.2gVA67F'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('intervencion' => function (): \App\Entity\Intervencion {
    return ($this->privates['.errored..service_locator.2gVA67F.App\Entity\Intervencion'] ?? $this->load('getIntervencionService.php'));
}));
