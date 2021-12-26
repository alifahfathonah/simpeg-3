@extends('template')
@section('content')

<h2 class="page-header">
       &nbsp;<i class="fa fa-desktop"></i> <b>SISTEM INFORMASI PEGAWAI YPPK</b>
</h2>
<div>
    <h3><i class='fa fa-user'></i> Edit User</h3>
    {{ Form::model($user, ['role' => 'form', 'url' => 'admin/user/' . $user->id, 'method' => 'PUT']) }}
    <div class='form-group'>
        {{ Form::label('name', 'Nama') }}
        {{ Form::text('name', null, ['placeholder' => 'Nama', 'class' => 'form-control']) }}
    </div>
    <div class='form-group'>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
    </div>
    <div>
        {{ Form::label('level', 'Level') }}
        {!! Form::select('level', ['admin' => 'ADMIN'], null, ['class'=>'form-control','placeholder' => '-LEVEL-']); !!}
    </div>
    <div class='form-group'>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
    </div>

    @if ($errors->any())
      <div class="alert alert-danger alert-dismissible" role="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><em>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
     </ul>
    </em>
    </div>
    @endif
    
    <div class='form-group'>
        {{ Form::submit('Simpan', ['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}
</div>

@stop