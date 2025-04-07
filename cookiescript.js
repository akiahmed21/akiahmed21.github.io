function setCookie() {
  var value = prompt("Enter your name or favorite color:");
  if (value) {
    var d = new Date();
    d.setTime(d.getTime() + (24 * 60 * 60 * 1000)); // 1 day
    var expires = "expires=" + d.toUTCString();
    document.cookie = "userInfo=" + value + ";" + expires + ";path=/";
    document.getElementById("message").innerText = "Welcome back, " + value + "!";
    document.body.style.backgroundColor = value;
  }
}

function getCookie() {
  var name = "userInfo=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var cookies = decodedCookie.split(';');
  for (var i = 0; i < cookies.length; i++) {
    var c = cookies[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function deleteCookie() {
  document.cookie = "userInfo=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  document.getElementById("message").innerText = "Welcome, new user!";
  document.body.style.backgroundColor = "#ffffff";
}

window.onload = function() {
  var value = getCookie();
  if (value) {
    document.getElementById("message").innerText = "Welcome back, " + value + "!";
    document.body.style.backgroundColor = value;
  } else {
    document.getElementById("message").innerText = "Welcome, new user!";
  }
};
