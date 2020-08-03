@extends('layout')

@section('content')


    <section class="tada-container content-posts blog-3-columns">

        <!-- *** CONTENT COL 1 *** -->
        @foreach($posts as $key =>$post)
            @if($key==3 || $key==6)
                <div class="content col-xs-4 clearfix ">
                    @else
                        <div class="content col-xs-4">
                        @endif

                        <!-- ARTICLE 1 -->

                            <article>
                                <div class="post-image">
                                    <img src="{{$post->getImage()}}" alt="post image 1">

                                    @if($post->hasCategory())
                                    <div class="category"><a
                                            href="{{route('category.show', $post->category->slug)}}">{{$post->getCategoryTitle()}}</a>
                                    </div>
                                        @endif
                                </div>
                                <div class="post-text">
                                    <span class="date">{{$post->getDate()}}</span>
                                    <h2><a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a></h2>
                                </div>
                                <div class="post-info">
                                    <div class="post-by">Опубликовал <a href="#">{{$post->author->name}}</a></div>
                                </div>
                            </article>

                        </div>

                        @endforeach



                        <div class="clearfix"></div>

                        <div class="navigation">
                            {{$posts->links('vendor.pagination.myPaginate')}}
                        </div>

    </section>


@endsection
