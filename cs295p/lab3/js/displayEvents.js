window.onload = setupPage;

function setupPage()
{
	var anchors = document.getElementsByTagName("a");
	for (var i = 0; i < anchors.length; i++)
	{
		if (anchors[i].className == "hasEvents")
		{
			anchors[i].onmouseover = displayEvents;
			anchors[i].onmouseout = clearEvents;
			anchors[i].onclick = cancelClick;
		}
	}
}

function clearEvents()
{
	var eventsDiv = document.getElementById("popupEvents");
	eventsDiv.innerHTML = "";
	eventsDiv.style.border = "";
}

function cancelClick()
{
	return false;
}

function displayEvents()
{
	var eventsDiv = document.getElementById("popupEvents");
	eventsDiv.style.position = "float";
	eventsDiv.style.top = "5px";
	eventsDiv.style.left = "5px";
	eventsDiv.style.border = "black 1px solid";
	eventsDiv.style.padding = "5px";
	/* The part of the code that makes the ajax call is MUCH easier in JQuery than in JavaScript.
	Find the div tag that is styles with the class events.
	The method load makes an ajax call.  In this example the page we want to load is given
	in the href attribute of the anchor tag.  The date will be part of the href attribute as well.
	Remember that you wrote code that created the anchor tag with an href attribute that
	references the php page called displayEvents with the date as part of the url.
	*/
	$("div#popupEvents").load(this.href);
	
}


/* This version uses jquery selectors exclusively.
   Can you read it and "guess" what it does?
$(document).ready(function(){
  $("a.hasEvents").mouseover(function(e){
    $("div#events").load(this.href);
  });
  $("a.hasEvents").click(function(e){
	e.preventDefault();
  });
  $("a.hasEvents").mouseout(function(e){
    $("div#events").text("");
  });
});
*/