<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Employer</title>
    <script src="../assets/js/script.js"></script>
</head>
<body>
    <section>
        <table border="0" width="100%">
          <tr>
            <td width="25%"></td>
            <td>
              <br />
                <fieldset>
                  <legend>Find Employer</legend>
                  <br />
                  Employer Name:
                  <input type="text" name="name" value="" id="name" />
                  <br /><br />
                  Company:
                  <input type="text" name="company" value="" id="company" />
                  <br /><br />
                  <input type="submit" name="submit" value="Search" onclick="ajax()" />
                  <br /><br />
                </fieldset>
            </td>
            <td width="25%"></td>
          </tr>
        </table>
      </section>
  
      <section>
        <br><br>
        <table border="0" width="100%">
          <tr>
            <td width="25%"></td>
            <td>
                <table border="1" width="100%" id="result">
    
                </table>
            </td>
            <td width="25%"></td>
          </tr>
        </table>
      </section>
</body>
</html>