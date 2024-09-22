@extends('layouts.main')
@section('content')
    @include('frontend.hero-section')
    <div class="pt-5 px-5 lg:px-10">
        @include('frontend.video-section')
    </div>
    <div class="px-10">
        @include('frontend.pokja-section')
        @include('frontend.profile-section')
    </div>
    @include('frontend.berita-section')
    @include('frontend.time-divider')
    <div class="px-10">
        @include('frontend.galeri-section')
    </div>
@endsection
