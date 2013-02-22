$(document).ready(function(){
	
	Parse.initialize("khDpY9FUifJ1JAy3luL7OsfZHL0pnqCyzGaP7CQg", "IwKO6gWJfmz5FgZ90ZVLUbz2MEyfOhiFDpn23OnH");
	
	$(".form-wrapper").submit(function() {

		//Grab data from entry field and split by commas
		var str= ($(".form").val());
		var n=str.split(",");
		//maybe they do newline split rather than commas
		
		//initialize db storage names
		var Launchrock = Parse.Object.extend("Dave_Launchrock");
		
		//loop through array of separated numbers sending them to db
		for (var i = 0; i < n.length; i++) {
			var numbers = new Launchrock();
			
			//send that shit to parse
			numbers.save(
				{number: n[i]}, 
				{
 	 				success: function(object) {
	    				//alert("yay! it worked");
  					}
  				}
  			)
		}
	alert("Welcome to the club!");
	$(".form").val("");	
	})

	$("input").keypress(function(event) {
    if (event.which == 13) {
        event.preventDefault();
        $("form").submit();
    }
});
	
})