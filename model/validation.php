<?php

//validate firstname

class Validation

{
    static function validFirst($fname): bool
    {

        return strlen(trim($fname)) >= 2;
    }


//validate lastname
    static function validLast($lname): bool
    {

        return strlen(trim($lname)) >= 2;
    }

//validate age
    static function validAge($age)
    {
        return trim($age) >= 18;
    }

// validate phone
    static function validPhone($phone)
    {
        return filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
    }


// validate email
    static function validEmail($email)
    {
        return !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL);
    }


    static function validseeking($seeking)
    {

        if (in_array($seeking, getseeking())) {

            return true;
        }


        return false;


    }

    static function validState($state)
    {

        if (in_array($state, getState())) {

            return true;
        }


        return false;

    }

    static function validIndoor($indoor)
    {

        if (in_array($indoor, getIndoor())) {

            return true;
        }


        return false;

    }

    static function validOutdoor($outdoor)
    {

        if (in_array($outdoor, getOutdoor())) {

            return true;
        }


        return false;

    }

}














