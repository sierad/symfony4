<?php
/**
 * Created by PhpStorm.
 * User: thomassieradzki
 * Date: 09/09/2019
 * Time: 14:29
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG ! My first page already ! ');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'Future page to show the article : %s',
            $slug
            ));
    }
}