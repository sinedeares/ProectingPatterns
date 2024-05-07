<?php

namespace AbstractFabrique;

use AbstractFabrique\DocumentFactory;

class SpreadsheetDocumentFactory extends DocumentFactory
{

    public function createDocument(): SpreadsheetDocument
    {
        return new SpreadsheetDocument();
    }
}