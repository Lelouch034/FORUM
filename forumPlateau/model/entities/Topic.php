<?php
// je lui dit que je le range le dans model
    namespace Model\Entities;
        //va chercher la classe entity dans app 
    use App\Entity;


        // cette class ne peut pas avoir d'enfant 
        //la class topic herite de la class entity 
        //class entity = parent 
    final class Topic extends Entity{
        //liste des proprietes de la class Topic selon le principe d'encapsulation
        //mes proprieter seron private

        //modifier en function de la DB
        private $id;
        private $title;
        private $creationDate;
        private $user;
        private $closed;


        //hydrate prendre des données de la db pour la transformer en objet
        public function __construct($data){         
            $this->hydrate($data);        
        }
 
        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of title
         */ 
        public function getTitle()
        {
                return $this->title;
        }

        /**
         * Set the value of title
         *
         * @return  self
         */ 
        public function setTitle($title)
        {
                $this->title = $title;

                return $this;
        }

        public function getCreationdate(){
                $formattedDate = $this->creationDate->format("d/m/Y, H:i:s");
                return $formattedDate;
            }
    
            public function setCreationdate($date){
                $this->creationDate = new \DateTime($date);
                return $this;
            }

        /**
         * Get the value of user
         */ 
        public function getUser()
        {
                return $this->user;
        }

        /**
         * Set the value of user
         *
         * @return  self
         */ 
        public function setUser($user)
        {
                $this->user = $user;

                return $this;
        }

      

        /**
         * Get the value of closed
         */ 
        public function getClosed()
        {
                return $this->closed;
        }

        /**
         * Set the value of closed
         *
         * @return  self
         */ 
        public function setClosed($closed)
        {
                $this->closed = $closed;
                
                return $this;
        }
    }
