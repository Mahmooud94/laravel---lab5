<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<form action="/users" method="post">
  @csrf
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label  class="form-label">email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
</body>

</html>