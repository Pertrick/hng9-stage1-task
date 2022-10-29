<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../models/Profile.php';

    $profile = new Profile("udoh patrick",true,25,
    "I am Patrick Udoh, Backend Software developer with 2 years of experience working with backend technologies like php, Java, Kotlin, Javascript");


    if(isset($profile)){
        $profile_array = array(
            'slackUsername' => $profile->slackUsername,
            'backend' => $profile->backend,
            'age' => $profile->age,
            'bio' =>$profile->bio 
        );

        echo json_encode($profile_array);

    }else{
       
    }

