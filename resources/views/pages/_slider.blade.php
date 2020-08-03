<!-- SLIDER -->
@if(!$featuredPosts->isEmpty())
<div class="tada-slider">
    <ul id="tada-slider">
        @foreach($featuredPosts as $item)
        <li>
            <img src="{{$item->getImage()}}" alt="{{$item->title}}" style="    max-height: 600px;">
            <div class="pattern"></div>
            <div class="tada-text-container">
                <h1>{{$item->title}}</h1>
                <h2>{{$item->category->title}}</h2>
                <span class="button"><a href="{{route('post.show', $item->slug)}}">ПОДРОБНЕЕ</a></span>
            </div>
        </li>
            @endforeach
    </ul>

</div>
@endif

<!-- END SLIDER -->
