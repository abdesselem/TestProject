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

        if (0 === strpos($pathinfo, '/assets/compiled')) {
            if (0 === strpos($pathinfo, '/assets/compiled/backend')) {
                if (0 === strpos($pathinfo, '/assets/compiled/backend_province')) {
                    // _assetic_0ce81cb
                    if ($pathinfo === '/assets/compiled/backend_province.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0ce81cb',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0ce81cb',);
                    }

                    // _assetic_0ce81cb_0
                    if ($pathinfo === '/assets/compiled/backend_province_province-choices_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0ce81cb',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0ce81cb_0',);
                    }

                }

                // _assetic_40f0b80
                if ($pathinfo === '/assets/compiled/backend.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '40f0b80',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_40f0b80',);
                }

                if (0 === strpos($pathinfo, '/assets/compiled/backend_')) {
                    // _assetic_40f0b80_0
                    if ($pathinfo === '/assets/compiled/backend_blueimp-gallery_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '40f0b80',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_40f0b80_0',);
                    }

                    // _assetic_40f0b80_1
                    if ($pathinfo === '/assets/compiled/backend_datepicker3_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '40f0b80',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_40f0b80_1',);
                    }

                    // _assetic_40f0b80_2
                    if ($pathinfo === '/assets/compiled/backend_backend_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '40f0b80',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_40f0b80_2',);
                    }

                }

                // _assetic_8d6510f
                if ($pathinfo === '/assets/compiled/backend.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8d6510f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8d6510f',);
                }

                if (0 === strpos($pathinfo, '/assets/compiled/backend_')) {
                    // _assetic_8d6510f_0
                    if ($pathinfo === '/assets/compiled/backend_jquery.blueimp-gallery.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8d6510f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8d6510f_0',);
                    }

                    // _assetic_8d6510f_1
                    if ($pathinfo === '/assets/compiled/backend_confirm-modal_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8d6510f',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_8d6510f_1',);
                    }

                    if (0 === strpos($pathinfo, '/assets/compiled/backend_form-')) {
                        // _assetic_8d6510f_2
                        if ($pathinfo === '/assets/compiled/backend_form-collection_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '8d6510f',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_8d6510f_2',);
                        }

                        // _assetic_8d6510f_3
                        if ($pathinfo === '/assets/compiled/backend_form-spinner_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '8d6510f',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_8d6510f_3',);
                        }

                    }

                    // _assetic_8d6510f_4
                    if ($pathinfo === '/assets/compiled/backend_select2_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8d6510f',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_8d6510f_4',);
                    }

                    if (0 === strpos($pathinfo, '/assets/compiled/backend_b')) {
                        // _assetic_8d6510f_5
                        if ($pathinfo === '/assets/compiled/backend_bootstrap-datepicker_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '8d6510f',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_8d6510f_5',);
                        }

                        // _assetic_8d6510f_6
                        if ($pathinfo === '/assets/compiled/backend_backend_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '8d6510f',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_8d6510f_6',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/assets/compiled/backend_pro')) {
                        if (0 === strpos($pathinfo, '/assets/compiled/backend_product')) {
                            // _assetic_77fb50a
                            if ($pathinfo === '/assets/compiled/backend_product.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '77fb50a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_77fb50a',);
                            }

                            if (0 === strpos($pathinfo, '/assets/compiled/backend_product_')) {
                                // _assetic_77fb50a_0
                                if ($pathinfo === '/assets/compiled/backend_product_prototype-handler_1.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => '77fb50a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_77fb50a_0',);
                                }

                                // _assetic_77fb50a_1
                                if ($pathinfo === '/assets/compiled/backend_product_dynamic-property-types_2.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => '77fb50a',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_77fb50a_1',);
                                }

                                if (0 === strpos($pathinfo, '/assets/compiled/backend_product_attribute')) {
                                    // _assetic_53e560b
                                    if ($pathinfo === '/assets/compiled/backend_product_attribute.js') {
                                        return array (  '_controller' => 'assetic.controller:render',  'name' => '53e560b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_53e560b',);
                                    }

                                    // _assetic_53e560b_0
                                    if ($pathinfo === '/assets/compiled/backend_product_attribute_sylius-attribute-choices_1.js') {
                                        return array (  '_controller' => 'assetic.controller:render',  'name' => '53e560b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_53e560b_0',);
                                    }

                                }

                            }

                        }

                        if (0 === strpos($pathinfo, '/assets/compiled/backend_promotion')) {
                            // _assetic_7501edb
                            if ($pathinfo === '/assets/compiled/backend_promotion.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7501edb',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7501edb',);
                            }

                            if (0 === strpos($pathinfo, '/assets/compiled/backend_promotion_')) {
                                // _assetic_7501edb_0
                                if ($pathinfo === '/assets/compiled/backend_promotion_jquery.livequery_1.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7501edb',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7501edb_0',);
                                }

                                // _assetic_7501edb_1
                                if ($pathinfo === '/assets/compiled/backend_promotion_sylius-promotion_2.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7501edb',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_7501edb_1',);
                                }

                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/assets/compiled/backend_login')) {
                        // _assetic_2e6a366
                        if ($pathinfo === '/assets/compiled/backend_login.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '2e6a366',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_2e6a366',);
                        }

                        if (0 === strpos($pathinfo, '/assets/compiled/backend_login_')) {
                            // _assetic_2e6a366_0
                            if ($pathinfo === '/assets/compiled/backend_login_bootstrap.min_1.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '2e6a366',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_2e6a366_0',);
                            }

                            // _assetic_2e6a366_1
                            if ($pathinfo === '/assets/compiled/backend_login_font-awesome_2.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '2e6a366',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_2e6a366_1',);
                            }

                            // _assetic_2e6a366_2
                            if ($pathinfo === '/assets/compiled/backend_login_backend_3.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '2e6a366',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_2e6a366_2',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/assets/compiled/backend_shipping_method')) {
                        // _assetic_8a0ef1e
                        if ($pathinfo === '/assets/compiled/backend_shipping_method.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '8a0ef1e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8a0ef1e',);
                        }

                        if (0 === strpos($pathinfo, '/assets/compiled/backend_shipping_method_')) {
                            // _assetic_8a0ef1e_0
                            if ($pathinfo === '/assets/compiled/backend_shipping_method_prototype-handler_1.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '8a0ef1e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8a0ef1e_0',);
                            }

                            // _assetic_8a0ef1e_1
                            if ($pathinfo === '/assets/compiled/backend_shipping_method_sylius-shipping-method_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '8a0ef1e',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_8a0ef1e_1',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/assets/compiled/backend_addressing_zone')) {
                        // _assetic_eb6c416
                        if ($pathinfo === '/assets/compiled/backend_addressing_zone.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'eb6c416',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_eb6c416',);
                        }

                        // _assetic_eb6c416_0
                        if ($pathinfo === '/assets/compiled/backend_addressing_zone_sylius-addressing-zone_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'eb6c416',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_eb6c416_0',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/assets/compiled/frontend')) {
                if (0 === strpos($pathinfo, '/assets/compiled/frontend_province')) {
                    // _assetic_0781659
                    if ($pathinfo === '/assets/compiled/frontend_province.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0781659',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0781659',);
                    }

                    // _assetic_0781659_0
                    if ($pathinfo === '/assets/compiled/frontend_province_province-choices_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0781659',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0781659_0',);
                    }

                }

                // _assetic_7e46861
                if ($pathinfo === '/assets/compiled/frontend.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7e46861',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7e46861',);
                }

                if (0 === strpos($pathinfo, '/assets/compiled/frontend_')) {
                    // _assetic_7e46861_0
                    if ($pathinfo === '/assets/compiled/frontend_frontend_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e46861',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_7e46861_0',);
                    }

                    // _assetic_7e46861_1
                    if ($pathinfo === '/assets/compiled/frontend_blueimp-gallery_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e46861',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_7e46861_1',);
                    }

                }

                // _assetic_26a225b
                if ($pathinfo === '/assets/compiled/frontend.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '26a225b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_26a225b',);
                }

                if (0 === strpos($pathinfo, '/assets/compiled/frontend_')) {
                    // _assetic_26a225b_0
                    if ($pathinfo === '/assets/compiled/frontend_jquery.blueimp-gallery.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '26a225b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_26a225b_0',);
                    }

                    // _assetic_26a225b_1
                    if ($pathinfo === '/assets/compiled/frontend_confirm-modal_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '26a225b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_26a225b_1',);
                    }

                    // _assetic_26a225b_2
                    if ($pathinfo === '/assets/compiled/frontend_frontend_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '26a225b',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_26a225b_2',);
                    }

                }

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

        }

        if (0 === strpos($pathinfo, '/installer')) {
            // sylius_installer
            if ($pathinfo === '/installer') {
                return array (  '_controller' => 'sylius.controller.process:startAction',  'scenarioAlias' => 'sylius_installer',  '_route' => 'sylius_installer',);
            }

            if (0 === strpos($pathinfo, '/installer/flow')) {
                // sylius_flow_start
                if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_start')), array (  '_controller' => 'sylius.controller.process:startAction',));
                }

                // sylius_flow_display
                if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)/(?P<stepName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_display')), array (  '_controller' => 'sylius.controller.process:displayAction',));
                }

                // sylius_flow_forward
                if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)/(?P<stepName>[^/]++)/forward$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_forward')), array (  '_controller' => 'sylius.controller.process:forwardAction',));
                }

            }

        }

        // sylius_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sylius_homepage');
            }

            return array (  '_controller' => 'sylius.controller.frontend.homepage:mainAction',  '_route' => 'sylius_homepage',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // sylius_currency_change
            if (0 === strpos($pathinfo, '/currency/change') && preg_match('#^/currency/change/(?P<currency>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_currency_change')), array (  '_controller' => 'sylius.controller.currency:changeAction',));
            }

            if (0 === strpos($pathinfo, '/checkout')) {
                // sylius_checkout_start
                if (rtrim($pathinfo, '/') === '/checkout') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_checkout_start');
                    }

                    return array (  '_controller' => 'sylius.controller.process:startAction',  'scenarioAlias' => 'sylius_checkout',  '_route' => 'sylius_checkout_start',);
                }

                // sylius_checkout_display
                if (preg_match('#^/checkout/(?P<stepName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_checkout_display')), array (  '_controller' => 'sylius.controller.process:displayAction',  'scenarioAlias' => 'sylius_checkout',));
                }

                // sylius_checkout_forward
                if (preg_match('#^/checkout/(?P<stepName>[^/]++)/forward$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_checkout_forward')), array (  '_controller' => 'sylius.controller.process:forwardAction',  'scenarioAlias' => 'sylius_checkout',));
                }

                // sylius_checkout_security
                if ($pathinfo === '/checkout/security') {
                    return array (  '_controller' => 'sylius.controller.process:displayAction',  'scenarioAlias' => 'sylius_checkout',  'stepName' => 'security',  '_route' => 'sylius_checkout_security',);
                }

                // sylius_checkout_addressing
                if ($pathinfo === '/checkout/addressing') {
                    return array (  '_controller' => 'sylius.controller.process:displayAction',  'scenarioAlias' => 'sylius_checkout',  'stepName' => 'addressing',  '_route' => 'sylius_checkout_addressing',);
                }

                // sylius_checkout_shipping
                if ($pathinfo === '/checkout/shipping') {
                    return array (  '_controller' => 'sylius.controller.process:displayAction',  'scenarioAlias' => 'sylius_checkout',  'stepName' => 'shipping',  '_route' => 'sylius_checkout_shipping',);
                }

                // sylius_checkout_payment
                if ($pathinfo === '/checkout/payment') {
                    return array (  '_controller' => 'sylius.controller.process:displayAction',  'scenarioAlias' => 'sylius_checkout',  'stepName' => 'payment',  '_route' => 'sylius_checkout_payment',);
                }

                // sylius_checkout_finalize
                if ($pathinfo === '/checkout/finalize') {
                    return array (  '_controller' => 'sylius.controller.process:displayAction',  'scenarioAlias' => 'sylius_checkout',  'stepName' => 'finalize',  '_route' => 'sylius_checkout_finalize',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/account')) {
            // sylius_account_homepage
            if (rtrim($pathinfo, '/') === '/account') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sylius_account_homepage');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'sylius_account_homepage',);
            }

            if (0 === strpos($pathinfo, '/account/orders')) {
                // sylius_account_order_index
                if (rtrim($pathinfo, '/') === '/account/orders') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_account_order_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_account_order_index');
                    }

                    return array (  '_controller' => 'sylius.controller.frontend.account.order:indexAction',  '_route' => 'sylius_account_order_index',);
                }
                not_sylius_account_order_index:

                // sylius_account_order_invoice
                if (0 === strpos($pathinfo, '/account/orders/invoice') && preg_match('#^/account/orders/invoice/(?P<number>[^/\\.]++)(?:\\.(?P<_format>html|pdf))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_account_order_invoice;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_account_order_invoice')), array (  '_controller' => 'sylius.controller.frontend.account.order:renderInvoiceAction',  '_format' => 'pdf',));
                }
                not_sylius_account_order_invoice:

                // sylius_account_order_show
                if (preg_match('#^/account/orders/(?P<number>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_account_order_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_account_order_show')), array (  '_controller' => 'sylius.controller.frontend.account.order:showAction',));
                }
                not_sylius_account_order_show:

            }

            if (0 === strpos($pathinfo, '/account/addresses')) {
                // sylius_account_address_index
                if (rtrim($pathinfo, '/') === '/account/addresses') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_account_address_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_account_address_index');
                    }

                    return array (  '_controller' => 'sylius.controller.frontend.account.address:indexAction',  '_route' => 'sylius_account_address_index',);
                }
                not_sylius_account_address_index:

                // sylius_account_address_create
                if ($pathinfo === '/account/addresses/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_account_address_create;
                    }

                    return array (  '_controller' => 'sylius.controller.frontend.account.address:createAction',  '_route' => 'sylius_account_address_create',);
                }
                not_sylius_account_address_create:

                // sylius_account_address_update
                if (preg_match('#^/account/addresses/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_account_address_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_account_address_update')), array (  '_controller' => 'sylius.controller.frontend.account.address:updateAction',));
                }
                not_sylius_account_address_update:

                // sylius_account_address_delete
                if (preg_match('#^/account/addresses/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_account_address_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_account_address_delete')), array (  '_controller' => 'sylius.controller.frontend.account.address:deleteAction',));
                }
                not_sylius_account_address_delete:

                // sylius_account_address_set_default_billing
                if (preg_match('#^/account/addresses/(?P<id>\\d+)/default/billing$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_sylius_account_address_set_default_billing;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_account_address_set_default_billing')), array (  '_controller' => 'sylius.controller.frontend.account.address:setAddressAsAction',  'type' => 'billing',));
                }
                not_sylius_account_address_set_default_billing:

                // sylius_account_address_set_default_shipping
                if (preg_match('#^/account/addresses/(?P<id>\\d+)/default/shipping$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_sylius_account_address_set_default_shipping;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_account_address_set_default_shipping')), array (  '_controller' => 'sylius.controller.frontend.account.address:setAddressAsAction',  'type' => 'shipping',));
                }
                not_sylius_account_address_set_default_shipping:

            }

            // sylius_switch_user_return
            if (0 === strpos($pathinfo, '/account/switch') && preg_match('#^/account/switch/(?P<username>[^/]++)/exit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_switch_user_return')), array (  '_controller' => 'sylius.controller.backend.security:exitUserSwitchAction',));
            }

        }

        if (0 === strpos($pathinfo, '/cart')) {
            // sylius_cart_clear
            if ($pathinfo === '/cart/clear') {
                return array (  '_controller' => 'sylius.controller.cart:clearAction',  '_route' => 'sylius_cart_clear',);
            }

            // sylius_cart_item_add
            if ($pathinfo === '/cart/add') {
                return array (  '_controller' => 'sylius.controller.cart_item:addAction',  '_route' => 'sylius_cart_item_add',);
            }

            // sylius_cart_item_remove
            if (preg_match('#^/cart/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_cart_item_remove')), array (  '_controller' => 'sylius.controller.cart_item:removeAction',));
            }

            // sylius_cart_summary
            if ($pathinfo === '/cart') {
                return array (  '_controller' => 'sylius.controller.cart:summaryAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Frontend/Cart:summary.html.twig',  ),  '_route' => 'sylius_cart_summary',);
            }

            // sylius_cart_save
            if ($pathinfo === '/cart/save') {
                return array (  '_controller' => 'sylius.controller.cart:saveAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Frontend/Cart:summary.html.twig',  ),  '_route' => 'sylius_cart_save',);
            }

        }

        if (0 === strpos($pathinfo, '/administration')) {
            // sylius_backend_index
            if (rtrim($pathinfo, '/') === '/administration') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sylius_backend_index');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sylius_backend_dashboard',  'permanent' => true,  '_route' => 'sylius_backend_index',);
            }

            // sylius_backend_dashboard
            if ($pathinfo === '/administration/dashboard') {
                return array (  '_controller' => 'sylius.controller.backend.dashboard:mainAction',  '_route' => 'sylius_backend_dashboard',);
            }

            if (0 === strpos($pathinfo, '/administration/users')) {
                // sylius_backend_user_index
                if (rtrim($pathinfo, '/') === '/administration/users') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_user_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_user_index');
                    }

                    return array (  '_controller' => 'sylius.controller.user:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/User:index.html.twig',    'method' => 'createFilterPaginator',    'arguments' =>     array (      0 => '$criteria',      1 => '$sorting',      2 => '$deleted',    ),  ),  '_route' => 'sylius_backend_user_index',);
                }
                not_sylius_backend_user_index:

                // sylius_backend_user_create
                if ($pathinfo === '/administration/users/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_user_create;
                    }

                    return array (  '_controller' => 'sylius.controller.user:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/User:create.html.twig',    'redirect' => 'sylius_backend_user_show',  ),  '_route' => 'sylius_backend_user_create',);
                }
                not_sylius_backend_user_create:

                // sylius_backend_user_update
                if (preg_match('#^/administration/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'POST', 'HEAD'));
                        goto not_sylius_backend_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_user_update')), array (  '_controller' => 'sylius.controller.user:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/User:update.html.twig',    'redirect' => 'sylius_backend_user_show',  ),));
                }
                not_sylius_backend_user_update:

                // sylius_backend_user_delete
                if (preg_match('#^/administration/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_user_delete')), array (  '_controller' => 'sylius.controller.user:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_user_index',  ),));
                }
                not_sylius_backend_user_delete:

                // sylius_backend_user_show
                if (preg_match('#^/administration/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_user_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_user_show')), array (  '_controller' => 'sylius.controller.user:showAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/User:show.html.twig',    'method' => 'findForDetailsPage',    'arguments' =>     array (      0 => '$id',    ),  ),));
                }
                not_sylius_backend_user_show:

            }

            if (0 === strpos($pathinfo, '/administration/groups')) {
                // sylius_backend_group_index
                if (rtrim($pathinfo, '/') === '/administration/groups') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_group_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_group_index');
                    }

                    return array (  '_controller' => 'sylius.controller.group:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Group:index.html.twig',  ),  '_route' => 'sylius_backend_group_index',);
                }
                not_sylius_backend_group_index:

                // sylius_backend_group_create
                if ($pathinfo === '/administration/groups/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_group_create;
                    }

                    return array (  '_controller' => 'sylius.controller.group:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Group:create.html.twig',    'redirect' => 'sylius_backend_group_index',  ),  '_route' => 'sylius_backend_group_create',);
                }
                not_sylius_backend_group_create:

                // sylius_backend_group_update
                if (preg_match('#^/administration/groups/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'POST', 'HEAD'));
                        goto not_sylius_backend_group_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_group_update')), array (  '_controller' => 'sylius.controller.group:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Group:update.html.twig',    'redirect' => 'sylius_backend_group_index',  ),));
                }
                not_sylius_backend_group_update:

                // sylius_backend_group_delete
                if (preg_match('#^/administration/groups/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_group_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_group_delete')), array (  '_controller' => 'sylius.controller.group:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_group_index',  ),));
                }
                not_sylius_backend_group_delete:

            }

            if (0 === strpos($pathinfo, '/administration/products')) {
                // sylius_backend_product_index
                if (rtrim($pathinfo, '/') === '/administration/products') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_product_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_product_index');
                    }

                    return array (  '_controller' => 'sylius.controller.product:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Product:index.html.twig',    'method' => 'createFilterPaginator',    'arguments' =>     array (      0 => '$criteria',      1 => '$sorting',      2 => '$deleted',    ),  ),  '_route' => 'sylius_backend_product_index',);
                }
                not_sylius_backend_product_index:

                // sylius_backend_product_create
                if ($pathinfo === '/administration/products/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_product_create;
                    }

                    return array (  '_controller' => 'sylius.controller.product:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Product:create.html.twig',    'redirect' => 'sylius_backend_product_show',  ),  '_route' => 'sylius_backend_product_create',);
                }
                not_sylius_backend_product_create:

                // sylius_backend_product_update
                if (preg_match('#^/administration/products/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'POST', 'HEAD'));
                        goto not_sylius_backend_product_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_update')), array (  '_controller' => 'sylius.controller.product:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Product:update.html.twig',    'redirect' => 'sylius_backend_product_show',  ),));
                }
                not_sylius_backend_product_update:

                // sylius_backend_product_delete
                if (preg_match('#^/administration/products/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_product_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_delete')), array (  '_controller' => 'sylius.controller.product:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_product_index',  ),));
                }
                not_sylius_backend_product_delete:

                // sylius_backend_product_history
                if (preg_match('#^/administration/products/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_product_history;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_history')), array (  '_controller' => 'sylius.controller.product:historyAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Product:history.html.twig',    'method' => 'findForDetailsPage',    'arguments' =>     array (      0 => '$id',    ),  ),));
                }
                not_sylius_backend_product_history:

                // sylius_backend_product_show
                if (preg_match('#^/administration/products/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_product_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_show')), array (  '_controller' => 'sylius.controller.product:showAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Product:show.html.twig',    'method' => 'findForDetailsPage',    'arguments' =>     array (      0 => '$id',    ),  ),));
                }
                not_sylius_backend_product_show:

            }

            if (0 === strpos($pathinfo, '/administration/inventory')) {
                // sylius_backend_inventory_index
                if (rtrim($pathinfo, '/') === '/administration/inventory') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_inventory_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_inventory_index');
                    }

                    return array (  '_controller' => 'sylius.controller.product:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Inventory:index.html.twig',    'method' => 'createFilterPaginator',    'arguments' =>     array (      0 => '$criteria',      1 => '$sorting',      2 => false,    ),    'sortable' => true,    'sorting' =>     array (      'updatedAt' => 'asc',    ),  ),  '_route' => 'sylius_backend_inventory_index',);
                }
                not_sylius_backend_inventory_index:

                // sylius_backend_inventory_unit_update_state
                if (0 === strpos($pathinfo, '/administration/inventory/update-state') && preg_match('#^/administration/inventory/update\\-state/(?P<id>[^/]++)/(?P<transition>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_sylius_backend_inventory_unit_update_state;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_inventory_unit_update_state')), array (  '_controller' => 'sylius.controller.inventory_unit:updateStateAction',));
                }
                not_sylius_backend_inventory_unit_update_state:

            }

            if (0 === strpos($pathinfo, '/administration/product')) {
                if (0 === strpos($pathinfo, '/administration/products')) {
                    // sylius_backend_product_variant_create
                    if (preg_match('#^/administration/products/(?P<productId>[^/]++)/variants/new$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sylius_backend_product_variant_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_variant_create')), array (  '_controller' => 'sylius.controller.product_variant:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ProductVariant:create.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_product_show',      'parameters' =>       array (        'id' => '$productId',      ),    ),  ),));
                    }
                    not_sylius_backend_product_variant_create:

                    // sylius_backend_product_variant_update
                    if (preg_match('#^/administration/products/(?P<productId>[^/]++)/variants/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                            goto not_sylius_backend_product_variant_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_variant_update')), array (  '_controller' => 'sylius.controller.product_variant:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ProductVariant:update.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_product_show',      'parameters' =>       array (        'id' => '$productId',      ),    ),  ),));
                    }
                    not_sylius_backend_product_variant_update:

                    // sylius_backend_product_variant_delete
                    if (preg_match('#^/administration/products/(?P<productId>[^/]++)/variants/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_product_variant_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_variant_delete')), array (  '_controller' => 'sylius.controller.product_variant:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_product_show',      'parameters' =>       array (        'id' => '$productId',      ),    ),  ),));
                    }
                    not_sylius_backend_product_variant_delete:

                    // sylius_backend_product_variant_generate
                    if (preg_match('#^/administration/products/(?P<productId>[^/]++)/variants/generate$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_sylius_backend_product_variant_generate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_variant_generate')), array (  '_controller' => 'sylius.controller.product_variant:generateAction',  '_sylius' =>   array (    'redirect' => 'referer',  ),));
                    }
                    not_sylius_backend_product_variant_generate:

                }

                if (0 === strpos($pathinfo, '/administration/product-')) {
                    if (0 === strpos($pathinfo, '/administration/product-options')) {
                        // sylius_backend_product_option_index
                        if (rtrim($pathinfo, '/') === '/administration/product-options') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_sylius_backend_product_option_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'sylius_backend_product_option_index');
                            }

                            return array (  '_controller' => 'sylius.controller.product_option:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ProductOption:index.html.twig',    'sortable' => true,    'sorting' =>     array (      'name' => 'desc',    ),  ),  '_route' => 'sylius_backend_product_option_index',);
                        }
                        not_sylius_backend_product_option_index:

                        // sylius_backend_product_option_create
                        if ($pathinfo === '/administration/product-options/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_sylius_backend_product_option_create;
                            }

                            return array (  '_controller' => 'sylius.controller.product_option:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ProductOption:create.html.twig',    'redirect' => 'sylius_backend_product_option_index',  ),  '_route' => 'sylius_backend_product_option_create',);
                        }
                        not_sylius_backend_product_option_create:

                        // sylius_backend_product_option_update
                        if (preg_match('#^/administration/product\\-options/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                                goto not_sylius_backend_product_option_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_option_update')), array (  '_controller' => 'sylius.controller.product_option:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ProductOption:update.html.twig',    'redirect' => 'sylius_backend_product_option_index',  ),));
                        }
                        not_sylius_backend_product_option_update:

                        // sylius_backend_product_option_delete
                        if (preg_match('#^/administration/product\\-options/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_sylius_backend_product_option_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_option_delete')), array (  '_controller' => 'sylius.controller.product_option:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_product_option_index',  ),));
                        }
                        not_sylius_backend_product_option_delete:

                    }

                    if (0 === strpos($pathinfo, '/administration/product-attributes')) {
                        // sylius_backend_product_attribute_index
                        if (rtrim($pathinfo, '/') === '/administration/product-attributes') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_sylius_backend_product_attribute_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'sylius_backend_product_attribute_index');
                            }

                            return array (  '_controller' => 'sylius.controller.product_attribute:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ProductAttribute:index.html.twig',    'sortable' => true,    'sorting' =>     array (      'name' => 'desc',    ),  ),  '_route' => 'sylius_backend_product_attribute_index',);
                        }
                        not_sylius_backend_product_attribute_index:

                        // sylius_backend_product_attribute_create
                        if ($pathinfo === '/administration/product-attributes/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_sylius_backend_product_attribute_create;
                            }

                            return array (  '_controller' => 'sylius.controller.product_attribute:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ProductAttribute:create.html.twig',    'redirect' => 'sylius_backend_product_attribute_index',  ),  '_route' => 'sylius_backend_product_attribute_create',);
                        }
                        not_sylius_backend_product_attribute_create:

                        // sylius_backend_product_attribute_update
                        if (preg_match('#^/administration/product\\-attributes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                                goto not_sylius_backend_product_attribute_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_attribute_update')), array (  '_controller' => 'sylius.controller.product_attribute:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ProductAttribute:update.html.twig',    'redirect' => 'sylius_backend_product_attribute_index',  ),));
                        }
                        not_sylius_backend_product_attribute_update:

                        // sylius_backend_product_attribute_delete
                        if (preg_match('#^/administration/product\\-attributes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_sylius_backend_product_attribute_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_attribute_delete')), array (  '_controller' => 'sylius.controller.product_attribute:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_product_attribute_index',  ),));
                        }
                        not_sylius_backend_product_attribute_delete:

                    }

                    if (0 === strpos($pathinfo, '/administration/product-prototypes')) {
                        // sylius_backend_product_prototype_index
                        if (rtrim($pathinfo, '/') === '/administration/product-prototypes') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_sylius_backend_product_prototype_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'sylius_backend_product_prototype_index');
                            }

                            return array (  '_controller' => 'sylius.controller.product_prototype:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ProductPrototype:index.html.twig',    'sortable' => true,    'sorting' =>     array (      'name' => 'desc',    ),  ),  '_route' => 'sylius_backend_product_prototype_index',);
                        }
                        not_sylius_backend_product_prototype_index:

                        // sylius_backend_product_prototype_create
                        if ($pathinfo === '/administration/product-prototypes/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_sylius_backend_product_prototype_create;
                            }

                            return array (  '_controller' => 'sylius.controller.product_prototype:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ProductPrototype:create.html.twig',    'redirect' => 'sylius_backend_product_prototype_index',  ),  '_route' => 'sylius_backend_product_prototype_create',);
                        }
                        not_sylius_backend_product_prototype_create:

                        // sylius_backend_product_prototype_update
                        if (preg_match('#^/administration/product\\-prototypes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                                goto not_sylius_backend_product_prototype_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_prototype_update')), array (  '_controller' => 'sylius.controller.product_prototype:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ProductPrototype:update.html.twig',    'redirect' => 'sylius_backend_product_prototype_index',  ),));
                        }
                        not_sylius_backend_product_prototype_update:

                        // sylius_backend_product_prototype_delete
                        if (preg_match('#^/administration/product\\-prototypes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_sylius_backend_product_prototype_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_prototype_delete')), array (  '_controller' => 'sylius.controller.product_prototype:deleteAction',  '_sylius' =>   array (    'redirect' => 'sylius_backend_product_prototype_index',  ),));
                        }
                        not_sylius_backend_product_prototype_delete:

                        // sylius_backend_product_prototype_build
                        if (preg_match('#^/administration/product\\-prototypes/(?P<id>[^/]++)/build$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_sylius_backend_product_prototype_build;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_product_prototype_build')), array (  '_controller' => 'sylius.controller.product_prototype:buildAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ProductPrototype:build.html.twig',    'redirect' => 'sylius_backend_product_show',  ),));
                        }
                        not_sylius_backend_product_prototype_build:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/administration/taxonomies')) {
                // sylius_backend_taxonomy_index
                if (rtrim($pathinfo, '/') === '/administration/taxonomies') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_taxonomy_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_taxonomy_index');
                    }

                    return array (  '_controller' => 'sylius.controller.taxonomy:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Taxonomy:index.html.twig',    'sortable' => true,    'paginate' => 50,  ),  '_route' => 'sylius_backend_taxonomy_index',);
                }
                not_sylius_backend_taxonomy_index:

                // sylius_backend_taxonomy_create
                if ($pathinfo === '/administration/taxonomies/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_taxonomy_create;
                    }

                    return array (  '_controller' => 'sylius.controller.taxonomy:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Taxonomy:create.html.twig',    'redirect' => 'sylius_backend_taxonomy_show',  ),  '_route' => 'sylius_backend_taxonomy_create',);
                }
                not_sylius_backend_taxonomy_create:

                // sylius_backend_taxonomy_update
                if (preg_match('#^/administration/taxonomies/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_sylius_backend_taxonomy_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_taxonomy_update')), array (  '_controller' => 'sylius.controller.taxonomy:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Taxonomy:update.html.twig',    'redirect' => 'sylius_backend_taxonomy_show',  ),));
                }
                not_sylius_backend_taxonomy_update:

                // sylius_backend_taxonomy_delete
                if (preg_match('#^/administration/taxonomies/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_taxonomy_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_taxonomy_delete')), array (  '_controller' => 'sylius.controller.taxonomy:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_taxonomy_index',  ),));
                }
                not_sylius_backend_taxonomy_delete:

                // sylius_backend_taxonomy_show
                if (preg_match('#^/administration/taxonomies/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_taxonomy_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_taxonomy_show')), array (  '_controller' => 'sylius.controller.taxonomy:showAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Taxonomy:show.html.twig',  ),));
                }
                not_sylius_backend_taxonomy_show:

                // sylius_backend_taxon_create
                if (preg_match('#^/administration/taxonomies/(?P<taxonomyId>[^/]++)/taxons/new$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_taxon_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_taxon_create')), array (  '_controller' => 'sylius.controller.taxon:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Taxon:create.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_taxonomy_show',      'parameters' =>       array (        'id' => '$taxonomyId',      ),    ),  ),));
                }
                not_sylius_backend_taxon_create:

                // sylius_backend_taxon_update
                if (preg_match('#^/administration/taxonomies/(?P<taxonomyId>[^/]++)/taxons/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_sylius_backend_taxon_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_taxon_update')), array (  '_controller' => 'sylius.controller.taxon:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Taxon:update.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_taxonomy_show',      'parameters' =>       array (        'id' => '$taxonomyId',      ),    ),  ),));
                }
                not_sylius_backend_taxon_update:

                // sylius_backend_taxon_product_index
                if (preg_match('#^/administration/taxonomies/(?P<taxonomyId>[^/]++)/taxons/(?P<id>[^/]++)/products$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_taxon_product_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_taxon_product_index')), array (  '_controller' => 'sylius.controller.product:indexByTaxonIdAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Taxon:productIndex.html.twig',    'paginate' => 30,  ),));
                }
                not_sylius_backend_taxon_product_index:

                // sylius_backend_taxon_delete
                if (preg_match('#^/administration/taxonomies/(?P<taxonomyId>[^/]++)/taxons/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_taxon_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_taxon_delete')), array (  '_controller' => 'sylius.controller.taxon:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_taxonomy_show',      'parameters' =>       array (        'id' => '$taxonomyId',      ),    ),  ),));
                }
                not_sylius_backend_taxon_delete:

            }

            if (0 === strpos($pathinfo, '/administration/orders')) {
                // sylius_backend_order_index
                if (rtrim($pathinfo, '/') === '/administration/orders') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_order_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_order_index');
                    }

                    return array (  '_controller' => 'sylius.controller.order:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Order:index.html.twig',    'method' => 'createFilterPaginator',    'arguments' =>     array (      0 => '$criteria',      1 => '$sorting',      2 => '$deleted',    ),    'paginate' => 20,  ),  '_route' => 'sylius_backend_order_index',);
                }
                not_sylius_backend_order_index:

                // sylius_backend_order_create
                if ($pathinfo === '/administration/orders/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_order_create;
                    }

                    return array (  '_controller' => 'sylius.controller.order:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Order:create.html.twig',    'redirect' => 'sylius_backend_order_show',  ),  '_route' => 'sylius_backend_order_create',);
                }
                not_sylius_backend_order_create:

                // sylius_backend_order_update
                if (preg_match('#^/administration/orders/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_sylius_backend_order_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_order_update')), array (  '_controller' => 'sylius.controller.order:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Order:update.html.twig',    'redirect' => 'sylius_backend_order_show',  ),));
                }
                not_sylius_backend_order_update:

                // sylius_backend_order_delete
                if (preg_match('#^/administration/orders/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_order_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_order_delete')), array (  '_controller' => 'sylius.controller.order:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_order_index',  ),));
                }
                not_sylius_backend_order_delete:

                // sylius_backend_order_show
                if (preg_match('#^/administration/orders/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_order_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_order_show')), array (  '_controller' => 'sylius.controller.order:showAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Order:show.html.twig',    'method' => 'findForDetailsPage',    'arguments' =>     array (      0 => '$id',    ),  ),));
                }
                not_sylius_backend_order_show:

                // sylius_backend_order_by_user
                if (0 === strpos($pathinfo, '/administration/orders/u') && preg_match('#^/administration/orders/u/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_order_by_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_order_by_user')), array (  '_controller' => 'sylius.controller.order:indexByUserAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Order:indexByUser.html.twig',    'sortable' => true,    'sorting' =>     array (      'updatedAt' => 'desc',    ),  ),));
                }
                not_sylius_backend_order_by_user:

                // sylius_backend_order_release_inventory
                if (0 === strpos($pathinfo, '/administration/orders/release-inventory') && preg_match('#^/administration/orders/release\\-inventory/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_sylius_backend_order_release_inventory;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_order_release_inventory')), array (  '_controller' => 'sylius.controller.order:releaseInventoryAction',));
                }
                not_sylius_backend_order_release_inventory:

            }

            if (0 === strpos($pathinfo, '/administration/promotion')) {
                if (0 === strpos($pathinfo, '/administration/promotions')) {
                    // sylius_backend_promotion_index
                    if (rtrim($pathinfo, '/') === '/administration/promotions') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_promotion_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_backend_promotion_index');
                        }

                        return array (  '_controller' => 'sylius.controller.promotion:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Promotion:index.html.twig',    'sortable' => true,    'sorting' =>     array (      'priority' => 'desc',    ),  ),  '_route' => 'sylius_backend_promotion_index',);
                    }
                    not_sylius_backend_promotion_index:

                    // sylius_backend_promotion_create
                    if ($pathinfo === '/administration/promotions/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sylius_backend_promotion_create;
                        }

                        return array (  '_controller' => 'sylius.controller.promotion:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Promotion:create.html.twig',    'redirect' => 'sylius_backend_promotion_show',  ),  '_route' => 'sylius_backend_promotion_create',);
                    }
                    not_sylius_backend_promotion_create:

                    // sylius_backend_promotion_update
                    if (preg_match('#^/administration/promotions/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                            goto not_sylius_backend_promotion_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_update')), array (  '_controller' => 'sylius.controller.promotion:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Promotion:update.html.twig',    'redirect' => 'sylius_backend_promotion_show',  ),));
                    }
                    not_sylius_backend_promotion_update:

                    // sylius_backend_promotion_move_up
                    if (preg_match('#^/administration/promotions/(?P<id>[^/]++)/move\\-up$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_sylius_backend_promotion_move_up;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_move_up')), array (  '_controller' => 'sylius.controller.promotion:moveUpAction',  '_sylius' =>   array (    'redirect' => 'referer',    'sortable_position' => 'priority',  ),));
                    }
                    not_sylius_backend_promotion_move_up:

                    // sylius_backend_promotion_move_down
                    if (preg_match('#^/administration/promotions/(?P<id>[^/]++)/move\\-down$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_sylius_backend_promotion_move_down;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_move_down')), array (  '_controller' => 'sylius.controller.promotion:moveDownAction',  '_sylius' =>   array (    'redirect' => 'referer',    'sortable_position' => 'priority',  ),));
                    }
                    not_sylius_backend_promotion_move_down:

                    // sylius_backend_promotion_delete
                    if (preg_match('#^/administration/promotions/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_promotion_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_delete')), array (  '_controller' => 'sylius.controller.promotion:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_promotion_index',  ),));
                    }
                    not_sylius_backend_promotion_delete:

                    // sylius_backend_promotion_show
                    if (preg_match('#^/administration/promotions/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_promotion_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_show')), array (  '_controller' => 'sylius.controller.promotion:showAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Promotion:show.html.twig',  ),));
                    }
                    not_sylius_backend_promotion_show:

                    // sylius_backend_promotion_coupon_index
                    if (preg_match('#^/administration/promotions/(?P<promotionId>[^/]++)/coupons/?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_promotion_coupon_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_backend_promotion_coupon_index');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_coupon_index')), array (  '_controller' => 'sylius.controller.promotion_coupon:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Coupon:index.html.twig',    'criteria' =>     array (      'promotion' => '$promotionId',    ),  ),));
                    }
                    not_sylius_backend_promotion_coupon_index:

                    // sylius_backend_promotion_coupon_create
                    if (preg_match('#^/administration/promotions/(?P<promotionId>[^/]++)/coupons/new$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sylius_backend_promotion_coupon_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_coupon_create')), array (  '_controller' => 'sylius.controller.promotion_coupon:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Coupon:create.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_promotion_show',      'parameters' =>       array (        'id' => '$promotionId',      ),    ),  ),));
                    }
                    not_sylius_backend_promotion_coupon_create:

                    // sylius_backend_promotion_coupon_update
                    if (preg_match('#^/administration/promotions/(?P<promotionId>[^/]++)/coupons/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                            goto not_sylius_backend_promotion_coupon_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_coupon_update')), array (  '_controller' => 'sylius.controller.promotion_coupon:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Coupon:update.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_promotion_show',      'parameters' =>       array (        'id' => '$promotionId',      ),    ),  ),));
                    }
                    not_sylius_backend_promotion_coupon_update:

                    // sylius_backend_promotion_coupon_delete
                    if (preg_match('#^/administration/promotions/(?P<promotionId>[^/]++)/coupons/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_promotion_coupon_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_coupon_delete')), array (  '_controller' => 'sylius.controller.promotion_coupon:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'referer',  ),));
                    }
                    not_sylius_backend_promotion_coupon_delete:

                    // sylius_backend_promotion_coupon_generate
                    if (preg_match('#^/administration/promotions/(?P<promotionId>[^/]++)/coupons/generate$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sylius_backend_promotion_coupon_generate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_coupon_generate')), array (  '_controller' => 'sylius.controller.promotion_coupon:generateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Coupon:generate.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_promotion_coupon_index',      'parameters' =>       array (        'promotionId' => '$promotionId',      ),    ),  ),));
                    }
                    not_sylius_backend_promotion_coupon_generate:

                }

                if (0 === strpos($pathinfo, '/administration/promotion-')) {
                    // sylius_backend_promotion_rule_delete
                    if (0 === strpos($pathinfo, '/administration/promotion-rules') && preg_match('#^/administration/promotion\\-rules/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_promotion_rule_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_rule_delete')), array (  '_controller' => 'sylius.controller.promotion_rule:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_promotion_show',      'parameters' =>       array (        'id' => '$promotionId',      ),    ),  ),));
                    }
                    not_sylius_backend_promotion_rule_delete:

                    // sylius_backend_promotion_action_delete
                    if (0 === strpos($pathinfo, '/administration/promotion-actions') && preg_match('#^/administration/promotion\\-actions/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_promotion_action_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_promotion_action_delete')), array (  '_controller' => 'sylius.controller.promotion_action:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_promotion_show',      'parameters' =>       array (        'id' => '$promotionId',      ),    ),  ),));
                    }
                    not_sylius_backend_promotion_action_delete:

                }

            }

            if (0 === strpos($pathinfo, '/administration/tax-')) {
                if (0 === strpos($pathinfo, '/administration/tax-categories')) {
                    // sylius_backend_tax_category_index
                    if (rtrim($pathinfo, '/') === '/administration/tax-categories') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_tax_category_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_backend_tax_category_index');
                        }

                        return array (  '_controller' => 'sylius.controller.tax_category:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/TaxCategory:index.html.twig',    'sortable' => true,    'sorting' =>     array (      'name' => 'desc',    ),  ),  '_route' => 'sylius_backend_tax_category_index',);
                    }
                    not_sylius_backend_tax_category_index:

                    // sylius_backend_tax_category_create
                    if ($pathinfo === '/administration/tax-categories/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sylius_backend_tax_category_create;
                        }

                        return array (  '_controller' => 'sylius.controller.tax_category:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/TaxCategory:create.html.twig',    'redirect' => 'sylius_backend_tax_category_index',  ),  '_route' => 'sylius_backend_tax_category_create',);
                    }
                    not_sylius_backend_tax_category_create:

                    // sylius_backend_tax_category_update
                    if (preg_match('#^/administration/tax\\-categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                            goto not_sylius_backend_tax_category_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_tax_category_update')), array (  '_controller' => 'sylius.controller.tax_category:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/TaxCategory:update.html.twig',    'redirect' => 'sylius_backend_tax_category_index',  ),));
                    }
                    not_sylius_backend_tax_category_update:

                    // sylius_backend_tax_category_delete
                    if (preg_match('#^/administration/tax\\-categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_tax_category_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_tax_category_delete')), array (  '_controller' => 'sylius.controller.tax_category:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_tax_category_index',  ),));
                    }
                    not_sylius_backend_tax_category_delete:

                    // sylius_backend_tax_category_show
                    if (preg_match('#^/administration/tax\\-categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_tax_category_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_tax_category_show')), array (  '_controller' => 'sylius.controller.tax_category:showAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/TaxCategory:show.html.twig',  ),));
                    }
                    not_sylius_backend_tax_category_show:

                }

                if (0 === strpos($pathinfo, '/administration/tax-rates')) {
                    // sylius_backend_tax_rate_index
                    if (rtrim($pathinfo, '/') === '/administration/tax-rates') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_tax_rate_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_backend_tax_rate_index');
                        }

                        return array (  '_controller' => 'sylius.controller.tax_rate:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/TaxRate:index.html.twig',    'sortable' => true,    'sorting' =>     array (      'name' => 'desc',    ),  ),  '_route' => 'sylius_backend_tax_rate_index',);
                    }
                    not_sylius_backend_tax_rate_index:

                    // sylius_backend_tax_rate_create
                    if ($pathinfo === '/administration/tax-rates/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sylius_backend_tax_rate_create;
                        }

                        return array (  '_controller' => 'sylius.controller.tax_rate:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/TaxRate:create.html.twig',    'redirect' => 'sylius_backend_tax_rate_show',  ),  '_route' => 'sylius_backend_tax_rate_create',);
                    }
                    not_sylius_backend_tax_rate_create:

                    // sylius_backend_tax_rate_update
                    if (preg_match('#^/administration/tax\\-rates/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                            goto not_sylius_backend_tax_rate_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_tax_rate_update')), array (  '_controller' => 'sylius.controller.tax_rate:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/TaxRate:update.html.twig',    'redirect' => 'sylius_backend_tax_rate_show',  ),));
                    }
                    not_sylius_backend_tax_rate_update:

                    // sylius_backend_tax_rate_delete
                    if (preg_match('#^/administration/tax\\-rates/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_tax_rate_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_tax_rate_delete')), array (  '_controller' => 'sylius.controller.tax_rate:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_tax_rate_index',  ),));
                    }
                    not_sylius_backend_tax_rate_delete:

                    // sylius_backend_tax_rate_show
                    if (preg_match('#^/administration/tax\\-rates/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_tax_rate_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_tax_rate_show')), array (  '_controller' => 'sylius.controller.tax_rate:showAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/TaxRate:show.html.twig',  ),));
                    }
                    not_sylius_backend_tax_rate_show:

                }

            }

            if (0 === strpos($pathinfo, '/administration/ship')) {
                if (0 === strpos($pathinfo, '/administration/shipping-')) {
                    if (0 === strpos($pathinfo, '/administration/shipping-categories')) {
                        // sylius_backend_shipping_category_index
                        if (rtrim($pathinfo, '/') === '/administration/shipping-categories') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_sylius_backend_shipping_category_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'sylius_backend_shipping_category_index');
                            }

                            return array (  '_controller' => 'sylius.controller.shipping_category:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ShippingCategory:index.html.twig',    'sortable' => true,    'sorting' =>     array (      'name' => 'desc',    ),  ),  '_route' => 'sylius_backend_shipping_category_index',);
                        }
                        not_sylius_backend_shipping_category_index:

                        // sylius_backend_shipping_category_create
                        if ($pathinfo === '/administration/shipping-categories/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_sylius_backend_shipping_category_create;
                            }

                            return array (  '_controller' => 'sylius.controller.shipping_category:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ShippingCategory:create.html.twig',    'redirect' => 'sylius_backend_shipping_category_index',  ),  '_route' => 'sylius_backend_shipping_category_create',);
                        }
                        not_sylius_backend_shipping_category_create:

                        // sylius_backend_shipping_category_update
                        if (preg_match('#^/administration/shipping\\-categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                                goto not_sylius_backend_shipping_category_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_shipping_category_update')), array (  '_controller' => 'sylius.controller.shipping_category:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ShippingCategory:update.html.twig',    'redirect' => 'sylius_backend_shipping_category_index',  ),));
                        }
                        not_sylius_backend_shipping_category_update:

                        // sylius_backend_shipping_category_delete
                        if (preg_match('#^/administration/shipping\\-categories/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_sylius_backend_shipping_category_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_shipping_category_delete')), array (  '_controller' => 'sylius.controller.shipping_category:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_shipping_category_index',  ),));
                        }
                        not_sylius_backend_shipping_category_delete:

                    }

                    if (0 === strpos($pathinfo, '/administration/shipping-methods')) {
                        // sylius_backend_shipping_method_index
                        if (rtrim($pathinfo, '/') === '/administration/shipping-methods') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_sylius_backend_shipping_method_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'sylius_backend_shipping_method_index');
                            }

                            return array (  '_controller' => 'sylius.controller.shipping_method:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ShippingMethod:index.html.twig',    'sortable' => true,    'sorting' =>     array (      'name' => 'desc',    ),  ),  '_route' => 'sylius_backend_shipping_method_index',);
                        }
                        not_sylius_backend_shipping_method_index:

                        // sylius_backend_shipping_method_create
                        if ($pathinfo === '/administration/shipping-methods/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_sylius_backend_shipping_method_create;
                            }

                            return array (  '_controller' => 'sylius.controller.shipping_method:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ShippingMethod:create.html.twig',    'redirect' => 'sylius_backend_shipping_method_show',  ),  '_route' => 'sylius_backend_shipping_method_create',);
                        }
                        not_sylius_backend_shipping_method_create:

                        // sylius_backend_shipping_method_update
                        if (preg_match('#^/administration/shipping\\-methods/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                                goto not_sylius_backend_shipping_method_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_shipping_method_update')), array (  '_controller' => 'sylius.controller.shipping_method:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ShippingMethod:update.html.twig',    'redirect' => 'sylius_backend_shipping_method_show',  ),));
                        }
                        not_sylius_backend_shipping_method_update:

                        // sylius_backend_shipping_method_delete
                        if (preg_match('#^/administration/shipping\\-methods/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_sylius_backend_shipping_method_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_shipping_method_delete')), array (  '_controller' => 'sylius.controller.shipping_method:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_shipping_method_index',  ),));
                        }
                        not_sylius_backend_shipping_method_delete:

                        // sylius_backend_shipping_method_show
                        if (preg_match('#^/administration/shipping\\-methods/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_sylius_backend_shipping_method_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_shipping_method_show')), array (  '_controller' => 'sylius.controller.shipping_method:showAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ShippingMethod:show.html.twig',  ),));
                        }
                        not_sylius_backend_shipping_method_show:

                    }

                }

                if (0 === strpos($pathinfo, '/administration/shipments')) {
                    // sylius_backend_shipment_index
                    if (rtrim($pathinfo, '/') === '/administration/shipments') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_shipment_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_backend_shipment_index');
                        }

                        return array (  '_controller' => 'sylius.controller.shipment:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Shipment:index.html.twig',    'method' => 'createFilterPaginator',    'arguments' =>     array (      0 => '$criteria',      1 => '$sorting',      2 => '$deleted',    ),    'paginate' => 20,    'sortable' => true,    'sorting' =>     array (      'updatedAt' => 'desc',    ),  ),  '_route' => 'sylius_backend_shipment_index',);
                    }
                    not_sylius_backend_shipment_index:

                    // sylius_backend_shipment_update
                    if (preg_match('#^/administration/shipments/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                            goto not_sylius_backend_shipment_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_shipment_update')), array (  '_controller' => 'sylius.controller.shipment:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Shipment:update.html.twig',    'redirect' => 'sylius_backend_shipment_show',  ),));
                    }
                    not_sylius_backend_shipment_update:

                    // sylius_backend_shipment_delete
                    if (preg_match('#^/administration/shipments/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_shipment_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_shipment_delete')), array (  '_controller' => 'sylius.controller.shipment:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_shipment_index',  ),));
                    }
                    not_sylius_backend_shipment_delete:

                    // sylius_backend_shipment_show
                    if (preg_match('#^/administration/shipments/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_shipment_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_shipment_show')), array (  '_controller' => 'sylius.controller.shipment:showAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Shipment:show.html.twig',  ),));
                    }
                    not_sylius_backend_shipment_show:

                    // sylius_backend_shipment_ship
                    if (0 === strpos($pathinfo, '/administration/shipments/ship') && preg_match('#^/administration/shipments/ship/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_sylius_backend_shipment_ship;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_shipment_ship')), array (  '_controller' => 'sylius.controller.shipment:shipAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Shipment:show.html.twig',    'redirect' => 'sylius_backend_shipment_show',  ),));
                    }
                    not_sylius_backend_shipment_ship:

                }

            }

            if (0 === strpos($pathinfo, '/administration/payment')) {
                if (0 === strpos($pathinfo, '/administration/payment-methods')) {
                    // sylius_backend_payment_method_index
                    if (rtrim($pathinfo, '/') === '/administration/payment-methods') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_payment_method_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_backend_payment_method_index');
                        }

                        return array (  '_controller' => 'sylius.controller.payment_method:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/PaymentMethod:index.html.twig',    'sortable' => true,    'sorting' =>     array (      'name' => 'desc',    ),  ),  '_route' => 'sylius_backend_payment_method_index',);
                    }
                    not_sylius_backend_payment_method_index:

                    // sylius_backend_payment_method_create
                    if ($pathinfo === '/administration/payment-methods/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sylius_backend_payment_method_create;
                        }

                        return array (  '_controller' => 'sylius.controller.payment_method:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/PaymentMethod:create.html.twig',    'redirect' => 'sylius_backend_payment_method_index',  ),  '_route' => 'sylius_backend_payment_method_create',);
                    }
                    not_sylius_backend_payment_method_create:

                    // sylius_backend_payment_method_update
                    if (preg_match('#^/administration/payment\\-methods/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                            goto not_sylius_backend_payment_method_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_payment_method_update')), array (  '_controller' => 'sylius.controller.payment_method:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/PaymentMethod:update.html.twig',    'redirect' => 'sylius_backend_payment_method_index',  ),));
                    }
                    not_sylius_backend_payment_method_update:

                    // sylius_backend_payment_method_delete
                    if (preg_match('#^/administration/payment\\-methods/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_payment_method_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_payment_method_delete')), array (  '_controller' => 'sylius.controller.payment_method:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_payment_method_index',  ),));
                    }
                    not_sylius_backend_payment_method_delete:

                }

                if (0 === strpos($pathinfo, '/administration/payments')) {
                    // sylius_backend_payment_index
                    if (rtrim($pathinfo, '/') === '/administration/payments') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_payment_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_backend_payment_index');
                        }

                        return array (  '_controller' => 'sylius.controller.payment:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Payment:index.html.twig',    'sortable' => true,    'sorting' =>     array (      'id' => 'desc',    ),  ),  '_route' => 'sylius_backend_payment_index',);
                    }
                    not_sylius_backend_payment_index:

                    // sylius_backend_payment_create
                    if ($pathinfo === '/administration/payments/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sylius_backend_payment_create;
                        }

                        return array (  '_controller' => 'sylius.controller.payment:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Payment:create.html.twig',    'redirect' => 'sylius_backend_payment_index',  ),  '_route' => 'sylius_backend_payment_create',);
                    }
                    not_sylius_backend_payment_create:

                    // sylius_backend_payment_update
                    if (preg_match('#^/administration/payments/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                            goto not_sylius_backend_payment_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_payment_update')), array (  '_controller' => 'sylius.controller.payment:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Payment:update.html.twig',    'redirect' => 'sylius_backend_payment_index',  ),));
                    }
                    not_sylius_backend_payment_update:

                    // sylius_backend_payment_delete
                    if (preg_match('#^/administration/payments/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_payment_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_payment_delete')), array (  '_controller' => 'sylius.controller.payment:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_payment_index',  ),));
                    }
                    not_sylius_backend_payment_delete:

                    // sylius_backend_payment_show
                    if (preg_match('#^/administration/payments/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_payment_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_payment_show')), array (  '_controller' => 'sylius.controller.payment:show',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Payment:show.html.twig',  ),));
                    }
                    not_sylius_backend_payment_show:

                    // sylius_backend_payment_history
                    if (preg_match('#^/administration/payments/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_payment_history;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_payment_history')), array (  '_controller' => 'sylius.controller.payment:historyAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Payment:history.html.twig',  ),));
                    }
                    not_sylius_backend_payment_history:

                    // sylius_backend_payment_update_state
                    if (0 === strpos($pathinfo, '/administration/payments/update-state') && preg_match('#^/administration/payments/update\\-state/(?P<id>[^/]++)/(?P<transition>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_sylius_backend_payment_update_state;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_payment_update_state')), array (  '_controller' => 'sylius.controller.payment:updateStateAction',));
                    }
                    not_sylius_backend_payment_update_state:

                }

            }

            if (0 === strpos($pathinfo, '/administration/exchange-rates')) {
                // sylius_backend_exchange_rate_index
                if (rtrim($pathinfo, '/') === '/administration/exchange-rates') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_exchange_rate_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_exchange_rate_index');
                    }

                    return array (  '_controller' => 'sylius.controller.exchange_rate:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ExchangeRate:index.html.twig',    'sortable' => true,    'paginate' => false,  ),  '_route' => 'sylius_backend_exchange_rate_index',);
                }
                not_sylius_backend_exchange_rate_index:

                // sylius_backend_exchange_rate_create
                if ($pathinfo === '/administration/exchange-rates/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_exchange_rate_create;
                    }

                    return array (  '_controller' => 'sylius.controller.exchange_rate:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ExchangeRate:create.html.twig',    'redirect' => 'sylius_backend_exchange_rate_index',  ),  '_route' => 'sylius_backend_exchange_rate_create',);
                }
                not_sylius_backend_exchange_rate_create:

                // sylius_backend_exchange_rate_update
                if (preg_match('#^/administration/exchange\\-rates/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_sylius_backend_exchange_rate_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_exchange_rate_update')), array (  '_controller' => 'sylius.controller.exchange_rate:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/ExchangeRate:update.html.twig',    'redirect' => 'sylius_backend_exchange_rate_index',  ),));
                }
                not_sylius_backend_exchange_rate_update:

                // sylius_backend_exchange_rate_delete
                if (preg_match('#^/administration/exchange\\-rates/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_exchange_rate_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_exchange_rate_delete')), array (  '_controller' => 'sylius.controller.exchange_rate:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_exchange_rate_index',  ),));
                }
                not_sylius_backend_exchange_rate_delete:

            }

            if (0 === strpos($pathinfo, '/administration/countries')) {
                // sylius_backend_country_index
                if (rtrim($pathinfo, '/') === '/administration/countries') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_country_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_country_index');
                    }

                    return array (  '_controller' => 'sylius.controller.country:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Country:index.html.twig',    'sortable' => true,    'paginate' => 50,  ),  '_route' => 'sylius_backend_country_index',);
                }
                not_sylius_backend_country_index:

                // sylius_backend_country_create
                if ($pathinfo === '/administration/countries/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_country_create;
                    }

                    return array (  '_controller' => 'sylius.controller.country:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Country:create.html.twig',    'redirect' => 'sylius_backend_country_show',  ),  '_route' => 'sylius_backend_country_create',);
                }
                not_sylius_backend_country_create:

                // sylius_backend_country_update
                if (preg_match('#^/administration/countries/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_sylius_backend_country_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_country_update')), array (  '_controller' => 'sylius.controller.country:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Country:update.html.twig',    'redirect' => 'sylius_backend_country_show',  ),));
                }
                not_sylius_backend_country_update:

                // sylius_backend_country_delete
                if (preg_match('#^/administration/countries/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_country_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_country_delete')), array (  '_controller' => 'sylius.controller.country:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_country_index',  ),));
                }
                not_sylius_backend_country_delete:

                // sylius_backend_country_show
                if (preg_match('#^/administration/countries/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_country_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_country_show')), array (  '_controller' => 'sylius.controller.country:showAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Country:show.html.twig',  ),));
                }
                not_sylius_backend_country_show:

            }

            // sylius_backend_province_delete
            if (0 === strpos($pathinfo, '/administration/provinces') && preg_match('#^/administration/provinces/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_sylius_backend_province_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_province_delete')), array (  '_controller' => 'sylius.controller.province:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_country_show',      'parameters' =>       array (        'id' => '$countryId',      ),    ),  ),));
            }
            not_sylius_backend_province_delete:

            if (0 === strpos($pathinfo, '/administration/zone')) {
                if (0 === strpos($pathinfo, '/administration/zones')) {
                    // sylius_backend_zone_index
                    if (rtrim($pathinfo, '/') === '/administration/zones') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_zone_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sylius_backend_zone_index');
                        }

                        return array (  '_controller' => 'sylius.controller.zone:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Zone:index.html.twig',    'sortable' => true,  ),  '_route' => 'sylius_backend_zone_index',);
                    }
                    not_sylius_backend_zone_index:

                    // sylius_backend_zone_create
                    if ($pathinfo === '/administration/zones/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_sylius_backend_zone_create;
                        }

                        return array (  '_controller' => 'sylius.controller.zone:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Zone:create.html.twig',    'redirect' => 'sylius_backend_zone_show',  ),  '_route' => 'sylius_backend_zone_create',);
                    }
                    not_sylius_backend_zone_create:

                    // sylius_backend_zone_update
                    if (preg_match('#^/administration/zones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                            goto not_sylius_backend_zone_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_zone_update')), array (  '_controller' => 'sylius.controller.zone:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Zone:update.html.twig',    'redirect' => 'sylius_backend_zone_show',  ),));
                    }
                    not_sylius_backend_zone_update:

                    // sylius_backend_zone_delete
                    if (preg_match('#^/administration/zones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sylius_backend_zone_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_zone_delete')), array (  '_controller' => 'sylius.controller.zone:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_zone_index',  ),));
                    }
                    not_sylius_backend_zone_delete:

                    // sylius_backend_zone_show
                    if (preg_match('#^/administration/zones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_zone_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_zone_show')), array (  '_controller' => 'sylius.controller.zone:showAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Zone:show.html.twig',  ),));
                    }
                    not_sylius_backend_zone_show:

                }

                // sylius_backend_zone_member_delete
                if (0 === strpos($pathinfo, '/administration/zone-members') && preg_match('#^/administration/zone\\-members/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_zone_member_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_zone_member_delete')), array (  '_controller' => 'sylius.controller.zone_member:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' =>     array (      'route' => 'sylius_backend_zone_show',      'parameters' =>       array (        'id' => '$zoneId',      ),    ),  ),));
                }
                not_sylius_backend_zone_member_delete:

            }

            if (0 === strpos($pathinfo, '/administration/locales')) {
                // sylius_backend_locale_index
                if (rtrim($pathinfo, '/') === '/administration/locales') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_locale_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_locale_index');
                    }

                    return array (  '_controller' => 'sylius.controller.locale:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Locale:index.html.twig',    'sortable' => true,    'sorting' =>     array (      'code' => 'desc',    ),  ),  '_route' => 'sylius_backend_locale_index',);
                }
                not_sylius_backend_locale_index:

                // sylius_backend_locale_create
                if ($pathinfo === '/administration/locales/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_locale_create;
                    }

                    return array (  '_controller' => 'sylius.controller.locale:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Locale:create.html.twig',    'redirect' => 'sylius_backend_locale_index',  ),  '_route' => 'sylius_backend_locale_create',);
                }
                not_sylius_backend_locale_create:

                // sylius_backend_locale_update
                if (preg_match('#^/administration/locales/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_sylius_backend_locale_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_locale_update')), array (  '_controller' => 'sylius.controller.locale:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Locale:update.html.twig',    'redirect' => 'sylius_backend_locale_index',  ),));
                }
                not_sylius_backend_locale_update:

                // sylius_backend_locale_delete
                if (preg_match('#^/administration/locales/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_locale_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_locale_delete')), array (  '_controller' => 'sylius.controller.locale:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'redirect' => 'sylius_backend_locale_index',  ),));
                }
                not_sylius_backend_locale_delete:

            }

            if (0 === strpos($pathinfo, '/administration/blocks')) {
                // sylius_backend_block_index
                if (rtrim($pathinfo, '/') === '/administration/blocks') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_block_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_block_index');
                    }

                    return array (  '_controller' => 'sylius.controller.block:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Block:index.html.twig',    'sortable' => true,  ),  '_route' => 'sylius_backend_block_index',);
                }
                not_sylius_backend_block_index:

                // sylius_backend_block_create
                if ($pathinfo === '/administration/blocks/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_block_create;
                    }

                    return array (  '_controller' => 'sylius.controller.block:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Block:create.html.twig',    'redirect' => 'sylius_backend_block_index',  ),  '_route' => 'sylius_backend_block_create',);
                }
                not_sylius_backend_block_create:

                // sylius_backend_block_update
                if (preg_match('#^/administration/blocks/(?P<id>.+)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_sylius_backend_block_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_block_update')), array (  '_controller' => 'sylius.controller.block:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Block:update.html.twig',    'method' => 'find',    'arguments' =>     array (      0 => '$id',    ),    'redirect' => 'sylius_backend_block_index',  ),));
                }
                not_sylius_backend_block_update:

                // sylius_backend_block_delete
                if (preg_match('#^/administration/blocks/(?P<id>.+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_block_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_block_delete')), array (  '_controller' => 'sylius.controller.block:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'method' => 'find',    'arguments' =>     array (      0 => '$id',    ),    'redirect' => 'sylius_backend_block_index',  ),));
                }
                not_sylius_backend_block_delete:

            }

            if (0 === strpos($pathinfo, '/administration/pages')) {
                // sylius_backend_page_index
                if (rtrim($pathinfo, '/') === '/administration/pages') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_page_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sylius_backend_page_index');
                    }

                    return array (  '_controller' => 'sylius.controller.page:indexAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Page:index.html.twig',    'sortable' => true,  ),  '_route' => 'sylius_backend_page_index',);
                }
                not_sylius_backend_page_index:

                // sylius_backend_page_create
                if ($pathinfo === '/administration/pages/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sylius_backend_page_create;
                    }

                    return array (  '_controller' => 'sylius.controller.page:createAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Page:create.html.twig',    'redirect' => 'sylius_backend_page_index',  ),  '_route' => 'sylius_backend_page_create',);
                }
                not_sylius_backend_page_create:

                // sylius_backend_page_update
                if (preg_match('#^/administration/pages/(?P<id>.+)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_sylius_backend_page_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_page_update')), array (  '_controller' => 'sylius.controller.page:updateAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Page:update.html.twig',    'method' => 'find',    'arguments' =>     array (      0 => '$id',    ),    'redirect' => 'sylius_backend_page_index',  ),));
                }
                not_sylius_backend_page_update:

                // sylius_backend_page_delete
                if (preg_match('#^/administration/pages/(?P<id>.+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_sylius_backend_page_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_backend_page_delete')), array (  '_controller' => 'sylius.controller.page:deleteAction',  '_sylius' =>   array (    'template' => 'SyliusWebBundle:Backend/Misc:delete.html.twig',    'method' => 'find',    'arguments' =>     array (      0 => '$id',    ),    'redirect' => 'sylius_backend_page_index',  ),));
                }
                not_sylius_backend_page_delete:

            }

            if (0 === strpos($pathinfo, '/administration/settings')) {
                // sylius_backend_general_settings
                if ($pathinfo === '/administration/settings/general') {
                    return array (  '_controller' => 'sylius.controller.settings:updateAction',  'namespace' => 'general',  'template' => 'SyliusWebBundle:Backend/Settings:general.html.twig',  '_route' => 'sylius_backend_general_settings',);
                }

                // sylius_backend_taxation_settings
                if ($pathinfo === '/administration/settings/taxation') {
                    return array (  '_controller' => 'sylius.controller.settings:updateAction',  'namespace' => 'taxation',  'template' => 'SyliusWebBundle:Backend/Settings:taxation.html.twig',  '_route' => 'sylius_backend_taxation_settings',);
                }

            }

            if (0 === strpos($pathinfo, '/administration/log')) {
                if (0 === strpos($pathinfo, '/administration/login')) {
                    // sylius_backend_security_login
                    if ($pathinfo === '/administration/login') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sylius_backend_security_login;
                        }

                        return array (  '_controller' => 'sylius.controller.backend.security:loginAction',  '_route' => 'sylius_backend_security_login',);
                    }
                    not_sylius_backend_security_login:

                    // sylius_backend_security_login_check
                    if ($pathinfo === '/administration/login-check') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_sylius_backend_security_login_check;
                        }

                        return array (  '_controller' => 'sylius.controller.backend.security:checkAction',  '_route' => 'sylius_backend_security_login_check',);
                    }
                    not_sylius_backend_security_login_check:

                }

                // sylius_backend_security_logout
                if ($pathinfo === '/administration/logout') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sylius_backend_security_logout;
                    }

                    return array (  '_controller' => 'sylius.controller.backend.security:logoutAction',  '_route' => 'sylius_backend_security_logout',);
                }
                not_sylius_backend_security_logout:

            }

        }

        // sylius_province_choice_form
        if ($pathinfo === '/province/choice-form') {
            return array (  '_controller' => 'sylius.controller.province:choiceFormAction',  '_sylius' =>   array (    'template' => 'SyliusAddressingBundle:Province:_provinceChoiceForm.html.twig',  ),  '_route' => 'sylius_province_choice_form',);
        }

        // sylius_partial_product_latest
        if ($pathinfo === '/_partial/product/latest') {
            return array (  '_controller' => 'sylius.controller.product:indexAction',  '_sylius' =>   array (    'paginate' => false,    'method' => 'findLatest',    'arguments' =>     array (      0 => '$limit',    ),    'template' => '$template',  ),  '_route' => 'sylius_partial_product_latest',);
        }

        if (0 === strpos($pathinfo, '/media/cache/sylius_')) {
            // _imagine_sylius_small
            if (0 === strpos($pathinfo, '/media/cache/sylius_small') && preg_match('#^/media/cache/sylius_small/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_sylius_small;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_sylius_small')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'sylius_small',));
            }
            not__imagine_sylius_small:

            // _imagine_sylius_medium
            if (0 === strpos($pathinfo, '/media/cache/sylius_medium') && preg_match('#^/media/cache/sylius_medium/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_sylius_medium;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_sylius_medium')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'sylius_medium',));
            }
            not__imagine_sylius_medium:

            // _imagine_sylius_large
            if (0 === strpos($pathinfo, '/media/cache/sylius_large') && preg_match('#^/media/cache/sylius_large/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_sylius_large;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_sylius_large')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'sylius_large',));
            }
            not__imagine_sylius_large:

        }

        if (0 === strpos($pathinfo, '/payment')) {
            if (0 === strpos($pathinfo, '/payment/capture')) {
                // payum_capture_do_session
                if ($pathinfo === '/payment/capture/session-token') {
                    return array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doSessionTokenAction',  '_route' => 'payum_capture_do_session',);
                }

                // payum_capture_do
                if (preg_match('#^/payment/capture/(?P<payum_token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_capture_do')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doAction',));
                }

            }

            if (0 === strpos($pathinfo, '/payment/notify')) {
                // payum_notify_do_unsafe
                if (0 === strpos($pathinfo, '/payment/notify/unsafe') && preg_match('#^/payment/notify/unsafe/(?P<payment_name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_notify_do_unsafe')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doUnsafeAction',));
                }

                // payum_notify_do
                if (preg_match('#^/payment/notify/(?P<payum_token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_notify_do')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/account/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/account/profile') {
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
            if ($pathinfo === '/account/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

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
        if ($pathinfo === '/account/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // hwi_oauth_connect
        if (rtrim($pathinfo, '/') === '/connect') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hwi_oauth_connect');
            }

            return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // hwi_oauth_service_redirect
            if (preg_match('#^/login/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
            }

            if (0 === strpos($pathinfo, '/login/check-')) {
                // amazon_login
                if ($pathinfo === '/login/check-amazon') {
                    return array('_route' => 'amazon_login');
                }

                // facebook_login
                if ($pathinfo === '/login/check-facebook') {
                    return array('_route' => 'facebook_login');
                }

                // google_login
                if ($pathinfo === '/login/check-google') {
                    return array('_route' => 'google_login');
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
