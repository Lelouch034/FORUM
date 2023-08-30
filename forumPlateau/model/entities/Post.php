<?php

    namespace Model\Entities;
        
    use App\Entity;

    final class Post extends Entity {
        private $id;
        private $content;
        private $postDate;

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


        public function getContent() {
            return $this->content;
        }

        public function setContent($content) {
            $this->content = $content;
            return $this;
        }


        public function getPostdate() {
            return $this->postDate;
        }

        public function setPostdate($postDate) {
            $this->postDate = $postDate;

            return $this;
        }

        

       
    }