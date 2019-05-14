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

/**
 * Null object Post class.
 */
final class DummyPost
{
    private $id;
    private $title;
    private $description;
    private $image;
    private $created_at;
    private $category;

    /**
     *
     * @param int           $id
     * @param string        $title
     * @param DummyCategory $category
     * @return void
     */
    public function __construct(int $id, string $title, DummyCategory $category)
    {
        $this->id = $id;
        $this->title = $title;
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return DummyPost
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return DummyPost
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     *
     * @return DummyPost
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->created_at;
    }

    /**
     * @param \DateTime $dateTime
     *
     * @return DummyPost
     */
    public function setCreatedAt(\DateTime $dateTime): self
    {
        $this->created_at = $dateTime;

        return $this;
    }

    /**
     * @return DummyCategory
     */
    public function getCategory(): DummyCategory
    {
        return $this->category;
    }

    /**
     * @param DummyCategory $category
     *
     * @return DummyPost
     */
    public function setCategory(DummyCategory $category): self
    {
        $this->category = $category;

        return $this;
    }
}
