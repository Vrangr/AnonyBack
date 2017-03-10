$(document).ready(function(){	
{	
	var ymax = window.innerHeight;
	var xmax = window.innerWidth;
	var xmaxhalf= xmax/2;
	
	$("#holder").css({	"position":"relative",
						"height":(80*ymax/100),
						"top":(10*ymax/100),
						"left":-1000+"px",
						"width":(xmax*20/100),
						"z-index":-1,
						"backgroundColor":"black",
						"visibility":"hidden"});
		
	$("#holder2").css({	"position":"relative",
						"height":(80*ymax/100),
						"top":(10*ymax/100),
						"left":-1000+"px",
						"width":(xmax*20/100),
						"z-index":-1,
						"backgroundColor":"black",
						"visibility":"hidden"});	
						
	$("#holder3").css({	"position":"relative",
						"height":(80*ymax/100),
						"top":(10*ymax/100),
						"left":-1000+"px",
						"width":(xmax*20/100),
						"z-index":-1,
						"backgroundColor":"black",
						"visibility":"hidden"});	
	
	$(".header").css({	
						"position":"absolute",
						"height":(35*ymax/100),
						"top":-(35*ymax/100),
						"width":100+"%",
						"opacity":"0.75",
						"background-color":"#00796B",
						});		//1A237E

	
	$("#name").css({	"font-size":100+ "px",
						"font-family":"Helvetica",
						"position":"absolute",
						"top":(44*ymax/100)-(35*ymax/100),
						"left":"30px",
						"color":"#B2DFDB",
						});
	
	
	$(".header").animate(
	{
		"top":"0",
		"opacity":"0.85",
		"backgroundColor":"#00796B"		//2196F3
	},500
	);
	

	$(".bod1").css({"position":"absolute",
					"top":(36.1*ymax/100),
					"opacity":"1",
					"left":-xmaxhalf,
					"width":xmaxhalf});
	$(".bod1").css("height",800);				
	
	$(".bod2").css({"position":"absolute",
					"top":(36.1*ymax/100),
					"opacity":"0.70",
					"right":-xmaxhalf,
					"width":xmaxhalf,
					"height":"800px"});
	
	
	$(".bod1").animate(
	{
		"left":"8",
		"opacity":"0.70",
		"backgroundColor":"#E0F2F1"  //BBDEFB
	},500	
	);
	
	$(".bod2").animate(
	{
		"right":"8",
		"opacity":"0.70",
		"backgroundColor":"#E0F2F1"
	},500	
	);
	
	//Options
	$(".box").css({"position":"absolute",
					"height":"50",
					"width"	:(ymax-800),
					"left"	:350,
					
					});
	$("#register").css({"position":"absolute",
						"top":(35*ymax/100)-75,"opacity":"0","backgroundColor":"#00796B"});
	$("#login").css({"position":"absolute",
						"top":(35*ymax/100)+25,"opacity":"0","backgroundColor":"#00796B"});
	$("#contact").css({"position":"absolute",
						"top":(35*ymax/100)+50+2*50,"opacity":"0","backgroundColor":"#00796B"});
	$("#feed").css({"position":"absolute",
						"top":(35*ymax/100)+100+3*50,"opacity":"0","backgroundColor":"#00796B"});
						
	setTimeout(function()
	{
		$("#register").animate(
		{
			"opacity":"1",
			"top":(35*ymax/100)+25
		},300);
		
		
		setTimeout(function()
		{
			$("#login").animate(
			{
				"opacity":"1",
				"top":(35*ymax/100)+25+150+25
			},300);
		},350
		);
		
		
		setTimeout(function()
		{
			$("#contact").animate(
			{
				"opacity":"1",
				"top":(35*ymax/100)+25+(150+25)*2
			},300);
		},700
		);
		
		
		setTimeout(function()
		{
			$("#feed").animate(
			{
				"opacity":"1",
				"top":(35*ymax/100)+25+(150+25)*3
			},300);
		},1050
		);

	},300
	);
		
}
{
	
	
	
	
	
}


});