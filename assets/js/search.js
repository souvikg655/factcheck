var searchDataArray = {};
var municipality_obj;

var FINAL_DATA = '';

function searchFunction(searchDataArray,street_name_val=1, postal_code_val=1, property_type_value=1) {

	//console.log(searchDataArray);

	if(searchDataArray.municipality === undefined){
		$("#search_count").html('Not Found');
		$('#search_count').attr('disabled', true);
	}else{
		var formdata = new FormData();
		formdata.append("searchDataArray", JSON.stringify(searchDataArray));

		$.ajax({
			url: 'search/search_homes',
			type: 'POST',
			processData: false,
			contentType: false,
			data: formdata,
			success: function(data){
				var obj = jQuery.parseJSON(data);
				FINAL_DATA = data;

				if(obj.count == 0){
					$("#search_count").html("Not found");
					$('#search_count').attr('disabled', true);
				}else{
					$("#search_count").html(obj.count);
					$('#search_count').attr('disabled', false);
				}

				streetForm();

				if(street_name_val == 1){
					streetName(obj);
				}

				if(postal_code_val == 1){
					postalCode(obj);
				}				
			}
		});
	}
}

function streetName(obj){
	$('.street_name').empty();
	if(obj!= null){
		var single = new SelectPure(".street_name", {
			options: obj.street_name,
			onChange: value => {
				searchDataArray['street_name'] = value;
				searchFunction(searchDataArray,-1,1,1);
			},
		});
	}else{
		var single = new SelectPure(".street_name", {
			options: [],
			onChange: value => {

			},
		});
	}
}

function postalCode(obj){
	$('.postal_code').empty();
	if(obj!= null){
		var single = new SelectPure(".postal_code", {
			options: obj.postal_code,
			onChange: value => {
				searchDataArray['postal_code'] = value;
				searchFunction(searchDataArray, -1, -1, 1);
			},
		});
	}else{
		var single = new SelectPure(".postal_code", {
			options: [],
			onChange: value => {
				
			},
		});
	}
}

function propertyType(obj){
	$.ajax({
		url: 'search/fetch_all_propertys',
		context: document.body,
		success: function(data){
			var property_data = jQuery.parseJSON(data);

			var single = new SelectPure(".property", {
				options: property_data,
				onChange: value => {
					searchDataArray['property'] = value;
					searchFunction(searchDataArray,-1,-1,-1);
				},
			});
		}
	});

}

function areas(){
	$.ajax({
		url: 'search/fetch_all_areas',
		context: document.body,
		success: function(data){
			var area_data = jQuery.parseJSON(data);

			var single = new SelectPure(".area_sf", {
				options: area_data,
				onChange: value => {
					searchDataArray['area'] = value;
					searchFunction(searchDataArray);
				},
			});
		}
	});	
}

$( document ).ready(function() {
	$.ajax({
		url: 'search/fetch_all_countrys',
		context: document.body,
		success: function(data){
			var dataArray = jQuery.parseJSON(data);

			var selectValue = dataArray[0]['value'];
			searchDataArray['country'] = selectValue;
			getMunicipality(selectValue);
			searchFunction(searchDataArray);

			streetName(null);
			postalCode(null);
			propertyType();
			areas();

			var single = new SelectPure(".area", {
				options: dataArray,
				onChange: value => {
					searchDataArray['country'] = value;
					getMunicipality(value);
					searchFunction(searchDataArray);
				},
			});
		}
	});
	$('.btn_mail').click(function() {
		var mail_id =  $("#mail_id").val();

		var formdata = new FormData();
		formdata.append("mail_id", mail_id);
		formdata.append("value", FINAL_DATA);
		
		$.ajax({
			url: 'email/send_email',
			type: 'POST',
			processData: false,
			contentType: false,
			data: formdata,
			success: function(data){
				var log = jQuery.parseJSON(data);
				$('.close_popup').click();
				toastr.success('Mail Send Successful', '', {
					onHidden: function() {
						window.location='';
					}
				});
			}
		});

	});
});


function getMunicipality(country){
	var formdata = new FormData();
	formdata.append("country", country);

	$.ajax({
		url: 'search/fetch_all_citys',
		type: 'POST',
		processData: false,
		contentType: false,
		data: formdata,
		success: function(data){
			var city_list = jQuery.parseJSON(data);
			if (typeof municipality_obj === "undefined") {
				municipality_obj = new SelectPure(".multi-select", {
					options: city_list,
					value: [],
					multiple: true,
					icon: "fa fa-times",
					onChange: value => {
						searchDataArray['municipality'] = value;
						if(value != ''){
							searchFunction(searchDataArray);
						}else{
							$("#search_count").html('Not Found');
							$('#search_count').attr('disabled', true);
						}
					},
				});
			}
		}
	});
}

function streetForm(){
	$('#street_from').keyup(function() {
		if(this.value != ''){
			searchDataArray['street_form'] = this.value;
			searchFunction(searchDataArray);
			streetTo();
		}
	});
}

function streetTo(){
	$('#street_to').keyup(function() {
		if(this.value != ''){
			searchDataArray['street_to'] = this.value;
			searchFunction(searchDataArray);
		}
	});
}



