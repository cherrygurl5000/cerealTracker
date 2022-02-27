//Use the validator API for input validation
//import validator from "validator";
$("#first").append(" Cereal");

$(function () {
  $('[data-toggle="popover"]').popover();
});

//Create a function that allows the cereal inputs to be edited
function editCereal() {}

//Create a function that allows the cereal to be deleted
function deleteCereal() {}

//Functions for calculating the total bowls and the remaining bowls
function bowlCount() {
  const numBoxes = $("#numBoxes").val();
  const boxBowls = $("#boxBowls").val();
  const eatBowls = $("#eatBowls").val();

  //Perform the proper calculations and assign the answers to the proper variables
  let totBowls = numBoxes * boxBowls;
  let remBowls = totBowls - eatBowls;

  $("#totBowls").val(totBowls);
  $("#remBowls").val(remBowls);
  $("#nTotBowls").val(totBowls);
  $("#nRemBowls").val(remBowls);
}

window.addEventListener("load", bowlCount());

//Display the chosen photo in the image box
var showUpload = function (e) {
  $("#uploaded").attr("src", URL.createObjectURL(e.target.files[0]));
};

//Check to ensure the cereal name is legit
function validName() {
  let name = document.forms["addCerealForm"]["name"].value;
  let numBoxes = document.forms["addCerealForm"]["numBoxes"].value;
  let boxBowls = document.forms["addCerealForm"]["boxBowls"].value;
  let eatBowls = document.forms["addCerealForm"]["eatBowls"].value;
  if (name == "") {
    alert("Name is required");
    $("#name").css({ "border-color": "red", "background-color": "lightgray" });
    return false;
  } else {
    $("#name").css({
      "border-color":
        "-internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133))",
      "background-color": "#fff",
    });
    $("#name").val(sanitize(name));
  }
  //Check if numBoxes is valid
  if (numBoxes == "" || isNaN(numBoxes)) {
    alert("Number of boxes is required as a number");
    $("#numBoxes").css({
      "border-color": "red",
      "background-color": "lightgray",
    });
    $("#numBoxes").val(0);
    return false;
  } else {
    $("#numBoxes").css({
      "border-color":
        "-internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133))",
      "background-color": "#fff",
    });
  }
  //Check if boxBowls is valid
  if (boxBowls == "" || isNaN(boxBowls)) {
    alert("Number of bowls/box is required as a number");
    $("#boxBowls").css({
      "border-color": "red",
      "background-color": "lightgray",
    });
    $("#boxBowls").val(6);
    return false;
  } else {
    $("#boxBowls").css({
      "border-color":
        "-internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133))",
      "background-color": "#fff",
    });
  }
  //Check if eatBowls is valid
  if (eatBowls == "" || isNaN(eatBowls)) {
    alert("Number of eaten bowls is required as a number");
    $("#eatBowls").css({
      "border-color": "red",
      "background-color": "lightgray",
    });
    $("#eatBowls").val(0);
    return false;
  } else {
    $("#eatBowls").css({
      "border-color":
        "-internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133))",
      "background-color": "#fff",
    });
  }
}

//Sanitize the name input
function sanitize(string) {
  const map = {
    "&": "&amp;",
    "<": "&lt;",
    ">": "&gt;",
    '"': "&quot;",
    "'": "&#x27;",
    "/": "&#x2F;",
  };
  const reg = /[&<>"'/]/gi;
  return string.replace(reg, (match) => map[match]);
}
