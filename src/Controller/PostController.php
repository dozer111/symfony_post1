<?php

namespace App\Controller;

use App\Service\Post\PostServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class PostController extends AbstractController
{

    /**
     * Imitation of real single post record
     *
     * @param PostServiceInterface $service
     * @param int $id
     * @return Response
     */
    public function view(PostServiceInterface $service, int $id):Response
    {
        $post = $service->getPost($id);

        return $this->render(
            'post/view.html.twig',
                [
                    'post' => $post,
                ]
        );
    }
}
