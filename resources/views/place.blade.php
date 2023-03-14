@extends('app')

@section('content')
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">{{__('Места')}}</h1>
                    <div class="container-link">
                        <a class="button-back" href="{{route('sub_category', [$categoryId])}}">{{__('Вернутся назад')}}</a>
                    </div>
                    <button class="btn add-category btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#addPlace" type="submit">{{__('Добавить место')}}</button>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">{{$error}}</div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="category">
        <div class="container">
            <div class="row">
                @if (!$places->isEmpty())
                    @foreach ($places as $place)
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card" style="width: 18rem;">
                                @if (!empty($place->img))
                                    <img src="{{$place->img}}" class="card-img-top" alt="img">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{$place->title}}</h5>
                                    @if (!empty($place->comment))
                                        <p class="card-text">{{__('Комментарий: ') . $place->comment}}</p>
                                    @endif
                                    <p class="card-text">{{__('Оценка: ') . $place->grade}}</p>
                                    <button class="btn btn-primary js-button-edit-place" data-bs-toggle="modal" data-bs-target="#editPlace" data-place-id="{{$place->id}}" data-place-title="{{$place->title}}" data-place-comment="{{$place->comment}}" data-place-grade="{{$place->grade}}" type="submit">{{__('Редактировать')}}</button>
                                    <button class="btn btn-primary js-button-delete-place" data-bs-toggle="modal" data-bs-target="#deletePlace" data-place-id="{{$place->id}}" type="submit">{{__('Удалить')}}</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">{{__('Записи мест отсутсвуют!')}}</div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    @include('modals.add_place')

    @include('modals.edit_place')

    @include('modals.delete_place')

@endsection
