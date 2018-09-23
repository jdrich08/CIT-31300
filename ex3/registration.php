<h1>Registration</h1>

<form class="cmxform" id="registerform" method="post" action="results.php">
  <fieldset>
    <legend>Please provide your registration information</legend>
    <p>
      <label for="fname" class="fieldlabel">First Name</label>
      <input id="fname" name="fname" minlength=2 type="text" required>
    </p>
    <p>
      <label for="lname" class="fieldlabel">Last Name</label>
      <input id="lname" name="lname" minlength=2 type="text" required>
    </p>
    <p>
      <label for="email" class="fieldlabel">Email</label>
      <input id="email" name="email" type="email" required>
    </p>
    <p>
      <input class="submit" type="submit" value="Submit" type="submit">
    </p>
  </fieldset>
</form>
