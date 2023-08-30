<?php

    namespace Model\Entities;
        
    use App\Entity;

final class User extends Entity{

    private $id;
    private $password;
    private $userName;
    private $registrationDate;
    private $email;

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

        public function getPassword(){
                return $this->password;
        }


        public function setPassword($password) {
            $this->password = $password;

            return $this;
        }

        public function getUsername(){
            return $this->userName;
        }

        public function setUsername($userName) {
            $this->userName = $userName;
            return $this;
        }


        public function getRegistrationdate() {
            return $this->registrationDate;
        }

        public function setRegistrationdate($registrationDate) {
            $this->registrationDate = $registrationDate;

            return $this;
        }

        
        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;

            return $this;
        }
    
}

