@extends('errors::minimal')

@section('title', __('Not Found'))
@section('subtitle', __('ERR_NOT_FOUND'))
@section('code', '404')
@section('status', __('Not Found'))

@section('message')
  @verbatim
      The page you are looking for could not be found. It may have been moved, deleted, or the URL may be incorrect. Please check the URL or return to the homepage.
  @endverbatim
@endsection
