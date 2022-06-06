<?php

//array for gender options - radio
function getGender(){
    return array('Male', 'Female', 'Non-binary');
}


//array for seeking option - radio
function getseeking(){

    return array('Male', 'Female');
}

//array for indoor interests - checkbox
function getIndoor(){
    return array('tv', 'movies',  'cooking', 'board games', 'puzzles', 'reading','playing cards', 'video games');
}

//array for outdoor interests - checkbox
function getOutdoor(){
    return array('hiking', 'biking','swimming', 'collecting', 'walking', 'climbing');
}

//array for states
function getState(){
    return array('Washington', 'Oregon', 'California', 'Utah',);
}