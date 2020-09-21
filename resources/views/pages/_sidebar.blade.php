<div class="sidebar col-xs-4">

    <!-- ABOUT ME -->
@if(!$admin->isEmpty())
    @foreach($admin as $user)
    <div class="widget about-me">
        <div class="ab-image">
            <img src="{{$user->getImage()}}" alt="about me">
            <div class="ab-title">Об авторе</div>
        </div>
        <div class="ad-text">
            <h1>{{$user->name}}</h1>
            <p>{{$user->description}}</p>

            <div class="tags-container">
            <a href="/contact" >Подробнее</a>
            </div>
        </div>
    </div>
        @endforeach
    @endif

    <!-- LATEST POSTS -->
@if(!$featuredPosts->isEmpty())
    <div class="widget latest-posts">
        <h3 class="widget-title">
            Последние работы
        </h3>
        <div class="posts-container">
            @foreach($recentPosts as $post)
                <div class="item">
                    <img src="{{$post->getImage()}}" height="70px" alt="{{$post->title}}" class="post-image"
                         style="margin-right: 10px;">
                    <div class="info-post">
                        <h5><a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a></h5>
                        <span class="date">{{$post->getDate()}}</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            @endforeach

            <div class="clearfix"></div>
        </div>
    </div>
    @endif

@if(!$categories->isEmpty())
    <div class="widget latest-posts">
        <h3 class="widget-title">
            Категории
        </h3>
        <div class="tags-container">
            @foreach($categories as $category)
                @if($category->posts()->count()>0)
                    <a href="{{route('category.show', $category->slug)}}">{{$category->title}}
                    - {{$category->posts()->count()}}</a>
                @endif
            @endforeach
            <div class="clearfix"></div>
        </div>
    </div>
@endif

    <!-- TAGS -->
@if(!$tags->isEmpty() )
    <div class="widget tags">
        <h3 class="widget-title">
            Теги
        </h3>
        <div class="tags-container">
            @foreach($tags as $tag)
                @if($tag->posts()->count()>0)
                    <a href="{{route('tag.show', $tag->slug)}}">{{$tag->title}}
                        - {{$tag->posts()->count()}}</a>
                @endif
            @endforeach
        </div>
        <div class="clearfix"></div>
    </div>
@endif

    <!-- FOLLOW US -->
    <style>


        #lock-icon{
            margin: 20%;
        }
    </style>

    <div class=" follow-us">
        <h3 class="widget-title">
            Автор в соц сетях
        </h3>
        <div class="follow-container" id="lock-cirle">

            <a href="https://github.com/Nizomiddinkhoja" target="_blank"><i class="fa fa-github" id="lock-icon" style="font-size: 20pt;  margin: 20%; text-align: center"></i></a>
            <a href="https://www.instagram.com/nizomiddinkhoja/" target="_blank"><i class="fa fa-instagram" id="lock-icon" style="font-size: 20pt; margin: 20%; text-align: center"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100006222436458" target="_blank"><i class="fa fa-facebook" id="lock-icon"  style="font-size: 20pt; margin: 20%; text-align: center"></i> </a>
            <a  href="/contact#contact" target="_blank"><i class="fa fa-envelope" id="lock-icon" style="font-size: 20pt; margin: 20%; text-align: center"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>

    <!-- ADVERTISING -->

{{--    <div class="widget advertising">--}}
{{--        <div class="advertising-container">--}}
{{--            <img src="/img/350x300.png" alt="banner 350x300">--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- NEWSLETTER -->

{{--    <div class="widget newsletter">--}}
{{--        <h3 class="widget-title">--}}
{{--            Newsletter--}}
{{--        </h3>--}}
{{--        <div class="newsletter-container">--}}
{{--            <h4>DO NOT MISS OUR NEWS</h4>--}}
{{--            <p>Sign up and receive the <br> latest news of our company</p>--}}
{{--            <form>--}}
{{--                <input type="email" class="newsletter-email" placeholder="Your email address...">--}}
{{--                <button type="submit" class="newsletter-btn">Send</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        <div class="clearfix"></div>--}}
{{--    </div>--}}

</div>
