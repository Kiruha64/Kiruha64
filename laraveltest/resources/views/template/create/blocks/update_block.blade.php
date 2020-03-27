@include('basis.basis')
@yield('basis')
@yield('page_header')

Blocks

@yield('end_page_header')

@yield('list_no_active_link')
{{-- LInk to--}}{{ route('blocks') }}
@yield('list_no_active')
{{-- Name --}}All Blocks
@yield('end_list_no_active')

@yield('list_active_link')
{{-- LInk to--}}{{ route('blocks-create') }}
@yield('list_active')
{{-- Name --}}Create new Blocks
@yield('end_list_active')


@yield('start_code')
{{-- Your code--}}
        <div class="container"
             style="font-size: 16px">
            <div class="row">
                <form method="POST" action="{{route('post-update-blocks', $data->id)}}" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label> Type </label>
                        <select class="selectpicker" data-live-search="true" name="page_id" >

                            @foreach($pages as $page)
                                <option value="{{ $page->id }}">{{ $page->alias }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="col-md-12">
                        <h4><strong>Img</strong></h4>
                        <input type="file" class="input-lg col-md-10"name="img" value="" placeholder="Img"style="border: 2px solid gray">
                    </div>

                    <div class="col-md-12 container-fluid">
                        <img class="col-md-10" src="{{ asset('storage/'.$data->img) }}">
                    </div>


                    <div class="col-md-12">
                        <h4><strong>Title</strong></h4>
                        <input type="text" class="input-sm col-md-10 "name="title" value="{{ $data->title }}" placeholder="Title" style="border: 2px solid gray">
                    </div>

                    <div class="col-md-12">
                        <h4><strong>Description</strong></h4>
                        <input type="text" class="input-lg col-md-10" value="{{ $data->description }}" name="description"placeholder="Description" style="border: 2px solid gray">
                    </div>

                    <div class="col-md-12">
                        <h4><strong>Short Description</strong></h4>
                        <input type="text" class="input-lg col-md-10" value="{{ $data->short_description }}" name="short_description"placeholder="short_description" style="border: 2px solid gray">
                    </div>

                    <div class="col-md-12">
                        <h4><strong>Link Title</strong></h4>
                        <input type="text" class="input-lg col-md-10" value="{{ $data->link_title }}" name="link_title"placeholder="link title"style="border: 2px solid gray">
                    </div>

                    <div class="col-md-12">
                        <h4><strong>Link</strong></h4>
                        <input type="text" class="input-lg col-md-10" value="{{ $data->link }}" name="link"placeholder="Link"style="border: 2px solid gray">
                    </div>

                    <div class="col-md-12">
                        <h4><strong>Is visible</strong></h4>
                        <select class="input-sm col-md-10 warning" style="border: 2px solid gray" name="is_visible">
                            <option>1</option>
                            <option>0</option>
                        </select><br>
                    </div>

                    <div class="col-md-12">
                        <h4><strong>Position</strong></h4>
                        <input type="number" min="1" class="input-lg col-md-2" value="{{ $data->position }}" name="position"placeholder="Position place"style="border: 2px solid gray">
                    </div>

                    <div class="col-md-4">
                        <a href=""class="col-md-4"><button class="btn btn-success col-md-12">Create</button></a>
                    </div>


                </form>
            </div>
        </div>



        @yield('menu_toggle')
        @yield('last_scripts')










