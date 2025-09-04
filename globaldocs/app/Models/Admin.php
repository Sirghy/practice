<?php

declare(strict_types=1);

namespace App\Models;

class Admin
{
    private int $id;
    private int $active;
    private string $title;
    private string $link;
    private string $image;
    private int $numPage;
    private int $parentId;
    private int $pageId;
    private int $sort;
    private string $dbTable;



    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of active
     */
    public function getActive(): int
    {
        return $this->active;
    }

    /**
     * Set the value of active
     */
    public function setActive(int $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of link
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * Set the value of link
     */
    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of numPage
     */
    public function getNumPage(): int
    {
        return $this->numPage;
    }

    /**
     * Set the value of numPage
     */
    public function setNumPage(int $numPage): self
    {
        $this->numPage = $numPage;

        return $this;
    }

    /**
     * Get the value of parentId
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }

    /**
     * Set the value of parentId
     */
    public function setParentId(int $parentId): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get the value of pageId
     */
    public function getPageId(): int
    {
        return $this->pageId;
    }

    /**
     * Set the value of pageId
     */
    public function setPageId(int $pageId): self
    {
        $this->pageId = $pageId;

        return $this;
    }

    /**
     * Get the value of sort
     */
    public function getSort(): int
    {
        return $this->sort;
    }

    /**
     * Set the value of sort
     */
    public function setSort(int $sort): self
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get the value of dbTable
     */
    public function getDbTable(): string
    {
        return $this->dbTable;
    }

    /**
     * Set the value of dbTable
     */
    public function setDbTable(string $dbTable): self
    {
        $this->dbTable = $dbTable;

        return $this;
    }
}
