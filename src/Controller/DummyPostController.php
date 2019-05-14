<?php

namespace App\Controller;

use App\Service\Post\PostCerviceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Immitation of real Post data.
 *
 * Class DummyPostController
 */
class DummyPostController extends AbstractController
{

    public function view(PostCerviceInterface $cervice, int $id):Response
    {
        $post = $cervice->getPost($id);

        return $this->render('post/view.html.twig', [
            'post' => $post,
        ]);
    }
}
