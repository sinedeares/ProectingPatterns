<?php

use AbstractFabrique\SpreadsheetDocumentFactory;
use AbstractFabrique\TextDocumentFactory;

require_once '../../vendor/autoload.php';

$documentType = 'text';

if ($documentType == 'text') {
    $documentFactory = new TextDocumentFactory();
    $document = $documentFactory->createDocument();
} else if ($documentType == 'spreadsheet') {
    $documentFactory = new SpreadsheetDocumentFactory();
    $document = $documentFactory->createDocument();
} else {
    throw new Exception('Неизвестный тип документа');
}

$document->setText('Текст документа');

echo $document->getText();