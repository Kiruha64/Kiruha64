@include('basis.basis')
@yield('basis')
@yield('page_header')

Portfolio

@yield('end_page_header')

@yield('list_no_active_link')
{{-- LInk to--}}{{ route('all-portfolio') }}
@yield('list_no_active')
{{-- Name --}}All Portfolio
@yield('end_list_no_active')

@yield('list_no_active_link')
{{-- LInk to--}}{{ route('create-portfoliofile') }}
@yield('list_no_active')
{{-- Name --}}Create new Portfolio file
@yield('end_list_no_active')

@yield('list_active_link')
{{-- LInk to--}}{{ route('create-portfolio') }}
@yield('list_active')
{{-- Name --}}Create new Portfolio Name
@yield('end_list_active')


@yield('start_code')
{{-- Your code--}}
        <div class="container"
             style="font-size: 16px">
            <div class="row">
                <form method="POST" action="{{route('post-update-portfolio', $data->id)}}" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <div class="col-md-12">
                        <h4><strong>Alias</strong></h4>
                        <input type="text" class="input-sm col-md-10 " value="{{ $data->alias }}" name="alias" placeholder="alias" style="border: 2px solid gray">
                    </div>

                    <div class="col-md-12">
                        <h4><strong>Name</strong></h4>
                        <input type="text" class="input-lg col-md-10" value="{{ $data->name }}" name="name"placeholder="name" style="border: 2px solid gray">
                    </div>




                    <div class="col-md-12">
                        <h4><strong>Is active</strong></h4>
                        <select class="input-sm col-md-10 warning" style="border: 2px solid gray" name="is_active">
                            <option>1</option>
                            <option>0</option>
                        </select><br>
                    </div>


                    {{--                            <div class="col-md-12">--}}
                    {{--                                <h4><strong>Position</strong></h4>--}}
                    {{--                                <input type="number" min="1" class="input-lg col-md-2"name="position"placeholder="Position place"style="border: 2px solid gray">--}}
                    {{--                            </div>--}}

                    <div class="col-md-4">
                        <a href=""class="col-md-4"><button class="btn btn-success col-md-12">Create</button></a>
                    </div>

                </form>
            </div>
        </div>

        @yield('menu_toggle')
        @yield('last_scripts')










