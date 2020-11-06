// Connor Farnworth
// Initial commit: Submitted project for CS248-002 FA19


var seasub=false;
var recsub=false;

function clashForm() {

	// a whole lotta vars
	var searching = document.getElementById("searching");
	var recruiting = document.getElementById("recruiting");

	var igname = document.getElementById("igname");
	var ignameq = document.getElementById("ignameq");

	var userid =document.getElementById("userid");
	var useridq =document.getElementById("useridq");

	var thlvl=document.getElementById("thlvl");
	var thlvlq=document.getElementById("thlvlq");

	var userlocation=document.getElementById("userlocation");
	var userlocationq=document.getElementById("userlocationq");

	// CLAN VARS

	var clanname = document.getElementById("clanname");
	var clannameq = document.getElementById("clannameq");

	var clanid = document.getElementById("clanid");
	var clanidq = document.getElementById("clanidq");

	var reqth=document.getElementById("reqth");
	var reqthq=document.getElementById("reqthq");

	var clanlocation=document.getElementById("clanlocation");
	var clanlocationq=document.getElementById("clanlocationq");


	var ready=0;

	var inputForm = document.forms["inputForm"];

	// sets text to red if no input detected. goes 1 by 1 when submitted
	// also adds 1 to value missing space, so you can't just ignore it and submit the form


	// i'm sure this can get redone in a switch-like statement
	if(searching.checked) {
		if (!ignameq.value) {
			igname.style.color = "red";
			ready++;
		} else {
			igname.style.color = "dodgerblue";
		}
		if (!useridq.value) {
			userid.style.color = "red";
			ready++;
		} else {
			userid.style.color = "dodgerblue";
		}
		if (!thlvlq.value) {
			thlvl.style.color = "red";
			ready++;
		} else {
			thlvl.style.color = "dodgerblue";
		}
		if (!userlocationq.value) {
			userlocation.style.color = "red";
			ready++;
		} else {
			userlocation.style.color = "dodgerblue";
		}
		if(ready==0) {
			seasub=true;
			inputForm.submit();}
		else {alert("Error: Please enter data into marked inputs.")}
	}

	else if(recruiting.checked) {
		if (!clannameq.value) {
			clanname.style.color = "red";
			ready++;
		} else {
			clanname.style.color = "dodgerblue";
		}
		if (!clanidq.value) {
			clanid.style.color = "red";
			ready++;
		} else {
			clanid.style.color = "dodgerblue";
		}
		if (!reqthq.value) {
			reqth.style.color = "red";
			ready++;
		} else {
			reqth.style.color = "dodgerblue";
		}
		if (!clanlocationq.value) {
			clanlocation.style.color = "red";
			ready++;
		} else {
			clanlocation.style.color = "dodgerblue";
		}
		if(ready==0) {
			recsub=true;
			inputForm.submit();}
		else {alert("Error: Please enter data into marked inputs.")}

	}

}




function submitROS() {
	// gets both radios
	var recrad = document.getElementById('recruiting'); // sets recruiting radio as recrad
	var searad = document.getElementById('searching'); // same thing but searad
	// gets both divs, either player or clan
	var playerformdiv = document.getElementById('playerform'); // sets playerformdiv
	var clanformdiv = document.getElementById('clanform'); // same but clanformdiv


	// it's easier to explain this block in one, well, block
	// if the recruiting radio is checked it only shows clan options
	// if the searching radio is checked it only shows player options
	// if neither is checked, it doesn't show anything
	if(recrad = recrad.checked) {
		// recruiting checked
		// show clan, hide player
		clanformdiv.style.display="block";
		playerformdiv.style.display="none";
	}
	else if(searad = searad.checked) {
		// searching checked
		// show player, hide clan
		playerformdiv.style.display="block";
		clanformdiv.style.display="none";
	}
	else if(!recrad.checked && !searad.checked) {
		// hide everything
		clanformdiv.style.display="none";
		playerformdiv.style.display="none";
	}


}





function showResults() {

	var playerresults=document.getElementById('playerresults');
	var clanresults=document.getElementById('clanresults')
		if(recsub=true) {
			clanresults.style.display="block";
		}
		if(recsub=false) {
			playerresults.style.display="block";
		}


}