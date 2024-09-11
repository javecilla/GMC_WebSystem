@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('subtitle', __('ERR_FORBIDDEN'))
@section('code', '403')
@section('status', __('Forbidden'))

@section('message')
  @verbatim
      You do not have permission to access this page on the <i>Golden Minds Colleges</i> Web System. Please contact your administrator if you believe this is an error.
  @endverbatim
@endsection
