<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            case '/register':
                // user_registration
                return array('_route' => 'user_registration', '_controller' => 'App\\Controller\\RegistrationController::register');
                // register
                return array('_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register');
                break;
            case '/CU01registrarTicket':
                // CU01registrarTicket
                $ret = array('_route' => 'CU01registrarTicket', '_controller' => 'App\\Controller\\TicketController::VistaRegistrar');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_CU01registrarTicket;
                }

                return $ret;
                not_CU01registrarTicket:
                // CU01ProcesarTicket
                $ret = array('_route' => 'CU01ProcesarTicket', '_controller' => 'App\\Controller\\TicketController::Registrar');
                if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_CU01ProcesarTicket;
                }

                return $ret;
                not_CU01ProcesarTicket:
                break;
            case '/CU02ConsultarTicket':
                // CU02ConsultarTicket
                $ret = array('_route' => 'CU02ConsultarTicket', '_controller' => 'App\\Controller\\TicketController::VistaConsultar');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_CU02ConsultarTicket;
                }

                return $ret;
                not_CU02ConsultarTicket:
                // CU02ProcesarConsulta
                $ret = array('_route' => 'CU02ProcesarConsulta', '_controller' => 'App\\Controller\\TicketController::Consultar');
                if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_CU02ProcesarConsulta;
                }

                return $ret;
                not_CU02ProcesarConsulta:
                break;
            default:
                $routes = array(
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                    '/' => array(array('_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'), null, null, null),
                    '/login' => array(array('_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null),
                    '/home' => array(array('_route' => 'home', '_controller' => 'App\\Controller\\HomeController::home'), null, null, null),
                    '/logout' => array(array('_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'), null, null, null),
                    '/CU01AccionesRequeridasCerrar' => array(array('_route' => 'CU01CerrarMesa', '_controller' => 'App\\Controller\\TicketController::CU01CerrarMesa'), null, array('POST' => 0), null),
                    '/CU01AccionesRequeridasDerivar' => array(array('_route' => 'CU01DerivarMesa', '_controller' => 'App\\Controller\\TicketController::CU01DerivarMesa'), null, array('POST' => 0), null),
                    '/CU02ConsultarTicket2' => array(array('_route' => 'CU02ConsultarTicket2', '_controller' => 'App\\Controller\\TicketController::VerListaTicket'), null, null, null),
                    '/CU04DerivarTicket' => array(array('_route' => 'CU04DerivarTicket', '_controller' => 'App\\Controller\\TicketController::VistaDerivarTicket'), null, array('POST' => 0), null),
                    '/CU04ProcesarDerivar' => array(array('_route' => 'CU04ProcesarDerivar', '_controller' => 'App\\Controller\\TicketController::DerivarTicket'), null, null, null),
                    '/CU03CerrarTicket' => array(array('_route' => 'CU03CerrarTicket', '_controller' => 'App\\Controller\\TicketController::CerrarTicket'), null, null, null),
                    '/CU20AgruparPorTicket' => array(array('_route' => 'CU20AgruparPorTicket', '_controller' => 'App\\Controller\\TicketController::VerListaTicket'), null, null, null),
                    '/CU21AgruparPorLegajo' => array(array('_route' => 'CU21AgruparPorLegajo', '_controller' => 'App\\Controller\\TicketController::VerListaTicket'), null, null, null),
                    '/CU22AgruparPorEstado' => array(array('_route' => 'CU22AgruparPorEstado', '_controller' => 'App\\Controller\\TicketController::VerListaTicket'), null, null, null),
                    '/CU23AgruparPorUltimoGrupo' => array(array('_route' => 'CU23AgruparPorUltimoGrupo', '_controller' => 'App\\Controller\\TicketController::VerListaTicket'), null, null, null),
                    '/CU24AgruparPorClasificacionTicket' => array(array('_route' => 'CU24AgruparPorClasificacionTicket', '_controller' => 'App\\Controller\\TicketController::VerListaTicket'), null, null, null),
                    '/CU07ConsultarIntervenciones' => array(array('_route' => 'ConsultarIntervenciones', '_controller' => 'App\\Controller\\IntervencionController::VistaConsulta'), null, null, null),
                    '/CU07ProcesaIntervenciones' => array(array('_route' => 'ProcesaConsultaIntervenciones', '_controller' => 'App\\Controller\\IntervencionController::ProcesarConsulta'), null, null, null),
                    '/CU08ProcesarActualizacion' => array(array('_route' => 'ProcesarActualizacion', '_controller' => 'App\\Controller\\IntervencionController::Actualizar'), null, null, null),
                    '/CU10RegistrarClasificacionDeTickets' => array(array('_route' => 'RegistrarClasificacionDeTickets', '_controller' => 'App\\Controller\\HomeController::index'), null, null, null),
                    '/CU11BuscarClasifTicketsParte1' => array(array('_route' => 'BuscarClasifTicketsParte1', '_controller' => 'App\\Controller\\HomeController::index'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/CU0(?'
                        .'|2ConsultarTicket3/([^/]++)(*:202)'
                        .'|8ActualizarIntervencion/([^/]++)(*:242)'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            38 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            57 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            102 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            116 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            136 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            149 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            159 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                            202 => array(array('_route' => 'DetalleTicket', '_controller' => 'App\\Controller\\TicketController::VerDetalleTicket'), array('id'), null, null),
                            242 => array(array('_route' => 'ActualizarIntervencion', '_controller' => 'App\\Controller\\IntervencionController::VistaActualizar'), array('id'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (242 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
