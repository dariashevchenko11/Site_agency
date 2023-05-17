<?php

use Illuminate\Http\Request;
?>

@extends('layout.app')
@section('title', 'Плани')
@section('content')
    @if($plan)
        <section class="about_us">
            <div class="container-general-info">
                <div class="about_us_desktop  ">
                    <div class="row">
                        <div class=" col-md-6">
                            <div class="about_us_text_and_button">
                                <h1>Всебічний захист твого<br>цифрового життя </h1>
                                <h3 class="premium"><span class="gold">{{$plan->title}}</span></h3>

                                <p class="about_us_text">{{$plan->description}}</p>
                                <div class="about_us_button">
                                    <a href="{{route('createFeedback')}}">
                                        Завантажити
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=" col-md-6">
                            <img class="photo_earth" src="/img/main_image/bitock_image.png" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div class="plan">
            <div class="row">
                <section class="buy_plans">
                    <div class="col-4">
                        <div class="tile_box">
                            <div class="row">
                                <div class="col-3">
                                    <div class="minus">-</div>
                                </div>
                                <div class="col-6">
                                    <div class="number">1</div>
                                </div>
                                <div class="col-3">
                                    <div class="plus">+</div>
                                </div>
                                <div class="col-12">
                                    <div class="device">пристрій</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="tile_box">
                            <div class="tile_inner_box_green">1128, 00 грн</div>
                            <div class="years">1 рік</div>

                            <form action="{{route('createFeedback')}}" class="order" method="POST">
                                @csrf
                                <?php
                                $myRequest = new Request();
                                $myRequest->setMethod('POST');
                                $myRequest->request->add(['foo' => 'bar']);
                                ?>
                                <button class="transp" type="submit">
                                    <div class="tile_inner_down_box_green">Купити</div>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="tile_box">
                            <div class="tile_inner_box_orange">1725, 00 грн</div>
                            <div class="years">2 роки</div>
                            <div class="tile_inner_down_box_orange">Купити</div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    @else
        @component('error')
            Такого плану не існує. <br>
            Оберіть з наступних:
        @endcomponent
    @endif
    <section class="table">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-3">
                <div class="column_names"><span class="gold">Преміум</span><br> інтернет-захист</div>
            </div>
            <div class="col-3">
                <div class="column_names"><span class="gold">Комплексний</span><br> інтернет-захист</div>
            </div>
            <div class="col-3">
                <div class="column_names"><span class="gold">Базовий</span><br> інтернет-захист</div>
            </div>
            <div class="col-3">
                <div class="title_names">Підтримка різних операційних систем</div>
                <div class="line"></div>
            </div>
            <div class="col-3">
                <div class="title_values">Windows, MacOS, Android</div>
                <div class="line_row"></div>
            </div>
            <div class="col-3">
                <div class="title_values">Windows, MacOS, Android</div>
                <div class="line_row"></div>
            </div>
            <div class="col-3">
                <div class="title_values">Windows, MacOS, Android</div>
                <div class="line_row"></div>
            </div>
            <div class="col-3">
                <div class="row_names">Захист від нових загроз</div>
                <div class="line"></div>
            </div>
            <div class="col-3">
                <div class="tick_values"><img src="/img/icons/tick.png" alt=""></div>
                <div class="line_row"></div>
            </div>
            <div class="col-3">
                <div class="row_values"><img src="/img/icons/cross.png" alt=""></div>
                <div class="line_row"></div>
            </div>
            <div class="col-3">
                <div class="row_values"><img src="/img/icons/cross.png" alt=""></div>
                <div class="line_row"></div>
            </div>
            <div class="col-3">
                <div class="row_names">Управління паролями</div>
                <div class="line"></div>
            </div>
            <div class="col-3">
                <div class="tick_values"><img src="/img/icons/tick.png" alt=""></div>
                <div class="line_row"></div>
            </div>
            <div class="col-3">
                <div class="row_values"><img src="/img/icons/cross.png" alt=""></div>
                <div class="line_row"></div>
            </div>
            <div class="col-3">
                <div class="row_values"><img src="/img/icons/cross.png" alt=""></div>
                <div class="line_row"></div>
            </div>
            <div class="col-3">
                <div class="row_names">Шифрування конфіденційних даних</div>
                <div class="line"></div>
            </div>
            <div class="col-3">
                <div class="row_values_long"><img src="/img/icons/tick.png" alt=""></div>
                <div class="line_row"></div>
            </div>
            <div class="col-3">
                <div class="row_values_long"><img src="/img/icons/tick.png" alt=""></div>
                <div class="line_row"></div>
            </div>
            <div class="col-3">
                <div class="row_values_long"><img src="/img/icons/cross.png" alt=""></div>
                <div class="line_row"></div>
            </div>
            <div class="col-3">
                <div class="row_names">Захист онлайн-платежів та безпека даних</div>
                <div class="line"></div>
            </div>
            <div class="col-3">
                <div class="row_values_long"><img src="/img/icons/tick.png" alt=""></div>
                <div class="line_row"></div>
            </div>
            <div class="col-3">
                <div class="row_values_long"><img src="/img/icons/tick.png" alt=""></div>
                <div class="line_row"></div>
            </div>
            <div class="col-3">
                <div class="row_values_long"><img src="/img/icons/cross.png" alt=""></div>
                <div class="line_row"></div>
            </div>
            <div class="col-3">
                <div class="row_names">Захист від шкідливого
                    програмного забезпечення, фішингу
                </div>
                <div class="line"></div>
            </div>
            <div class="col-3">
                <div class="row_values_long"><img src="/img/icons/tick.png" alt=""></div>
                <div class="line_last_row"></div>
            </div>
            <div class="col-3">
                <div class="row_values_long"><img src="/img/icons/tick.png" alt=""></div>
                <div class="line_last_row"></div>
            </div>
            <div class="col-3">
                <div class="row_values_long"><img src="/img/icons/cross.png" alt=""></div>
                <div class="line_last_row"></div>
            </div>
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-3">
                <div class="buy_button">
                    <a href="#">
                        Купити
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="buy_button">
                    <a href="#">
                        Купити
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection


