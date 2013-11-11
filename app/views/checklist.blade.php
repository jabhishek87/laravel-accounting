@extends('layout')

@section('css-files')

@stop

@section('content')

	<h1 style="text-align:center;">Accounts Receivables</h1>

    <table id="checklist_main_table" class="table table-striped table-bordered" border="0" cellpadding="0" cellspacing="0" width="100%">
    	<thead>
			<tr alt="tooltip">
				<th>#</th>
				<th>invoice number</th>
				<th>Amount Due ($)</th>
			</tr>
		</thead>
		
	</table>

@stop

@section('js-files')
<script src="assets/javascripts/jslibs/checklist.js" type="text/javascript"></script>
@stop