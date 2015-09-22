@extends('backend.master')
@section('title', $title)
@section('page_title', $page_title)
@section('content')


    {!! Form::open(['url' => $url, 'method' => 'post', 'class' => 'form-horizontal row-fluid','files' => true]) !!}
    <div class="control-group">
    {!! Form::label('txt_userid',  'User ID', array('class' => 'control-label')) !!}
		<div class="controls">
        @if(isset($users))
    		{!! Form::text('txt_userid', isset($users)?$users->usrid:'', array('class' => 'span8','maxlength' => '20','readonly' => 'readonly')) !!}
        @else
        	{!! Form::text('txt_userid', '', array('class' => 'span8','maxlength' => '20')) !!}
        @endif
		<span class="help-inline"></span>
		</div>
	</div>
    
    <div class="control-group">
    {!! Form::label('txt_dispnam', 'Display Name', array('class' => 'control-label')) !!}
		<div class="controls">
    	{!! Form::text('txt_dispnam', isset($users)?$users->dispname:'', array('class' => 'span8','maxlength' => '100')) !!}
		<span class="help-inline"></span>
		</div>
	</div>
    
    <div class="control-group">
    {!! Form::label('txt_usrpic', 'Display Picture', array('class' => 'control-label')) !!}
		<div class="controls">
    	{!! Form::file('txt_usrpic', '', array('class' => 'filestyle')) !!}
        {!! Form::hidden('txt_usrpic_old', isset($users)?$users->foto:'') !!}
		<span class="help-inline"></span>
		</div>
	</div>
    
     <div class="control-group">
        <div class="controls"> 
        	<div class="stream-attachment photo">
				<div class="responsive-photo">
					<img id="userpic" alt="Photo" src="{{isset($users)?asset($users->foto):''}}" />
                  </div>
                </div>
        <span class="help-inline"></span>
        </div>
	</div>
        
    <div class="control-group">
    {!! Form::label('txt_email', 'Email', array('class' => 'control-label')) !!}
		<div class="controls">
    	{!! Form::text('txt_email', isset($users)?$users->email:'', array('class' => 'span8','maxlength' => '50')) !!}
		<span class="help-inline"></span>
		</div>
	</div>
    
    <div class="control-group">
    {!! Form::label('txt_pass', 'Password', array('class' => 'control-label')) !!}
		<div class="controls">
    	{!! Form::password('txt_pass', array('class' => 'span8')) !!}
		<span class="help-inline">Minimum 6 characters</span>
		</div>
	</div>
    
    <div class="control-group">
    {!! Form::label('txt_pass_conf', 'Confirm Password', array('class' => 'control-label')) !!}
		<div class="controls">
    	{!! Form::password('txt_pass_conf', array('class' => 'span8')) !!}
		<span class="help-inline"></span>
		</div>
	</div>
    
    <div class="control-group">
    {!! Form::label('cb_usergrp', 'User Group', array('class' => 'control-label')) !!}
		<div class="controls">
    	{!! Form::select('cb_usergrp', $usergrp,isset($users)?$users->id_grp:'',array('class' => 'span8')); !!}
		<span class="help-inline"></span>
		</div>
	</div>
    
    <div class="control-group">
    {!! Form::label('cb_status', 'Status', array('class' => 'control-label')) !!}
		<div class="controls">
    	{!! Form::select('cb_status', $status,isset($users)?$users->status:'',array('class' => 'span8')); !!}
		<span class="help-inline"></span>
		</div>
	</div>
    
    <div class="control-group">
		<div class="controls">
         <a class="btn btn-danger" href="{{ asset('user') }}">Cancel</a>&nbsp;
       {!! Form::submit($button_name,array('class' => 'btn btn-primary')) !!}
        </div>
    </div>
    
    {!! Form::close() !!}	
@endsection
@section('other')
<script type="application/javascript" src="{{asset("public/bootstrap_plugin/bootstrap-filestyle.min.js")}}"></script>
 <script>
$(":file").filestyle({input: false,buttonText: "Choose Display Picture"});
</script>
<script>
 function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#userpic').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#txt_usrpic").change(function(){
        readURL(this);
    });
</script>
@endsection
