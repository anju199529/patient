<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="signup-form">
        <form action="submithelp.php" method="POST">
        <div class="container">
        <div class="row">
           
            <div class="col col-12 col-sm-4">
                <table class="table">
                   <h1 style="text-align:center">PATIENT DETAILS</h1> 
                        
                   
                    <tr>
                        <td>Internalid</td>
                    
                        <td><input type="number" class="form-control" 
                         name="id" placeholder="Id" required ></td> 
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text"  class="form-control" 
                        name="name" placeholder="Name" required></td>
                    </tr>
                    <tr>
                        <td>Date Of Birth</td>
                        <td><input type="date" class="form-control" 
                        name="dob" placeholder="Dob" required></td>
                    </tr> 
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                    
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="male" value="male" checked
                         name="gender" placeholder="Gender" >
                        
                        <label for="female">Female</label>
                        <input type="radio" name="gender" id="female" value="female"checked 
                        name="gender" placeholder="Gender">
                        </td>
                    </tr>
                    <tr>
                        <td>Contact Number</td>
                        <td><input type="text" class="form-control" 
                        name="contact" placeholder="Contact" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" class="form-control" 
                        name="email" placeholder="Email" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-danger">SUBMIT</button></td>
                    </tr>
                </table>
            </div>
           
        </div>
        </div>
        </form>
        </div>
   
</body>
</html>