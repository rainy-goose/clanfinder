<!--
Connor Farnworth
Initial commit: Submitted project for CS248-002 FA19
-->
<!DOCTYPE html>


<!--<?php ?>-->



<head>
  <title>Clash of Clans | Clan Finder</title>
  <link type="text/css" rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <script src="form.js" type="text/javascript"></script>
</head>

<body>
  <h1>Welcome to Clan Finder!</h1>
  <h2>Clan Finder is an external utility for Clash of Clans used to match your preferences up with
  a clan who shares those same preferences. </h2>
  <form name="inputForm" action="results.php" method="post">



<fieldset>
  <legend>Are you...</legend>
  <label><input type="radio" name="ros" class="ros" id="searching"/>Searching</label>
  <label><input type="radio" name="ros" class="ros" id="recruiting"/>Recruiting</label>
  <!-- <label><input type="radio" name="ros" class="ros" id="testing"/>Testing</label>  -->
  <br/>
  <button type="button" onClick="submitROS()">Build Question Form</button>
  </fieldset>
  <br/>


<div id="playerform">
<fieldset>
  <legend>Player Data</legend>

  <label class="heading" id="igname">Username: </label>
  <input type="text" name="igname" id="ignameq"/><br/>

  <label class="heading" id="userid">User ID: </label>
  <input type="text" name="userid" id="useridq"/><br/>

  <label class="heading" id="thlvl">Town Hall level: </label>
  <input type="number" min="1" max="13" name="thlvl" id="thlvlq"/><br/>

  <label class="heading" id="userlocation">Location: </label>
  <input type="text" name="userlocation" id="userlocationq"/><br/>
<fieldset id="opt">
  <legend>Optional Inputs</legend>
  <label class="heading" id="war">Clan Wars? </label>
  <label><input type="checkbox" name="war" id="warq"/>Yes</label><br/>

  <label class="heading" id="cwl">Clan War Leagues? </label>
  <label><input type="checkbox" name="cwl" id="cwlq"/>Yes</label><br/>

  <label class="heading" id="cg">Clan Games? </label>
  <label><input type="checkbox" name="cg" id="cgq"/>Yes</label><br/>
</fieldset>
  <input type="button" name="playerFormBtn" onClick="clashForm()" value="See Results"/>

</fieldset>
</div>


<div id="clanform">

<fieldset>
  <legend>Clan Data</legend>

  <label class="heading" id="clanname">Clan Name: </label>
  <input type="text" id="clannameq"/><br/>

  <label class="heading" id="clanid">Clan Tag: </label>
  <input type="text" name="clanid" id="clanidq"/><br/>

  <label class="heading" id="reqth">Required TH level: </label>
  <input type="number" min="1" max="13" name="reqth" id="reqthq"/><br/>

  <label class="heading" id="clanlocation">Location: </label>
  <input type="text" name="clanlocation" id="clanlocationq"/><br/>
  <fieldset id="opt2">
    <legend>Optional Inputs</legend>
  <label class="heading" id="clanwar">Clan Wars? </label>
  <label><input type="checkbox" name="clanwar" id="clanwarq"/>Yes</label><br/>

  <label class="heading" id="clancwl">Clan War Leagues? </label>
  <label><input type="checkbox" name="clancwl" id="clancwlq"/>Yes</label><br/>

  <label class="heading" id="clancg">Clan Games? </label>
  <label><input type="checkbox" name="clancg" id="clancgq"/>Yes</label><br/>
  </fieldset>
  <input type="button" name="clanFormBtn" onClick="clashForm()" value="See Results"/>

</fieldset>
</div> <!-- THIS IS THE END OF THE CLAN FORM -->
</form>


</body>
</html>
