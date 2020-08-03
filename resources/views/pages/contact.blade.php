@extends('layout')

@section('content')

    <section class="tada-container content-posts page post-right-sidebar">

        <!-- *** CONTENT *** -->

        <div class="content col-xs-8">

            <!-- ARTICLE 1 -->

            <article>

                @if($contact)
                    <div class="post-image">
                        <img src="{{$contact->getImage()}}" alt="contact image">
                    </div>
                    <div class="post-text">
                        <h2>{{$contact->title}}</h2>
                    </div>
                    <div class="post-text text-content">
                        <div class="text">
                            {!! $contact->description !!}
                        </div>
                    </div>
                @endif

                <div class="comment-form" id="contact" style="margin-top: 20px; padding: 50px 50px 50px 50px;">
                    <div class="post-text" style="padding: 0 0 20px 0 ">
                        <h2>Свяжитесь со мной</h2>
                    </div>
                    <span class="field-name " style="text-align: center;     padding-bottom: 20px;"><h5>Если вы хотите поговорить о проекте, пожалуйста, заполните форму ниже, и я вернусь в течение 1-2 дней.</h5></span>
                    <form action="/comment" method="post">
                        {{csrf_field()}}
                        {{--                        <input type="hidden" name="post_id" value="{{$post->id}}">--}}
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
                                <span class="field-name">ЧЕМ Я МОГУ ПОМОЧЬ?</span>
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
