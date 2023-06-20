<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1320/1320457.png" />
    <title>Base Converter</title>
    <style>
        body{
          font-family:'Comic Sans MS';
          background: #000 url("preloader.gif");
          background-size: 70%;
        }

        fieldset{
          background: black;
          margin: auto;
          max-width: 400px;
          border-color: #48ff00;
        }

        legend {
          display: block;
          padding-left: 10px;
          padding-right: 10px;
          border: 5px solid #48ff00;
          color:#48ff00;
          margin: auto;
        }

        marquee{
          border: #48ff00 3px SOLID;
          color: #48ff00;
        }

        #preloader{
          background: #000 url("preloader.gif") no-repeat no-repeat center center;
          background-size: 100%;
          height: 100%;
          width: 100%;
          position: fixed;
          z-index: 100;
        }

        .rainbow{
            background-color: #48ff00;
            border-radius: 4px;  
            color: #fff;
            cursor: pointer;
            padding: 8px 16px;
            
          }

          .rainbow-1:hover{
            background-image: linear-gradient(90deg, #00C0FF 0%, #FFCF00 49%, #FC4F4F 80%, #00C0FF 100%);
            animation:slidebg 5s linear infinite;
          }

          .rainbow-2:hover{
            background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet, red);
            animation:slidebg 2s linear infinite;
          }

          .rainbow-3:hover{
            background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, red);
            animation:slidebg 2s linear infinite;
          }

          .rainbow-4:hover{
            background-image:     linear-gradient(
                to right, 
                #E7484F,
                #F68B1D, 
                #FCED00,
                #009E4F,
                #00AAC3,
                #732982
              );
            animation:slidebg 2s linear infinite;
          }


          .rainbow-5:hover{
            background-image:     linear-gradient(
                to right, 
                #E7484F,
                #E7484F 16.65%,
                #F68B1D 16.65%,
                #F68B1D 33.3%,
                #FCED00 33.3%,
                #FCED00 49.95%,
                #009E4F 49.95%,
                #009E4F 66.6%,
                #00AAC3 66.6%,
                #00AAC3 83.25%,
                #732982 83.25%,
                #732982 100%,
                #E7484F 100%
              
              
              
              );
            animation:slidebg 2s linear infinite;
          }


          @keyframes slidebg {
            to {
              background-position:20vw;
            }
          }
    </style>
</head>



<body>

<div id="preloader"></div>

<script>
  var loader = document.getElementById("preloader");
  window.addEventListener ("load", function(){
      loader.style.display = "none";
  })
</script>

<?php
ini_set('display_errors',0);
 
if( isset( $_REQUEST['calculate'] ))
{
$num = $_REQUEST['number'];
$b1 = $_REQUEST['from_base'];
$b2 = $_REQUEST['to_base'];

$temp = base_convert($num,$b1,$b2);
$result = ucwords($temp);

}
?>

<fieldset>
  <legend>Base Converter</legend>
  <marquee direction="right" behavior="alternate">   ***Strictly Enter INTEGER only***  </marquee> 

<form>
	<table>
      <tr>
        <td style="color:#48ff00; border-radius: 5px"><b>Enter Number</b></td>
        <td colspan="1">
        <input name="number" type="text" style="color:black" min="0" value="<?php  echo $num  ?>" placeholder="Enter Number" required/></td>
      </tr>

 <br>
 
      <tr>
        <td style="color:#48ff00">Enter Current Base</td>
        <td colspan="1">
        <input name="from_base" type="number" style="color:#black" min="2" max="16" value="<?php  echo $b1  ?>" placeholder="From" required/></td>
      </tr>

 <br>
 
      <tr>
        <td style="color:#48ff00">Enter Final Base</td>
        <td colspan="1">
        <input name="to_base" type="number" style="color:black" min="2" max="16" value="<?php  echo $b2  ?>" placeholder="To" required/></td>
      </tr>

 <br>
 
      <tr>
        <td></td>
        <td><button type="submit" name="calculate" class="rainbow rainbow-1"><span>Calculate</span></button></td>	 
      </tr>
      
 <br>

      <tr>
        <td style="background-color:#48ff00; color:black; border-radius: 5px"><b>Output = </b></td>
        <td style="color:#48ff00"><b><?php echo $result;?></b></td>
      </tr>	      
	</table>
</form>
</fieldset>


<iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" hidden></iframe>

</body>
</html>
