<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
          <title>
              FIND IT 
          </title>
          <link rel="stylesheet" href="style.css">
          
          <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Crete+Round&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sigmar+One&display=swap" rel="stylesheet">
         </head>
    <body>
        <section class="search">
            <nav>
                <a href="HOME.html"><img src="images/findit.PNG"></a>
                <div class="nav-links" id="navlinkss">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="HOME.html">HOME</a></li>
                        <li><a href="search.html"> SEARCH </a></li>
                        
                        <li><a href="CONTACT US.php">CONTACT US</a></li>
                        <LI><a href="ABOUTUS.html">ABOUT US</a></LI>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
                <h2>FIND IT</h2>  
        </section>
        <form method="POST" action="search.php">
        <section class="find">
            <div class="tofind">
                <div class="boxed">
                    <label for="place">PLACE</label>
                    <select name="selectstate" id="state" onchange="statedisplay()">
                        <option value="1">Andhra Pradesh</option>
                        <option value="2">Andaman and Nicobar Islands</option>
                        <option value="3">Arunachal Pradesh</option>
                        <option value="4">Assam</option>
                        <option value="5">Bihar</option>
                        <option value="6">Chandigarh</option>
                        <option value="7">Chhattisgarh</option>
                        <option value="8">Dadar and Nagar Haveli</option>
                        <option value="9">Daman and Diu</option>
                        <option value="10">Delhi</option>
                        <option value="11">Lakshadweep</option>
                        <option value="12">Puducherry</option>
                        <option value="13">Goa</option>
                        <option value="14">Gujarat</option>
                        <option value="15">Haryana</option>
                        <option value="16">Himachal Pradesh</option>
                        <option value="17">Jammu and Kashmir</option>
                        <option value="18">Jharkhand</option>
                        <option value="19">Karnataka</option>
                        <option value="20">Kerala</option>
                        <option value="21">Madhya Pradesh</option>
                        <option value="22">Maharashtra</option>
                        <option value="23">Manipur</option>
                        <option value="24">Meghalaya</option>
                        <option value="25">Mizoram</option>
                        <option value="26">Nagaland</option>
                        <option value="27">Odisha</option>
                        <option value="28">Punjab</option>
                        <option value="29">Rajasthan</option>
                        <option value="30">Sikkim</option>
                        <option value="31">Tamil Nadu</option>
                        <option value="32">Telangana</option>
                        <option value="33">Tripura</option>
                        <option value="34">Uttar Pradesh</option>
                        <option value="35">Uttarakhand</option>
                        <option value="36">West Bengal</option>
                        </select><br>
                </div>
                <div class="gobutton">
                    <input type="submit" name="submit" value="FIND">
                </div>
            </div>
        </section>
</form>
        <section class="pics">
            <div class="pic">
        <?php
        define('DB_SERVER','localhost');
        define('DB_USERNAME','root');
        define('DB_PASSWORD', '');
        define('DB_NAME','database');

$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
if($link === false)
{
	die("Error: Could not connect. ".mysqli_connect_error());
}
if(isset($_POST["submit"]))
{
    $id=$_POST["selectstate"];
    $result = mysqli_query($link, "SELECT * FROM images where states='$id'");

        while($row = mysqli_fetch_assoc($result))
        {
            echo "<br><img src='{$row['path']}' width='80%' style='display:block;margin-left:auto;margin-right:auto;'>";
        }
}
?>
        </div>
        </section>

        <section class="footer">
            <h4>FIND IT</h4>
            <P>BEST PLATFORM FOR THE PEOPLE TO KNOW ABOUT DIFFERENT PLACES OF ITS TOURIST SPOTS</P>
            <div class="icons">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-twitter-square" aria-hidden="true"></i>
            </div>
            
        </section>

        <script>
            var navlinkss=document.getElementById("navlinkss");
            function showMenu(){
                navlinkss.style.right="0";
            }
            function hideMenu(){
                navlinkss.style.right="-200px";
            }
        </script>
    </body>
</html>