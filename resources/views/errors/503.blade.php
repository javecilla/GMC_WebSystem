@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('subtitle', __('ERR_SERVICE_UNAVAILABLE'))
@section('code', '503')
@section('status', __('Service Temporarily Unavailable'))

@section('message')
  @verbatim
      The <i><b>Golden Minds Colleges</b></i> Web System is currently undergoing essential updates to improve your experience. While we work to restore full functionality, you can still access the <a href="https://sis.goldenmindsbulacan.com/auth/login" target="_blank"><b><i>Portal</i></b></a>. We appreciate your understanding and patience during this maintenance period.
  @endverbatim
@endsection
