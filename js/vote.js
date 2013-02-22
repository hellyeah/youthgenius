$(document).ready(function(){
	
	Parse.initialize("cJuWw2KIaEhK5DsR26nqB2icj74QlUzu5XC4QhbO", "s5ORdEm9JqYLkSzjCiqXlIoFcBuMFRiAttSDPRSj");
	
	$(".form-wrapper").submit(function() {

		//Grab data from entry field and split by commas
		var str= ($(".form").val());
		var n=str.split(",");
		//maybe they do newline split rather than commas
		
		//initialize db storage names
		var Launchrock = Parse.Object.extend("launchEmails");
		
		//loop through array of separated numbers emails them to db
		var emails = new Launchrock();
			
		//send that shit to parse
		email.save(
			{email: n}, 
			{
 				success: function(object) {
				//alert("yay! it worked");
				}
			}
		)
		
		//alert("!");
		$(".form").hide();	
	})

	$("input").keypress(function(event) {
    if (event.which == 13) {
        event.preventDefault();
        $("form").submit();
    }
	});
	
});