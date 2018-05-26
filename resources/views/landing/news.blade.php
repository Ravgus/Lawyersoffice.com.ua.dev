@extends('layouts.main')

@section('title', $title)

@section('header', 'content')

@section('logo_size', '244px')

@section('navigation')
    @include('landing.import.navigation', ['title' => $title])
@endsection

@section('content')

    <div class="news" id="1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title">
                        Новини
                    </div>
                </div>
            </div>

            @foreach($articles as $article)

                <div class="article_item">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="preview" style="background-image: url({{ $article->lg_img }})"></div>
                        </div>
                        <div class="col-lg-8">
                            <div class="article">
                                <div class="headline">{{ $article->name }}</div>
                                <div class="date">
                                    <img src="images/theme/svg/calendar.svg" alt="icon" class="icon_time" width="20px"
                                         height="auto">
                                    {{ Carbon\Carbon::parse($article->updated_at)->format('d.m.Y') }}
                                </div>
                                <p class="description">
                                    {{ $article->description }}
                                </p>
                            </div>
                            <a class="more-link" href="{{ route('article', ['alias' => $article->alias]) }}"><span>Читати докладніше</span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 separator"></div>
                </div>

            @endforeach

            {{ $articles->links() }}

        </div>
    </div>

@endsection

