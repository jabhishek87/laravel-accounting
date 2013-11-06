$(document).ready(function() {
	$('#checklist_main_table').dataTable({
		'iDisplayLength': 100,
		"bPaginate": false,
		"bLengthChange": false,
		"bFilter": false,
		"bSort": false,
		"bInfo": false,
		"bAutoWidth": false
	});

	// multiple datasets
	$('#search_check_number').typeahead([
	  {
	    name: 'accounts',
	    remote: 'search-by-check-number/%QUERY'
	  }
	]);
});