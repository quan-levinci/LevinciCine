<?php
    namespace MagentoEx\Helloworld\Model\Api\Data;
    interface InfoInterface{
        public function setId($values);
        public function getId($values);

        public function setFirstName();
        public function getFirstName();

        public function setLastName();
        public function getLastName();

        public function setEmail();
        public function getEmail();
    }