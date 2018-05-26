@foreach($workers as $worker)

    @if($loop->iteration%2==0)

        <div class="team_member team_member_odd">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-12 col-md-8">
                    <div class="photo" style="background-image: url({{ $worker->img }})">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-5"></div>
                {{--<div class="col-7 col-lg-6">
                    <div class="quote">
                        <span>“Цитата.”</span>
                    </div>
                </div>--}}
            </div>
            <div class="row ">
                <div class="col-6 ">
                    <div class="info">
                        <h2>{{ $worker->name }}</h2>
                        <h3>Адвокат</h3>
                        <div class="text_info">
                            {!! $worker->text !!}
                            @if(!empty($worker->sphere))
                                <p class="subtitle">Сфера наукових інтересів: </p>
                                <p>{!! $worker->sphere !!}</p>
                            @endif
                        </div>
                        <div class="mail_info">
                            <span>Пошта</span> <br>
                            {{ $worker->email }}
                        </div>
                        <div class="phone_info">
                            <span>Телефон</span><br>
                            {{ $worker->phone }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @else

        <div class="team_member">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="photo" style="background-image: url({{ $worker->img }})">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1 outer"></div>
                {{--<div class="col-7 col-lg-6 ">
                    <div class="quote">
                        <span>“Цитата.”</span>
                    </div>
                </div>--}}
            </div>
            <div class="row ">
                <div class="col"></div>
                <div class="col">
                    <div class="info">
                        <h2>{{ $worker->name }}</h2>
                        <h3>Адвокат</h3>
                        <div class="text_info">
                            {!! $worker->text !!}
                            <p class="subtitle">Сфера наукових інтересів: </p>
                            <p>{!! $worker->sphere !!}</p>
                        </div>
                        <div class="mail_info">
                            <span>Пошта</span> <br>
                            {{ $worker->email }}
                        </div>
                        <div class="phone_info">
                            <span>Телефон</span><br>
                            {{ $worker->phone }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif

@endforeach