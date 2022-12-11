<?php

namespace Vmo\PatternStrategy\composite;


class Directory implements FileSystem
{
    protected $name;
    protected array $contents;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
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

    public function add(FileSystem $file)
    {
        $this->contents[] = $file;
    }
    public function remove(FileSystem $file)
    {
        if (isset($this->contents[$file])) {
            unset($this->contents[$file]);
        }
    }
    public function getChildren()
    {
        if (!empty($this->contents)) {

            echo "<br>ce répertoire contient :<br>";
            foreach ($this->contents as $key => $file) {
                echo  $file->getName() . ' ' . $file->getSize();
            }
        }
    }
}
