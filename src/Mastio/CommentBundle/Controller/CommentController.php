<?php

namespace Mastio\CommentBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Mastio\CommentBundle\Entity\Comment;

class CommentController
{
    /**
     * @Route("/api/thread/{id}")
     * @Method({"GET","HEAD"})
     */
    public function showAction(Comment $comment)
    {
        $response = new JsonResponse();
        $response->setData(array(
            'id'      => $comment->getId(),
            'content' => $comment->getContent(),
            'date'    => $comment->getUpdated(),
        ));

        return $response;
    }

    /**
     * @Route("/api/comments/{id}")
     * @Method("PUT")
     */
    public function editAction(Request $request, Comment $comment)
    {
        // ... edit a post
    }

    /**
     * @Route("/api/thread/{id}")
     * @Method({"POST"})
     */
    public function postAction(Request $request, Comment $comment)
    {
        $response = new JsonResponse();
        $response->setData(array(
            'id'      => $comment->getId(),
            'content' => $comment->getContent(),
            'date'    => $comment->getUpdated(),
        ));

        return $response;
    }
}