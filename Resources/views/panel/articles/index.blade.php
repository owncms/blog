@extends('admin::layouts.default')
@section('admin::main')
    <div class="page-content__top"></div>
    <div class="page-content__container">
        <div class="container-fluid">
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title card-columns">
                        <div class="card-description">
                            <h2 class="card-label">Article list</h2>
                        </div>
                        <div class="card-buttons">
                            <a class="btn" href="{{ admin_route('blog.articles.create') }}">Add new</a>
                        </div>
                    </div>
                </div>
                <div class="card-body no-p-lr">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    @include('admin::panel.partials.filter-list')
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card card-model-data">
                                    <div class="card-header">
                                        @include('admin::panel.partials.model-search')
                                    </div>
                                    <div class="card-body">
                                        @include('blog::panel.partials.entity-items')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
