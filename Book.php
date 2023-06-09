<?php

    Class Book
    {
        
        private string $_title;
        private int $_nbPages;
        private int $_parutionYear;
        private float $_price;
        private Author $_author; // On précise que notre propriété $_author est un objet : ( "Nom de la classe" $_propriété )

        public function __construct(string $title, int $nbPages, int $parutionYear, float $price, Author $author)
        {
            $this->_title = $title;
            $this->_nbPages = $nbPages;
            $this->_parutionYear = $parutionYear;
            $this->_price = $price;
            $this->_author = $author;
            $author->addBook($this); // On utilise la méthode addBook de l'objet $author qu'on a renseigné, sur $this, c'est-à-dire l'objet Book qu'on est en train d'instancier,
        }                            // grâce à cette ligne, chaque livre ($this) instancié, hydratera le tableau $bibliographie de la méthode addBook chez l'auteur ($author)
                                     // de la classe Author

                // ******************************* MÉTHODES ****************************************************************                
                // ******************************* ACCESSEURS (get) *******************************

                public function getTitle() // CHECK
                {
                    return $this->_title;
                }
                
                public function getnbPages() // CHECK
                {
                    return $this->_nbPages;
                }
                
                public function getParutionYear() // CHECK
                {
                    return $this->_parutionYear;
                }
                
                public function getPrice() // CHECK
                {
                    return $this->_price;
                }

                public function getAuthor() // CHECK
                {
                    return $this->_author;
                } 

                // *******************************************************************************
                // ******************************* MUTATEURS (set) *******************************

                public function setTitle($title) // CHECK
                {
                    $this->_title = $title;
                }

                public function setnbPages($nbPages) // CHECK
                {
                    $this->_nbPages = $nbPages;
                }

                public function setParutionYear($parutionYear) // CHECK
                {
                    $this->_parutionYear = $parutionYear;
                }

                public function setPrice($price) // CHECK
                {
                    $this->_price = $price;
                } 

                public function setAuthor($author) // CHECK
                {
                    $this->_author = $author;
                }

                // *******************************************************************************

                public function __toString() // CHECK
                {
                    $result = 
                    $this->_title . 
                    " (" . $this->_parutionYear . ") : " . 
                    $this->_nbPages . " pages / " . 
                    $this->_price . " €";
                    return $result;
                }
    
    }

?>