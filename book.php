<?php
    class Book
    {
        private $title;
        private $author;
        private $price;
        
        public function __construct($title, $author, $price)
        {
            $this->title = $title;
            $this->author = $author;
            $this->price = $price;
        }

        public function get_title()
        {
            return $this->title;
        }

        public function set_title($title)
        {
            $this->title = $title;
        }

        public function get_author()
        {
            return $this->author;
        }

        public function set_author($author)
        {
            $this->author = $author;
        }

        public function get_price()
        {
            return $this->price;
        }
        public function set_price($price)
        {
            $this->price = $price;
        }
        public function get_Discount_price($percent)
        {
            $discount_amount = ($this->price*$percent)/100;
            return $this->price - $discount_amount;
        }
    }
    $book1 = new Book("The Harry Potter","JK Rowlings",500);
    $book2 = new Book("The Lord of the Rings","John Ronald",800);
    $book3 = new Book("The Time Machine","H.G Wells",400);

    echo "The Discounted Price for " 
    . $book1->get_title() 
    . ", written by " 
    . $book1->get_author() 
    . ", is " 
    . $book1->get_Discount_price(10) 
    . "<br>";

    echo "The Discounted Price for " 
    . $book2->get_title() 
    . ", written by " 
    . $book2->get_author() 
    . ", is " 
    . $book2->get_Discount_price(10) 
    . "<br>";

    echo "The Discounted Price for " 
    . $book3->get_title() 
    . ", written by " 
    . $book3->get_author() 
    . ", is " 
    . $book3->get_Discount_price(10) 
    . "<br>";
?>