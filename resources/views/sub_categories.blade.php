@extends('app')

@section('content')
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">{{__('Подкатегории')}}</h1>
                    <div class="container-link">
                        <a class="button-back" href="{{route('category')}}">{{__('Вернутся назад')}}</a>
                    </div>
                    <button class="btn add-category btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#addCategory" type="submit">{{__('Добавить подкатегорию')}}</button>
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
                @if (!$subCategories->isEmpty())
                    @foreach ($subCategories as $subCategory)
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card text-center" style="width: 20rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$subCategory->name}}</h5>
                                    <p class="card-text">{{$subCategory->description}}</p>
                                    <a href="{{route('category.place', [$subCategory->id])}}" class="btn btn-primary">{{__('Подробнее...')}}</a>
                                    <div class="button-container">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#editCategory" data-category-id="{{$subCategory->id}}" data-category-name="{{$subCategory->name}}" data-category-description="{{$subCategory->description}}" class="btn btn-link js-button-edit">{{__('Редактировать')}}</button>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#deleteCategory" data-category-id="{{$subCategory->id}}" class="btn btn-link js-button-delete">{{__('Удалить')}}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">{{__('Подкатегории отсутсвуют!')}}</div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    @include('modals.add_category')

    @include('modals.edit_category')

    @include('modals.delete_category')

@endsection
