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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // front_office_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_office_homepage')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\DefaultController::index1Action',));
        }

        if (0 === strpos($pathinfo, '/front')) {
            // front_office_new
            if ($pathinfo === '/front/new') {
                return array (  '_controller' => 'FrontOfficeBundle\\Controller\\ExtraitNaissance2Controller::newAction',  '_route' => 'front_office_new',);
            }

            // front_office_list
            if ($pathinfo === '/front/list') {
                return array (  '_controller' => 'FrontOfficeBundle\\Controller\\ExtraitNaissance2Controller::newAction',  '_route' => 'front_office_list',);
            }

        }

        // my_app_user_homepage
        if ($pathinfo === '/hello') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_app_user_homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // my_app_user_home
            if ($pathinfo === '/login2/reg') {
                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::loginInscAction',  '_route' => 'my_app_user_home',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/back')) {
            if (0 === strpos($pathinfo, '/back/mariage')) {
                // mariage
                if (rtrim($pathinfo, '/') === '/back/mariage') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'mariage');
                    }

                    return array (  '_controller' => 'BackOffice\\backBundle\\Controller\\MariageController::indexAction',  '_route' => 'mariage',);
                }

                // mariage_show
                if (preg_match('#^/back/mariage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mariage_show')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\MariageController::showAction',));
                }

                // mariage_new
                if ($pathinfo === '/back/mariage/new') {
                    return array (  '_controller' => 'BackOffice\\backBundle\\Controller\\MariageController::newAction',  '_route' => 'mariage_new',);
                }

                // mariage_create
                if ($pathinfo === '/back/mariage/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mariage_create;
                    }

                    return array (  '_controller' => 'BackOffice\\backBundle\\Controller\\MariageController::createAction',  '_route' => 'mariage_create',);
                }
                not_mariage_create:

                // mariage_edit
                if (preg_match('#^/back/mariage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mariage_edit')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\MariageController::editAction',));
                }

                // mariage_update
                if (preg_match('#^/back/mariage/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_mariage_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mariage_update')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\MariageController::updateAction',));
                }
                not_mariage_update:

                // mariage_delete
                if (preg_match('#^/back/mariage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_mariage_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mariage_delete')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\MariageController::deleteAction',));
                }
                not_mariage_delete:

            }

            if (0 === strpos($pathinfo, '/back/fosuser')) {
                // fosuser
                if (rtrim($pathinfo, '/') === '/back/fosuser') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fosuser');
                    }

                    return array (  '_controller' => 'BackOffice\\backBundle\\Controller\\FosUserController::indexAction',  '_route' => 'fosuser',);
                }

                // fosuser_show
                if (preg_match('#^/back/fosuser/(?P<id>[^/]++)/lock$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fosuser_show')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\FosUserController::blockAction',));
                }

                if (0 === strpos($pathinfo, '/back/fosuser/new')) {
                    // fosuser_new
                    if ($pathinfo === '/back/fosuser/new') {
                        return array (  '_controller' => 'BackOffice\\backBundle\\Controller\\FosUserController::newAction',  '_route' => 'fosuser_new',);
                    }

                    // fosuser_agent
                    if ($pathinfo === '/back/fosuser/newagent') {
                        return array (  '_controller' => 'BackOffice\\backBundle\\Controller\\FosUserController::agentAction',  '_route' => 'fosuser_agent',);
                    }

                }

                // fosuser_create
                if ($pathinfo === '/back/fosuser/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fosuser_create;
                    }

                    return array (  '_controller' => 'BackOffice\\backBundle\\Controller\\FosUserController::createAction',  '_route' => 'fosuser_create',);
                }
                not_fosuser_create:

                // fosuser_edit
                if (preg_match('#^/back/fosuser/(?P<id>[^/]++)/unlock$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fosuser_edit')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\FosUserController::deblockAction',));
                }

                // fosuser_update
                if (preg_match('#^/back/fosuser/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_fosuser_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fosuser_update')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\FosUserController::updateAction',));
                }
                not_fosuser_update:

                // fosuser_delete
                if (preg_match('#^/back/fosuser/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_fosuser_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fosuser_delete')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\FosUserController::deleteAction',));
                }
                not_fosuser_delete:

            }

            if (0 === strpos($pathinfo, '/back/demandeextrait')) {
                // demandeextrait
                if (rtrim($pathinfo, '/') === '/back/demandeextrait') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'demandeextrait');
                    }

                    return array (  '_controller' => 'BackOffice\\backBundle\\Controller\\DemandeextraitController::indexAction',  '_route' => 'demandeextrait',);
                }

                // demandeextrait_show
                if (preg_match('#^/back/demandeextrait/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandeextrait_show')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\DemandeextraitController::showAction',));
                }

                // demandeextrait_new
                if ($pathinfo === '/back/demandeextrait/new') {
                    return array (  '_controller' => 'BackOffice\\backBundle\\Controller\\DemandeextraitController::newAction',  '_route' => 'demandeextrait_new',);
                }

                // demandeextrait_create
                if ($pathinfo === '/back/demandeextrait/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_demandeextrait_create;
                    }

                    return array (  '_controller' => 'BackOffice\\backBundle\\Controller\\DemandeextraitController::createAction',  '_route' => 'demandeextrait_create',);
                }
                not_demandeextrait_create:

                // back_demandeextrait_edit
                if (preg_match('#^/back/demandeextrait/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_demandeextrait_edit')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\DemandeextraitController::editAction',));
                }

                // demandeextrait_update
                if (preg_match('#^/back/demandeextrait/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_demandeextrait_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandeextrait_update')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\DemandeextraitController::updateAction',));
                }
                not_demandeextrait_update:

                // demandeextrait_delete
                if (preg_match('#^/back/demandeextrait/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_demandeextrait_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandeextrait_delete')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\DemandeextraitController::deleteAction',));
                }
                not_demandeextrait_delete:

            }

            // back_officeback_homepage
            if (0 === strpos($pathinfo, '/back/hello') && preg_match('#^/back/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_officeback_homepage')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\DefaultController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/back/extraitnaissance')) {
                // back_officeback_extraitnaissance
                if (rtrim($pathinfo, '/') === '/back/extraitnaissance') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'back_officeback_extraitnaissance');
                    }

                    return array (  '_controller' => 'BackOffice\\backBundle\\Controller\\ExtraitNaissanceController::indexAction',  '_route' => 'back_officeback_extraitnaissance',);
                }

                // back_officeback_extraitnaissance_edit
                if (preg_match('#^/back/extraitnaissance/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_officeback_extraitnaissance_edit')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\ExtraitNaissanceController::editAction',));
                }

                // back_officeback_extraitnaissance_new
                if ($pathinfo === '/back/extraitnaissance/new') {
                    return array (  '_controller' => 'BackOffice\\backBundle\\Controller\\ExtraitNaissanceController::newAction',  '_route' => 'back_officeback_extraitnaissance_new',);
                }

                // back_officeback_extraitnaissance_show
                if (preg_match('#^/back/extraitnaissance/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_officeback_extraitnaissance_show')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\ExtraitNaissanceController::showAction',));
                }

                // back_officeback_extraitnaissance_create
                if (preg_match('#^/back/extraitnaissance/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_officeback_extraitnaissance_create')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\ExtraitNaissanceController::createAction',));
                }

                // back_officeback_extraitnaissance_update
                if (preg_match('#^/back/extraitnaissance/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_officeback_extraitnaissance_update')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\ExtraitNaissanceController::updateAction',));
                }

                // back_officeback_extraitnaissance_delete
                if (preg_match('#^/back/extraitnaissance/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_officeback_extraitnaissance_delete')), array (  '_controller' => 'BackOffice\\backBundle\\Controller\\ExtraitNaissanceController::updateAction',));
                }

            }

        }

        // inter_cin_homepage
        if (0 === strpos($pathinfo, '/hello/x') && preg_match('#^/hello/x/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'inter_cin_homepage')), array (  '_controller' => 'Inter\\CinBundle\\Controller\\DefaultController::indexAction',));
        }

        // inter_cin_backpage
        if ($pathinfo === '/back/inter') {
            return array (  '_controller' => 'Inter\\CinBundle\\Controller\\CinController::backAction',  '_route' => 'inter_cin_backpage',);
        }

        if (0 === strpos($pathinfo, '/Back/Inter')) {
            // egov_back_listcin_cine
            if ($pathinfo === '/Back/Inter/listcin') {
                return array (  '_controller' => 'Inter\\CinBundle\\Controller\\CinController::ListCinBackAction',  '_route' => 'egov_back_listcin_cine',);
            }

            // inter_Back_suppCin
            if (0 === strpos($pathinfo, '/Back/Inter/suppCin') && preg_match('#^/Back/Inter/suppCin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inter_Back_suppCin')), array (  '_controller' => 'Inter\\CinBundle\\Controller\\CinController::suppCinBackAction',));
            }

            // inter_cin_update
            if ($pathinfo === '/Back/Inter/cinupdate') {
                return array (  '_controller' => 'Inter\\CinBundle\\Controller\\CinController::updateCinAction',  '_route' => 'inter_cin_update',);
            }

        }

        if (0 === strpos($pathinfo, '/front')) {
            // inter_cin_frontajout
            if ($pathinfo === '/front/Inter/ajoucin') {
                return array (  '_controller' => 'Inter\\CinBundle\\Controller\\CinController::AjoutCINFrontAction',  '_route' => 'inter_cin_frontajout',);
            }

            // egov_front_homepage
            if ($pathinfo === '/front') {
                return array (  '_controller' => 'Inter\\CinBundle\\Controller\\DefaultController::indexAction',  '_route' => 'egov_front_homepage',);
            }

        }

        // my_app_mail_succ
        if ($pathinfo === '/succ') {
            return array (  '_controller' => 'Inter\\CinBundle\\Controller\\MailController::indexAction',  '_route' => 'my_app_mail_succ',);
        }

        // my_app_mail_form
        if ($pathinfo === '/mail') {
            return array (  '_controller' => 'Inter\\CinBundle\\Controller\\MailController::newAction',  '_route' => 'my_app_mail_form',);
        }

        // my_app_mail_sendpage
        if ($pathinfo === '/sendmail') {
            return array (  '_controller' => 'Inter\\CinBundle\\Controller\\MailController::SendMailAction',  '_route' => 'my_app_mail_sendpage',);
        }

        if (0 === strpos($pathinfo, '/compte')) {
            // compte
            if (rtrim($pathinfo, '/') === '/compte') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'compte');
                }

                return array (  '_controller' => 'CompteCPBundle\\Controller\\CompteController::indexAction',  '_route' => 'compte',);
            }

            // compte_show
            if (preg_match('#^/compte/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compte_show')), array (  '_controller' => 'CompteCPBundle\\Controller\\CompteController::showAction',));
            }

            // compte_new
            if ($pathinfo === '/compte/new') {
                return array (  '_controller' => 'CompteCPBundle\\Controller\\CompteController::newAction',  '_route' => 'compte_new',);
            }

            // compte_create
            if ($pathinfo === '/compte/create') {
                return array (  '_controller' => 'CompteCPBundle\\Controller\\CompteController::createAction',  '_route' => 'compte_create',);
            }

            // compte_edit
            if (preg_match('#^/compte/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compte_edit')), array (  '_controller' => 'CompteCPBundle\\Controller\\CompteController::editAction',));
            }

            // compte_update
            if (preg_match('#^/compte/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_compte_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compte_update')), array (  '_controller' => 'CompteCPBundle\\Controller\\CompteController::updateAction',));
            }
            not_compte_update:

            // compte_delete
            if (preg_match('#^/compte/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_compte_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compte_delete')), array (  '_controller' => 'CompteCPBundle\\Controller\\CompteController::deleteAction',));
            }
            not_compte_delete:

        }

        if (0 === strpos($pathinfo, '/backoff/demande')) {
            if (0 === strpos($pathinfo, '/backoff/demande/C')) {
                // demande_cpp
                if ($pathinfo === '/backoff/demande/CPP') {
                    return array (  '_controller' => 'CompteCPBundle\\Controller\\DemandeController::indexCPPAction',  '_route' => 'demande_cpp',);
                }

                // demande_cin
                if ($pathinfo === '/backoff/demande/Cin') {
                    return array (  '_controller' => 'CompteCPBundle\\Controller\\DemandeController::indexCinAction',  '_route' => 'demande_cin',);
                }

            }

            // demande_b3
            if ($pathinfo === '/backoff/demande/b3') {
                return array (  '_controller' => 'CompteCPBundle\\Controller\\DemandeController::indexB3Action',  '_route' => 'demande_b3',);
            }

            // demande_valider
            if (preg_match('#^/backoff/demande/(?P<id>[^/]++)/valider$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_valider')), array (  '_controller' => 'CompteCPBundle\\Controller\\DemandeController::validerAction',));
            }

            // demande_validercin
            if (preg_match('#^/backoff/demande/(?P<id>[^/]++)/validercin$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_validercin')), array (  '_controller' => 'CompteCPBundle\\Controller\\DemandeController::validerCinAction',));
            }

            // demande_ajoutCin
            if (preg_match('#^/backoff/demande/(?P<id>[^/]++)/ajoutCin$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_ajoutCin')), array (  '_controller' => 'CompteCPBundle\\Controller\\DemandeController::newCinAction',));
            }

            // demande_commenter
            if (preg_match('#^/backoff/demande/(?P<id>[^/]++)/commenter$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_commenter')), array (  '_controller' => 'CompteCPBundle\\Controller\\DemandeController::commenterAction',));
            }

            // demande_newCPP
            if ($pathinfo === '/backoff/demande/newCPP') {
                return array (  '_controller' => 'CompteCPBundle\\Controller\\DemandeController::newCPPAction',  '_route' => 'demande_newCPP',);
            }

        }

        // compte_cp_firas
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'compte_cp_firas');
            }

            return array (  '_controller' => 'CompteCPBundle\\Controller\\DefaultController::indexAction',  '_route' => 'compte_cp_firas',);
        }

        // comment_firas
        if ($pathinfo === '/comment') {
            return array (  '_controller' => 'CompteCPBundle\\Controller\\DefaultController::indexCommentAction',  '_route' => 'comment_firas',);
        }

        // about_firas
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'CompteCPBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'about_firas',);
        }

        // egov_back
        if ($pathinfo === '/backoff') {
            return array (  '_controller' => 'CompteCPBundle\\Controller\\DefaultController::BackofficeAction',  '_route' => 'egov_back',);
        }

        if (0 === strpos($pathinfo, '/Front')) {
            if (0 === strpos($pathinfo, '/Front/indus')) {
                // egovhich_main_homepage
                if ($pathinfo === '/Front/indus') {
                    return array (  '_controller' => 'Egov\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'egovhich_main_homepage',);
                }

                // egov_main_addauto
                if ($pathinfo === '/Front/indus/addauto') {
                    return array (  '_controller' => 'Egov\\MainBundle\\Controller\\AutorisationController::AddAutoFrontAction',  '_route' => 'egov_main_addauto',);
                }

            }

            // egov_main_addcin
            if ($pathinfo === '/Front/addcin') {
                return array (  '_controller' => 'Egov\\MainBundle\\Controller\\AutorisationController::AddCINFrontAction',  '_route' => 'egov_main_addcin',);
            }

            // egov_main_listautosfront
            if ($pathinfo === '/Front/indus/listautos') {
                return array (  '_controller' => 'Egov\\MainBundle\\Controller\\AutorisationController::listfrontautosAction',  '_route' => 'egov_main_listautosfront',);
            }

        }

        if (0 === strpos($pathinfo, '/Back')) {
            // egov_back_home
            if ($pathinfo === '/Back') {
                return array (  '_controller' => 'Egov\\MainBundle\\Controller\\AutorisationController::BackAction',  '_route' => 'egov_back_home',);
            }

            if (0 === strpos($pathinfo, '/Back/add')) {
                // egov_back_addcin
                if ($pathinfo === '/Back/addcin') {
                    return array (  '_controller' => 'Egov\\MainBundle\\Controller\\AutorisationController::AddCINBackAction',  '_route' => 'egov_back_addcin',);
                }

                // egov_back_addauto
                if ($pathinfo === '/Back/addauto') {
                    return array (  '_controller' => 'Egov\\MainBundle\\Controller\\AutorisationController::AddAutoBackAction',  '_route' => 'egov_back_addauto',);
                }

            }

            if (0 === strpos($pathinfo, '/Back/list')) {
                // egov_back_listauto
                if ($pathinfo === '/Back/listauto') {
                    return array (  '_controller' => 'Egov\\MainBundle\\Controller\\AutorisationController::ListAutoBackAction',  '_route' => 'egov_back_listauto',);
                }

                // egov_back_listcin_cin
                if ($pathinfo === '/Back/listcin') {
                    return array (  '_controller' => 'Egov\\MainBundle\\Controller\\AutorisationController::ListCinBackAction',  '_route' => 'egov_back_listcin_cin',);
                }

            }

            // egov_Back_suppCin
            if (0 === strpos($pathinfo, '/Back/suppCin') && preg_match('#^/Back/suppCin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'egov_Back_suppCin')), array (  '_controller' => 'Egov\\MainBundle\\Controller\\AutorisationController::suppCinBackAction',));
            }

            // cin_update
            if ($pathinfo === '/Back/cinupdate') {
                return array (  '_controller' => 'Egov\\MainBundle\\Controller\\AutorisationController::updateCinAction',  '_route' => 'cin_update',);
            }

            if (0 === strpos($pathinfo, '/Back/a')) {
                // auto_update
                if ($pathinfo === '/Back/autoupdate') {
                    return array (  '_controller' => 'Egov\\MainBundle\\Controller\\AutorisationController::updateAction',  '_route' => 'auto_update',);
                }

                // egov_back_addfac
                if ($pathinfo === '/Back/addfac') {
                    return array (  '_controller' => 'Egov\\MainBundle\\Controller\\FactureController::ajoutFacAction',  '_route' => 'egov_back_addfac',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/Front/indus/lists')) {
            // egov_Front_ListSteg
            if ($pathinfo === '/Front/indus/liststeg') {
                return array (  '_controller' => 'Egov\\MainBundle\\Controller\\FactureController::listSTEGEAction',  '_route' => 'egov_Front_ListSteg',);
            }

            // egov_Front_ListSonede
            if ($pathinfo === '/Front/indus/listsonede') {
                return array (  '_controller' => 'Egov\\MainBundle\\Controller\\FactureController::listSONEDEEAction',  '_route' => 'egov_Front_ListSonede',);
            }

        }

        if (0 === strpos($pathinfo, '/Back')) {
            // egov_Back_suppFac
            if (0 === strpos($pathinfo, '/Back/suppfac') && preg_match('#^/Back/suppfac/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'egov_Back_suppFac')), array (  '_controller' => 'Egov\\MainBundle\\Controller\\FactureController::suppFacBackAction',));
            }

            if (0 === strpos($pathinfo, '/Back/lists')) {
                // egov_Back_listSteg
                if ($pathinfo === '/Back/liststeg') {
                    return array (  '_controller' => 'Egov\\MainBundle\\Controller\\FactureController::listSTEGBackAction',  '_route' => 'egov_Back_listSteg',);
                }

                // egov_Back_listSonede
                if ($pathinfo === '/Back/listsonede') {
                    return array (  '_controller' => 'Egov\\MainBundle\\Controller\\FactureController::listSONEDEBackAction',  '_route' => 'egov_Back_listSonede',);
                }

            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

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

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
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
