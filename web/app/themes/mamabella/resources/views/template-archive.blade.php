{{--
  Template Name: Archive Template
--}}

@extends('layouts.app')

<div class="body-wrap-color">
    @section('content')
        @while (have_posts())
            @php(the_post())
            @include('partials.content-page')
        @endwhile
    @endsection
</div>
