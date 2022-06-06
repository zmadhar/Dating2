<?php

class Membership{
private $_fname;
private $_lname;
private $_age;
private $_gender;
private $_phone_Number;
private $_email;
private $_biography;
private $_state;
private $_seeking;


public function __construct(){

   $this -> _fname = "";
   $this -> _lname = "";
   $this -> _age = "";
   $this -> _gender = "";
   $this -> _phone_Number = "";
   $this -> _email = "";
   $this -> _biography = "";
   $this -> _state = "";
   $this -> _seeking = "";


}

public function getFname(): string
{
    return $this -> _fname;

}
public function setFname(string $fname): void
{
    $this -> _fname = $fname;

}

    /**
     * @return string
     */
    public function getLname(): string
    {
        return $this->_lname;
    }

    /**
     * @param string $lname
     */
    public function setLname(string $lname): void
    {
        $this->_lname = $lname;
    }

    /**
     * @return string
     */
    public function getAge(): string
    {
        return $this->_age;
    }

    /**
     * @param string $age
     */
    public function setAge(string $age): void
    {
        $this->_age = $age;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->_gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender): void
    {
        $this->_gender = $gender;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->_phone_Number;
    }

    /**
     * @param string $phone_Number
     */
    public function setPhoneNumber(string $phone_Number): void
    {
        $this->_phone_Number = $phone_Number;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->_email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->_email = $email;
    }

    /**
     * @return string
     */
    public function getBiography(): string
    {
        return $this->_biography;
    }

    /**
     * @param string $biography
     */
    public function setBiography(string $biography): void
    {
        $this->_biography = $biography;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->_state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->_state = $state;
    }

    /**
     * @return string
     */
    public function getSeeking(): string
    {
        return $this->_seeking;
    }

    /**
     * @param string $seeking
     */
    public function setSeeking(string $seeking): void
    {
        $this->_seeking = $seeking;
    }






}