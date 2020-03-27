@include('basis.basis')
@yield('basis')
@yield('page_header')
Second Slider
@yield('end_page_header')
@yield('list_no_active_link')
{{ route('secondslider') }}
@yield('list_no_active')
Second Slider List
@yield('end_list_no_active')

@yield('list_active_link')
{{ route('secondslider-create') }}
@yield('list_active')
Create Second Slider
@yield('end_list_active')
@yield('start_code')

<div class="container"
     style="font-size: 16px">
    <div class="row">
        <form method="POST" action="{{route('post-update-secondslider', $data->id)}}" enctype="multipart/form-data">

            {{ csrf_field() }}



            <div class="col-md-12">
                <h4><strong>Background</strong></h4>
                <input type="file" class="input-lg col-md-10"name="background"placeholder="background"style="border: 2px solid gray">
            </div>

            <div class="col-md-12">
                <h4><strong>Img</strong></h4>
                <input type="file" class="input-lg col-md-10"name="img"placeholder="Img"style="border: 2px solid gray">
            </div>

            <div class="col-md-12">
                <h4><strong>Title</strong></h4>
                <input type="text" class="input-sm col-md-10 " value="{{ $data->title  }}" name="title" placeholder="title" style="border: 2px solid gray">
            </div>

            <div class="col-md-12">
                <h4><strong>Link Title</strong></h4>
                <input type="text" class="input-sm col-md-10 " value="{{ $data->link_title  }}" name="link_title" placeholder="title_link" style="border: 2px solid gray">
            </div>

            <div class="col-md-12">
                <h4><strong>Link</strong></h4>
                <input type="text" class="input-sm col-md-10 "value="{{ $data->link }}"  name="link" placeholder="link" style="border: 2px solid gray">
            </div>

            <div class="col-md-12">
                <h4><strong>Text</strong></h4>
                <input type="text" class="input-lg col-md-10" value="{{ $data->text }}" name="text"placeholder="text" style="border: 2px solid gray">
            </div>

            <div class="col-md-12">
                <h4><strong>Is visible</strong></h4>
                <select class="input-sm col-md-10 warning"value="{{ $data->is_visible  }}"style="border: 2px solid gray" name="is_visible">
                    <option>1</option>
                    <option>0</option>
                </select><br>
            </div>

            <div class="col-md-12">
                <h4><strong>Position</strong></h4>
                <input type="number" min="1" value="{{ $data->position  }}" class="input-lg col-md-2"name="position"placeholder="Position place"style="border: 2px solid gray">
            </div>

            <div class="col-md-4">
                <a href=""class="col-md-4"><button class="btn btn-primary col-md-12">Go!</button></a>
            </div>

        </form>
    </div>
</div>

@yield('menu_toggle')
@yield('last_scripts')
