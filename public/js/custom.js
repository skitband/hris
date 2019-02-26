// function viewEmployee(id){
// 	//alert(id);
// 	window.location = 'http://localhost/new_hris/public/admin/employee/'+id;
// }
// url: '{{url("/settings/leads")}}',

$('.leads').select2({
    placeholder: "Choose Department Lead...",
    ajax: {
    	url: '{{url("/settings/leads")}}',
    	processResults: function (data) {
      // Tranforms the top-level key of the response object from 'items' to 'results'
	      return {
	        results: data.last_name
	      };
  		}
  	}
});
//$('.leads').select2();