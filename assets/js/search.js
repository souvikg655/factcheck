var searchDataArray = {};
var multi;

function searchFunction(searchDataArray) {
	console.log(searchDataArray);

	var formdata = new FormData();
	formdata.append("searchDataArray", JSON.stringify(searchDataArray));

	$.ajax({
	url: 'search/search_homes',
	type: 'POST',
	processData: false,
	contentType: false,
	data: formdata,
	success: function(data){
		//var city_list = jQuery.parseJSON(data);
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

			var single = new SelectPure(".single-select", {
				options: dataArray,
				onChange: value => {
					searchDataArray['country'] = value;
					getMunicipality(value);
					searchFunction(searchDataArray); 

				},
			});
		}});
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
					searchFunction(searchDataArray);
				},
			});
		}
	}});
}


