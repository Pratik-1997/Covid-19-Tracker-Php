<?php
 include "logic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap Cnd -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   

     <!-- font  Cnd -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700&display=swap" rel="stylesheet">
   
  <!-- font-awesome Cnd -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css">
   
    <title>Covid-19 Tracker</title>
</head>
<body>
    
    <div class="container-fluid bg-light p-5 text-center my-3">
    <h1> Covid - 19 Tracker </h1>
    <h5 class="text-muted">An opensource project to keep track of all the Covid-19 cases around the world </h5>
    </div>


        <div class="container my-5 ">
            <div class="row text-center">
                    <div class="col-4 text-warning ">
                    <h5>Confirmed</h5>
                    <?php echo $total_confirmed; ?>
                    </div>
                    <div class="col-4 text-success">
                    <h5>Recovered</h5>
                    <?php echo $total_recovered; ?>
                    </div>
                    <div class="col-4 text-danger">
                    <h5>Deceased</h5>
                    <?php echo $total_deaths; ?>
                    </div>
            </div>
        </div>


<div class="container bg-light p-3 my-3 text-center">
<h5 class="text-info">  Prevention is the Cure.</h5>
<p class="text-muted"> Stay Indoor stay Safe </p>
</div>



    <div class="container-fluid">
         <div class="table-responsiver">
         <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Countries</th>
                        <th scope="col">Confirmed</th>
                        <th scope="col">Recovered</th>
                        <th scope="col">Deceased</th>
                        
                    </tr>
                </thead>
                <tbody>

                <?php

                    foreach($data as $key => $value){
                        $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
                        ?>

                      <tr>
                        <th><?php echo $key; ?></th>
                        <td>
                        <?php echo $value[$days_count]['confirmed']; ?>
                        <?php  if($increase != 0){?>
                             <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>

                        <?php }?>
                       
                        </td>
                        <td>
                        <?php echo $value[$days_count]['recovered']; ?>
                        </td>
                        <td>
                        <?php echo $value[$days_count]['deaths']; ?>
                        </td>
                      </tr> 
                        

                    
                <?php }?>
                
                </tbody>
            </table>
         </div>
    </div>


<footer class="footer mt-auto py-3 bg-light">
                            <div class="container text-center ">
                            <span class="text-muted"> Copyright &copy; 2021, Pratik Keluskar
                            </span>
                            </div>
</footer>


</body>
</html>