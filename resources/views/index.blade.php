@extends('layouts.master')
@section('title','BNN Kota Cirebon')

@section('content')
<script>
		window.print();
	</script>

@endsection


@push('page-script')
    <script>alert(123)</script>
@endpush


