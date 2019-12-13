@extends('Painel.Layout.index')
  @section('content')
<!-- content -->
  <section class="content">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Listagem</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="/Painel"> Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $product->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details:</strong>
                    {{ $product->detail }}
                </div>
            </div>
        </div>
  </section>
  @endsection
