<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // trabajo_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajo_homepage')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/acceso')) {
            // acceso
            if (rtrim($pathinfo, '/') === '/acceso') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acceso');
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\accesoController::indexAction',  '_route' => 'acceso',);
            }

            // acceso_show
            if (preg_match('#^/acceso/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acceso_show')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\accesoController::showAction',));
            }

            // acceso_new
            if ($pathinfo === '/acceso/new') {
                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\accesoController::newAction',  '_route' => 'acceso_new',);
            }

            // acceso_create
            if ($pathinfo === '/acceso/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_acceso_create;
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\accesoController::createAction',  '_route' => 'acceso_create',);
            }
            not_acceso_create:

            // acceso_edit
            if (preg_match('#^/acceso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acceso_edit')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\accesoController::editAction',));
            }

            // acceso_update
            if (preg_match('#^/acceso/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_acceso_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acceso_update')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\accesoController::updateAction',));
            }
            not_acceso_update:

            // acceso_delete
            if (preg_match('#^/acceso/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_acceso_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acceso_delete')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\accesoController::deleteAction',));
            }
            not_acceso_delete:

        }

        if (0 === strpos($pathinfo, '/personadecontacto')) {
            // personadecontacto
            if (rtrim($pathinfo, '/') === '/personadecontacto') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'personadecontacto');
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\personaDeContactoController::indexAction',  '_route' => 'personadecontacto',);
            }

            // personadecontacto_show
            if (preg_match('#^/personadecontacto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personadecontacto_show')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\personaDeContactoController::showAction',));
            }

            // personadecontacto_new
            if ($pathinfo === '/personadecontacto/new') {
                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\personaDeContactoController::newAction',  '_route' => 'personadecontacto_new',);
            }

            // personadecontacto_create
            if ($pathinfo === '/personadecontacto/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_personadecontacto_create;
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\personaDeContactoController::createAction',  '_route' => 'personadecontacto_create',);
            }
            not_personadecontacto_create:

            // personadecontacto_edit
            if (preg_match('#^/personadecontacto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personadecontacto_edit')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\personaDeContactoController::editAction',));
            }

            // personadecontacto_update
            if (preg_match('#^/personadecontacto/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_personadecontacto_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personadecontacto_update')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\personaDeContactoController::updateAction',));
            }
            not_personadecontacto_update:

            // personadecontacto_delete
            if (preg_match('#^/personadecontacto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_personadecontacto_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personadecontacto_delete')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\personaDeContactoController::deleteAction',));
            }
            not_personadecontacto_delete:

        }

        if (0 === strpos($pathinfo, '/tipodeempresa')) {
            // tipodeempresa
            if (rtrim($pathinfo, '/') === '/tipodeempresa') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipodeempresa');
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\tipoDeEmpresaController::indexAction',  '_route' => 'tipodeempresa',);
            }

            // tipodeempresa_show
            if (preg_match('#^/tipodeempresa/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipodeempresa_show')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\tipoDeEmpresaController::showAction',));
            }

            // tipodeempresa_new
            if ($pathinfo === '/tipodeempresa/new') {
                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\tipoDeEmpresaController::newAction',  '_route' => 'tipodeempresa_new',);
            }

            // tipodeempresa_create
            if ($pathinfo === '/tipodeempresa/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tipodeempresa_create;
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\tipoDeEmpresaController::createAction',  '_route' => 'tipodeempresa_create',);
            }
            not_tipodeempresa_create:

            // tipodeempresa_edit
            if (preg_match('#^/tipodeempresa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipodeempresa_edit')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\tipoDeEmpresaController::editAction',));
            }

            // tipodeempresa_update
            if (preg_match('#^/tipodeempresa/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tipodeempresa_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipodeempresa_update')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\tipoDeEmpresaController::updateAction',));
            }
            not_tipodeempresa_update:

            // tipodeempresa_delete
            if (preg_match('#^/tipodeempresa/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tipodeempresa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipodeempresa_delete')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\tipoDeEmpresaController::deleteAction',));
            }
            not_tipodeempresa_delete:

        }

        if (0 === strpos($pathinfo, '/modificar')) {
            if (0 === strpos($pathinfo, '/modificarcontrasena')) {
                // modificarcontrasena
                if (rtrim($pathinfo, '/') === '/modificarcontrasena') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'modificarcontrasena');
                    }

                    return array (  '_controller' => 'trabajo\\Bundle\\Controller\\modificarContrasenaController::indexAction',  '_route' => 'modificarcontrasena',);
                }

                // modificarcontrasena_show
                if (preg_match('#^/modificarcontrasena/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificarcontrasena_show')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\modificarContrasenaController::showAction',));
                }

                // modificarcontrasena_new
                if ($pathinfo === '/modificarcontrasena/new') {
                    return array (  '_controller' => 'trabajo\\Bundle\\Controller\\modificarContrasenaController::newAction',  '_route' => 'modificarcontrasena_new',);
                }

                // modificarcontrasena_create
                if ($pathinfo === '/modificarcontrasena/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_modificarcontrasena_create;
                    }

                    return array (  '_controller' => 'trabajo\\Bundle\\Controller\\modificarContrasenaController::createAction',  '_route' => 'modificarcontrasena_create',);
                }
                not_modificarcontrasena_create:

                // modificarcontrasena_edit
                if (preg_match('#^/modificarcontrasena/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificarcontrasena_edit')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\modificarContrasenaController::editAction',));
                }

                // modificarcontrasena_update
                if (preg_match('#^/modificarcontrasena/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_modificarcontrasena_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificarcontrasena_update')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\modificarContrasenaController::updateAction',));
                }
                not_modificarcontrasena_update:

                // modificarcontrasena_delete
                if (preg_match('#^/modificarcontrasena/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_modificarcontrasena_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificarcontrasena_delete')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\modificarContrasenaController::deleteAction',));
                }
                not_modificarcontrasena_delete:

            }

            if (0 === strpos($pathinfo, '/modificaremail')) {
                // modificaremail
                if (rtrim($pathinfo, '/') === '/modificaremail') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'modificaremail');
                    }

                    return array (  '_controller' => 'trabajo\\Bundle\\Controller\\modificarEmailController::indexAction',  '_route' => 'modificaremail',);
                }

                // modificaremail_show
                if (preg_match('#^/modificaremail/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificaremail_show')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\modificarEmailController::showAction',));
                }

                // modificaremail_new
                if ($pathinfo === '/modificaremail/new') {
                    return array (  '_controller' => 'trabajo\\Bundle\\Controller\\modificarEmailController::newAction',  '_route' => 'modificaremail_new',);
                }

                // modificaremail_create
                if ($pathinfo === '/modificaremail/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_modificaremail_create;
                    }

                    return array (  '_controller' => 'trabajo\\Bundle\\Controller\\modificarEmailController::createAction',  '_route' => 'modificaremail_create',);
                }
                not_modificaremail_create:

                // modificaremail_edit
                if (preg_match('#^/modificaremail/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificaremail_edit')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\modificarEmailController::editAction',));
                }

                // modificaremail_update
                if (preg_match('#^/modificaremail/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_modificaremail_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificaremail_update')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\modificarEmailController::updateAction',));
                }
                not_modificaremail_update:

                // modificaremail_delete
                if (preg_match('#^/modificaremail/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_modificaremail_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificaremail_delete')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\modificarEmailController::deleteAction',));
                }
                not_modificaremail_delete:

            }

        }

        if (0 === strpos($pathinfo, '/datosdeusuario')) {
            // datosdeusuario
            if (rtrim($pathinfo, '/') === '/datosdeusuario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'datosdeusuario');
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\datosDeUsuarioController::indexAction',  '_route' => 'datosdeusuario',);
            }

            // datosdeusuario_show
            if (preg_match('#^/datosdeusuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'datosdeusuario_show')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\datosDeUsuarioController::showAction',));
            }

            // datosdeusuario_new
            if ($pathinfo === '/datosdeusuario/new') {
                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\datosDeUsuarioController::newAction',  '_route' => 'datosdeusuario_new',);
            }

            // datosdeusuario_create
            if ($pathinfo === '/datosdeusuario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_datosdeusuario_create;
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\datosDeUsuarioController::createAction',  '_route' => 'datosdeusuario_create',);
            }
            not_datosdeusuario_create:

            // datosdeusuario_edit
            if (preg_match('#^/datosdeusuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'datosdeusuario_edit')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\datosDeUsuarioController::editAction',));
            }

            // datosdeusuario_update
            if (preg_match('#^/datosdeusuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_datosdeusuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'datosdeusuario_update')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\datosDeUsuarioController::updateAction',));
            }
            not_datosdeusuario_update:

            // datosdeusuario_delete
            if (preg_match('#^/datosdeusuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_datosdeusuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'datosdeusuario_delete')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\datosDeUsuarioController::deleteAction',));
            }
            not_datosdeusuario_delete:

        }

        if (0 === strpos($pathinfo, '/niveldeprivacidad')) {
            // niveldeprivacidad
            if (rtrim($pathinfo, '/') === '/niveldeprivacidad') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'niveldeprivacidad');
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\nivelDePrivacidadController::indexAction',  '_route' => 'niveldeprivacidad',);
            }

            // niveldeprivacidad_show
            if (preg_match('#^/niveldeprivacidad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveldeprivacidad_show')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\nivelDePrivacidadController::showAction',));
            }

            // niveldeprivacidad_new
            if ($pathinfo === '/niveldeprivacidad/new') {
                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\nivelDePrivacidadController::newAction',  '_route' => 'niveldeprivacidad_new',);
            }

            // niveldeprivacidad_create
            if ($pathinfo === '/niveldeprivacidad/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_niveldeprivacidad_create;
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\nivelDePrivacidadController::createAction',  '_route' => 'niveldeprivacidad_create',);
            }
            not_niveldeprivacidad_create:

            // niveldeprivacidad_edit
            if (preg_match('#^/niveldeprivacidad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveldeprivacidad_edit')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\nivelDePrivacidadController::editAction',));
            }

            // niveldeprivacidad_update
            if (preg_match('#^/niveldeprivacidad/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_niveldeprivacidad_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveldeprivacidad_update')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\nivelDePrivacidadController::updateAction',));
            }
            not_niveldeprivacidad_update:

            // niveldeprivacidad_delete
            if (preg_match('#^/niveldeprivacidad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_niveldeprivacidad_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveldeprivacidad_delete')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\nivelDePrivacidadController::deleteAction',));
            }
            not_niveldeprivacidad_delete:

        }

        if (0 === strpos($pathinfo, '/eliminarcurriculum')) {
            // eliminarcurriculum
            if (rtrim($pathinfo, '/') === '/eliminarcurriculum') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'eliminarcurriculum');
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\eliminarCurriculumController::indexAction',  '_route' => 'eliminarcurriculum',);
            }

            // eliminarcurriculum_show
            if (preg_match('#^/eliminarcurriculum/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminarcurriculum_show')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\eliminarCurriculumController::showAction',));
            }

            // eliminarcurriculum_new
            if ($pathinfo === '/eliminarcurriculum/new') {
                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\eliminarCurriculumController::newAction',  '_route' => 'eliminarcurriculum_new',);
            }

            // eliminarcurriculum_create
            if ($pathinfo === '/eliminarcurriculum/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_eliminarcurriculum_create;
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\eliminarCurriculumController::createAction',  '_route' => 'eliminarcurriculum_create',);
            }
            not_eliminarcurriculum_create:

            // eliminarcurriculum_edit
            if (preg_match('#^/eliminarcurriculum/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminarcurriculum_edit')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\eliminarCurriculumController::editAction',));
            }

            // eliminarcurriculum_update
            if (preg_match('#^/eliminarcurriculum/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_eliminarcurriculum_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminarcurriculum_update')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\eliminarCurriculumController::updateAction',));
            }
            not_eliminarcurriculum_update:

            // eliminarcurriculum_delete
            if (preg_match('#^/eliminarcurriculum/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_eliminarcurriculum_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminarcurriculum_delete')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\eliminarCurriculumController::deleteAction',));
            }
            not_eliminarcurriculum_delete:

        }

        if (0 === strpos($pathinfo, '/pais')) {
            // pais
            if (rtrim($pathinfo, '/') === '/pais') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pais');
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\paisController::indexAction',  '_route' => 'pais',);
            }

            // pais_show
            if (preg_match('#^/pais/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_show')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\paisController::showAction',));
            }

            // pais_new
            if ($pathinfo === '/pais/new') {
                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\paisController::newAction',  '_route' => 'pais_new',);
            }

            // pais_create
            if ($pathinfo === '/pais/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pais_create;
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\paisController::createAction',  '_route' => 'pais_create',);
            }
            not_pais_create:

            // pais_edit
            if (preg_match('#^/pais/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_edit')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\paisController::editAction',));
            }

            // pais_update
            if (preg_match('#^/pais/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_pais_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_update')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\paisController::updateAction',));
            }
            not_pais_update:

            // pais_delete
            if (preg_match('#^/pais/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_pais_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_delete')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\paisController::deleteAction',));
            }
            not_pais_delete:

        }

        if (0 === strpos($pathinfo, '/contactar')) {
            // contactar
            if (rtrim($pathinfo, '/') === '/contactar') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'contactar');
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\contactarController::indexAction',  '_route' => 'contactar',);
            }

            // contactar_show
            if (preg_match('#^/contactar/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contactar_show')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\contactarController::showAction',));
            }

            // contactar_new
            if ($pathinfo === '/contactar/new') {
                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\contactarController::newAction',  '_route' => 'contactar_new',);
            }

            // contactar_create
            if ($pathinfo === '/contactar/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contactar_create;
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\contactarController::createAction',  '_route' => 'contactar_create',);
            }
            not_contactar_create:

            // contactar_edit
            if (preg_match('#^/contactar/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contactar_edit')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\contactarController::editAction',));
            }

            // contactar_update
            if (preg_match('#^/contactar/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_contactar_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contactar_update')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\contactarController::updateAction',));
            }
            not_contactar_update:

            // contactar_delete
            if (preg_match('#^/contactar/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_contactar_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contactar_delete')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\contactarController::deleteAction',));
            }
            not_contactar_delete:

        }

        if (0 === strpos($pathinfo, '/datosdelaempresa')) {
            // datosdelaempresa
            if (rtrim($pathinfo, '/') === '/datosdelaempresa') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'datosdelaempresa');
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\datosDeLaEmpresaController::indexAction',  '_route' => 'datosdelaempresa',);
            }

            // datosdelaempresa_show
            if (preg_match('#^/datosdelaempresa/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'datosdelaempresa_show')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\datosDeLaEmpresaController::showAction',));
            }

            // datosdelaempresa_new
            if ($pathinfo === '/datosdelaempresa/new') {
                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\datosDeLaEmpresaController::newAction',  '_route' => 'datosdelaempresa_new',);
            }

            // datosdelaempresa_create
            if ($pathinfo === '/datosdelaempresa/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_datosdelaempresa_create;
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\datosDeLaEmpresaController::createAction',  '_route' => 'datosdelaempresa_create',);
            }
            not_datosdelaempresa_create:

            // datosdelaempresa_edit
            if (preg_match('#^/datosdelaempresa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'datosdelaempresa_edit')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\datosDeLaEmpresaController::editAction',));
            }

            // datosdelaempresa_update
            if (preg_match('#^/datosdelaempresa/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_datosdelaempresa_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'datosdelaempresa_update')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\datosDeLaEmpresaController::updateAction',));
            }
            not_datosdelaempresa_update:

            // datosdelaempresa_delete
            if (preg_match('#^/datosdelaempresa/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_datosdelaempresa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'datosdelaempresa_delete')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\datosDeLaEmpresaController::deleteAction',));
            }
            not_datosdelaempresa_delete:

        }

        if (0 === strpos($pathinfo, '/buscarpersonal')) {
            // buscarpersonal
            if (rtrim($pathinfo, '/') === '/buscarpersonal') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'buscarpersonal');
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\buscarPersonalController::indexAction',  '_route' => 'buscarpersonal',);
            }

            // buscarpersonal_show
            if (preg_match('#^/buscarpersonal/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'buscarpersonal_show')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\buscarPersonalController::showAction',));
            }

            // buscarpersonal_new
            if ($pathinfo === '/buscarpersonal/new') {
                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\buscarPersonalController::newAction',  '_route' => 'buscarpersonal_new',);
            }

            // buscarpersonal_create
            if ($pathinfo === '/buscarpersonal/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_buscarpersonal_create;
                }

                return array (  '_controller' => 'trabajo\\Bundle\\Controller\\buscarPersonalController::createAction',  '_route' => 'buscarpersonal_create',);
            }
            not_buscarpersonal_create:

            // buscarpersonal_edit
            if (preg_match('#^/buscarpersonal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'buscarpersonal_edit')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\buscarPersonalController::editAction',));
            }

            // buscarpersonal_update
            if (preg_match('#^/buscarpersonal/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_buscarpersonal_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'buscarpersonal_update')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\buscarPersonalController::updateAction',));
            }
            not_buscarpersonal_update:

            // buscarpersonal_delete
            if (preg_match('#^/buscarpersonal/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_buscarpersonal_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'buscarpersonal_delete')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\buscarPersonalController::deleteAction',));
            }
            not_buscarpersonal_delete:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/perfilprofecional')) {
                // perfilprofecional
                if (rtrim($pathinfo, '/') === '/perfilprofecional') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'perfilprofecional');
                    }

                    return array (  '_controller' => 'trabajo\\Bundle\\Controller\\perfilProfecionalController::indexAction',  '_route' => 'perfilprofecional',);
                }

                // perfilprofecional_show
                if (preg_match('#^/perfilprofecional/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfilprofecional_show')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\perfilProfecionalController::showAction',));
                }

                // perfilprofecional_new
                if ($pathinfo === '/perfilprofecional/new') {
                    return array (  '_controller' => 'trabajo\\Bundle\\Controller\\perfilProfecionalController::newAction',  '_route' => 'perfilprofecional_new',);
                }

                // perfilprofecional_create
                if ($pathinfo === '/perfilprofecional/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_perfilprofecional_create;
                    }

                    return array (  '_controller' => 'trabajo\\Bundle\\Controller\\perfilProfecionalController::createAction',  '_route' => 'perfilprofecional_create',);
                }
                not_perfilprofecional_create:

                // perfilprofecional_edit
                if (preg_match('#^/perfilprofecional/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfilprofecional_edit')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\perfilProfecionalController::editAction',));
                }

                // perfilprofecional_update
                if (preg_match('#^/perfilprofecional/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_perfilprofecional_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfilprofecional_update')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\perfilProfecionalController::updateAction',));
                }
                not_perfilprofecional_update:

                // perfilprofecional_delete
                if (preg_match('#^/perfilprofecional/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_perfilprofecional_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfilprofecional_delete')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\perfilProfecionalController::deleteAction',));
                }
                not_perfilprofecional_delete:

            }

            if (0 === strpos($pathinfo, '/preferenciasdetrabajo')) {
                // preferenciasdetrabajo
                if (rtrim($pathinfo, '/') === '/preferenciasdetrabajo') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'preferenciasdetrabajo');
                    }

                    return array (  '_controller' => 'trabajo\\Bundle\\Controller\\preferenciasDeTrabajoController::indexAction',  '_route' => 'preferenciasdetrabajo',);
                }

                // preferenciasdetrabajo_show
                if (preg_match('#^/preferenciasdetrabajo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'preferenciasdetrabajo_show')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\preferenciasDeTrabajoController::showAction',));
                }

                // preferenciasdetrabajo_new
                if ($pathinfo === '/preferenciasdetrabajo/new') {
                    return array (  '_controller' => 'trabajo\\Bundle\\Controller\\preferenciasDeTrabajoController::newAction',  '_route' => 'preferenciasdetrabajo_new',);
                }

                // preferenciasdetrabajo_create
                if ($pathinfo === '/preferenciasdetrabajo/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_preferenciasdetrabajo_create;
                    }

                    return array (  '_controller' => 'trabajo\\Bundle\\Controller\\preferenciasDeTrabajoController::createAction',  '_route' => 'preferenciasdetrabajo_create',);
                }
                not_preferenciasdetrabajo_create:

                // preferenciasdetrabajo_edit
                if (preg_match('#^/preferenciasdetrabajo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'preferenciasdetrabajo_edit')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\preferenciasDeTrabajoController::editAction',));
                }

                // preferenciasdetrabajo_update
                if (preg_match('#^/preferenciasdetrabajo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_preferenciasdetrabajo_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'preferenciasdetrabajo_update')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\preferenciasDeTrabajoController::updateAction',));
                }
                not_preferenciasdetrabajo_update:

                // preferenciasdetrabajo_delete
                if (preg_match('#^/preferenciasdetrabajo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_preferenciasdetrabajo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'preferenciasdetrabajo_delete')), array (  '_controller' => 'trabajo\\Bundle\\Controller\\preferenciasDeTrabajoController::deleteAction',));
                }
                not_preferenciasdetrabajo_delete:

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
