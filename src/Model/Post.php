<?php
/*
 * This file is part of the "PHP Static Analyzer" project.
 *
 * (c) Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Model;

final class Post
{
    private $id;

    private $title;

    private $description;

    private $image;

    private $created_at;

    private $category;


    public function __construct(int $id, string $title, Category $category)
    {
        $this->id = $id;
        $this->title = $title;
        $this->category = $category;
    }


    public function getId(): int
    {
        return $this->id;
    }


    public function getTitle(): string
    {
        return $this->title;
    }


    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }


    public function getDescription(): string
    {
        return $this->description;
    }


    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }


    public function getImage(): string
    {
        return $this->image;
    }


    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }


    public function getCreatedAt(): \DateTime
    {
        return $this->created_at;
    }


    public function setCreatedAt(\DateTime $dateTime): self
    {
        $this->created_at = $dateTime;

        return $this;
    }


    public function getCategory(): Category
    {
        return $this->category;
    }


    public function setCategory(Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}
