<form method="post" action="" name="signup-form">

<div class="form-element">

<label>Username</label>

<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />

</div>

<div class="form-element">

<label>Password</label>

<input type="password" name="password" required />

</div>

<button type="submit" name="register" value="register">Register</button>

</form>

to validate the form

<?php
$errors = [];
$fields = ['username', 'password'];
$values = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($fields as $field) {
        if (empty($_POST[$field]) && !in_array($field)) {
            $errors[] = $field;
        } else {
            $values[$field] = $_POST[$field];
        }
    }

 if (empty($errors)) {
        foreach ($fields as $field) {
            if ($field === "favoriteFruit") {
                printf("%s: %s<br />", $field, var_export($_POST[$field], TRUE));
            } else {
                printf("%s: %s<br />", $field, $_POST[$field]);
            }
        };
        exit;
    }
}


<?php if (in_array('username', $errors)): ?>
  <span class="error">Missing</span>
<?php endif; ?>