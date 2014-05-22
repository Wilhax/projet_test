<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'vae_inscription_formation' => array (  0 =>   array (    0 => 'langue',    1 => 'nomSite',    2 => 'slugRubrique',    3 => 'slugFormation',  ),  1 =>   array (    '_controller' => 'VaeInscriptionBundle:Inscription:detail',    'langue' => 'fr',  ),  2 =>   array (    'langue' => 'fr|en',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slugFormation',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slugRubrique',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nomSite',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => 'fr|en',      3 => 'langue',    ),  ),  4 =>   array (  ),),
        'vae_multi_site_accueil' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Vae\\MultiSiteBundle\\Controller\\SiteController::indexAction',    '_locale' => 'fr',  ),  2 =>   array (    '_local' => 'fr|en',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),),
        'vae_base_rubrique_detail' => array (  0 =>   array (    0 => '_locale',    1 => 'nomSite',    2 => 'slugRubrique',  ),  1 =>   array (    '_controller' => 'Vae\\BaseBundle\\Controller\\RubriqueController::detailAction',    '_locale' => 'fr',  ),  2 =>   array (    '_locale' => 'fr|en',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slugRubrique',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nomSite',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'fr|en',      3 => '_locale',    ),  ),  4 =>   array (  ),),
        'vae_base_formation_detail' => array (  0 =>   array (    0 => '_locale',    1 => 'nomSite',    2 => 'slugRubrique',    3 => 'slugFormation',  ),  1 =>   array (    '_controller' => 'Vae\\BaseBundle\\Controller\\FormationController::detailAction',    '_locale' => 'fr',  ),  2 =>   array (    '_locale' => 'fr|en',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slugFormation',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slugRubrique',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nomSite',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => 'fr|en',      3 => '_locale',    ),  ),  4 =>   array (  ),),
        'vae_boutique_detail' => array (  0 =>   array (    0 => '_locale',    1 => 'nomSite',    2 => 'slugRubrique',    3 => 'slugProduit',  ),  1 =>   array (    '_controller' => 'Vae\\BoutiqueBundle\\Controller\\ProduitController::detailAction',    '_locale' => 'fr',  ),  2 =>   array (    '_locale' => 'fr|en',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slugProduit',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slugRubrique',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nomSite',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => 'fr|en',      3 => '_locale',    ),  ),  4 =>   array (  ),),
        'vae_boutique_success' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vae\\BoutiqueBundle\\Controller\\ProduitController::successAction',    'langue' => 'fr',  ),  2 =>   array (    'langue' => 'fr|en',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/paypal/success',    ),  ),  4 =>   array (  ),),
        'vae_boutique_cancel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vae\\BoutiqueBundle\\Controller\\ProduitController::cancelAction',    'langue' => 'fr',  ),  2 =>   array (    'langue' => 'fr|en',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/paypal/cancel',    ),  ),  4 =>   array (  ),),
        'vae_boutique_ipn' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vae\\BoutiqueBundle\\Controller\\ProduitController::ipnAction',    'langue' => 'fr',  ),  2 =>   array (    'langue' => 'fr|en',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/paypal/ipn',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
