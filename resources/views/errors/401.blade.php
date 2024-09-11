@extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('subtitle', __('ERR_UNAUTHORIZED'))
@section('code', '401')
@section('status', __('Unauthorized'))

@section('message')
  @verbatim
      You are not authorized to access this page on the <i>Golden Minds Colleges</i> Web System. Please log in with appropriate credentials or contact your administrator for access.
  @endverbatim
@endsection
