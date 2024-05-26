@extends('layout')

@push('the_stack')
	<br /> * Pushing content from a Blade template.
@endpush

@include('antlers_partial')

@prepend('the_stack')
	<br /> * Prepending content from a Blade template.
@endprepend