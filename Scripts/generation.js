function generate(){
  var rowList = new Array();
  $("table tr").each(function () {
      var colList = new Array();
      $("td", this).each(function () {
          colList.push($(this).text());
      });
      rowList.push(colList);
  });
  return JSON.stringify(rowList);
}


function tdClick(prop){
    prop.style.backgroundColor == "black" ? prop.style.backgroundColor = "white": prop.style.backgroundColor = "black";
    prop.style.color == "black" ? prop.style.color = "white": prop.style.color = "black";
    prop.innerHTML == "0" ? prop.innerHTML = "1": prop.innerHTML = "0";
}
