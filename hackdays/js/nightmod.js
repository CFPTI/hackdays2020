var cookie = getCookie('mode');
if (cookie == '')
     setCookie('mode', 'day');
else{
     if (cookie == 'day')
          setDay();
     else
          setNight();
}

function changeMode(){
     if (document.getElementById('nightMode').className == 'far fa-moon fa-lg')
          setNight();
     else
          setDay();
}

function setDay(){
     document.getElementById('nightMode').className = 'far fa-moon fa-lg';
     document.getElementById('nightCss').href = 'css/styleW.css';
     setCookie('mode', 'day');
}

function setNight(){
     document.getElementById('nightMode').className = 'fas fa-moon fa-lg';
     document.getElementById('nightCss').href = 'css/styleB.css';
     setCookie('mode', 'night');
}

function setCookie(cname, cvalue) {
     var d = new Date();
     d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));
     var expires = "expires="+ d.toUTCString();
     document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
     var name = cname + "=";
     var decodedCookie = decodeURIComponent(document.cookie);
     var ca = decodedCookie.split(';');
     for(var i = 0; i <ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == ' ') {
               c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
               return c.substring(name.length, c.length);
          }
     }
     return "";
}
