<?php

    Class Author
    {

        private string $_firstname;
        private string $_lastname;
        private array $_bibliographie = []; // $bibliographie est un tableau vide qu'on hydratera avec la méthode addBook


        public function __construct(string $firstname, string $lastname) // Je ne mets pas $bibliographie entre parenthèse car je ne renseigne pas cette variable lorsque j'instancie 
        {                                                                // un nouvel objet appartenant à cette classe
            $this->_firstname = $firstname;
            $this->_lastname = $lastname;
            $this->_bibliographie = []; // Lors de l'instanciation d'un objet de cette classe, un tableau $bibliographie vide est créé
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
                $this->_bibliographie[] = $book; // Chaque $book (objet instancié de la classe Book) sera injecté dans le tableau $bibliographie
            }                                    // de cette manière, chaque création de livre (instanciation) hydratera la propriété $bibliographie 

        
        public function __toString() // CHECK
            {
                return $this->_firstname . " " . $this->_lastname . "<br>"; // Permet de retourner ce texte lorsque l'on "echo" un objet de cette classe
            }

        public function afficherBibliographie() // CHECK
            {
                $result = "<h2>Livres de " . $this->_firstname . " " . $this->_lastname . "</h2>";
                $result .= "<ul>";
                foreach ($this->_bibliographie as $book) {
                    $result .= "<li>" . $book . "</li>";
                }
                $result .= "</ul>";
                return $result;
            }

    }

?>