<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="http://digitalxpressions.com/favicon.png" />

<title>RTS Labs At Home Coding Exercise</title>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="./index.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">  
<link href="./styles.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
<div class="row text-center">
<h3>RTS At Home Coding Exercise </h3>
<div class="col-12 d-flex justify-content-center text-center"><?php echo date("M d,Y"); ?>    </div>
</div>
<div class="row"></row>
<div class="row" style="background-color:#e1e1e1;">
<div class="form-group col-md-4"><a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="text-secondary">Lisa Eaise</a></div>
<div class="form-group col-md-4"> <a class="text-secondary" href="tel:856433-0609">(856) 433-0608</a></div>
<div class="form-group col-md-4"> <a class="text-secondary" href="mailto:digitalxpressionsmedia@gmail.com"> DigitalXpressionsMedia@gmail.com </a></div>
</div>

<div class="exercises">
<div class="row">
<div class="form-group col-md-12 align-center"> Please Select An Exercise to View: </div>
<?php for($i=1;$i<=3;$i++){ ?>
    <div class="form-group col-md-4"> <button onclick="showExercise<?php echo $i; ?>()" class="btn btn-info" name="ex<?php echo $i; ?>" id="exercise<?php echo $i; ?>" value="e<?php echo $i; ?>"> Exercise <?php echo $i; ?> </button></div>
<script type="text/javascript">
// js needs to be included in page as it is a loop with increment
  function showExercise<?php echo $i; ?>(){
    var exerciseDisplay = document.getElementById("exercise<?php echo $i; ?>").value;
    document.getElementById("heading").innerHTML = "Exercise <?php echo $i; ?>";
    //alert(exerciseDisplay);
    switch(exerciseDisplay){
      case "e1":
          document.getElementById("ex1").style.display = "inline-block";
          //document.getElementById("ex1").style.background-color = "gray";
          document.getElementById("ex2").style.display = "none";
          document.getElementById("ex3").style.display = "none";
          document.getElementById("description").innerHTML = "#1 Print the number of integers in an array that are above the given input and the number that are below, e.g. for the array [1, 5, 2, 1, 10] with input 6, print “above: 1, below: 4”.";
         
          break;
      case "e2":
          document.getElementById("ex1").style.display = "none";
          document.getElementById("ex2").style.display = "inline-block";
          document.getElementById("ex3").style.display = "none";
          document.getElementById("description").innerHTML = "#2 Rotate the characters in a string by a given input and have the overflow appear at the beginning, e.g. “MyString” rotated by 2 is “ngMyStri”.";
          document.getElementById("exStrRes").style.display = "none";

          break;
      case "e3":
          document.getElementById("ex1").style.display = "none";
          document.getElementById("ex2").style.display = "none";
          document.getElementById("ex3").style.display = "inline-block";
          document.getElementById("description").innerHTML = "#3 If you could change 1 thing about your favorite framework/language/platform (pick one), what would it be?";
          
          break;
      default:
          document.getElementById("ex1").style.display = "none";
          document.getElementById("ex2").style.display = "none";
          document.getElementById("ex3").style.display = "none";
          document.getElementById("description").innerHTML = "Thank You for Viewing!";
        break;

    }

  }
</script>
<?php } ?>

</div></div>

<div class="row align-left">
<h4 id="heading"></h4>
<span id="description"></span>
</div>

<div class="row">
<!-- ############################################ exercise 1 ######################################## -->
<div id="ex1" class="align-left;">
<?php 
$num = 6;
$numArr = array(1,5,2,1,10);
sort($numArr);
//could simply subtract the number of above from array count, 
// calc above num sort then foreach when loop reaches num value break;

foreach($numArr as $key => $gval){
     if($gval>=$num){ break;}
 }
// get the count from foreach loop
$gNum = count(array_slice($numArr, $key));
// get the below by subtracing the above # from total array
$lNum = count($numArr)-$gNum;

echo "above: " . $gNum; 
echo "<br> below: " . $lNum;

?>
</div>
<!-- ############################################ exercise 2 ######################################## <button name="twist" class="btn btn-info" >Click to Reverse String</button>-->
<div id="ex2" class="align-left">
<h2> Rotate String</h2>

<form onsubmit="strFun();" method="GET">
<div class="form-row">
<div class="col-md-6"><label>Enter String and Click the Reverse String Button!</label>
<input type="text" name="strPlay" id="strPlay" class="form-control" maxlength="12" value="" placeholder="Max Chars 12" required></div>
<div class="col-md-3"><input type="submit" class="btn btn-info" value="Reverse String" value="Click to Reverse String"></div>
</div>
</form>

<br><br>

</div>

</div><!-- end ex2 div -->
<!-- ############################################ exercise 3 ######################################## -->
<div id="ex3" class="align-left">
<p>If I could change one thing in PHP, it would be native support for decimals.Yes, knowing how to code functions enables capibilites, however accuarcy in the result could be off.  The casting as (float) or even a modulas result in a number_format() will give you the result to echo to screen, or save to DB.  But it is one of those small things that one really has to double check, it's just that every site with ecommerce needs numbers that work.  (You hear "use bcmath" but that just shows how little that many do not understand real-world applications and the need for accuracy.)</p>
</div>


<?php if(isset($_GET['strPlay'])){ ?>
<div id="exStrRes">
<?php
 $string = $_GET['strPlay'];
 $splitString = (str_split($string,strlen($string)-2));
 $strVal = $splitString[1] ."". $splitString[0];
 $strVal; ?>



<div class="form-row">
<div class="col-md-6"><label>You Entered: </label> <input class="form-control" name="youentered" id="showOnly" value="<?php echo $string; ?>" readonly>  </div>

<div class="col-md-3"><label>Rotated Characters:</label> <input class="form-control" name="reverseShow" id="showOnly" value="<?php echo $strVal; ?>" readonly> </div>
<div class="col-md-3">&nbsp;</div>
<div class="col-md-3"><button onclick="showExercise<?php echo 2; ?>()" class="btn btn-info" name="ex<?php echo 2; ?>" id="exercise<?php echo 2; ?>" value="e<?php echo 2; ?>"> <?php echo isset($_GET['strPlay']) ? "Rotate Another String" : "Exercise ". 2; ?> </button></div>

</div>

</div>
<?php }?>


</div> <!-- end row -->



</div> <!-- end container-->
</body>

</html>