var create_dyn_card = function (data) {
  console.log(data);

let points = data.points;


//for(point of points){

 // let menu_card = $("<div>").addClass("menu_card");
 // let desc= $("<p>").text(point.descr);
 // let url;
 // if(point.url){
 //   if(point.type=="immagine"){
 //   url = $("<img>").attr('src', point.url)
 //   }else if(point.type=="video"){
//   url=$("<video controls>").attr('src', point.url);
 // }
 // }


//$(".flexcontainer").append(menu_card);
  
 // menu_card.append(url);
 // menu_card.append(desc);

 
 // }
 // }


let onFail = function (error) {
  console.log("errore nella lettura del file json");
  console.log(error);
}
let init = function () {
 $.getJSON("data.json")
    .done(create_dyn_card)
   .fail(onFail);
//$.getJSON("data.php").done(create_dyn_card);
}
$(document).ready(init)