<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "services";

//create connection 

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

//check connection

if(!$con)
{

	die("failed to connect!");
}



session_start();

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $service = $_POST['service'];
    if (!empty($service))
    {
        $query = "insert into service_type(service) values ('$service')";


        mysqli_query($con, $query);
    die;
    }
else
{
    echo "Please enter some valid information!";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2? family=Roboto:wght@400; 700&display swap" rel="stylesheet">
    <link rel="stylesheet" href="service-section.css">
    <title>service</title>
</head>
<body>
    <div class="bg-image"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1><span>   </span>Select Services </h1>
                <p></p>
                <form method="POST">
                <div class="custom-select" style="width:250px;">
                    <select name = 'service'>
                      <option value="0" >Select the required Service:</option>
                      <option value="Power steering fluid check" name = 'service'>Power steering fluid check.</option>
                      <option value="Shock absorbers check" name = 'service'>Shock absorbers check.</option>
                      <option value="Suspension check" name = 'service'>Suspension check</option>
                      <option value="Lights check" name = 'service'>Lights check</option>
                      <option value="Charging systems check" name = 'service'>Charging systems check</option>
                      <option value="Exhaust check" name = 'service'>Exhaust check.</option>
                      <option value="Battery check" name = 'service'>Battery check.</option>
                      <option value="Tire tread and pressure check" name = 'service'>Tire tread and pressure check</option>

                    </select>
                    
                  </div>
                  
                  <script>
                  var x, i, j, l, ll, selElmnt, a, b, c;
                  /*look for any elements with the class "custom-select":*/
                  x = document.getElementsByClassName("custom-select");
                  l = x.length;
                  for (i = 0; i < l; i++) {
                    selElmnt = x[i].getElementsByTagName("select")[0];
                    ll = selElmnt.length;
                    /*for each element, create a new DIV that will act as the selected item:*/
                    a = document.createElement("DIV");
                    a.setAttribute("class", "select-selected");
                    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
                    x[i].appendChild(a);
                    /*for each element, create a new DIV that will contain the option list:*/
                    b = document.createElement("DIV");
                    b.setAttribute("class", "select-items select-hide");
                    for (j = 1; j < ll; j++) {
                      /*for each option in the original select element,
                      create a new DIV that will act as an option item:*/
                      c = document.createElement("DIV");
                      c.innerHTML = selElmnt.options[j].innerHTML;
                      c.addEventListener("click", function(e) {
                          /*when an item is clicked, update the original select box,
                          and the selected item:*/
                          var y, i, k, s, h, sl, yl;
                          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                          sl = s.length;
                          h = this.parentNode.previousSibling;
                          for (i = 0; i < sl; i++) {
                            if (s.options[i].innerHTML == this.innerHTML) {
                              s.selectedIndex = i;
                              h.innerHTML = this.innerHTML;
                              y = this.parentNode.getElementsByClassName("same-as-selected");
                              yl = y.length;
                              for (k = 0; k < yl; k++) {
                                y[k].removeAttribute("class");
                              }
                              this.setAttribute("class", "same-as-selected");
                              break;
                            }
                          }
                          h.click();
                      });
                      b.appendChild(c);
                    }
                    x[i].appendChild(b);
                    a.addEventListener("click", function(e) {
                        /*when the select box is clicked, close any other select boxes,
                        and open/close the current select box:*/
                        e.stopPropagation();
                        closeAllSelect(this);
                        this.nextSibling.classList.toggle("select-hide");
                        this.classList.toggle("select-arrow-active");
                      });
                  }
                  function closeAllSelect(elmnt) {
                    /*a function that will close all select boxes in the document,
                    except the current select box:*/
                    var x, y, i, xl, yl, arrNo = [];
                    x = document.getElementsByClassName("select-items");
                    y = document.getElementsByClassName("select-selected");
                    xl = x.length;
                    yl = y.length;
                    for (i = 0; i < yl; i++) {
                      if (elmnt == y[i]) {
                        arrNo.push(i)
                      } else {
                        y[i].classList.remove("select-arrow-active");
                      }
                    }
                    for (i = 0; i < xl; i++) {
                      if (arrNo.indexOf(i)) {
                        x[i].classList.add("select-hide");
                      }
                    }
                  }
                  /*if the user clicks anywhere outside the select box,
                  then close all select boxes:*/
                  document.addEventListener("click", closeAllSelect);
                  </script>
                <input type="submit">
                  </form>
                 
                  
                
            </div>
            <div class="col">
                <div class="card card1">
                    
                </div>
                <div class="card card2">
                   
                </div>
                <div class="card card3">
                    
                </div>
                <div class="card card4">
                    
                </div>
            </div>
        </div>
    </div>

</body>
</html>
