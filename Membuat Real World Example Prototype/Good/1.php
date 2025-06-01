<?php

class Document
{
    private $title;
    private $content;
    private $format;
    private $writer;
    private $dateCreated;
    private $dateModified;

    public function __construct(string $title, string $content, string $format, Writer $writer)
    {
        $this->title = $title;
        $this->content = $content;
        $this->format = $format;
        $this->writer = $writer;
        $this->writer->addDocument($this);
        $this->dateCreated = new DateTime();
        $this->dateModified = new DateTime();
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function cloneDocument(): self
    {
        return clone $this;
    }
}

class Writer
{
    private $name;
    private $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function addDocument(Document $document): void
    {
        echo "{$this->name} added a document '{$document->getTitle()}'.\n<br>";
    }
}

function clientCode()
{
    $writer = new Writer("John Smith", "john@example.com");
    $document = new Document("Sample Document", "Lorem ipsum...", "txt", $writer);

    $copy = $document->cloneDocument();
    echo "Dump of the clone. Note that the writer is now referencing two objects.\n\n<br>";
    print_r($copy);
}

clientCode();
