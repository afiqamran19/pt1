<!--
Matric Number: A219703
Name: Muhammad Afiq bin Amran Amir
-->
<!DOCTYPE html>
<html>
<head>
  <title>Biodata</title>
  <style>
    * {
        box-sizing: border-box;
    }

    body {
        width: 90%;
        max-width: 700px;
        margin: 30px auto;
        background-color: #f5f7fa;
        font-family: Arial, sans-serif;
    }

    h1 {
        margin-bottom: 8px;
    }

    hr {
        margin: 16px 0;
        border: 0;
        border-top: 5px dotted #d5dde6;
    }

    form table {
        display: block;
        width: 100%;
        border: 0px;
    }

    form table tbody,
        form table tr,
        form table td {
            display: block;
            width: 100%;
    }

    form table tr {
        margin-bottom: 16px;
    }

    form table td {
        padding: 3px 0;
        border: 0;
    }

    form table td:first-child {
        color: #18309e;
        font-weight: bold;
    }

    form table input:not([type="radio"]),
    form table textarea,
    form table select {
        display: block;
        width: 100%;
        padding: 10px;
        border: 1px solid #c5cfda;
        border-radius: 5px;
        background-color: #fff;
        color: #263548;
        font: inherit;
    }

    form table textarea {
        min-height: 110px;
        resize: vertical;
    }

    form table input[type="radio"] {
        margin: 0 5px 0 0;
    }
 
    form table input[type="radio"] + label {
        margin-right: 18px;
    }

    form table input[type="color"] {
        height: 44px;
        padding: 4px;
    }

    form table input[type="range"] {
        padding: 0;
    }

    form button,
    form input[type="reset"] {
        display: block;
        width: 100%;
        margin: 10px 0;
        padding: 11px;
        border: 0;
        border-radius: 4px;
        color: #fff;
        background-color: #24669d;
        font: inherit;
        cursor: pointer;
    }

    form input[type="reset"] {
        background-color: lightblue;  /* pick an appropriate color */
    }

    form button:hover {
        background-color: darkblue;  /* pick a darker color */
    }

    form input[type="reset"]:hover {
        background-color: darkred;  /* pick a darker color */
    }









  </style>
</head>
<body>
<h1>Biodata Form</h1>
<hr>
<form action="http://lrgs.ftsm.ukm.my/users/a123456/lab-2/validate_biodata.php" method="post" enctype="multipart/form-data">
  <table border="1" cellpadding="10">
    <tr>
      <td>Name:</td>
      <!-- Title case validation regex: Capital letter for each word, allowing letters and spaces -->
      <td><input type="text" name="name" placeholder="Insert your name" pattern="^([A-Z][a-z]*(?:\s+[A-Z][a-z]*)*)$" title="Each word must start with an uppercase letter (Title Case)" autofocus required> </td>
    </tr>
    <tr>
      <td>Age:</td>
      <td><input type="number" name="age" min="0" max="100" step="1" required></td>
    </tr>
    <tr>
      <td>Gender:</td>
      <!-- Wrapped with <label> tags so clicking the text selects the radio button -->
      <td>
        <input type="radio" name="gender" value="male" id="male" checked>
        <label for="male">Male</label>
    
        <input type="radio" name="gender" value="female" id="female" required>
        <label for="female">Female</label>
      </td>
    </tr>
    <tr>
      <td>Address:</td>
      <td><textarea name="address" cols="50" rows="5" placeholder="Insert your address" required></textarea></td>
    </tr>
    <tr>
      <td>Email:</td>
      <!-- Email pattern requiring the word 'ukm' -->
      <td><input type="email" name="email" placeholder="Insert your email (must contain ukm)" pattern=".*ukm.*" title="Email must contain the word 'ukm'" required></td>
    </tr>
    <tr>
      <td>Date of Birth:</td>
      <td><input type="date" name="dob" required/></td>
    </tr>
    <tr>
      <td>Height:</td>
      <td><input type="range" name="height" id="heightId" min="100" max="200" value="150" oninput="outputId.value = heightId.value" required><output id="outputId">150</output>cm </td>
    </tr>
    <tr>
      <td>Tel:</td>
      <!-- Phone regex updated to allow either +60 or 0060 prefix -->
      <td><input type="tel" name="phone" placeholder="+60##-####### or 0060##-#######" 
                 pattern="^(\+60|0060)\d{2}-\d{7}$" title="Must start with +60 or 0060 followed by 2 digits, a hyphen, and 7 digits" required /> 
      </td>
    </tr>
    <tr>
      <td>My Favourite Color:</td>
      <!-- Default color set to green (#008000) -->
      <td><input type="color" name="color" value="#008000" required /></td>
    </tr>
    <tr>
      <td>Fb/TW/IG:</td>
      <td><input type="url" name="fbtwig" placeholder="http://www.domainname.com" required /></td>
    </tr>
    <tr>
      <td>My Face Photo:</td>
      <!-- accept="image/*" filters the file browser to display image files only -->
      <td><input type="file" name="photo" accept="image/*" required></td>   
    </tr>
    <tr>
      <td>My University:</td>
      <td><select name="university" required>
          <option value="">Select</option>
          <option value="UPM">Universiti Putra Malaysia</option>
          <!-- UKM set as default selected value -->
          <option value="UKM" selected>Universiti Kebangsaan Malaysia</option>
          <option value="UM">Universiti Malaya</option>
          <option value="USM">Universiti Sains Malaysia</option>
          <option value="UTM">Universiti Teknologi Malaysia</option>
          </select>
      </td>
    </tr>
  </table>
<hr>
<input type="hidden" name="matricnum" value="a219703">
<!-- Changed input type="submit" to a <button> tag while keeping functionality and name -->
<button type="submit" name="biodata_form">Submit My Biodata</button> 
<input type="reset">
</form>
</body>
</html>