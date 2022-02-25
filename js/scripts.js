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
}

bowlCount();

//Display the chosen photo in the image box
var showUpload = function (e) {
  $("#uploaded").attr("src", URL.createObjectURL(e.target.files[0]));
};
