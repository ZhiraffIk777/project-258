@extends('templates/header-without-footer')
@section('content')
<!-- User Area -->
<div class="user-area pt-100 pb-70">
    <div class="container">
        <div class="user-width">
            <div class="user-form">
                <div class="contact-form">
                    <h2>Рекдактировать товар {{$product->name}}</h2>
                    <form method="POST" action="/updateProduct/{{$product->id}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required placeholder="Название" value="{{$product->name}}">
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="form-group">
                                    <textarea type="text" name="description" class="form-control" required placeholder="Описание">{{$product->description}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="form-group">
                                    <input type="text" name="cost" class="form-control" required placeholder="Цена" value="{{$product->cost}}">
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="form-group">
                                    <input type="text" name="preview" class="form-control" required placeholder="Превью" value="{{$product->preview}}">
                                </div>
                            </div>

                            <div class="col-lg-12 ">
                                <button type="submit" class="default-btn btn-bg-three">
                                    Изменить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- User Area End -->
@endsection
