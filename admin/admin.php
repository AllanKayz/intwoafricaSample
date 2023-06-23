<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Edit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<section class="container mt-5 pt-5">
<form class="w-75" style="margin:auto;" action="app/upload.php" method="post" enctype="multipart/form-data">
<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Choose Area To Edit</label>
  <select name="Section" class="form-select" id="inputGroupSelect01">
    <option value="header-bg-test" selected>Banner Area Background Image</option>
    <option value="feedback-bg-test">Contact Area Background Image</option>
    <option value="2">Home Owners Image</option>
    <option value="3">Educational Institutes Image</option>
    <option value="4">Hospitality Image</option>
    <option value="5">NGO Image</option>
    <option value="6">Utilities Image</option>
    <option value="7">Parastatal Agencies Image</option>
  </select>
</div>
    Select image to upload:
    <div class="input-group mb-3">
        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
        <button class="btn btn-outline-secondary" type="submit" value="Upload Image" name="submit" id="inputGroupFileAddon03">Upload</button>
    </div>

</form>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

</body>
</html>