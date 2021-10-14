@extends('admin.master-admin')
@section('page-css')
    <style>
        .error {
            float: left;
        }

        .x_title .alert-danger{
            color: #ffffff;
            background-color: rgba(232, 38, 16, 0.7);
            border-color: rgba(255, 22, 0, 0.7);
        }

        .success {
            color: #00A000;
        }
    </style>
@endsection
@section('breadcrumb')
    <div class="page-title">
        <div class="title_left">
            <h3>Admin | Event Page</h3>
        </div>
    </div>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <div class="col-md-12 col-sm-12"><h2>Form event</h2></div>
                    @if ($errors->any())
                        <div class="col-md-12 col-sm-12 alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="col-md-4 col-sm-4">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <form name="formCategory" method="post"
                          action="{{isset($item) ? route('updateEvent') : route('createEvent')}}">
                        @csrf
                        @if(isset($item))
                            <input type="hidden" name="id" value="{{$item->id}}">
                        @endif
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Name *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="name"
                                       value="{{ $item->name ?? request()->old('name') }}"
                                       class="form-control ">
                                @error('name')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Brand *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="brand"
                                       value="{{ $item->brand ?? request()->old('brand') }}"
                                       class="form-control ">
                                @error('brand')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Start date *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="datetime-local" name="startDate"
                                       value="{{isset($item) ? strftime('%Y-%m-%dT%H:%M:%S', strtotime($item->startDate)) : request()->old('startDate')}}"
                                       class="form-control ">
                                @error('startDate')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> End date *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="datetime-local" name="endDate"
                                       value="{{ isset($item) ? strftime('%Y-%m-%dT%H:%M:%S', strtotime($item->endDate)) : request()->old('endDate')}}"
                                       class="form-control ">
                                @error('endDate')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Portfolio *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="portfolio"
                                       value="{{$item->portfolio ?? request()->old('portfolio')}}"
                                       class="form-control ">
                                @error('portfolio')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Ticket price *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" name="ticketPrice"
                                       value="{{$item->ticketPrice ?? request()->old('ticketPrice')}}"
                                       class="form-control ">
                                @error('ticketPrice')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group item">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
                            <div class="col-md-6 col-sm-6 col-form-label">
                                <select name="status" class="form-control">
                                    <option value="1">Đang diễn ra</option>
                                    <option value="2">Sắp diễn ra</option>
                                    <option value="3">Đã diễn ra</option>
                                    <option value="0">Tạm hoãn</option>
                                </select>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <a class="btn btn-primary" style="color: white" href="{{route('events')}}">Cancel</a>
                                <button class="btn btn-primary" id="reset" type="reset">Reset</button>
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script>
        const reset = $('#reset');
        const name = $('input[name="name"]');
        const brand = $('input[name="brand"]');
        const startDate = $('input[name="startDate"]');
        const endDate = $('input[name="endDate"]');
        const portfolio = $('input[name="portfolio"]');
        const ticketPrice = $('input[name="ticketPrice"]');
        reset.on('click', function () {
            name.attr('value', '');
            brand.attr('value', '');
            portfolio.attr('value', '');
            ticketPrice.attr('value', '');
            startDate.attr('value', '');
            endDate.attr('value', '');
        })
    </script>
@endsection
