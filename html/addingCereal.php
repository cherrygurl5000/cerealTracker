<?php 
    //Include the constants
    include("../config/constants.php");

    //Function to determine if the numbers are valid
    function validNum($numBoxes, $boxBowls, $eatBowls, $totBowls, $remBowls) {
        //Check if the values are numeric
        if(is_numeric($numBoxes) && $numBoxes >= 0) {
            //Validate the remaining values
        }
        else {
            //Return to the addCereal.php page with a message
            $_SESSION['addCerealFail'] = "Number of boxes is required as a number";
            header("location: addCereal.php");
            exit;
        }
        if(is_numeric($boxBowls) && $boxBowls >= 0) {
            //Validate the remaining values
        }
        else {
            //Return to the addCereal.php page with a message
            $_SESSION['addCerealFail'] = "Number of bowls/box is required as a number";
            header("location: addCereal.php");
            exit;
        }
        if(is_numeric($eatBowls) && $eatBowls >= 0) {
            //Validate the remaining values
        }
        else {
            //Return to the addCereal.php page with a message
            $_SESSION['addCerealFail'] = "Number of eaten bowls is required as a number";
            header("location: addCereal.php");
            exit;
        }
        if(is_numeric($totBowls) && $totBowls >= 0 && is_numeric($remBowls) && $remBowls >= 0) {
            //Everything is good, move on to adding to the database
        }
        else {
            //Change them to match the other numbers already given
            $totBowls = $numBoxes * $boxBowls;
            $remBowls = $totBowls - $eatBowls;
        }
        
        echo $numBoxes . " " . $boxBowls . " " . $eatBowls . " " . $totBowls . " " . $remBowls . " ";
    }

    //Function for validating the image and adding the pic to the img folder
    function validImg($img) {
        //If img isn't set, set it to the default pic
        if($img == "" || $img == null) {
            return "nopic.jpg";
        }
        //Else add a copy of the pic to the img folder
        else {

        }

    }

    //Check if the form has been submitted and get the data from it
    if(isset($_POST["addCereal"])) {
        //Get the values from the form and save them in variables
        echo $name = "`" . processInput($_POST["name"]) . "`";
        echo $numBoxes = processInput($_POST["numBoxes"]);
        echo $boxBowls = processInput($_POST["boxBowls"]);
        echo $eatBowls = processInput($_POST["eatBowls"]);
        echo $totBowls = processInput($_POST["nTotBowls"]);
        echo $remBowls = processInput($_POST["nRemBowls"]);
        echo $img = processInput($_POST["pic"]);

        //Validate all the numbers from the form
        validNum($numBoxes, $boxBowls, $eatBowls, $totBowls, $remBowls);

        //Connect to the database and add the information from the form



    }
    else {
        //Return to the addCereal.php page with a message
        $_SESSION['addCerealFail'] = "No Cereal Added";
        header("location: addCereal.php");
        exit;
    }
?>