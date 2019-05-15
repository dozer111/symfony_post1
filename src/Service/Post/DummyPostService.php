<?php
/*
 * This file is part of the "PHP Static Analyzer" project.
 *
 * (c) Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Service\Post;

use App\Model\Category;
use App\Model\Post;
use Faker\Factory;

/**
 * Generates dummy data for single App\Post item.
 *
 * Class DummyPostService
 */
final class DummyPostService implements PostServiceInterface
{

    /**
     * @param int $id
     * @return Post
     * @throws \Exception
     */
    public function getPost(int $id):Post
    {
        $faker = Factory::create();
        $category = new Category($faker->title());
        $post = new Post(
            $id,
            $faker->sentence(rand(4, 10)),
            $category
        );
        $post
            ->setDescription($faker->paragraph(rand(7, 20)))
            ->setImage($faker->image())
            ->setCreatedAt(new \DateTime());

        return $post;
    }
}
