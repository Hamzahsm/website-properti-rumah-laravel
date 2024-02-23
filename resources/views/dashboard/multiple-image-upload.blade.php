@extends('layouts.dashboard')
@section('content')
<!-- image preview style -->
<style>
    .imgPreview iimg {
        padding: 8px;
        max-width: 100px;
    }
</style>
    <section class="section dashboard">
        <!-- form start here -->
        <p>Test Upload Multiple Images</p>
        <form action="{{ route('store.multiple.images') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="user-image mb-3 text-center"> <!-- image preview div -->
                <div class="imgPreview"></div>
            </div>

            <div class="mb-3">
                <input type="text" name="name" placeholder="name" class="form-control">
            </div>

            <div class="custom-file">
                <input type="file" name="images[]" class="custom-file-input" id="images" multiple="multiple"> <!-- make sure add [] to name -->
                <label for="images" class="custom-file-label"></label>
            </div>

            <button class="btn btn-primary btn-block mt-4" type="submit" name="submit">
                Upload Images
            </button>
        </form>

        <!-- displaying data -->
        <div class="mt-5">
            <div class="table">
                <table class="table table-bordered">
                    <tbody>
                        @foreach ($images as $image)
                            <tr>
                                <th>{{ $image->name }}</th>
                                <td>
                                    @foreach ($image->images as $item)
                                        <a href="{{ asset('/storage/') . '/' . $item }}">
                                            <img src="{{ asset('/storage/') . '/' . $item }}" alt="multiple-image" width="100" height="100">
                                        </a>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>



    <!-- script custom -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- jquery -->
    <script>
        $(function(){
            //multiple images preview with Javascript
            var multiImgPreview = function(input, imgPreviewPlaceholder) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for(i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('#images').on('change', function(){
                multiImgPreview(this, 'div.imgPreview');
            });
        });
    </script>
@endsection