<?php

namespace Model\Entities;
        
    use App\Entity;


    final class Category extends Entity {

        private $id;
        private $categoryName;


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


        public function getCategoryname() {
            return $this;
        }

        public function setCategoryname($categoryName) {
            $this->categoryName = $categoryName;

                return $this;
        }
        

    }