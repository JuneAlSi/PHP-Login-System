


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="follow">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Login</title>

  <base href="/">
  <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css" />
</head>
<body>

<div class="uk-section uk-container">
  <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1">
    <form class="uk-form-stacked js-login">
    
      <div class="uk-margin">
        <label for="form-stacked-text" class="uk-form-label">Email</label>
        <div class="uk-form-controls">
          <input type="email" class="uk-input" id="form-stacked-text" required='required' placeholder="address@mail.com">
        </div>
      </div>

      <div class="uk-margin">
        <label for="form-stakced-text" class="uk-form-label">Password</label>
        <div class="uk-form-controls">
          <input type="password" class="uk-input" id="form-stacked-text" required='required' placeholder="Your password">
        </div>
      </div>

      <div class="uk-margin">
        <button class="uk-button uk-button-default" type="submit">Login</button>
      </div>
    
    </form>
  </div>
</div>

<!-- jQuery is required -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit-icons.min.js"></script>
</body>
</html>