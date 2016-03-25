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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/api')) {
            // api_homepage
            if ($pathinfo === '/api') {
                return array (  '_controller' => 'Api\\ApiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'api_homepage',);
            }

            if (0 === strpos($pathinfo, '/api/teams')) {
                // teams_index
                if (rtrim($pathinfo, '/') === '/api/teams') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_teams_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'teams_index');
                    }

                    return array (  '_controller' => 'Api\\ApiBundle\\Controller\\TeamsController::indexAction',  '_route' => 'teams_index',);
                }
                not_teams_index:

                // teams_show
                if (preg_match('#^/api/teams/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_teams_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'teams_show')), array (  '_controller' => 'Api\\ApiBundle\\Controller\\TeamsController::showAction',));
                }
                not_teams_show:

                // teams_new
                if ($pathinfo === '/api/teams/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_teams_new;
                    }

                    return array (  '_controller' => 'Api\\ApiBundle\\Controller\\TeamsController::newAction',  '_route' => 'teams_new',);
                }
                not_teams_new:

                // teams_edit
                if (preg_match('#^/api/teams/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_teams_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'teams_edit')), array (  '_controller' => 'Api\\ApiBundle\\Controller\\TeamsController::editAction',));
                }
                not_teams_edit:

                // teams_delete
                if (preg_match('#^/api/teams/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_teams_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'teams_delete')), array (  '_controller' => 'Api\\ApiBundle\\Controller\\TeamsController::deleteAction',));
                }
                not_teams_delete:

                // teams_matchs
                if (preg_match('#^/api/teams/(?P<id>[^/]++)/matchs$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'teams_matchs')), array (  '_controller' => 'Api\\ApiBundle\\Controller\\TeamsController::matchsAction',));
                }

            }

            if (0 === strpos($pathinfo, '/api/events')) {
                // events_index
                if (rtrim($pathinfo, '/') === '/api/events') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_events_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'events_index');
                    }

                    return array (  '_controller' => 'Api\\ApiBundle\\Controller\\EventsController::indexAction',  '_route' => 'events_index',);
                }
                not_events_index:

                // events_show
                if (preg_match('#^/api/events/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_events_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'events_show')), array (  '_controller' => 'Api\\ApiBundle\\Controller\\EventsController::showAction',));
                }
                not_events_show:

                // events_new
                if ($pathinfo === '/api/events/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_events_new;
                    }

                    return array (  '_controller' => 'Api\\ApiBundle\\Controller\\EventsController::newAction',  '_route' => 'events_new',);
                }
                not_events_new:

                // events_edit
                if (preg_match('#^/api/events/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_events_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'events_edit')), array (  '_controller' => 'Api\\ApiBundle\\Controller\\EventsController::editAction',));
                }
                not_events_edit:

                // events_delete
                if (preg_match('#^/api/events/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_events_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'events_delete')), array (  '_controller' => 'Api\\ApiBundle\\Controller\\EventsController::deleteAction',));
                }
                not_events_delete:

                // events_schedule
                if (preg_match('#^/api/events/(?P<id>[^/]++)/schedule$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'events_schedule')), array (  '_controller' => 'Api\\ApiBundle\\Controller\\EventsController::scheduleAction',));
                }

            }

            if (0 === strpos($pathinfo, '/api/matchs')) {
                // matchs_index
                if (rtrim($pathinfo, '/') === '/api/matchs') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_matchs_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'matchs_index');
                    }

                    return array (  '_controller' => 'Api\\ApiBundle\\Controller\\MatchesController::indexAction',  '_route' => 'matchs_index',);
                }
                not_matchs_index:

                // matchs_show
                if (preg_match('#^/api/matchs/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_matchs_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matchs_show')), array (  '_controller' => 'Api\\ApiBundle\\Controller\\MatchesController::showAction',));
                }
                not_matchs_show:

                // matchs_new
                if ($pathinfo === '/api/matchs/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_matchs_new;
                    }

                    return array (  '_controller' => 'Api\\ApiBundle\\Controller\\MatchesController::newAction',  '_route' => 'matchs_new',);
                }
                not_matchs_new:

                // matchs_edit
                if (preg_match('#^/api/matchs/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_matchs_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matchs_edit')), array (  '_controller' => 'Api\\ApiBundle\\Controller\\MatchesController::editAction',));
                }
                not_matchs_edit:

                // matchs_delete
                if (preg_match('#^/api/matchs/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_matchs_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matchs_delete')), array (  '_controller' => 'Api\\ApiBundle\\Controller\\MatchesController::deleteAction',));
                }
                not_matchs_delete:

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
