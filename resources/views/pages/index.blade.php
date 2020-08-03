@extends('layout')

@section('slider')
    @include('pages._slider')
    @endsection

@section('content')


    <section class="tada-container content-posts" style="margin-top: 70px; !important;">

    <div class="content col-xs-8">

        <!-- ARTICLE 1 -->
        @foreach( $posts as $post)
            <article>
                <div class="post-image">
                    <a href="{{route('post.show', $post->slug)}}">
                    <img src="{{$post->getImage()}}" alt="post image 1">
                    </a>
                    @if($post->hasCategory())
                    <div class="category"><a href="{{route('category.show', $post->category->slug)}}">{{$post->category->title}}</a></div>
                        @endif
                </div>
                <div class="post-text">
                    <span class="date">{{$post->getDate()}}</span>
                    <h2><a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a></h2>
                    <p class="text">{!!$post->description!!}
                        <a href="{{route('post.show', $post->slug)}}" style="color: #9c8156;">Подробнее<i class="icon-arrow-right2"></i></a></p>
                </div>
                <div class="post-info">
                    <div class="post-by">Опубликовал <a href="#">{{$post->author->name}}</a></div>
                    <div class="extra-info">
{{--                        <a href="#"><i class="icon-facebook5"></i></a>--}}
{{--                        <a href="#"><i class="icon-twitter4"></i></a>--}}
{{--                        <a href="#"><i class="icon-google-plus"></i></a>--}}
                        <span class="comments">{{$post->comments->count()}} <i class="icon-bubble2"></i></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </article>
        @endforeach


        <div class="navigation">
            {{$posts->links('vendor.pagination.myPaginate')}}
        </div>

    </div>

    @include('pages._sidebar')

        <div class="clearfix"></div>

    </section>
@endsection
