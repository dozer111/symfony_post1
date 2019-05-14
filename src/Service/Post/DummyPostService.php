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

use App\Model\DummyCategory;
use App\Model\DummyPost;
use Faker\Factory;

/**
 * Generates dummy data for single App\Post item.
 *
 * Class DummyPostService
 */
final class DummyPostService implements PostCerviceInterface
{
    /**
     * Generate dummy post data.
     *
     * @param int $id
     *
     * @return DummyPost
     *
     * @throws \Exception
     */
    public function getPost(int $id)
    {
        $faker = Factory::create();
        $category = new DummyCategory($faker->title());
        $post = new DummyPost(
            $id,
            $faker->sentence(\mt_rand(4, 10)),
            $category
        );
        $post
            ->setDescription($faker->paragraph(\mt_rand(7, 20)))
            ->setImage($faker->image())
            ->setCreatedAt(new \DateTime());

        return $post;
    }
}
