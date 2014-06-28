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

        if (0 === strpos($pathinfo, '/images/example')) {
            // _assetic_5a99088
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5a99088',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_5a99088',);
            }

            // _assetic_5a99088_0
            if ($pathinfo === '/images/example_DSC00109_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5a99088',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_5a99088_0',);
            }

            // _assetic_603698a
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '603698a',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_603698a',);
            }

            // _assetic_603698a_0
            if ($pathinfo === '/images/example_DSC00111_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '603698a',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_603698a_0',);
            }

            // _assetic_5316921
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 5316921,  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_5316921',);
            }

            // _assetic_5316921_0
            if ($pathinfo === '/images/example_DSC00112_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 5316921,  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_5316921_0',);
            }

            // _assetic_bd3b794
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bd3b794',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_bd3b794',);
            }

            // _assetic_bd3b794_0
            if ($pathinfo === '/images/example_DSC00113_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bd3b794',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_bd3b794_0',);
            }

            // _assetic_c7bc212
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c7bc212',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_c7bc212',);
            }

            // _assetic_c7bc212_0
            if ($pathinfo === '/images/example_DSC00114_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c7bc212',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_c7bc212_0',);
            }

            // _assetic_5627966
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 5627966,  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_5627966',);
            }

            // _assetic_5627966_0
            if ($pathinfo === '/images/example_DSC00115_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 5627966,  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_5627966_0',);
            }

            // _assetic_f7f8055
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f7f8055',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_f7f8055',);
            }

            // _assetic_f7f8055_0
            if ($pathinfo === '/images/example_slide-02_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f7f8055',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_f7f8055_0',);
            }

            // _assetic_b6e53c9
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b6e53c9',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_b6e53c9',);
            }

            // _assetic_b6e53c9_0
            if ($pathinfo === '/images/example_home_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b6e53c9',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_b6e53c9_0',);
            }

            // _assetic_7051c8f
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7051c8f',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_7051c8f',);
            }

            // _assetic_7051c8f_0
            if ($pathinfo === '/images/example_slide-01_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7051c8f',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_7051c8f_0',);
            }

            // _assetic_b222f6a
            if ($pathinfo === '/images/example.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b222f6a',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_b222f6a',);
            }

            // _assetic_b222f6a_0
            if ($pathinfo === '/images/example_slide-03_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b222f6a',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_b222f6a_0',);
            }

        }

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

        // uosuostms_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uosuostms_homepage')), array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::indexAction',));
        }

        // uosuostms_uos
        if ($pathinfo === '/uos') {
            return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::uosAction',  '_route' => 'uosuostms_uos',);
        }

        if (0 === strpos($pathinfo, '/f')) {
            if (0 === strpos($pathinfo, '/fs')) {
                // uosuostms_fs
                if ($pathinfo === '/fs') {
                    return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::fsAction',  '_route' => 'uosuostms_fs',);
                }

                // uosuostms_fsr
                if ($pathinfo === '/fsr') {
                    return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::fsrAction',  '_route' => 'uosuostms_fsr',);
                }

            }

            if (0 === strpos($pathinfo, '/ff')) {
                // uosuostms_ff
                if ($pathinfo === '/ff') {
                    return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::ffAction',  '_route' => 'uosuostms_ff',);
                }

                // uosuostms_ffr
                if ($pathinfo === '/ffr') {
                    return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::ffrAction',  '_route' => 'uosuostms_ffr',);
                }

            }

            if (0 === strpos($pathinfo, '/fttl')) {
                // uosuostms_fttl
                if ($pathinfo === '/fttl') {
                    return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::fttlAction',  '_route' => 'uosuostms_fttl',);
                }

                // uosuostms_fttlr
                if ($pathinfo === '/fttlr') {
                    return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::fttlrAction',  '_route' => 'uosuostms_fttlr',);
                }

            }

            if (0 === strpos($pathinfo, '/falll')) {
                // uosuostms_falll
                if ($pathinfo === '/falll') {
                    return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::falllAction',  '_route' => 'uosuostms_falll',);
                }

                // uosuostms_falllr
                if ($pathinfo === '/falllr') {
                    return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::falllrAction',  '_route' => 'uosuostms_falllr',);
                }

            }

        }

        // uosuostms_hall
        if ($pathinfo === '/hall') {
            return array (  '_controller' => 'uos\\uostmsBundle\\Controller\\DefaultController::hallAction',  '_route' => 'uosuostms_hall',);
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
