@extends('layouts.app')

@section('content')
<h1>Contact</h1>

<form method="POST" action="/contact/submit">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name" placeholder="Enter name" class="form-control">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" name="email" placeholder="example@gmail.com" class="form-control">
	</div>
	<div class="form-group">
		<label for="message">Message</label>
		<textarea name="message" placeholder="Enter message" class="form-control"></textarea>
	</div>
	<div>
		<input type="submit" value="Submit" class="btn btn-primary">
	</div>
</form>
@endsection