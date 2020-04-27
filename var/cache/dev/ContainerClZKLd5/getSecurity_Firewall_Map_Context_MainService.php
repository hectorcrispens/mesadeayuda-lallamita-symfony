<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.main' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Http/EntryPoint/AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/EntryPoint/FormAuthenticationEntryPoint.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Util/TargetPathTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall/ExceptionListener.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Logout/LogoutSuccessHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Logout/DefaultLogoutSuccessHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Logout/LogoutHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Logout/CsrfTokenClearingLogoutHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Logout/SessionLogoutHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall/LogoutListener.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Security/FirewallConfig.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Security/FirewallContext.php';

$a = ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php'));
$b = ($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage());

$c = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $a, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($a, '/'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/logout'));
$c->addHandler(new \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler(($this->privates['security.csrf.token_storage'] ?? $this->load('getSecurity_Csrf_TokenStorageService.php'))));
$c->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

return $this->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.channel_listener'] ?? $this->load('getSecurity_ChannelListenerService.php'));
    yield 1 => ($this->privates['security.context_listener.0'] ?? $this->load('getSecurity_ContextListener_0Service.php'));
    yield 2 => ($this->privates['security.authentication.listener.form.main'] ?? $this->load('getSecurity_Authentication_Listener_Form_MainService.php'));
    yield 3 => ($this->privates['security.authentication.listener.anonymous.main'] ?? $this->load('getSecurity_Authentication_Listener_Anonymous_MainService.php'));
    yield 4 => ($this->privates['security.access_listener'] ?? $this->load('getSecurity_AccessListenerService.php'));
}, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, ($this->privates['security.authentication.trust_resolver'] ?? $this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')), $a, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $a, 'login', false), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), false), $c, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', NULL, true, false, 'security.user.provider.concrete.our_db_provider', 'main', 'security.authentication.form_entry_point.main', NULL, NULL, array(0 => 'form_login', 1 => 'anonymous'), NULL));
