// JavaScript Document

function blog(blogtext)
{
	
	var formData=new FormData();
	formData.append("blogtext",blogtext);
	
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		
		if (this.readyState == 4 && this.status == 200) {
		   // Action to be performed when the document is read;
			
			console.log(xhttp.responseText);
			
		}
		
	};
	xhttp.open("POST", "blog.php", true);
	xhttp.send(formData);
	
	
	
}