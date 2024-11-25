<?php

include_once './BookRepository.php';

/*
    l'aggregation est une relation entre deux classes qui est faible
    On peut avoir une instance de BookRepository sans avoir une instance de PDO
*/
$pdo =  new PDO('mysql:host=localhost;dbname=library', 'root', '');

$repository = new BookRepository($pdo);

$books = $repository->getBooks();
$book = $repository->getBookById(178);

if ($book) {
    echo $book['title'];
} else {
    echo 'Book not found';
}
