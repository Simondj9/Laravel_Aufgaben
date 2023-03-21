<style>
  form {
    max-width: 600px;
    margin: 0 auto;
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
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

<h1>{{$event->title}}</h1>
<p>{{$event->description}}</p>
<p>{{$event->date}}</p>


<div class="title">
  <h1>Anmeldung</h1>
</div>

<form method="POST" action="">
  <form method="POST" action="/">
    @csrf
    <div>
      <label for="answer">Dabei?</label>
      <input name="answer" value="yes" id="answer" type="radio"> Ja
      <input name="answer" value="No" id="answer" type="radio">Nein
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>

    <div>
      <label for="lastname">Name:</label>
      <input type="text" id="lastname" name="lastname" required>
    </div>

    <div>
      <label for="firstname">Vorname:</label>
      <input type="text" id="firstname" name="firstname" required>
    </div>

    <div>
      <input type="submit" value="Anmelden">
    </div>
  </form>

  <div class="link-container">
    <a href="/form_application/applications">Anmeldungen anzeigen</a>
  </div>