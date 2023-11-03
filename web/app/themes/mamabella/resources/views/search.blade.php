@extends('layouts.app')

@section('content')
    <div class="max-w-[1240px] mx-auto mt-[2rem] mb-[4rem]">
        @include('partials.page-header')

        @if (!have_posts())
            <x-alert type="warning">
                {!! __('Sorry, no results were found.', 'sage') !!}
            </x-alert>

            {!! get_search_form(false) !!}
        @endif

        <div
            class="grid pt-[2rem] mt-[3rem] grid-cols-1 md:grid-cols-3 gap-4 mt-8 md:mt-0 max-w-[1260px] mx-auto gap-y-[2rem] justify-items-center">
            @while (have_posts())
                @php(the_post())
                @include('partials.content-search')
            @endwhile
        </div>

        {!! get_the_posts_navigation() !!}
    @endsection
