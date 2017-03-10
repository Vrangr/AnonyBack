 $("#login-button").click(function(event){
	/*isnumber=document.loggingin.company.value;
	isemail = document.loggingin.userid.value
	if(!isnumber.match(/^\d+$/) && !isemail.match(/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/))*/
	{
		
		event.preventDefault();
	 
		$('form').fadeOut(500);
		$('.wrapper').addClass('form-success');
	}
	
	//var p	=	parent.document.getElementById(holder);
	//var pp	=	parent.document.getElementById();
	
	
	/*var xhr = new XMLHttpRequest();
    try
    {
        xhr.open("GET", 'main.html', false);
        xhr.onload = function () {
			if($_SESSION['userName']!='')
			{
				window.open("signedin.php","_self");
			}
        }
        xhr.send(null);
    }
    catch (e) {
        window.alert("Unable to load the requested file.");
    }

	*/
	
});