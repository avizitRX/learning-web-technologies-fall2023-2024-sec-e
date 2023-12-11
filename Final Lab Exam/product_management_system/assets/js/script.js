function ajax() {
  let name = document.getElementById("name").value;
  let company = document.getElementById("company").value;

  let xhttp = new XMLHttpRequest();
  xhttp.open(
    "GET",
    "../controllers/employer_search.php?name=" +
      name +
      "&" +
      "company=" +
      company,
    true
  );
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("result").innerHTML = this.responseText;
    }
  };
  xhttp.send("name=" + name + "&" + "company=" + company);
}

function login() {
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;

  if (username === "" || password === "") {
    alert("Enter your username & password!");
  }
}

function allProducts() {
  let xhttp = new XMLHttpRequest();
  xhttp.open("GET", "../controllers/allProducts.php", true);
  xhttp.send();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      allProducts = JSON.parse(this.responseText);

      let output = `
      <tr>
          <th>Name</th>
          <th>Price</th>
          <th>Quantity</th>
        </tr>`;

      for (let data of allProducts) {
        output += `
            <tr>
                <td>${data.name}</td>
                <td>${data.price}</td>
                <td>${data.quantity}</td>
            </tr>
        `;
      }

      result.innerHTML = output;
    }
  };
}
