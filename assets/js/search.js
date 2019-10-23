var searchDataArray = {};
var multi;

function searchFunction(searchDataArray) {

	console.log(searchDataArray);

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

				if(obj.count == 0){
					$("#search_count").html("Not found");
					$('#search_count').attr('disabled', true);
				}else{
					$("#search_count").html(obj.count);
					$('#search_count').attr('disabled', false);
				}
				streetName(obj);
				postalCode(obj);
				propertyType();
				areas();

				streetForm();
			}
		});
	}
}

function streetName(obj){
	var single = new SelectPure(".street_name", {
		options: obj.street_name,
		onChange: value => {
			searchDataArray['street_name'] = value;
			searchFunction(searchDataArray);
		},
	});
}

function postalCode(obj){
	var single = new SelectPure(".postal_code", {
		options: obj.postal_code,
		onChange: value => {
			searchDataArray['postal_code'] = value;
			searchFunction(searchDataArray);
		},
	});
}

function propertyType(){
	$.ajax({
		url: 'search/fetch_all_propertys',
		context: document.body,
		success: function(data){
			var property_data = jQuery.parseJSON(data);

			var single = new SelectPure(".property", {
				options: property_data,
				onChange: value => {
					searchDataArray['property'] = value;
					searchFunction(searchDataArray);
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
			if (typeof multi === "undefined") {
				multi = new SelectPure(".multi-select", {
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
