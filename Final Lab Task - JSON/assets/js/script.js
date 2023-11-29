function showInventory() {
  let result = document.getElementById("result");

  let xhttp = new XMLHttpRequest();
  xhttp.open("GET", "../models/inventoryModel.php", true);
  xhttp.send();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      inventory = JSON.parse(this.responseText);

      let output = `
      <tr>
          <th>Blood Group</th>
          <th>Blood Quantity</th>
        </tr>`;

      let i = 0;
      for (let data of inventory) {
        output += `
            <tr>
                <td>${inventory[i].bloodGroup}</td>
                <td>${inventory[i].quantity}</td>
            </tr>
        `;
        i++;
      }

      result.innerHTML = output;
    }
  };
}
