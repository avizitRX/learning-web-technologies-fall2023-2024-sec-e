function register() {
  let username = document.getElementById("username").value;
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let password2 = document.getElementById("password2").value;

  if (
    username.value === "" ||
    (email === "") | (password === "") | (password2 === "")
  ) {
    let msg = document.getElementById("msg");

    msg.innerHTML = "Please fill up all the fields!";
  } else {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controllers/registrationController.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("msg").innerHTML = this.responseText;
      }
    };

    xhttp.send(
      "username=" + username + "&email=" + email + "&password=" + password
    );
  }
}

function login() {
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;

  if (username === "" || password === "") {
    let msg = document.getElementById("msg");

    msg.innerHTML = "Please fill up all the fields!";
  } else {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controllers/loginController.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText === "true") {
          window.location.href = "../views/home.php";
        } else {
          document.getElementById("msg").innerHTML = this.responseText;
        }
      }
    };

    xhttp.send("username=" + username + "&password=" + password);
  }
}

function searchEmployee() {
  let name = document.getElementById('name').value;
  let username = document.getElementById('username').value;

  if (name === "" && username === "") {
    alert("Please enter an input!");
  } else {
    let xhttp = new XMLHttpRequest();
    xhttp.open('GET', '../controllers/employee_search.php?name='+name+'&'+'username='+username, true);
    xhttp.onreadystatechange = function(){  
      if(this.readyState == 4 && this.status == 200){
          document.getElementById('result').innerHTML = this.responseText;
      }
  }
  xhttp.send('name='+name+'&'+'username='+username);
  }
}