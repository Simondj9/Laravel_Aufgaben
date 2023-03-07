<style>
form {
  max-width: 600px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
}

label {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
textarea {
  border-radius: 5px;
  border: none;
  padding: 10px;
  width: 100%;
  margin-bottom: 20px;
  box-sizing: border-box;
  border: 1px solid #ccc;
}

input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #0069d9;
}

input[type="submit"]:active {
  background-color: #005cbf;
}

textarea {
  height: 150px;
}

input[type="text"]:focus,
input[type="email"]:focus,
textarea:focus {
  outline: none;
  border: 1px solid #007bff;
}
</style>


<form action="Form.php" method="POST">

<div>
<label for="name">Name:</label>
  <input type="text" id="name" name="name" required>
</div>

<div>
<label for="first_name">Vorname:</label>
  <input type="text" id="first_name" name="first_name" required>
</div>

<div>
<label for="email">Email:</label>
  <input type="email" id="email" name="email" required>
</div>

<div>
<label for="info">Beschreibung</label>
  <input type="text" id="info" name="info"></input>
</div>

<div>
<input type="submit" value="Absenden">
</div>
  

</form>