<?php

    class Profile{
        public string $slackUsername;
        public bool $backend;
        public int $age;
        public string $bio;

        public function __construct($slackUsername,$backend,$age, $bio){

            $this->slackUsername = $slackUsername;
            $this->backend = $backend;
            $this->age = $age;
            $this->bio = $bio;
        }

        public function read(){
            // return [
            // $this->slackUsername => 'udoh patrick',
            // $this->backend => true,
            // $this->age => 25,
            // $this->bio => "I am Patrick Udoh, Backend Software developer with 2 yeaars of experience working with backend technologies
            //  like php, Java, Kotlin, Javascript"
            //  ];
        }
    }