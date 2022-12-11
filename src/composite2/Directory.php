<?php

namespace Vmo\PatternStrategy\composite2;

class Directory
{
    private string $name;
    private array $contents;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->contents = [];
    }

    public function add(File $file): void
    {
        $this->contents[] = $file;
    }

    public function remove(File $file): void
    {
        $key = array_search($file, $this->contents);
        if ($key !== false) {
            unset($this->contents[$key]);
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        $size = 0;
        foreach ($this->contents as $file) {
            $size += $file->getSize();
        }
        return $size;
    }

    public function getChildren(): array
    {
        return $this->contents;
    }
}
