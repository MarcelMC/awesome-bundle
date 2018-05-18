<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PkoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\Get;

/**
 * Controllers using the View functionality of FOSRestBundle.
 *
 * @author Lukas Kahwe Smith <smith@pooteeweet.org>
 */
abstract class TestController extends Controller
{
    /**
     * GET Get edeclaration list.
     * @Get("/v2/test-bundle")
     */
    public function getListAction()
    {
        return true;
    }

}
