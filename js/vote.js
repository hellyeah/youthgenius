$(document).ready(function(){
	
	Parse.initialize("cJuWw2KIaEhK5DsR26nqB2icj74QlUzu5XC4QhbO", "s5ORdEm9JqYLkSzjCiqXlIoFcBuMFRiAttSDPRSj");
	
	$(".form-wrapper").submit(function(e) {

		//Grab data from entry field and split by commas
		var str= ($(".form").val());

		//initialize db storage names
		var LaunchEmails = Parse.Object.extend("LaunchEmails");
		var launchEmails = new LaunchEmails();
		launchEmails.save({email: str}, {
		  success: function(object) {
		    alert("yay! it worked");
		  }
		});
		
		//alert("!");
		$(".form").val("");
		e.preventDefault();
		$(this).hide(1000);
		return false;	
	})

	$("input").keypress(function(event) {
    if (event.which == 13) {
        event.preventDefault();
        $("form").submit();
    }
	});
	
});