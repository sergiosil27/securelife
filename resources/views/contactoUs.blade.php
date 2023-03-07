@extends('layouts.home')
@section('title', 'Home')
@section('content')
<div class="container">
<h1>Contact US Form</h1>

@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif

<form action="{{route('contactUs.contactUsPost')}}" method="POST">
  @csrf
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
<label for="name"></label>
<input type="text" id='name' name='name' class='form-control' placeholder='enter name' required>
<span class="text-danger">{{ $errors->first('name') }}</span>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
<label for="email"></label>
<input type="email" id='email' name='email' class='form-control' placeholder='enter email' required>
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>

<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
<label for="message"></label>
<textarea name="message" id="message" rows="10" class='form-control' placeholder='enter message' required></textarea>
<span class="text-danger">{{ $errors->first('message') }}</span>
</div>

<div class="form-group">
  <input type="submit" class="btn btn-success" name='Contactanos!'>
</div>
</form>
</div>

@stop


