<?php

namespace controllers;

class BookController extends HomeController
{

    public function __construct()
    {
        parent::__construct();
    }
	
	public function index()
    {
       echo $this->display("index");
	}
	
    public function getBooks()
    {
       $this->loadModel("Book", "books");

       $data['books'] = $this->books->getList();

       //$this->data("data_books", $data);
	   
       echo $this->display("books", $data);
    }
}