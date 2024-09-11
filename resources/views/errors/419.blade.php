@extends('errors::minimal')

@section('title', __('Page Expired'))
@section('subtitle', __('ERR_PAGE_EXPIRED'))
@section('code', '419')
@section('status', __('Page Expired'))

@section('message')
  @verbatim
      The page you were accessing has expired. This may have occurred due to inactivity. Please refresh the page or go back to the previous page and try again. We apologize for the inconvenience.
  @endverbatim
@endsection
