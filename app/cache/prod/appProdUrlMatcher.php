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

        if (0 === strpos($pathinfo, '/job')) {
            // mathilde_job
            if (rtrim($pathinfo, '/') === '/job') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mathilde_job');
                }

                return array (  '_controller' => 'Mathilde\\JobeetBundle\\Controller\\JobController::indexAction',  '_route' => 'mathilde_job',);
            }

            // mathilde_job_show
            if (preg_match('#^/job/(?P<company>[^/]++)/(?P<location>[^/]++)/(?P<id>[^/]++)/(?P<position>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mathilde_job_show')), array (  '_controller' => 'Mathilde\\JobeetBundle\\Controller\\JobController::showAction',));
            }

            // mathilde_job_new
            if ($pathinfo === '/job/new') {
                return array (  '_controller' => 'Mathilde\\JobeetBundle\\Controller\\JobController::newAction',  '_route' => 'mathilde_job_new',);
            }

            // mathilde_job_create
            if ($pathinfo === '/job/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mathilde_job_create;
                }

                return array (  '_controller' => 'Mathilde\\JobeetBundle\\Controller\\JobController::createAction',  '_route' => 'mathilde_job_create',);
            }
            not_mathilde_job_create:

            // mathilde_job_edit
            if (preg_match('#^/job/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mathilde_job_edit')), array (  '_controller' => 'Mathilde\\JobeetBundle\\Controller\\JobController::editAction',));
            }

            // mathilde_job_update
            if (preg_match('#^/job/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_mathilde_job_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mathilde_job_update')), array (  '_controller' => 'Mathilde\\JobeetBundle\\Controller\\JobController::updateAction',));
            }
            not_mathilde_job_update:

            // mathilde_job_delete
            if (preg_match('#^/job/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_mathilde_job_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mathilde_job_delete')), array (  '_controller' => 'Mathilde\\JobeetBundle\\Controller\\JobController::deleteAction',));
            }
            not_mathilde_job_delete:

        }

        // mathilde_jobeet_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mathilde_jobeet_homepage');
            }

            return array (  '_controller' => 'Mathilde\\JobeetBundle\\Controller\\JobController::indexAction',  '_route' => 'mathilde_jobeet_homepage',);
        }

        // MathildeJobeetBundle_category
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<slug>[^/]++)(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'MathildeJobeetBundle_category')), array (  '_controller' => 'Mathilde\\JobeetBundle\\Controller\\CategoryController::showAction',  'page' => 1,));
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
