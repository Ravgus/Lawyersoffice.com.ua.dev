@extends('layouts.main')

@section('title', $article->name)

@section('header', 'content')

@section('logo_size', '244px')

@section('navigation')
    @include('landing.import.navigation', ['title' => $article->name])
@endsection

@section('content')

    <div class="news single" id="1">
        <div class="container">
            <div class="article_item">
                <div class="row">
                    <div class="col">
                        <div class="article">
                            <div class="preview" style='background-image: url("../{{ $article->lg_img }}")'></div>
                            <div class="headline">{{ $article->name }}</div>
                            <div class="date">
                                <img src={{ asset("images/theme/svg/calendar.svg") }} alt="icon" class="icon_time"
                                     width="20px" height="auto">
                                {{ Carbon\Carbon::parse($article->updated_at)->format('d.m.Y') }}
                            </div>
                            {!! $article->text !!}
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 separator"></div>
            </div>

        </div>
    </div>

@endsection

