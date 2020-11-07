<!--
Connor Farnworth
Initial commit: Submitted project for CS248-002 FA19
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Clash of Clans | Clan Finder Results</title>
  <link type="text/css" rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <script src="form.js" type="text/javascript"></script>
</head>


<body>

<?php
    include('dbcon.php');
    // init sql db connection
    global $db;
    $sql="";
    $result=

   // if(!con) {
   // echo "failed" . mysqli_connect_error();
   // } else if(con) {
   // echo "connected ok";}
  // gets post data from form and initializes as php vars

  // user vars
  $username=$_POST['username'];
  $userid=$_POST['userid'];
  $thlvl=$_POST['thlvl'];
  $location=$_POST['userlocation'];
  // clan vars
  $clanname=$_POST['clanname'];
  $clanid=$_POST['clanid'];
  $reqth=$_POST['reqth'];
  $clanlocation=$_POST['clanlocation'];
  // global vars
  $war=$_POST['war'];
  $cwl=$_POST['cwl'];
  $cg=$_POST['cg'];
  $isPlayer=true;
  // sends the goodies off to sql (i love sql)
  //echo "playerid is " . $playerid;
  //echo "<br>";
  //echo "clanid is " . $clanid;

// this needs to get sanitized and rewritten if possible
  if($userid==!null){
        $sql = "INSERT INTO users (username, userid, thlvl, location, war, cwl, cg) values ('$username', '$userid', '$thlvl', '$userlocation', '$war', '$cwl', '$cg')";
} else if($clanid==!null) {
        $sql = "INSERT INTO clans (clanname, clanid, reqth, clanlocation, war, cwl, cg) values ('$clanname', '$clanid', '$reqth', '$clanlocation', '$war', '$cwl', '$cg')";
        $isPlayer=false;
        }


   // commented so it doesn't show on page  // used for testing
  // if($con->query($sql)) {
  // echo "new record success";
  // } else { echo "error " . $sql . "" . $conn->error;
  //  }
?>



<fieldset>
  <legend>Player Data</legend>
  <label class="heading" for="username" id="username">Username: <?=$username?></label>
    </br>
  <label class="heading" for="userid" id="userid">User ID: <?=$userid?></label>
    </br>
  <label class="heading" for="thlvl" id="thlvl">Town Hall level: <?=$thlvl?></label>
    </br>
  <label class="heading" for="userlocation" id="userlocation">Location: <?=$location?></label>
    </br>

  <legend>Clan Data</legend>
  <label class="heading" for="clanname" id="clanname">Clan Name: <?=$clanname?></label>
    </br>
  <label class="heading" for="clanid" id="clanid">Clan ID: <?=$clanid?></label>
    </br>
  <label class="heading" for="reqth" id="reqth">Town Hall minimum: <?=$reqth?></label>
    </br>
  <label class="heading" for="clanlocation" id="clanlocation">Clan Location: <?=$clanlocation?></label>
    </br>

    <fieldset id="opt">
  <legend>Optional Inputs</legend>
  <label class="heading" for="war" id="war">Clan Wars? <?=$war?></label>
    </br>
  <label class="heading" for="cwl" id="cwl">Clan War Leagues? <?=$cwl?></label>
    </br>
  <label class="heading" for="cg" id="cg">Clan Games? <?=$cg?></label>
    </br>
</fieldset>
  <input type="button" onClick="showResults()" value="Show Results!">
</fieldset>



<? if(isPlayer==true) {
    // i have no idea if these code blocks work, some of my updated code got trashed in a VM
    ?>
<div id="playerresults">
    <fieldset>
    <legend>Matched Clan Results</legend>
      <? $sql2="select * from clans where clanlocation='$userlocation';";
      $sql3="select * from users where uselocation='$clanlocation';";
?>
    </fieldset>
</div>
<? } else if(isPlayer==false) { ?>
<div id="clanresults">
  <fieldset>
    <legend>Matched Player Results</legend>
    <?
    // these could use more rewriting- match user/clan with more accurate results.
    $sql2="select * from clans where clanlocation='$userlocation';";
            $sql3="select * from users where uselocation='$clanlocation';";?>
  </fieldset>
<? } ?>


</body>
</html>
