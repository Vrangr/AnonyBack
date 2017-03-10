function off(){
}
function regclk()
{
	var ymax = window.innerHeight;
	var xmax = window.innerWidth;
	var xmaxhalf= xmax/2;

	//$("#register").appendTo("holder2");
	$("#holder2").css({"top":(70*ymax/100)+25,"left":(xmax*10/100),"width":(xmax*80/100)});
	$("#holder2").animate(
	{
		"backgroundColor":"white",
		"top":(ymax*10/100), 
		//"left":(xmax*10/100),
		"height":(ymax*78/100)
	},500
	);
	setTimeout(function(){document.getElementById("checker").innerHTML="d";},500);
	$("#lower").css({"visibility":"visible","z-index":4,"position":"absolute"});
	//$("#holder").html('<object style="position:relative;top:0px;height:100%;width:100%;" id="remove" data="register.html"></object>');
	
	$("#holder2").css({"height":(ymax*78/100),"width":"(xmax*60/100)","z-index":3,"visibility":"visible","backgroundColor":"white"});
	$("#holder2").css({"position":"fixed"});
	$("#register").css({"z-index":4});
	$("#login").css({"z-index":-1});
	$("#contact").css({"z-index":-1});
	$("#feed").css({"z-index":-1});
	$(".header").css({"z-index":1});
	
	$(".box").css({"z-index":2});
	$(".bod1").css({"z-index":1});
	$(".bod2").css({"z-index":1});
}
function logclk()
{
	var ymax = window.innerHeight;
	var xmax = window.innerWidth;
	var xmaxhalf= xmax/2;

	//$("#login").appendTo("holder");
	$("#holder").css({"top":(70*ymax/100)+25,"left":(xmax*10/100),"width":(xmax*80/100)});
	$("#holder").animate(
	{
		"backgroundColor":"white",
		"top":(ymax*15/100),
		//"left":(xmax*10/100),
		"height":(ymax*70/100)
	},500
	);
	setTimeout(function(){document.getElementById("checker").innerHTML="log";},500);
	$("#holder").css({"height":(ymax*70/100),"width":"(xmax*60/100)","z-index":3,"visibility":"visible","backgroundColor":"white"});
	$("#holder").css({"position":"fixed"});
	$("#login").css({"z-index":-1});
	$("#register").css({"z-index":-1});
	$("#contact").css({"z-index":-1});
	$("#feed").css({"z-index":-1});
	$(".header").css({"z-index":1});
	
	$(".box").css({"z-index":2});
	$(".bod1").css({"z-index":1});
	$(".bod2").css({"z-index":1});
	
	$("#upper").css({"visibility":"visible","z-index":4});
	
	//$("#holder").html('<object style="position:relative;top:0px;height:100%;width:100%;" data="indexlogin.html"></object>');
	//setTimeout(function(){$("#holder").load('indexlogin.php');},0);
	
}
function conclk()
{
	var ymax = window.innerHeight;
	var xmax = window.innerWidth;
	var xmaxhalf= xmax/2;
	
	//$("#contact").appendTo("holder");
	$("#holder3").css({"top":(70*ymax/100)+25,"left":(xmax*10/100),"width":(xmax*80/100)});
	$("#holder3").animate(
	{
		"backgroundColor":"white",
		"top":(ymax*10/100),
		//"left":(xmax*10/100),
		"height":(ymax*80/100),
		//"width":(xmax*80/100)
	},500
	); 
	setTimeout(function(){document.getElementById("checker").innerHTML="d2";},500);
	document.getElementById("checker").innerHTML="d2";
	$("#holder3").html('<object style="position:relative;top:0px;height:100%;width:100%;" data="aboutus.html"></object>');
	$("#holder3").css({"height":(ymax*80/100),"width":"(xmax*60/100)","z-index":3,"visibility":"visible","backgroundColor":"white"});
	$("#holder3").css({"position":"fixed"});
	$("#register").css({"z-index":4});
	$("#login").css({"z-index":-1});
	$("#contact").css({"z-index":-1});
	$("#feed").css({"z-index":-1});
	$(".header").css({"z-index":1});
	$("#name").css({"z-index":1});
	
	$(".box").css({"z-index":2});
	$(".bod1").css({"z-index":1});
	$(".bod2").css({"z-index":1});
	
	
	
}
function fedclk()
{
	var ymax = window.innerHeight;
	var xmax = window.innerWidth;
	var xmaxhalf= xmax/2;

	//$("#feed").appendTo("holder");
	$("#holder3").css({"top":(70*ymax/100)+25,"left":(xmax*10/100),"width":(xmax*80/100)});
	$("#holder3").animate(
	{
		"backgroundColor":"white",
		"top":(ymax*10/100),
		//"left":(xmax*10/100),
		"height":(ymax*80/100),
		//"width":(xmax*80/100)
	},500
	);
	setTimeout(function(){document.getElementById("checker").innerHTML="d2";},500);
	$("#holder3").css({"height":(ymax*80/100),"width":"(xmax*60/100)","z-index":3,"visibility":"visible","backgroundColor":"white"});
	$("#holder3").css({"position":"fixed"});
	$("#register").css({"z-index":4});
	$("#login").css({"z-index":-1});
	$("#contact").css({"z-index":-1});
	$("#feed").css({"z-index":-1});
	$(".header").css({"z-index":1});
	
	$(".box").css({"z-index":2});
	$(".bod1").css({"z-index":1});
	$(".bod2").css({"z-index":1});
			
}

function validate()
{
	var isnumber=document.loggingin.company.value;
	var isemail = document.loggingin.userid.value;
	if(!isnumber.match(/^\d+$/))
	{
		flag=1;
		
	}
	if(!isemail.match(/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/))
	{
		flag=1;
	}
	if(flag==0)
	{
		return true;
	}
	else{
		$("#wrong").css({"z-index":2,"visibility":"visible"});
		$(".wrapper").css({"opacity":0.5});
		document.getElementById("wrong").innerHTML="Company field should be numerical\nUser field should be an email";
		return false;
	}
}

function closee()
{
	var check = document.getElementById("checker").innerHTML;
	
	if(check=="d")
	{
		var ymax = window.innerHeight;
		var xmax = window.innerWidth;
		var xmaxhalf= xmax/2;
		
		$("#holder2").animate(
		{
			"backgroundColor":"white",
			"top":-(ymax*80/100),
			"height":(ymax*80/100),
			"width":(xmax*80/100)
		},500
		);
		setTimeout(function (){$("#holder2").css({"position":"relative",
								"top":-2000+"px",
								"left":300,
								"background-color":"#000000",
								"visibility":"hidden"});
								$("#lower").css({"visibility":"hidden","z-index":4});
							},500);
		document.getElementById("bt1").innerHTML="REGISTER";
		document.getElementById("checker").innerHTML="null";
	}
	else if(check=="log")
	{
		var ymax = window.innerHeight;
		var xmax = window.innerWidth;
		var xmaxhalf= xmax/2;
		
		$("#holder").animate(
		{
			"backgroundColor":"white",
			"top":-(ymax*80/100),
			"height":(ymax*80/100),
			"width":(xmax*80/100)
		},500
		);
		setTimeout(function (){$("#holder").css({"position":"relative",
								"top":(35*ymax/100)+25,
								"left":300,
								"background-color":"#000000",
								"visibility":"hidden"});
								$("#upper").css({"visibility":"hidden","z-index":4});
							},500);
		document.getElementById("checker").innerHTML="null";
	}
	else if( check=="d2")
	{
		var ymax = window.innerHeight;
		var xmax = window.innerWidth;
		var xmaxhalf= xmax/2;
		
		$("#holder3").animate(
		{
			"backgroundColor":"white",
			"top":-(ymax*80/100),
			"height":(ymax*80/100),
			"width":(xmax*80/100)
		},500
		);
		setTimeout(function (){$("#holder3").css({"position":"relative",
								"top":(35*ymax/100)+25,
								"left":300,
								"background-color":"#000000",
								"visibility":"hidden"});
								$("#holder3").empty();
								},500);
		document.getElementById("checker").innerHTML="null";

	}
}


function clickk(i)
{	
	if(i==0)
	{
		document.getElementById('done').disabled=false;
	}
	else
	{
		$('#done').css({'zIndex':-1});
		document.getElementById('done').disabled=true;
	}
}

function fff()
{
	
}