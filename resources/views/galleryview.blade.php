<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/lightbox.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    </head>
<body>
<style type="text/css">
    #gallery-images img {
        width: 240px;
        height: 160px;
        border: 2px solid black;
        margin-bottom: 10px;

    }
    #gallery-images ul {
        margin: 0;
        padding: 0;

    }

    #gallery-images li {
        margin : 0;
        padding:0;
        list-style: none;
        float: left;
        padding-right: 10px;

    }
</style>

<div class="row">
    <div class="col-md-12">
        <h1>{{$gallery->name}}</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div id="gallery-images">
            <ul>
                @foreach($gallery->images as $image)
                    <li>
                        <a href="{{ url($image->file_path) }}" target="_blank">
                            <img src="{{ url($image->file_path) }}">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <form action="{{url('image/do-upload')}}"
        class="dropzone" id="addImages"
        >
        {{ csrf_field() }}
            <input type="hidden"  name="gallery_id" value="{{$gallery->id}}">
        </form>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <a href="{{url('brouwerij/gallerij')}}" class="btn btn-primary">Terug</a>
    </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
<script type="text/javascript">
    dropzone.options.addImages = {
        maxFileSize: 2,
        acceptedFiles: 'image/*',
        success: function(file, response){
            if (file.status == 'success'){
                handleDropzoneFileUpload.handleSucces(response);
            }
            else{
                handleDropzoneFileUpload.handleError(response);
            }
        }
    };

    var handleDropzoneFileUpload = {
        handleError: function(response){
            console.log(response);
        },

        handleSuccess: function(response){
            var imageList = $('#gallery-images ul');
            var imageSrc = baseUrl + '/' + response.file_path;
            $(imageList).append('<li><a href="'+ imageSrc + '"><img src="' + imageSrc + '"></a></li>')
        },
    };

    $(document).ready(function(){
        console.log('Document is ready');
    });
</script>
</body>
</html>