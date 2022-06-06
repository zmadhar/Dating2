<?php

class Controller
{
    private $f3;

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }


    function first ($f3)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {


            $fname = $_POST['fname'];
            $f3->set('fname', $fname);

            $lname = $_POST['lname'];
            $f3->set('lname', $lname);

            $age = $_POST['age'];
            $f3->set('age', $age);

            $PhoneNumber = $_POST['PhoneNumber'];
            $f3->set('phone', $PhoneNumber);

            $premium = $_POST['premium'];
            $f3 ->set ('premium' , $premium);
            if(isset($_POST['premium'])){
                $premium = $_POST['premium'];
            }

            if (Validation::validFirst($fname)) {
                if (isset($premium)){
                   $member = new Premium();
                } else {
                    $member = new Membership();
                }
                $member ->setFname($fname);
                $_SESSION['member'] = $member;

            } else {
                $f3->set('errors["fname"]', 'please enter a valid first name');
            }


            if (Validation::validLast($lname)) {
                $_SESSION['member']->setLname($lname);
            } else {
                $f3->set('errors["lname"]', 'Please enter a valid last name');

            }


            if (Validation::validAge($age)) {
                $_SESSION['member']->setAge($age);
            } else {
                $f3->set('errors["age"]', 'Please enter an age above 18');
            }


            if (Validation::validPhone($PhoneNumber)) {
                $_SESSION['member']->setPhoneNumber($PhoneNumber);
            } else {
                $f3->set('errors["PhoneNumber"]', 'Please enter a valid phone number');
            }

            $gender= $_POST['gender'];
            $f3->set('gender', $gender);
            $gender = isset($_POST['gender']) ? $_POST['gender'] : "";
            $_SESSION['member']->setGender($gender);

            if (empty($f3->get('errors'))) {
                header('location: second');
            }

        }

        $f3->set('gender', getGender());


        $view = new Template();
        echo $view->render('views/first.html');

    }

    function second($f3)
    {
        if  ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $email = $_POST['email'];
            $f3->set('email', $email);

            //if seeking is set
            $seeking = isset($_POST['seeking']) ? $_POST['seeking'] : "";

            //state
            $state = $_POST['state'];


            if (Validation::validEmail($email)){
                $_SESSION['member']->setEmail($email);
            }

            else{
                $f3->set('errors["email"]', 'Please enter a valid email');
            }


            if (Validation::validSeeking($seeking)){
                $_SESSION['member']->setSeeking($seeking);
            }

            else{
                $f3->set('errors["seeking"]', 'Please select a valid option');
            }

            if (Validation::validState($state)){
                $_SESSION['member']->setState($state);
            }

            else{
                $f3->set('errors["state"]', 'Please select a valid state');
            }


            $_SESSION['member'] = $_POST['biography'];

            //Redirect to profile route if there are no errors
            if (empty($f3->get('errors'))) {
                header('location: third');
            }
        }


        $f3->set('seeking', getseeking());
        $f3->set('state', getState());

        $view = new Template();
        echo $view->render('views/second.html');
    }

    function third($f3){

        if  ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $indoor = [];
            $f3->set('indoor', $indoor);

            $outdoor = [];
            $f3->set('outdoor', $outdoor);

            //if seeking is set
            if (isset($_POST['indoor'])){

                $indoor= $_POST['indoor'];

                $f3 ->set ('indoor',$indoor);
            }
            if (isset($_POST['outdoor'])){

                $outdoor= $_POST['outdoor'];

                $f3 ->set ('outdoor',$outdoor);
            }

            //state


            if (Validation::validIndoor($indoor)|| empty($indoor)){
                $_SESSION['member']->setIndoor($indoor);
            }

            else{
                $f3->set('errors["indoor"]', 'Please select a valid option');
            }


            //if seeking is set
            $outdoor = isset($_POST['outdoor']) ? $_POST['outdoor'] : "";

            //state


            if (Validation::validOutdoor($outdoor)|| empty($outdoor)){
                $_SESSION['member']->setOutdoor($outdoor);
            }

            else{
                $f3->set('errors["outdoor"]', 'Please select a valid option');
            }



            //Redirect to profile route if there are no errors
            if (empty($f3->get('errors'))) {
                header('location: last');
            }
        }

        $f3->set('indoor', getIndoor());
        $f3->set('outdoor', getOutdoor());

        $view = new Template();
        echo $view->render('views/third.html');




    }



}