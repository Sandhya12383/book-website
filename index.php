<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <h1>Book Information</h1>
    <table class="table">
       <tr>
           <td>Name:</td>
           <td><input type="text" class="form-control"></td>
       </tr>
       <tr>
           <td>Author Name:</td>
           <td><input type="text" class="form-control"></td>
       </tr>
       <tr>
           <td>Distributer Name:</td>
           <td><input type="text" class="form-control"></td>
       </tr>
       <tr>
        <td>Price:</td>
        <td><input type="text" class="form-control"></td>
       </tr>

       <tr>
           <td>Category:</td>
           <td><input type="radio" name="name" class="form-control">Geography</td>
           <td><input type="radio" name="name" class="form-control">History</td>
       </tr>
       <tr>
           
           <td>Agree terms&conditions</td>
           <td><input type="checkbox" class="form-control"></td>
       </tr>
       <tr>
        <td><Button class="btn btn-primary">Submit</Button></td>
        <td></td>
    </tr>
       
    </table>
</body>
</html>