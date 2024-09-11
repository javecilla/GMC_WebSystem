@extends('errors::minimal')

@section('title', __('Payment Required'))
@section('subtitle', __('ERR_PAYMENT_REQUIRED'))
@section('code', '402')
@section('status', __('Payment Required'))

@section('message')
  @verbatim
      Access to this resource on the <i>Golden Minds Colleges</i> Web System requires payment. Please ensure your payment information is up to date or contact our support team for assistance.
  @endverbatim
@endsection
