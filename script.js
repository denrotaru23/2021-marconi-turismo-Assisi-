var create_dyn_card = function (jsonData) {
  console.log(jsonData);

  let points = jsonData.points;

 for(points of point){
  let movie = $("<div>").addClass("movie");
  let menu_card = $("<div>").addClass("menu_card");
  let menu_img = $("<img>").attr('src', point.img_url);
  let desc= $("<p>").text(point.descr);


  $(".flexcontainer").append(menu_card);
  menu_card.append(menu_img);
  menu_card.append(descr);
  
  ;

   }
}


let onFail = function (error) {
  console.log("errore nella lettura del file json");
  console.log(error);
}
let init = function () {
  $.getJSON("data.json")
    .done(create_dyn_card)
    .fail(onFail);
  //$.getJSON("index.php").done(create_dyn_card);
}

$(document).ready(init)