@extends('layout.master')

@section('content')
    <section class="hero__section">
        <div class="hero__container container">
            <div class="hero__inner">
                <div class="hero__item-text-section">
                    <div class="hero__item-text-section-inner">
                        <img class="hero__amg" src="{{ asset('/assets/image/museum-logo.png') }}" alt="">
                        <h1 class="hero__title aos-init aos-animate">Добро пожаловать в самый  запоминающийся музей в мире!</h1>
                    </div>
                </div>
            </div>
            <div class="painting__inner">
                <div class="painting__item">
                    <div class="painting__item-img-section">
                        <img src="{{ asset('/assets/image/kartina-1.png') }}" alt="" class="painting__item-img">
                    </div>
                    <p class="painting__item-text">Удивительная фурнитура в  изящном стиле</p>
                </div>
                <div class="painting__item">
                    <div class="painting__item-img-section">
                        <img src="{{ asset('/assets/image/koridor-1.png') }}" alt="" class="painting__item-img">
                    </div>
                    <p class="painting__item-text">Красивая живопись того времени</p>
                </div>
                <div class="painting__item">
                    <div class="painting__item-img-section">
                        <img src="{{ asset('/assets/image/mebel-1.png') }}" alt="" class="painting__item-img">
                    </div>
                    <p class="painting__item-text">Детализированная архитектура </p>
                </div>
            </div>
        </div>
    </section>
@endsection
