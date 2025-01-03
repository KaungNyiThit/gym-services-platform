<!-- filepath: /c:/Users/user/OneDrive/Desktop/gym/gym/resources/views/admin/messages.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Messages</h1>
    <div class="row">
        @foreach($messages as $message)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $message->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $message->email }}</h6>
                        <p class="card-text">{{ $message->message }}</p>
                        <p class="card-text"><small class="text-muted">Received at {{ $message->created_at->format('Y-m-d H:i:s') }}</small></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection