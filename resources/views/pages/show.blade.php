@extends('layout')

@section('content')

    <section class="tada-container content-posts post sidebar-right">

        <!-- *** CONTENT *** -->

        <div class="content col-xs-8">

            @if(session('status'))
                <div class="widget tags">
                    <div class="tags-container">
                        <p class="text-success" style=" font-weight: bold;">
                            {{session('status')}}
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>

        @endif

        <!-- ARTICLE 1 -->

            <article>
                <div class="post-image">
                    <img src="{{$post->getImage()}}" alt="post image 1">
                </div>

                @if($post->hasCategory())
                    <div class="category">
                        <a href="{{route('category.show', $post->category->slug)}}">{{$post->category->title}}</a>
                    </div>
                @endif

                <div class="post-text">
                    <span class="date">{{$post->getDate()}}</span>
                    <h2>{{$post->title}}</h2>
                </div>
                <div class="post-text text-content">
                    <div class="post-by">Опубликовал <a href="#">{{$post->author->name}}</a></div>
                    <div class="text"><p>
                        {!! $post->content !!}
                        <div class="clearfix"></div>
                    </div>
                </div>


                <div class="widget tags" style="margin-bottom: 2px;">
                    @if(!$post->tags->isEmpty())
                        <div class="tags-container" style="margin-top: 2px;">
                            @foreach($post->tags as $tag)
                                <a href="{{route('tag.show', $tag->slug)}}">{{$tag->title}}</a>
                            @endforeach
                        </div>
                        <div class="clearfix"></div>
                    @endif
                </div>

                <div class="navigation-post" style="padding: 20px 20px 20px 20px;">
                    @if($post->hasPrevious())
                        <div class="prev-post">
                            <img src="{{$post->getPrevious()->getImage()}}" height="70px">
                            <a href="{{route('post.show', $post->getPrevious()->slug)}}" class="prev">
                                <i class="icon-arrow-left8"></i> Предыдущая работа
                                <span class="name-post">{{Str::limit($post->getPrevious()->title,17)}}</span>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    @endif
                    @if($post->hasNext())
                        <div class="next-post">
                            <a href="{{route('post.show', $post->getNext()->slug)}}" class="next">
                                Следующая работа <i class="icon-arrow-right8"></i>
                                <span class="name-post">{{Str::limit($post->getNext()->title,17)}}</span>
                            </a>
                            <img src="{{$post->getNext()->getImage()}}" height="70px">
                            <div class="clearfix"></div>
                        </div>
                    @endif
                    <div class="clearfix"></div>
                </div>

                @if(!$post->related()->isEmpty())
                    <div class="related-posts">
                        <h2>Похожие работы</h2>
                        <div class="related-item-container">
                            @foreach($post->related() as $item)
                                <div class="related-item">
                                    <div class="related-image">
                                        <img src="{{$item->getImage()}}">
                                        <span class="related-category"><a href="#">{{$item->category->title}}</a></span>
                                    </div>
                                    <div class="related-text">
                                        <span class="related-date">{{$item->getDate()}}</span>
                                        <span class="related-title"><a
                                                href="{{route('post.show', $item->slug)}}">{{$item->title}}</a></span>
                                    </div>
                                    <div class="related-author">
                                        Опубликовал <a href="#">{{$item->author->name}}</a>
                                    </div>
                                </div>
                            @endforeach
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endif

                @if(!$post->comments->isEmpty())
                <div class="comments" style="padding: 50px 50px 0 50px;">
                    <h3>Комментарии</h3>
                        @foreach($post->getComments() as $comment)
                    <div class="comments-list">
                        <div class="main-comment">
                            <div class="comment-image-author">

                                @if($comment->user_id != null)
                                <img src="{{$comment->author->getImage()}}">

                                @else

                                    <img src="/img/no-image.png">
                                        @endif
                            </div>
                            <div class="comment-info">
                                @if($comment->user_id != null)
                                <div class="comment-name-date"><span class="comment-name">{{$comment->author->name}}</span>
                                    @else
                                        <div class="comment-name-date"><span class="comment-name">{{$comment->name}}</span>
                                            @endif
                                    <span class="comment-date">{{$comment->created_at->diffForHumans()}}</span>
                                    <div class="clearfix"></div>
                                </div>
                                <span class="comment-description">{{$comment->text}} </span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                        @endforeach


                </div>
                        @endif

                <div class="comment-form">
                    <h3>Оставить комментарий</h3>
                    <form action="/comment" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <span class="field-name">ФИО (обязательно)</span>
                                <input type="text" style="width: 100%;" class="name" name="name">
                            </div>
                            <div class="form-group col-xs-6">
                                <span class="field-name">Email (обязательно)</span>
                                <input type="text" style="width: 100%;" class="email" name="email">
                            </div>
                            <div class="form-group col-xs-12">
                                <span class="field-name">Сообщение</span>
                                <textarea class="message" name="message"></textarea>
                            </div>
                        </div>
                        <button type="submit">Отправить сообщение</button>
                    </form>
                </div>

            </article>

        </div>

        <!-- *** SIDEBAR *** -->

        @include('pages._sidebar')
        <div class="clearfix"></div>

    </section>
@endsection

