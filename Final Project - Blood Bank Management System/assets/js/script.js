function register() {
  var role = document.forms["registration"]["role"].value;
  var username = document.forms["registration"]["username"].value;
  var password = document.forms["registration"]["password"].value;
  var password2 = document.forms["registration"]["password2"].value;
  var name = document.forms["registration"]["name"].value;
  var address = document.forms["registration"]["address"].value;
  var bloodGroup = document.forms["registration"]["bloodGroup"].value;
  var email = document.forms["registration"]["email"].value;
  var mobileNumber = document.forms["registration"]["mobile_number"].value;

  if (!role) {
    alert("Please select a role");
    return false;
  }
  if (!username) {
    alert("Please enter a username");
    return false;
  }
  if (!password) {
    alert("Please enter a password");
    return false;
  }
  if (!password2) {
    alert("Please confirm your password");
    return false;
  }
  if (
    password.length !== 8 ||
    !/[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/.test(password) || 
    password[0] !== password[0].toUpperCase() || 
    password.includes(" ") || 
    !/\d/.test(password)) {
    alert("Invalid password format! Please follow the specified criteria.");
    return;
    }
  if (password !== password2) {
    alert("Passwords do not match");
    return false;
  }
  if (!name) {
    alert("Please enter your full name");
    return false;
  }
  if (!address) {
    alert("Please enter your address");
    return false;
  }
  if (!bloodGroup) {
    alert("Please enter your blood group");
    return false;
  }
  if (!email) {
    alert("Please enter your email address");
    return false;
  }
  if (!mobileNumber) {
    alert("Please enter your mobile number");
    return false;
  }
  return true;
}

function loginVD() {
  let username = document.forms["login"]["username"].value;
  let password = document.forms["login"]["password"].value;

  if (username === "" && password === "") {
    alert("Please fill up all the inputs!");
    return false;
  }

  if (username === "") {
    alert("Please enter your username");
    return false;
  }
  if (password === "") {
    alert("Please enter your password");
    return false;
  }
  return true;
}

function findDonor() {
  let bloodGroup = document.getElementById("bloodGroup").value.trim();
  let location = document.getElementById("location").value.trim();
  let result = document.getElementById("result");


  if (bloodGroup === "" && location === "") {
    alert("Please fill out both blood group and location!");
    return;
  }

  if (bloodGroup === "") {
    alert("Please select a blood group!");
    return;
  }

  if (!/^[a-zA-Z]+$/.test(location)) {
    alert("Please enter a valid location with letters only!");
    return;
  }


  let xhttp = new XMLHttpRequest();
  xhttp.open(
    "GET",
    "../controllers/findDonorController.php?bloodGroup=" +
      encodeURIComponent(bloodGroup) +
      "&location=" +
      encodeURIComponent(location),
    true
  );
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      donors = JSON.parse(this.responseText);

      let output = `
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Blood Group</th>
        <th>Address</th>
        <th>Availability</th>
        <th>Contact Number</th>
      </tr>
      `;

      for (let donor of donors) {
        output += `
        <tr>
            <td>${donor.name}</td>
            <td>${donor.age}</td>
            <td>${donor.gender}</td>
            <td>${donor.bloodGroup}</td>
            <td>${donor.address}</td>
            <td>${donor.availability}</td>
            <td><a href="tel:${donor.mobileNumber}">${donor.mobileNumber}</a></td>
        </tr>
        `;
      }

      result.innerHTML = output;
    }
  };
  xhttp.send("bloodGroup=" + bloodGroup + "&" + "location=" + location);
}

function editProfile() {
  let name = document.getElementById("name").value;
  let address = document.getElementById("address").value;
  let email = document.getElementById("email").value;
  let mobileNumber = document.getElementById("mobileNumber").value;
  let msg = document.getElementById("msg");

  if (name === "-" || address === "" || email === "" || mobileNumber === "") {
    alert("Please fill up all the inputs!");
    return;
  } else {
    let xhttp = new XMLHttpRequest();
    xhttp.open(
      "GET",
      "../controllers/profileController.php?name=" +
        name +
        "&" +
        "address=" +
        address +
        "&" +
        "email=" +
        email +
        "&" +
        "mobileNumber=" +
        mobileNumber,
      true
    );
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        msg.innerHTML = this.responseText;
      }
    };
    xhttp.send(
      "name=" +
        name +
        "&" +
        "address=" +
        address +
        "&" +
        "email=" +
        email +
        "&" +
        "mobileNumber=" +
        mobileNumber
    );
  }
}

function changePasswordScript() {
  let oldPassword = document.getElementById("oldPassword").value;
  let password = document.getElementById("password").value;
  let password2 = document.getElementById("password2").value;

  if (oldPassword === "" || password === "" || password2 === "") {
    alert("Please fill up all the inputs!");
    return;
  }

  if (password !== password2) {
    alert("Password didn't match!");
    return;
  }

  if (
    password.length !== 8 ||
    !/[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/.test(password) || 
    password[0] !== password[0].toUpperCase() || 
    password.includes(" ") || 
    !/\d/.test(password)) {
    alert("Invalid password format! Please follow the specified criteria.");
    return;
    }
}

function addBlood() {
  let name = document.getElementById("name").value;
  let bloodGroup = document.getElementById("bloodGroup").value;
  let quantity = document.getElementById("quantity").value;
  let mobileNumber = document.getElementById("mobileNumber").value;
  let result = document.getElementById("result");

  let errors = [];

  if (name.trim() === "") {
      errors.push("Name is required");
  }

  if (bloodGroup.trim() === "") {
      errors.push("Blood Group is required");
  }

  if (quantity.trim() === "" || isNaN(quantity) || quantity <= 0) {
      errors.push("Quantity must be a positive number");
  }

  if (mobileNumber.trim() === "" || !/^[0-9]{10}$/.test(mobileNumber)) {
      errors.push("Invalid mobile number format");
  }

  if (errors.length > 0) {
      alert(errors.join("\n"));
      return;
  }


  let xhttp = new XMLHttpRequest();
  xhttp.open(
    "GET",
    `../controllers/addBloodController.php?name=${encodeURIComponent(
      name
    )}&bloodGroup=${encodeURIComponent(
      bloodGroup
    )}&quantity=${encodeURIComponent(
      quantity
    )}&mobileNumber=${encodeURIComponent(mobileNumber)}`,
    true
  );
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      result.innerHTML = this.responseText;
    }
  };
  xhttp.send(
    "name=" +
      name +
      "&" +
      "bloodGroup=" +
      bloodGroup +
      "&" +
      "quantity=" +
      quantity +
      "&" +
      "mobileNumber=" +
      mobileNumber
  );
}

function showInventory() {
  let result = document.getElementById("result");

  let xhttp = new XMLHttpRequest();
  xhttp.open("GET", "../controllers/bloodInventoryController.php", true);
  xhttp.send();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      inventory = JSON.parse(this.responseText);

      let output = `
      <tr>
          <th>Blood Group</th>
          <th>Blood Quantity</th>
        </tr>`;

      for (let data of inventory) {
        output += `
            <tr>
                <td>${data.bloodGroup}</td>
                <td>${data.quantity}</td>
            </tr>
        `;
      }

      result.innerHTML = output;
    }
  };
}
