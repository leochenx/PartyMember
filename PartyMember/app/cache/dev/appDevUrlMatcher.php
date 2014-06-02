<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        // ibw_partymember_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ibw_partymember_homepage');
            }

            return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::indexAction',  '_route' => 'ibw_partymember_homepage',);
        }

        if (0 === strpos($pathinfo, '/partymember')) {
            // ibw_partymember
            if (rtrim($pathinfo, '/') === '/partymember') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ibw_partymember');
                }

                return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::indexAction',  '_route' => 'ibw_partymember',);
            }

            // ibw_partymember_show
            if (preg_match('#^/partymember/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_partymember_show')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::showAction',));
            }

            // ibw_partymember_new
            if ($pathinfo === '/partymember/new') {
                return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::newAction',  '_route' => 'ibw_partymember_new',);
            }

            // ibw_partymember_create
            if ($pathinfo === '/partymember/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ibw_partymember_create;
                }

                return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::createAction',  '_route' => 'ibw_partymember_create',);
            }
            not_ibw_partymember_create:

            // ibw_partymember_edit
            if (preg_match('#^/partymember/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_partymember_edit')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::editAction',));
            }

            // ibw_partymember_update
            if (preg_match('#^/partymember/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_ibw_partymember_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_partymember_update')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::updateAction',));
            }
            not_ibw_partymember_update:

            // ibw_partymember_delete
            if (preg_match('#^/partymember/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_ibw_partymember_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_partymember_delete')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::deleteAction',));
            }
            not_ibw_partymember_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/ibw/partymember')) {
                if (0 === strpos($pathinfo, '/admin/ibw/partymember/partymember')) {
                    // admin_ibw_partymember_partymember_list
                    if ($pathinfo === '/admin/ibw/partymember/partymember/list') {
                        return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::listAction',  '_sonata_admin' => 'ibw.partymember.admin.partymember',  '_sonata_name' => 'admin_ibw_partymember_partymember_list',  '_route' => 'admin_ibw_partymember_partymember_list',);
                    }

                    // admin_ibw_partymember_partymember_create
                    if ($pathinfo === '/admin/ibw/partymember/partymember/create') {
                        return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::createAction',  '_sonata_admin' => 'ibw.partymember.admin.partymember',  '_sonata_name' => 'admin_ibw_partymember_partymember_create',  '_route' => 'admin_ibw_partymember_partymember_create',);
                    }

                    // admin_ibw_partymember_partymember_batch
                    if ($pathinfo === '/admin/ibw/partymember/partymember/batch') {
                        return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::batchAction',  '_sonata_admin' => 'ibw.partymember.admin.partymember',  '_sonata_name' => 'admin_ibw_partymember_partymember_batch',  '_route' => 'admin_ibw_partymember_partymember_batch',);
                    }

                    // admin_ibw_partymember_partymember_edit
                    if (preg_match('#^/admin/ibw/partymember/partymember/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_partymember_partymember_edit')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::editAction',  '_sonata_admin' => 'ibw.partymember.admin.partymember',  '_sonata_name' => 'admin_ibw_partymember_partymember_edit',));
                    }

                    // admin_ibw_partymember_partymember_delete
                    if (preg_match('#^/admin/ibw/partymember/partymember/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_partymember_partymember_delete')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::deleteAction',  '_sonata_admin' => 'ibw.partymember.admin.partymember',  '_sonata_name' => 'admin_ibw_partymember_partymember_delete',));
                    }

                    // admin_ibw_partymember_partymember_show
                    if (preg_match('#^/admin/ibw/partymember/partymember/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_partymember_partymember_show')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::showAction',  '_sonata_admin' => 'ibw.partymember.admin.partymember',  '_sonata_name' => 'admin_ibw_partymember_partymember_show',));
                    }

                    // admin_ibw_partymember_partymember_export
                    if ($pathinfo === '/admin/ibw/partymember/partymember/export') {
                        return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::exportAction',  '_sonata_admin' => 'ibw.partymember.admin.partymember',  '_sonata_name' => 'admin_ibw_partymember_partymember_export',  '_route' => 'admin_ibw_partymember_partymember_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/ibw/partymember/applypartymember')) {
                    // admin_ibw_partymember_applypartymember_list
                    if ($pathinfo === '/admin/ibw/partymember/applypartymember/list') {
                        return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\ApplyPartymemberAdminController::listAction',  '_sonata_admin' => 'ibw.partymember.admin.applypartymember',  '_sonata_name' => 'admin_ibw_partymember_applypartymember_list',  '_route' => 'admin_ibw_partymember_applypartymember_list',);
                    }

                    // admin_ibw_partymember_applypartymember_create
                    if ($pathinfo === '/admin/ibw/partymember/applypartymember/create') {
                        return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\ApplyPartymemberAdminController::createAction',  '_sonata_admin' => 'ibw.partymember.admin.applypartymember',  '_sonata_name' => 'admin_ibw_partymember_applypartymember_create',  '_route' => 'admin_ibw_partymember_applypartymember_create',);
                    }

                    // admin_ibw_partymember_applypartymember_batch
                    if ($pathinfo === '/admin/ibw/partymember/applypartymember/batch') {
                        return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\ApplyPartymemberAdminController::batchAction',  '_sonata_admin' => 'ibw.partymember.admin.applypartymember',  '_sonata_name' => 'admin_ibw_partymember_applypartymember_batch',  '_route' => 'admin_ibw_partymember_applypartymember_batch',);
                    }

                    // admin_ibw_partymember_applypartymember_edit
                    if (preg_match('#^/admin/ibw/partymember/applypartymember/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_partymember_applypartymember_edit')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\ApplyPartymemberAdminController::editAction',  '_sonata_admin' => 'ibw.partymember.admin.applypartymember',  '_sonata_name' => 'admin_ibw_partymember_applypartymember_edit',));
                    }

                    // admin_ibw_partymember_applypartymember_delete
                    if (preg_match('#^/admin/ibw/partymember/applypartymember/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_partymember_applypartymember_delete')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\ApplyPartymemberAdminController::deleteAction',  '_sonata_admin' => 'ibw.partymember.admin.applypartymember',  '_sonata_name' => 'admin_ibw_partymember_applypartymember_delete',));
                    }

                    // admin_ibw_partymember_applypartymember_show
                    if (preg_match('#^/admin/ibw/partymember/applypartymember/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_partymember_applypartymember_show')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\ApplyPartymemberAdminController::showAction',  '_sonata_admin' => 'ibw.partymember.admin.applypartymember',  '_sonata_name' => 'admin_ibw_partymember_applypartymember_show',));
                    }

                    // admin_ibw_partymember_applypartymember_export
                    if ($pathinfo === '/admin/ibw/partymember/applypartymember/export') {
                        return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\ApplyPartymemberAdminController::exportAction',  '_sonata_admin' => 'ibw.partymember.admin.applypartymember',  '_sonata_name' => 'admin_ibw_partymember_applypartymember_export',  '_route' => 'admin_ibw_partymember_applypartymember_export',);
                    }

                }

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
