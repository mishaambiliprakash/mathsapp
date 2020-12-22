<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Mathematical Opearations</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="add.php">Addition</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sub.php">Subtraction</a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mult.php">Multiplication</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="div.php">Division</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <table class="table table-borderless">
                    <tr>
                        <td> Enter Num1</td>
                        <td><input id="numa" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Enter Num2</td>
                        <td><input id="numb" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button onclick="myButtonClick()" class="btn btn-primary">DIVIDE</button></td>
                    </tr>
                    <tr>
                        <td>result</td>
                        <td><p id="result" ></p></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script>

        function myButtonClick() {

            
            var getnum1=parseInt(document.getElementById("numa").value)
            var getnum2=parseInt(document.getElementById("numb").value)

            var res =getnum1/getnum2
            console.log(res)

            document.getElementById("result").innerHTML=res
            

        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>