@extends('backend.master')
@section('title', $title)
@section('page_title', $page_title)
@section('content')
    {!! Form::open(['url' => 'user/listUser', 'method' => 'post', 'class' => 'form-horizontal row-fluid']) !!}
	
     <div class="input-append pull-left">
     <?php
     if(Session::has('txt_cari_user')) 
	 {
     	$txt_cari = Session::get('txt_cari_user');
	 }
	 else
	 {
		$txt_cari = '';	 
	 }
 
	 ?>
	 {!! Form::text('txt_cari', $txt_cari, array('size' => '100','class' => 'span3','placeholder' => 'Filter by name...')) !!}
     <button type="submit" name="submit" class="btn">
     <i class="icon-search"></i></button>
     </div>
      {!! Form::close() !!}	
      <div class="btn-group pull-right" data-toggle="buttons-radio">
      <a href="<?php echo url('/user/addUser'); ?>" class="btn btn-primary"><i class="menu-icon icon-plus"></i> Create User</a>
      </div>
     <br />
     <br />
      <?php
      $no = 0;
	  $col = 0;
	  $columns = 2;
	  $totalrows = $users->count();
	  
	  foreach($users as $row):
	  
	  $no = $no+1;
	  $col = $col+1;
	  
	  if($col < $columns )
		{
		 echo ' <div class="row-fluid">';
		}
	  ?>
       <div class="span6">
                                        <div class="media user">
                                            <a class="media-avatar pull-left" href="<?php echo url('user/editUser/'.$row->usrid); ?>">
                                                <img src="<?php echo asset($row->foto); ?>">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-title">
                                                    <?php echo $row->dispname; ?> <br />
                                                   <i>User Group</i></h3>
                                               
                                                <p>
                                                    <small class="muted">User Status</small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
									if($col == $columns || $no == $totalrows)
									{
										echo '</div>';
										$col=0;
									}
								endforeach;
								?>
                         
                               
                                <!--/.row-fluid-->
	 
    <div class="pagination pagination-centered">
     <center>{!! $users->render() !!}</center>
     </div>
@endsection
