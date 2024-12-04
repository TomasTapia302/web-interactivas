@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-5">{{ __('Profile') }}</h2>
            
            <div class="container">
                <div class="row">
                    <div class="col-6"><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="" style="width: 70%">

                    </div>
                    <div class="col-6" style="text-align: center">
                        <br><br>
                        <h2>nivel aprobacion</h2>
                        <h4>100%</h4>
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/013/743/771/small/five-stars-rating-icon-png.png" alt="" style="width: 40%">
                        <h4> ID: #1g3iytuqw</h4>
                    </div>
                </div>
<br>
            </div>
            <div class="mb-4">
                @include('profile.partials.update-profile-information-form')
            </div>
            <div class="mb-4">
                @include('profile.partials.update-password-form')
            </div>
            <div>
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endpush