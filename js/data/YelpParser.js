function getData(){

	var zip = document.getElementById('next').value;
	window.alert(zip);

	var e = document.getElementById("option");
	var strUser = e.options[e.selectedIndex].value;

	window.alert(strUser);

	var url = 'http://dj.normtronics.com/YelpData.php?type=' + strUser + '&location=' + zip;

	window.alert(url);

	var client = new XMLHttpRequest();
	client.open("GET", url, false);
	client.send(); 
	var response = JSON.parse(client.responseText);
	//console.log(response);
	console.log(response.businesses[0]);
	//console.log(client.responseText.Yelp);

	//console.log(response.Yelp);


	/*var oReq = new XMLHttpRequest();
	oReq.open("get", url, true);
	oReq.send();
	window.alert(oReq.responseText);*/

	/*$.ajax({url: url,success:function(result){
    		window.alert(result);
  	}});*/

	/*$.getJSON( url, {
	    format: "json"
 	}).done(function( data ) {
      window.alert(data);
    });

	})();*/


	
}