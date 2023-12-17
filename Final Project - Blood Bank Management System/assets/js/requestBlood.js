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

function yourRequests() {
  let result = document.getElementById("yourRequests");

  let xhttp = new XMLHttpRequest();
  xhttp.open("GET", "../controllers/yourRequestsController.php", true);
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      requests = JSON.parse(this.responseText);

      let output = ``;

      for (let request of requests) {
        output += `
        <table border="0" width="100%">
            <tr>
                <td colspan="2"><br />${request.comment}</td>
            </tr>
            <tr>
                <td>
                    <br />
                </td>
            </tr>
            <tr>
                <td><b>Blood Group: </b>${request.bloodGroup}</td>
                <td style="text-align: right;"><b>Location: </b><?=$requestBlood[$i]['location']?></td>
            </tr>

            <tr>
                <td><b>Date: </b>${request.date}</td>
                <td style="text-align: right;"><b>Contact: </b><a href="tel:${request.mobileNumber}">${request.mobileNumber}</a></td>
            </tr>

            <tr>
                <td colspan="2">
                    <br>
                    <a href="editRequestBlood.php?id=${request.id}"><button class="dlt-btn">Edit</button></a>&nbsp;
                    <a href="../controllers/deleteRequestBloodController.php?id=${request.id}"><button class="dlt-btn">Delete</button></a>
                    <br /><br />
                </td>
            </tr>
        </table>
        <hr />
        `;
      }

      result.innerHTML = output;
    }
  };
  xhttp.send();
}
