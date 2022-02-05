(function() {
    "use strict";
  
    /** Easy selector helper function*/
    const select = (el, all = false) => {
      el = el.trim()
      if (all) {
        return [...document.querySelectorAll(el)]
      } else {
        return document.querySelector(el)
      }
    }
}
)

function getW(cityid) {
  var cityid = cityid.value;  
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var jObj = JSON.parse( this.responseText);
      console.log(jObj);
     document.getElementById("weather").innerHTML = jObj.main.temp;
     document.getElementById("description").innerHTML = jObj.weather[0].main + " - " + jObj.weather[0].description;
     document.getElementById("humidity").innerHTML = jObj.main.humidity;
     document.getElementById("weatherimg").src = "http://openweathermap.org/img/wn/"+jObj.weather[0].icon+"@2x.png";
    }
  };
  xhttp.open("GET", "https://api.openweathermap.org/data/2.5/weather?id="+cityid+"&units=metric&appid=ad6e7a1fa7b846e5913c1ec1f2fbd74e", true);
  xhttp.send();
}

getW({value:1248991});