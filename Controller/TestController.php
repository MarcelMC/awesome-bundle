<?php

namespace Marcelmc\AwesomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Doctrine\Common\Persistence\ObjectManager;
use Monolog\Formatter\JsonFormatter;
use Marcelmc\AwesomeBundle\Utils\TestService;

/**
 * Controllers using the View functionality of FOSRestBundle.
 *
 * @author Lukas Kahwe Smith <smith@pooteeweet.org>
 */
class TestController extends FOSRestController
{

    public function __construct(TestService $testService)
    {
        echo 'test';
    }

    /**
     * GET Get edeclaration list.
     * @Get("/v2/test-bundle/{company}")
     */
    public function getListAction()
    {
        //var_dump($this->container);
        //var_dump($this->container);
		//$this->container->get('awesome.formatter.json');
        return '213';
    }

}