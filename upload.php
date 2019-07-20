<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="upload.css">
  <title>Water | Upload</title>
  <script>

  </script>
</head>

<body>
  <div class="form">
    <img src="imagess/w4.png" class="contactpic" style="align:center;">
    <form action="uplood.php" method="POST" enctype="multipart/form-data">
      <div class="uname">
        Name <br><input type="text" id="name" name="user_name" placeholder="Your name here" required /></div>
      <div class="address">
        Address<br><input type="text" id="address" name="user_address" placeholder="Address to be here" required />
      </div>
      <div class="uploaddoc">
        Upload your file here:
      </div>

      <div class="doc"><input id="uploadb" type="file" name="file" required />
      </div>

      <div class="btn">
        <button type="submit" id="submitb" name="submit" class="btn btn-primary">SUBMIT</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>