@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header text-center bg-secondary text-white">
                    <h3>Choose Your Gym Membership</h3>
                </div>
                <div class="card-body">
                    <form  method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="months" class="form-label">Select the number of months:</label>
                            <select name="months" id="months" class="form-select" required>
                                @for ($i = 1; $i <= 12; $i++)
                                    <option value="{{ $i }}">{{ $i }} Month(s)</option>
                                @endfor
                            </select>
                            <label for="quantity" class="form-label">Enter qunatity: </label>
                            <input type="number" name="quantity" class="form-control" min="1" value="1" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Proceed to Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

