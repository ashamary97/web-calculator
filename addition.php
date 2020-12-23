<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.php">Calculator</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="addition.php">Addition</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="subtraction.php">Subtraction</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="multiplication.php">Multiplication</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="division.php" >Division</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"><img src="images/image1.png" class="img-thumbnail" alt="..." height="350" width="350"></div>


            
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="font-size: larger;">
                <table class="table table-borderless">
                    <tr>
                        <td>Enter the first number</td>
                        <td><input id="firstnum" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Enter the second number</td>
                        <td><input id="secondnum" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td><button onclick=" mybuttonclick()" class="btn btn-success"> ADD</button></td>
                    </tr>
                    <tr>
                        <td>Result</td>
                        <td><P id="result"></P></td>
                    </tr>

                    
                </table>
                <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
                
            </div>
           
        </div>
       
       
    </div>

    
<script>
    function mybuttonclick(){

       var getFirstnum=parseInt(document.getElementById("firstnum") .value )

       var getSecondnum=parseInt(document.getElementById("secondnum").value)

       var res=getFirstnum+getSecondnum

document.getElementById("result").innerHTML=res

console.log(res)


         }
</script>




    
</body>
</html>