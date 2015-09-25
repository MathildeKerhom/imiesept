<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/mathilde_job')) {
            // mathilde_job
            if (rtrim($pathinfo, '/') === '/mathilde_job') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mathilde_job');
                }

                return array (  '_controller' => 'Mathilde\\JobeetBundle\\Controller\\JobController::indexAction',  '_route' => 'mathilde_job',);
            }

            // mathilde_job_show
            if (preg_match('#^/mathilde_job/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mathilde_job_show')), array (  '_controller' => 'Mathilde\\JobeetBundle\\Controller\\JobController::showAction',));
            }

            // mathilde_job_new
            if ($pathinfo === '/mathilde_job/new') {
                return array (  '_controller' => 'Mathilde\\JobeetBundle\\Controller\\JobController::newAction',  '_route' => 'mathilde_job_new',);
            }

            // mathilde_job_create
            if ($pathinfo === '/mathilde_job/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mathilde_job_create;
                }

                return array (  '_controller' => 'Mathilde\\JobeetBundle\\Controller\\JobController::createAction',  '_route' => 'mathilde_job_create',);
            }
            not_mathilde_job_create:

            // mathilde_job_edit
            if (preg_match('#^/mathilde_job/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mathilde_job_edit')), array (  '_controller' => 'Mathilde\\JobeetBundle\\Controller\\JobController::editAction',));
            }

            // mathilde_job_update
            if (preg_match('#^/mathilde_job/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_mathilde_job_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mathilde_job_update')), array (  '_controller' => 'Mathilde\\JobeetBundle\\Controller\\JobController::updateAction',));
            }
            not_mathilde_job_update:

            // mathilde_job_delete
            if (preg_match('#^/mathilde_job/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_mathilde_job_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mathilde_job_delete')), array (  '_controller' => 'Mathilde\\JobeetBundle\\Controller\\JobController::deleteAction',));
            }
            not_mathilde_job_delete:

        }

        // mathilde_jobeet_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mathilde_jobeet_homepage')), array (  '_controller' => 'Mathilde\\JobeetBundle\\Controller\\DefaultController::indexAction',));
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
