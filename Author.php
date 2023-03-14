<?php

    Class Author
    {

        private string $_firstname;
        private string $_lastname;
        private static array $_bibliographie = [];


        public function __construct(string $firstname, string $lastname)
        {
            $this->_firstname = $firstname;
            $this->_lastname = $lastname;
            $this->bibliographie = [];
        }


        // ******************************* MÉTHODES ****************************************************************                
        // ******************************* ACCESSEURS (get) *******************************

        public function getFirstName() // CHECK
            {
                return $this->_firstname;
            }

        public function getLastName() // CHECK
            {
                return $this->_lastname;
            }

        // *******************************************************************************
        // ******************************* MUTATEURS (set) *******************************

        public function setFirstName($firstname) // CHECK
            {
                $this->_firstname = $firstname;
            }

        public function setLastName($lastname) // CHECK
            {
                $this->_lastname = $lastname;
            }

        // *******************************************************************************

        public function addBook(Book $book) // CHECK 
            {
                $this->bibliographie[] = $book;
            }

        
        public function __toString() // CHECK
            {
                return $this->_firstname . " " . $this->_lastname . "<br>";
            }

        public function afficherBibliographie() // CHECK
            {
                $result = "<h2>Livres de " . $this->_firstname . " " . $this->_lastname . "</h2>";
                $result .= "<ul>";
                foreach ($this->bibliographie as $book) {
                    $result .= "<li>" . $book . "</li>";
                }
                $result .= "</ul>";
                return $result;
            }

    }

?>