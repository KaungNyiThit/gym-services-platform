@extends('layouts.app')

@section('content')
<div class="container mt-5 text-center">
    <div class="alert alert-danger">
        <h1>Payment Canceled</h1>
        <p>You have canceled the payment. If this was a mistake, please try again.</p>
        <a href="/membership/checkout" class="btn btn-primary">Try Again</a>
    </div>
</div>
@endsection
