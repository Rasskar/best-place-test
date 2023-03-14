@extends('app')

@section('content')
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">{{__('Категории')}}</h1>
                    <button class="btn add-category btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#addCategory" type="submit">{{__('Добавить категорию')}}</button>
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
                @foreach ($categories as $category)
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="card text-center" style="width: 20rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$category->name}}</h5>
                                <p class="card-text">{{$category->description}}</p>
                                <a href="{{route('sub_category', [$category->id])}}" class="btn btn-primary">{{__('Подробнее...')}}</a>
                                <div class="button-container">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#editCategory" data-category-id="{{$category->id}}" data-category-name="{{$category->name}}" data-category-description="{{$category->description}}" class="btn btn-link js-button-edit">{{__('Редактировать')}}</button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#deleteCategory" data-category-id="{{$category->id}}" class="btn btn-link js-button-delete">{{__('Удалить')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('modals.add_category')

    @include('modals.edit_category')

    @include('modals.delete_category')

@endsection
