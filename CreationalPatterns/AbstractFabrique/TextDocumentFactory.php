<?php

namespace AbstractFabrique;

use AbstractFabrique\DocumentFactory;

class TextDocumentFactory extends DocumentFactory
{

    public function createDocument(): TextDocument
    {
        return new TextDocument();
    }
}