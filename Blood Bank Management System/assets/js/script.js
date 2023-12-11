function register() {
  let role = document.forms["registration"]["role"].value;
  let username = document.forms["registration"]["username"].value;
  let password = document.forms["registration"]["password"].value;
  let password2 = document.forms["registration"]["password2"].value;
  let name = document.forms["registration"]["name"].value;
  let address = document.forms["registration"]["address"].value;
  let email = document.forms["registration"]["email"].value;
  let mobileNumber = document.forms["registration"]["mobile_number"].value;

  if (
    (role == "") |
    (username == "") |
    (password == "") |
    (password2 == "") |
    (name == "") |
    (address == "") |
    (email == "") |
    (mobileNumber == "")
  ) {
    alert("Please fill up all the inputs!");
  }
}

function loginVD() {
  let username = document.forms["login"]["username"].value;
  let password = document.forms["login"]["password"].value;

  if ((username == "") | (password == "")) {
    alert("Please fill up all the inputs!");
  }
}

function findDonor() {
  let bloodGroup = document.getElementById("bloodGroup").value;
  let location = document.getElementById("location").value;

  if (bloodGroup === "-" || location === "") {
    alert("Please fill up all the inputs!");
    return;
  }

  let xhttp = new XMLHttpRequest();
  xhttp.open(
    "GET",
    "../controllers/findDonorController.php?bloodGroup=" +
      bloodGroup +
      "&" +
      "location=" +
      location,
    true
  );
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("result").innerHTML = this.responseText;
    }
  };
  xhttp.send("bloodGroup=" + bloodGroup + "&" + "location=" + location);
}

function requestBlood() {
  let bloodGroup = document.getElementById("bloodGroup").value;
  let location = document.getElementById("location").value;
  let date = document.getElementById("date").value;
  let mobileNumber = document.getElementById("mobileNumber").value;

  if (
    bloodGroup === "-" ||
    location === "" ||
    date === "" ||
    mobileNumber === ""
  ) {
    alert("Please fill up all the inputs!");
    return 0;
  } else if (isNaN(mobileNumber)) {
    alert("Mobile Number must have to be numbers!");
    return 0;
  }
}

function editProfile() {
  let name = document.getElementById("name").value;
  let address = document.getElementById("address").value;
  let email = document.getElementById("email").value;
  let mobileNumber = document.getElementById("mobileNumber").value;

  if (name === "-" || address === "" || email === "" || mobileNumber === "") {
    alert("Please fill up all the inputs!");
    return;
  }
}

function changePassword() {
  let oldPassword = document.getElementById("oldPassword").value;
  let password = document.getElementById("password").value;
  let password2 = document.getElementById("password2").value;

  if (oldPassword === "" || password === "" || password2 === "") {
    alert("Please fill up all the inputs!");
    return;
  } else if (password != password2) {
    alert("Password didn't match!");
  }
}
