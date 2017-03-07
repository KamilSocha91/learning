<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/js/39c92c4')) {
            // _assetic_39c92c4
            if ($pathinfo === '/js/39c92c4.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '39c92c4',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_39c92c4',);
            }

            if (0 === strpos($pathinfo, '/js/39c92c4_')) {
                // _assetic_39c92c4_0
                if ($pathinfo === '/js/39c92c4_angular.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '39c92c4',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_39c92c4_0',);
                }

                // _assetic_39c92c4_1
                if ($pathinfo === '/js/39c92c4_controller_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '39c92c4',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_39c92c4_1',);
                }

                // _assetic_39c92c4_2
                if ($pathinfo === '/js/39c92c4_directives_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '39c92c4',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_39c92c4_2',);
                }

                // _assetic_39c92c4_3
                if ($pathinfo === '/js/39c92c4_services_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '39c92c4',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_39c92c4_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/ba136f2')) {
            // _assetic_ba136f2
            if ($pathinfo === '/css/ba136f2.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba136f2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_ba136f2',);
            }

            // _assetic_ba136f2_0
            if ($pathinfo === '/css/ba136f2_master_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba136f2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_ba136f2_0',);
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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // course
        if ($pathinfo === '/course') {
            return array (  '_controller' => 'App\\CourseBundle\\Controller\\CourseController::courseAction',  '_route' => 'course',);
        }

        // question
        if (0 === strpos($pathinfo, '/question') && preg_match('#^/question/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'question')), array (  '_controller' => 'App\\CourseBundle\\Controller\\CourseController::questionAction',));
        }

        // answer
        if (0 === strpos($pathinfo, '/answer') && preg_match('#^/answer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'answer')), array (  '_controller' => 'App\\CourseBundle\\Controller\\CourseController::answerAction',));
        }

        // app_dashboard_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_dashboard_homepage');
            }

            return array (  '_controller' => 'App\\DashboardBundle\\Controller\\DashboardController::indexAction',  '_route' => 'app_dashboard_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
