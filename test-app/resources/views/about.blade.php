@extends('layout.master')

@section('content')
    <section id="part2" class="provodnic">
        <div class="provodnic__container container">
            <div class="provodnic__inner">

                <div class="provodnic__item">

                    <div class="provodnic__img-section">
                        <img src="{{ asset('/assets/image/tima-1.png') }}" alt="" class="provodnic__img">
                    </div>
                </div>

                <div class="provodnic__item provodnic__item-text">
                    <div class="provodnic__text-sction">
                        <h2 class="provodnic__text-title">Проводник </h2>
                        <p class="provodnic__text-decr">Наш гид отправит вас в увлекательное путешествие по истории!</p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="dog">
        <div class="dog__container container">
            <div class="dog__inner">

                <div class="dog__item-text">
                    <p class="dog__item-text-desc">
                        Музей – это не просто скучное
                        накопление артефактов и
                        исторических экспонатов.
                    </p>
                </div>

                <div class="dog__item-img-section">
                    <img src="{{ asset('/assets/image/pla-1.png') }}" alt="" class="dog__item-img">
                </div>

            </div>
        </div>
    </section>
@endsection

