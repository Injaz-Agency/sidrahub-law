@extends('client.layouts.master')
@section('main_css')
    <link rel="stylesheet" href="{{asset('css/timeline.css')}}">
    <link rel="stylesheet" href="{{asset('css/client/timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/client/card.css')}}">
@endsection
@section('main_content')
    <section class="content">
        <div class="card m-card">
            <div class="card-header m-card__header">
                <h2 class="m-card__title">Order: <i class="fa-regular fa-folder-open"></i> {{$order?->id}}
                    <span>{{$order?->service?->name}}</span></h2>
            </div>
            <div class="card-body">
                <nav>
                    <div class="nav nav-tabs m-nav" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link m-nav__link {{!request()->has('ref')?'active':''}}"
                           id="nav-basic-tab" data-toggle="tab"
                           href="#nav-basic"
                           role="tab" aria-controls="nav-basic" aria-selected="true">Order</a>
                        <a class="nav-item nav-link m-nav__link" id="nav-subscription-tab" data-toggle="tab"
                           href="#nav-subscription" role="tab" aria-controls="nav-subscription" aria-selected="true">
                            Subscription</a>
                        <a class="nav-item nav-link m-nav__link {{request()->has('ref')?'active':''}}"
                           id="nav-timeline-tab" data-toggle="tab"
                           href="#nav-timeline" role="tab" aria-controls="nav-timeline" aria-selected="true">
                            Timeline</a>
                        <a class=" nav-link m-nav__link" href="{{route('client.order-timeline.create',[$order])}}">Send to
                            Timeline</a>
                    </div>
                </nav>
                <div class="m-form">
                    <div class="tab-content m-form__container" id="nav-tabContent">
                        <div class="tab-pane {{!request()->has('ref')?'show active':''}}" id="nav-basic" role="tabpanel"
                             aria-labelledby="nav-basic-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <x-dashboard.input name="disabled[service_id]"
                                                       :value="$order->service?->name"
                                                       label='<i class="fa-regular fa-folder-open"></i> Service'
                                                       placeholder="Service"
                                                       disabled/>
                                </div>
                                <div class="col-md-6">
                                    <x-dashboard.input name="disabled[package]"
                                                       :value="$order->package?->name"
                                                       label='<i class="fa-solid fa-box-archive"></i> Package'
                                                       placeholder="Package"
                                                       disabled/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <x-dashboard.input name="disabled[client]"
                                                       :value="$order->client?->name"
                                                       label='<i class="fa-solid fa-user"></i> Client'
                                                       placeholder="Client"
                                                       disabled/>
                                </div>
                                <div class="col-md-3">
                                    <x-dashboard.input name="disabled[created_date]"
                                                       :value="$order->created_at?->format('Y-m-d H:i')"
                                                       label='<i class="fa-solid fa-calendar-check"></i> Creation Date'
                                                       placeholder="Creation Date"
                                                       disabled/>
                                </div>
                                <div class="col-md-3">
                                    <x-dashboard.input name="disabled[paid]"
                                                       :value="$order->paid['str']"
                                                       label='<i class="fa-solid fa-credit-card"></i> Paid Status'
                                                       placeholder="Paid Status"
                                                       disabled/>
                                </div>
                                <div class="col-md-3">
                                    <x-dashboard.input name="main[status]"
                                                       :value="$order->status"
                                                       label='<i class="fa-solid fa-chart-simple"></i> Status'
                                                       placeholder="Status"
                                                       disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="nav-subscription" role="tabpanel"
                             aria-labelledby="nav-subscription-tab">

                            <div class="row">
                                <div class="col-md-4">
                                    <x-dashboard.input name="disabled[price]"
                                                       :value="$order?->subscription?->price"
                                                       label='<i class="fa-solid fa-credit-card"></i> Price'
                                                       placeholder="Price"
                                                       disabled/>
                                </div>
                                <div class="col-md-4">
                                    <x-dashboard.input name="disabled[transaction_id]"
                                                       :value="$order?->subscription?->transition_id"
                                                       label='<i class="fa-solid fa-id-badge"></i> Transaction NO'
                                                       placeholder="Transaction NO"
                                                       disabled/>
                                </div>
                                <div class="col-md-4">
                                    <x-dashboard.input name="disabled[transaction_by]"
                                                       :value="$order?->subscription?->transaction_by"
                                                       label='<i class="fa-solid fa-layer-group"></i> Transaction By'
                                                       placeholder="Transaction By"
                                                       disabled/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <x-dashboard.input name="disabled[start_at]"
                                                       :value="$order?->subscription?->start_at?->format('Y-m-d')"
                                                       label="Start From"
                                                       placeholder="Start From"
                                                       disabled/>
                                </div>
                                <div class="col-md-4">
                                    <x-dashboard.input name="disabled[end_at]"
                                                       :value="$order?->subscription?->end_at?->format('Y-m-d')"
                                                       label="End At"
                                                       placeholder="End At"
                                                       disabled/>
                                </div>
                                <div class="col-md-4">
                                    <x-dashboard.input name="disabled[created_at]"
                                                       :value="$order?->subscription?->created_at?->format('Y-m-d')"
                                                       label="Creation Date"
                                                       placeholder="Creation Date"
                                                       disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane {{request()->has('ref')?'show active':''}}" id="nav-timeline"
                             role="tabpanel"
                             aria-labelledby="nav-timeline-tab">
                            @include('layouts.timeline',['order'=>$order,'for'=>'client'])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="{{\App\Src\CDN::J_Query()?->js}}"></script>
    <script src="{{\App\Src\CDN::bootstrap()?->js}}"></script>
@endpush
