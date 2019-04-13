<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<ul class="nav navbar-nav navbar-left cl-effect-14">
							<li><a href="index.html" class="active">Home</a></li>
							<li><a href="breeds.html">Breeds</a></li>
	 						<li><a href="shelter.html">Shelter</a></li>

							<li><a href="Users.html">Users</a></li>
							<li><a href="contact.html">Contact Us</a></li>			
						</ul>

<style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Shelter Around You</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="state">Select your state</label>
    <select id="state" name="state">
      <option value="al">Alabama, AL</option>
      <option value="ak">Alaska, AK</option>
      <option value="az">Arizona, AZ</option>
	<option value="ar">Arkansas, AR</option>
<option value="ca">California, CA</option>
<option value="co">Colorado, CO</option>
<option value="ct">Connecticut, CT</option>
<option value="de">Delaware, DE</option>
<option value="fl">Florida, FL</option>
<option value="ga">Georgia, GA</option>
<option value="hi">Hawaii, HI</option>
<option value="id">Idaho, ID</option>
<option value="il">Illinois, IL</option>
<option value="in">Indiana, IN</option>
<option value="ia">Iowa, IA</option>
<option value="ks">Kansas, KS</option>
<option value="ky">Kentucky, KY</option>
<option value="la">Louisiana, LA</option>
<option value="me">Maine, ME</option>
<option value="md">Maryland, MD</option>
<option value="ma">Massachusetts, MA</option>
<option value="mi">Michigan, MI</option>
<option value="mn">Minnesota, MN</option>
<option value="ms">Mississippi, MS</option>
<option value="mo">Missouri, MO</option>
<option value="mt">Montana, MT</option>
<option value="ne">Nebraska, NE</option>
<option value="nv">Nevada, NV</option>
<option value="nh">New Hampshire, NH</option>
<option value="nj">New Jersey, NJ</option>
<option value="nm">New Mexico, NM</option>
<option value="ny">New York, NY</option>
<option value="nc">North Carolina, NC</option>
<option value="nd">North Dakota, ND</option>
<option value="oh">Ohio, OH</option>
<option value="ok">Oklahoma, OK</option>
<option value="or">Oregon, OR</option>
<option value="pa">Pennsylvania, PA</option>
<option value="ri">Rhode Island, RI</option>
<option value="sc">South Carolina, SC</option>
<option value="sd">South Dakota, SD</option>
<option value="tn">Tennessee, TN</option>
<option value="tx">Texas, TX</option>
<option value="ut">Utah, UT</option>
<option value="vt">Vermont, VT</option>
<option value="va">Virginia, VA</option>
<option value="wa">Washington, WA</option>
<option value="wv">West Virginia, WV</option>
<option value="wi">Wisconsin, WI</option>
<option value="wy">Wyoming, WY</option>


    </select>
    <label for="zipcode">Enter your zip code</label>
    <input type="text" id="zipcode" name="zipcode" placeholder="Your zip code">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
