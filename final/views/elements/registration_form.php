<form id="registration_form" action="<?php echo BASE_URL;?>register/<?php echo $task?>" method="post">

<fieldset>
<legend>Register Today!</legend>
<label for="first_name">First Name: <?=REQFIELD?></label>
<input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" maxlength="20" required="first_name" />
<br />

<label for="last_name">Last Name: <?=REQFIELD?></label>
<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $last_name;?>" maxlength="20" required="last_name" />
<br />

<label for="email">E-mail Address: <?=REQFIELD?></label>
<input type="text" class="txt" id="email" name="email" value="<?php echo $email;?>" maxlength="100" required="email" />
<br />

<label for="password">Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="password" name="password" value="<?php echo $password;?>" maxlength="100" required="password" />

<label for="REpassword">Retype Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="REpassword" name="REpassword" maxlength="100" required="REpassword" />

<br />

<input type="hidden" name="uID" value="<?php echo $uID ?>"/>

<button id="submit" type="submit" class="btn btn-primary" >Sign Up</button>
</fieldset>
</form>

<script>
$(document).ready(function() {
  $("#registration_form").validate({
      rules: {
          first_name: {
              required: true,
              minlength: 2,
              maxlength: 20
          },
          last_name: {
              required: true,
              minlength: 2,
              maxlength: 20
          },
          email: {
              required: true,
              email: true
          },
          password: {
              required: true,
              maxlength: 100
          },
          REpassword: {
              required: true,
              maxlength: 100,
              equalTo: '#password'
          }
      },
      messages: {
          first_name: {
              required: 'First name is required.',
              minlength: 'Must have minimum length of 2.',
              maxlength: 'First name cannot be longer than 20 characters.'
          },
          last_name: {
              required: 'Last name is required.',
              minlength: 'Must have minimum length of 2.',
              maxlength: 'First name cannot be longer than 20 characters.'
          },
          email_address: {
              required: 'Email is required.',
              email: 'A valid email is required.'
          },
          password: {
              required: 'A password is required.',
              maxlength: 'Password cannot be longer than 100 characters.'
          },
          REpassword: {
              required: 'You must retype your password.',
              maxlength: 'Password cannot be longer than 100 characters.',
              equalTo: 'Passwords did not match.'
          }
      }
  });
});
</script>
