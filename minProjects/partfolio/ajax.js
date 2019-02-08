
function func() {
	
	var click = document.getElementById('result_form');
	click.style.display = 'block';
}

function closed() {
	
	var click = document.getElementById('result_form');
	click.style.display = 'none';
}


$( document ).ready(function() {
    $("#btn").click(
		function(){
			AjaxForm('result_form', 'form', 'new.php');
			return false; 
		}
	);
});
 
function AjaxForm(result_form, form, url) {
    jQuery.ajax({
        url: url,
        type: "POST",
        dataType: "html",
        data: jQuery("#"+form).serialize(), 
        success: function(response) {
        	result = jQuery.parseJSON(response);
        	document.getElementById(result_form).innerHTML = "Спасибо, ваше мнение очень важно для нас! <br><input type='submit' onclick='closed()' value='закрыть'>";
        	
    	},
    	error: function(response) {
    		document.getElementById(result_form).innerHTML = "Ошибка. Данные не отправленны.";
    	}
 	});
}
