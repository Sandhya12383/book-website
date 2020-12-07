<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Information</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<body class="bgcolor">
    <nav class="navbar navbar-expand-sm bg-info navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
         
        </ul>
      </nav>
    <h1>Book Information</h1>
    <table class="table">
       <tr>
           <td>Name:</td>
           <td><input type="text" class="form-control" id="name"></td>
       </tr>
       <tr>
           <td>Author Name:</td>
           <td><input type="text" class="form-control" id="aname"></td>
       </tr>
       <tr>
           <td>Distributer Name:</td>
           <td><input type="text" class="form-control" id="dname"></td>
       </tr>
       <tr>
        <td>Price:</td>
        <td><input type="text" class="form-control" id="price"></td>
       </tr>

       <tr>
           <td>Category:</td>
           <td><input type="radio" name="name" class="form-control" id="geo">Geography</td>
           <td><input type="radio" name="name" class="form-control" id="his">History</td>
       </tr>
       <tr>
           
           <td>Agree terms&conditions</td>
           <td><input type="checkbox" class="form-control" id="agree"></td>
       </tr>
       <tr>
        <td><Button class="btn btn-primary" onclick="clickme()">Submit</Button></td>
        <td></td>
    </tr>
       
    </table>
    <script src="js/myscript.js">
        
    </script>
</body>
</html>