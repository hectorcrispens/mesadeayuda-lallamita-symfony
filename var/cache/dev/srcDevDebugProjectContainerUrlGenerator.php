<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'user_registration' => array(array(), array('_controller' => 'App\\Controller\\RegistrationController::register'), array(), array(array('text', '/register')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        'index' => array(array(), array('_controller' => 'App\\Controller\\HomeController::index'), array(), array(array('text', '/')), array(), array()),
        'register' => array(array(), array('_controller' => 'App\\Controller\\RegistrationController::register'), array(), array(array('text', '/register')), array(), array()),
        'login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'home' => array(array(), array('_controller' => 'App\\Controller\\HomeController::home'), array(), array(array('text', '/home')), array(), array()),
        'logout' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::logout'), array(), array(array('text', '/logout')), array(), array()),
        'CU01registrarTicket' => array(array(), array('_controller' => 'App\\Controller\\TicketController::VistaRegistrar'), array(), array(array('text', '/CU01registrarTicket')), array(), array()),
        'CU01ProcesarTicket' => array(array(), array('_controller' => 'App\\Controller\\TicketController::Registrar'), array(), array(array('text', '/CU01registrarTicket')), array(), array()),
        'CU01CerrarMesa' => array(array(), array('_controller' => 'App\\Controller\\TicketController::CU01CerrarMesa'), array(), array(array('text', '/CU01AccionesRequeridasCerrar')), array(), array()),
        'CU01DerivarMesa' => array(array(), array('_controller' => 'App\\Controller\\TicketController::CU01DerivarMesa'), array(), array(array('text', '/CU01AccionesRequeridasDerivar')), array(), array()),
        'CU02ConsultarTicket' => array(array(), array('_controller' => 'App\\Controller\\TicketController::VistaConsultar'), array(), array(array('text', '/CU02ConsultarTicket')), array(), array()),
        'CU02ProcesarConsulta' => array(array(), array('_controller' => 'App\\Controller\\TicketController::Consultar'), array(), array(array('text', '/CU02ConsultarTicket')), array(), array()),
        'CU02ConsultarTicket2' => array(array(), array('_controller' => 'App\\Controller\\TicketController::VerListaTicket'), array(), array(array('text', '/CU02ConsultarTicket2')), array(), array()),
        'DetalleTicket' => array(array('id'), array('_controller' => 'App\\Controller\\TicketController::VerDetalleTicket'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/CU02ConsultarTicket3')), array(), array()),
        'CU04DerivarTicket' => array(array(), array('_controller' => 'App\\Controller\\TicketController::VistaDerivarTicket'), array(), array(array('text', '/CU04DerivarTicket')), array(), array()),
        'CU04ProcesarDerivar' => array(array(), array('_controller' => 'App\\Controller\\TicketController::DerivarTicket'), array(), array(array('text', '/CU04ProcesarDerivar')), array(), array()),
        'CU03CerrarTicket' => array(array(), array('_controller' => 'App\\Controller\\TicketController::CerrarTicket'), array(), array(array('text', '/CU03CerrarTicket')), array(), array()),
        'CU20AgruparPorTicket' => array(array(), array('_controller' => 'App\\Controller\\TicketController::VerListaTicket'), array(), array(array('text', '/CU20AgruparPorTicket')), array(), array()),
        'CU21AgruparPorLegajo' => array(array(), array('_controller' => 'App\\Controller\\TicketController::VerListaTicket'), array(), array(array('text', '/CU21AgruparPorLegajo')), array(), array()),
        'CU22AgruparPorEstado' => array(array(), array('_controller' => 'App\\Controller\\TicketController::VerListaTicket'), array(), array(array('text', '/CU22AgruparPorEstado')), array(), array()),
        'CU23AgruparPorUltimoGrupo' => array(array(), array('_controller' => 'App\\Controller\\TicketController::VerListaTicket'), array(), array(array('text', '/CU23AgruparPorUltimoGrupo')), array(), array()),
        'CU24AgruparPorClasificacionTicket' => array(array(), array('_controller' => 'App\\Controller\\TicketController::VerListaTicket'), array(), array(array('text', '/CU24AgruparPorClasificacionTicket')), array(), array()),
        'ConsultarIntervenciones' => array(array(), array('_controller' => 'App\\Controller\\IntervencionController::VistaConsulta'), array(), array(array('text', '/CU07ConsultarIntervenciones')), array(), array()),
        'ProcesaConsultaIntervenciones' => array(array(), array('_controller' => 'App\\Controller\\IntervencionController::ProcesarConsulta'), array(), array(array('text', '/CU07ProcesaIntervenciones')), array(), array()),
        'ActualizarIntervencion' => array(array('id'), array('_controller' => 'App\\Controller\\IntervencionController::VistaActualizar'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/CU08ActualizarIntervencion')), array(), array()),
        'ProcesarActualizacion' => array(array(), array('_controller' => 'App\\Controller\\IntervencionController::Actualizar'), array(), array(array('text', '/CU08ProcesarActualizacion')), array(), array()),
        'RegistrarClasificacionDeTickets' => array(array(), array('_controller' => 'App\\Controller\\HomeController::index'), array(), array(array('text', '/CU10RegistrarClasificacionDeTickets')), array(), array()),
        'BuscarClasifTicketsParte1' => array(array(), array('_controller' => 'App\\Controller\\HomeController::index'), array(), array(array('text', '/CU11BuscarClasifTicketsParte1')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
