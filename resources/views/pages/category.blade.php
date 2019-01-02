@extends('layouts.app')

@section('main-row')
    @include('inc.sideArea')
    <div class="col-md-8" id="main-category">
        <div id="category-header">
            <h4>Category</h4>
        </div>

        <div id="category-container">
            <div id="category-form">
                {!! Form::open(['route' =>"category.add", 'method'=> 'POST']) !!}

                {!! Form::label('categoryName', 'Name') !!}

                {!! Form::text('categoryName', '',['class'=>'form-control','placeholder'=>'Category Name']) !!}

                {!! Form::submit('addCategory',['class'=>'btn btn-success btn-block']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection