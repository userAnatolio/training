$(document).ready(function(){
	
$('#click').on('click', function(){
    $('#click').hide();
	sendData();
});

function sendData(){
$.get(
"intelect/contact.php ",
{
	 table_buyer: "buyer_completion",
	 id_buyer: 5,
	 table_seller: "seller_completion",
	 id_seller: 1
},
  getData,
  "json"
);
}

function getData(data) {
$('#form_buyer').html(data);
//$('#form_seller').html(data);
console.log(data);
}

});