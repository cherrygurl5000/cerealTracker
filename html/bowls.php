<!DOCTYPE html>
<html lang="en-US">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src="https://kit.fontawesome.com/7cdbf977a6.js" crossorigin="anonymous"></script>

        <link href="../css/styles.css" type="text/css" rel="stylesheet" />

        <title>Cinnamon Crunch Squares</title>
    </head>
    <body>
        <!-- <div id="first">
            Let's track some 
        </div> -->
        <!-- Put everything in a container div for organization -->
        <div class="container">
            <!-- Div for page title -->
            <div class="row justify-content-center">
                <h1 class="text-center m-2">Cinnamon Crunch Squares</h1>
            </div>
            <!-- Div for cereal boxes -->
            <div class="row justify-content-around">
                <div class="col-12 col-sm-6 col-md-3">
                    <img src="../img/cinnamonCrunchSquares.jpg" class="d-block w-100 mx-auto rounded" title="Cinnamon Crunch Squares" alt="Cinnamon Crunch Squares" />
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <h1 class="col-6 text-right">Remaining Bowls</h1>
                <h1 class="col-5 ml-4"><small>2</small></h1>
                <input type="text" id="remBowls" name="remBowls" class="col-5 ml-4 d-none"/>
            </div>
            <div class="row justify-content-center">
                <h1 class="col-6 text-right">Total Boxes</h1>
                <h1 class="col-5 ml-4"><small>2</small></h1>
                <input type="text" id="totBowls" name="totBowls" class="col-5 ml-4 d-none"/>
            </div>
            <div class="row justify-content-center">
                <h1 class="col-6 text-right">Bowls/Box</h1>
                <h1 class="col-5 ml-4"><small>3</small></h1>
                <input type="text" id="boxBowls" name="boxBowls" class="col-5 ml-4 d-none"/>
            </div>
            <div class="row justify-content-center">
                <h1 class="col-6 text-right">Bowls Eaten</h1>
                <h1 class="col-5 ml-4"><small>0</small></h1>
                <input type="text" id="eatBowls" name="eatBowls" class="col-5 ml-4 d-none"/>
            </div>
            <div class="row justify-content-center mt-3">
                <button type="button" onclick="editCereal()" id="edit" name="edit" class="btn btn-primary mr-2">Edit</button>
                <button type="button" onclick="deleteCereal()" id="delete" name="delete" class="btn btn-warning">Delete</button>
            </div>



        </div>

        <!-- Include jQuery, Bootstrap, and popper libraries along with your js pages -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../js/scripts.js"></script>
    </body>
</html>