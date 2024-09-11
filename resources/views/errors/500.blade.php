@extends('errors::minimal')

@section('title', __('Server Error'))
@section('subtitle', __('ERR_INTERNAL_SERVER_ERROR'))
@section('code', '500')
@section('status', __('Internal Server Error'))

@section('message')
  @verbatim
      The <i>Golden Minds Colleges</i> Web System encountered an unexpected error. We are working to resolve this issue as quickly as possible. If the problem persists, please try again later or contact our support team. We apologize for any inconvenience caused.
  @endverbatim
@endsection
