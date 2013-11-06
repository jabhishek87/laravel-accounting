@extends('layout')

@section('css-files')

@stop

@section('content')

	<h1 style="text-align:center;">Accounts Receivables</h1>
	<div class="row">
		
  		<!-- <div class="col-xs-6 col-md-4 pull-right"><input id="check_number_search" placeholder="Search Number"></div> -->
		<div class="col-lg-4 pull-right">
			<div class="input-group">
				<input name='search_check_number' id="search_check_number" type="text" class="form-control" placeholder="Search Number">
				<span class="input-group-btn">
					<button class="btn btn-default"  type="button">Search!</button>
				</span>
			</div><!-- /input-group -->
		</div><!-- /.col-lg-6 -->
	</div>
    <table id="checklist_main_table" class="table table-striped table-bordered" border="0" cellpadding="0" cellspacing="0" width="100%">
    	<thead>
			<tr alt="tooltip">
				<th>#</th>
				<th>invoice number</th>
				<th>Amount Due ($)</th>
			</tr>
		</thead>
		<?php $count=1; ?>
		@foreach($data['allReceivables'] as $item)
			<tr> <td>{{$count}}</td>  <td>{{{$item->number}}}</td> <td>{{{$item->amount}}}</td> </tr>
			<?php $count++; ?>
		@endforeach
	</table>

    {{$data['allReceivables']->links()}};
@stop

@section('js-files')
<script src="assets/javascripts/jslibs/checklist.js" type="text/javascript"></script>
@stop