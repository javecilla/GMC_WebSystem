@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('subtitle', __('ERR_TOO_MANY_REQUESTS'))
@section('code', '429')
@section('status', __('Too Many Requests'))

@section('message')
  @verbatim
      You have made too many requests to the <i>Golden Minds Colleges</i> Web System in a short period of time. Please wait a moment and try again. We appreciate your patience and understanding.
  @endverbatim
@endsection
