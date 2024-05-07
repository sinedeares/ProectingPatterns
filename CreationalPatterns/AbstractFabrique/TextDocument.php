<?php

namespace AbstractFabrique;

class TextDocument
{
    public string $text;
    public function getText(): string
    {
        return 'Текст документа';
    }

    public function setText(string $text)
    {
        if ($text === '') {
            throw new \InvalidArgumentException('Текст не может быть пустым.');
        }

        $this->text = $text;
    }
}