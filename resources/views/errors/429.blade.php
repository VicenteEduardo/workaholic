@extends('errors::minimal')

@section('titulo', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Too Many Requests'))
