@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Blog
            <small>Edit Categorie</small>
          </h1>
          <ol class="breadcrumb">
            <li>
              <a href="{{ url('/home')}}"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
              <li class="active">
                <a href="{{ route('admin.index') }}"> Blog </a>
                <li class="active">Edit categorie</li>
              </li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                    <div class="box-content">
                            {!! Form::model($categorie, [

                                'method' => 'PUT',
                                'route' => ['admin.categories.update', $categorie->id]

                            ]) !!}

                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                {!! Form::label('name') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}

                                @if($errors->has('name'))
                                 <span class="help-block">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                                {!! Form::label('slug') !!}
                                {!! Form::textarea('slug', null, ['class' => 'form-control']) !!}

                                @if($errors->has('slug'))
                                 <span class="help-block">{{ $errors->first('slug') }}</span>
                                @endif
                           </div>

                              <hr>

                            {!! Form::submit('Update categorie', ['class' => 'btn btn-primary']) !!}

                            {!! Form::close() !!}
                    </div>
                </div>
                <!-- /.box -->
              </div>
            </div>
          <!-- ./row -->
        </section>
        <!-- /.content -->
      </div>
@endsection
