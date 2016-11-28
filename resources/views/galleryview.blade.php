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
        /*border: 2px solid black;*/
        margin-bottom: 10px;
        box-shadow: 0px 0px 5px 1px #161718;

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
    #gallery-images{
        padding-left: 17px;

    }
    #dropzone{
        padding-left: 30px;
        padding-right: 30px;
    }
    #addImages:hover{
        -webkit-transition:0.5s ease;
        -moz-transition:0.5s ease;
        -o-transition:0.5s ease;
        -ms-transition:0.5s ease;
        transition:0.5s ease;
        box-shadow: 0px 0px 5px 1px #161718;
    }
    #backButton{
        padding-left: 30px;
        padding-top: 20px;
    }
    #backButtonHover:hover{
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    }
    #galleryTitle h1{
        font-family: Chalkboard;
        margin-left: 17px;
    }
    #dropzoneTitle{
        font-family: Chalkboard;
        margin-left: 17px;
    }

</style>

<div class="row">
    <div class="col-md-12" id="galleryTitle">
        <h1>Gallery: {{$gallery->name}}</h1>
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
<hr/>
<h1 id="dropzoneTitle">Bestanden toevoegen</h1>
<div class="row">
    <div class="col-md-12" id="dropzone">
        <form action="{{url('image/do-upload')}}"
        class="dropzone" id="addImages"
        >
        {{ csrf_field() }}
            <input type="hidden"  name="gallery_id" value="{{$gallery->id}}">
        </form>
    </div>
</div>

<div class="row">
    <div class="col-md-12" id="backButton">
        <a href="{{url('brouwerij/gallerij')}}" class="btn btn-primary" id="backButtonHover">Terug</a>
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