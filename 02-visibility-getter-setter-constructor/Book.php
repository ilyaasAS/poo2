<?php

/** 
 * @author EDJEKOUANE Rachid
 */
class Book
{
    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    private string $author;

    /**
     * @var int
     */
    private int $nbPage;

    /**
     * @var int
     */
    private int $year;

    public function __construct(string $title, string $author, int $page, int $year)
    {
        $this->title = $title;
        $this->author = $author;
        $this->nbPage = $page;
        $this->year = $year;
    }

    /**
     * @return void
     */
    public function read(): void
    {
        echo "Je lis le livre {$this->title}";
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
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     * 
     * @return self
     */
    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return int
     */
    public function getNbPage(): int
    {
        return $this->nbPage;
    }

    /**
     * @param int $nbPage
     * 
     * @return self
     */
    public function setNbPage(int $nbPage): self
    {
        $this->nbPage = $nbPage;

        return $this;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     * 
     * @return self
     */
    public function setYear($year): self
    {
        $this->year = $year;

        return $this;
    }
}
