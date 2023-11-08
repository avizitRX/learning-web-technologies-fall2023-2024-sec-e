function isLetter(char) {
  return char.toLowerCase() != char.toUpperCase();
}

function nameCheck() {
  let validation = document.getElementById("validation");
  let name = document.getElementById("name").value;

  if (name === "") {
    validation.innerHTML = "Error: Empty Name!";
  } else if (name.length < 2) {
    validation.innerHTML = "Error: Less than two words!";
  } else if (!isLetter(name[0])) {
    validation.innerHTML = "Error: Must start with a letter!";
  } else {
    validation.innerHTML = name;
  }
}

function emailCheck() {
  let validation = document.getElementById("validation");
  let email = document.getElementById("email").value;

  if (email === "") {
    validation.innerHTML = "Error: Empty email!";
  } else if (email.indexOf("@") === -1) {
    validation.innerHTML = "Error: Invalid email!";
  } else {
    validation.innerHTML = email;
  }
}

function genderCheck() {
  let validation = document.getElementById("validation");
  let gender = document.querySelector("input[name='gender']:checked").value;
  if (gender != null) {
    validation.innerHTML = gender;
  } else {
    validation.innerHTML = "Error: No gender selected!";
  }
}

function dobCheck() {
  let validation = document.getElementById("validation");
  let dob = document.querySelector("#dob").value;

  if (dob.value === undefined) {
    validation.innerHTML = "Error: No DOB selected!";
  } else {
    validation.innerHTML = dob;
  }
}

function degreeCheck() {
  let validation = document.getElementById("validation");
  let degree = [];
  let flag = false;
  let checkboxes = document.getElementsByName("degree[]");

  for (let i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      flag = true;
      degree.push(checkboxes[i].value);
    }
  }

  if (flag === false) {
    validation.innerHTML = "Error: No degree selected!";
  }
}

function bloodGroupCheck() {
  let validation = document.getElementById("validation");
  let bloodGroup = document.querySelector("#bloodGroup").value;

  if (bloodGroup === "") {
    validation.innerHTML = "Error: No blood group selected!";
  } else {
    validation.innerHTML = bloodGroup;
  }
}

function proPicCheck() {
  let validation = document.getElementById("validation");
  let userId = document.getElementById("user-id").value;
  let proPic = document.getElementById("profile-picture").value;

  if (userId === "" || userId < 1) {
    validation.innerHTML = "Error: Wrong user id!";
  } else if (proPic === "") {
    validation.innerHTML = "Error: Please upload a profile picture!";
  } else {
    validation.innerHTML = "Success!";
  }
}
