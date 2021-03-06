@extends('themes.default1.admin.layout.admin')

@section('Manage')
class="active"
@stop

@section('manage-bar')
active
@stop

@section('help')
class="active"
@stop

@section('HeadInclude')
@stop
<!-- header -->
@section('PageHeader')

@stop
<!-- /header -->
<!-- breadcrumbs -->
@section('breadcrumbs')
<ol class="breadcrumb">

</ol>
@stop
<!-- /breadcrumbs -->
<!-- content -->
@section('content')

<!-- open a form -->

	{!! Form::model($topics,['url' => 'helptopic/'.$topics->id, 'method' => 'PATCH']) !!}

			<div class="box box-primary">
			    <div class="box-header">
                    <h2 class="box-title">{{Lang::get('lang.edit')}}</h2><div class="pull-right">
                    {!! Form::submit(Lang::get('lang.save'),['class'=>'btn btn-primary'])!!}
                </div>
    <div class="box-body">

        <!-- status radio: required: Active|Dissable -->
        <div class="row">
               <div class="col-md-6">
		<div class="form-group {{ $errors->has('ticket_status') ? 'has-error' : '' }}">

			{!! Form::label('ticket_status',Lang::get('lang.status')) !!}&nbsp;&nbsp;
			{!! $errors->first('ticket_status', '<spam class="help-block">:message</spam>') !!}
			{!! Form::radio('ticket_status','1',true) !!} {{Lang::get('lang.active')}}&nbsp;&nbsp;&nbsp;
			{!! Form::radio('ticket_status','0') !!} {{Lang::get('lang.disabled')}}
			</div>
		</div>

<!-- Type : Radio : required : Public|private -->
            <div class="col-md-6">
		<div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">

			{!! Form::label('type',Lang::get('lang.type')) !!}&nbsp;&nbsp;
			{!! $errors->first('type', '<spam class="help-block">:message</spam>') !!}
			{!! Form::radio('type','1',true) !!} {{Lang::get('lang.public')}}&nbsp;&nbsp;&nbsp;
			{!! Form::radio('type','0') !!} {{Lang::get('lang.private')}}
		</div>
		</div>
<!-- Topic text form Required -->
          <div class="col-md-6">
		<div class="form-group {{ $errors->has('topic') ? 'has-error' : '' }}">

			{!! Form::label('topic',Lang::get('lang.topic')) !!}
			{!! $errors->first('topic', '<spam class="help-block">:message</spam>') !!}
			{!! Form::text('topic',null,['disabled'=>'disabled','class' => 'form-control']) !!}
			</div>
		</div>
		        <!-- Parent Topic: Drop down: value from helptopic table -->
              <div class="col-md-6">
		<div class="form-group {{ $errors->has('parent_topic') ? 'has-error' : '' }}">

			{!! Form::label('parent_topic',Lang::get('lang.parent_topic')) !!}
			{!! $errors->first('parent_topic', '<spam class="help-block">:message</spam>') !!}
			{!!Form::select('parent_topic', [''=>'Select a Parent Topic','Help Topics'=>$topics->lists('topic','id')],null,['class' => 'form-control']) !!}
			</div>
		</div>

<!-- Custom Form: Drop down: value from form table -->
    <div class="col-md-6">
		<div class="form-group {{ $errors->has('custom_form') ? 'has-error' : '' }}">

			{!! Form::label('custom_form',Lang::get('lang.custom')) !!}
			{!! $errors->first('custom_form', '<spam class="help-block">:message</spam>') !!}
			{!!Form::select('custom_form', [''=>'Select a Form','Custom Forms'=>$forms->lists('formname','id')],null,['class' => 'form-control']) !!}
			</div>
		</div>
<!-- Department:	Drop down: value Department form table -->
    <div class="col-md-6">
		<div class="form-group {{ $errors->has('department') ? 'has-error' : '' }}">

			{!! Form::label('department',Lang::get('lang.department')) !!}
			{!! $errors->first('department', '<spam class="help-block">:message</spam>') !!}
			{!!Form::select('department', [''=>'Select a Department','Departments'=>$departments->lists('name','id')],null,['class' => 'form-control']) !!}
			</div>
		</div>
</div>
<!-- Priority:	Drop down: value from Priority  table -->
          <div class="row">
             <div class="col-md-4">
		<div class="form-group {{ $errors->has('priority') ? 'has-error' : '' }}">

			{!! Form::label('priority',Lang::get('lang.priority')) !!}
			{!! $errors->first('priority', '<spam class="help-block">:message</spam>') !!}
			{!!Form::select('priority', [''=>'Select a Proirity','Priorities'=>$priority->lists('priority_desc','priority_id')],null,['class' => 'form-control']) !!}
			</div>
		</div>
<!-- SLA Plan:	 Drop down: value SLA Plan  table-->
             <div class="col-md-4">
		<div class="form-group {{ $errors->has('sla_plan') ? 'has-error' : '' }}">

			{!! Form::label('sla_plan',Lang::get('lang.SLA_plan')) !!}
			{!! $errors->first('sla_plan', '<spam class="help-block">:message</spam>') !!}
			{!!Form::select('sla_plan', [''=>'Select a SLA Plan','SLA Plans'=>$slas->lists('name','id')],null,['class' => 'form-control']) !!}
			</div>
		</div>


<!-- Auto-assign To:	Drop Down: value  from Agent table   -->
          <div class="col-md-4">
		<div class="form-group {{ $errors->has('auto_assign') ? 'has-error' : '' }}">

			{!! Form::label('auto_assign',Lang::get('lang.auto_assign')) !!}
			{!! $errors->first('auto_assign', '<spam class="help-block">:message</spam>') !!}
			{!!Form::select('auto_assign', [''=>'Select an Agent','Agents'=>$agents->lists('user_name','id')],null,['class' => 'form-control']) !!}
			</div>
		</div>
		</div>


<!-- Auto-response:	checkbox : Disable new ticket auto-response  -->
          <div class="row">
          <div class="col-md-12">
<!-- intrnal Notes : Textarea :  -->
		<div class="form-group">
			{!! Form::label('internal_notes',Lang::get('lang.internal_notes')) !!}
			{!! Form::textarea('internal_notes',null,['class' => 'form-control','size' => '10x5']) !!}
		</div>
		</div>

<!-- Submit button -->
	</div>
</div>
</div>
</div>
</div>

<!-- close form -->

{!! Form::close() !!}

@stop
