@php
$title="Thêm/Sửa Tin Tức";
@endphp

@extends('layouts.master-admin')


@section('css')
<style type="text/css">
    #container {
        width: 1000px;
        margin: 20px auto;
    }
    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 360px;
    }
    .ck-content .image {
        /* block images */
        max-width: 80%;
        margin: 20px auto;
    }
</style>
@stop

@section('content')
<form action="{{ route('news.add') }}" method="post" id="MyForm">
    <div class="row">
        <div class="col-md-8">
            
            {{ csrf_field() }}
            <div class="form-group">
                <label>Title:</label>
                <input type="text" name="id" hidden value="{{ ($newsItem != null)?$newsItem->id:'' }}">
                <input type="text" name="title" class="form-control" required value="{{ ($newsItem != null)?$newsItem->title:'' }}">
            </div>

            <div class="form-group">
                <textarea id="content" name="content" class="form-control" rows="10">
                    {{ ($newsItem != null)?$newsItem->content:'' }}
                </textarea>
            </div>

            <div class="form-group" style="margin-top:30px">
                <button class="btn btn-success">Save News</button>
                <a href="{{ route('product.index') }}">Back to list</a>
            </div>
        </div>
        <div class="col-md-4">

            <div class="form-group">
                <label>Thumbnail:</label>
                <button type="button" class="btn btn-warning" onclick="$('#upload_file').click()">Upload Photo</button>
                <input type="file" id="upload_file" hidden>
                <input type="text" id="thumbnail" name="thumbnail" class="form-control" required value="{{ ($newsItem != null)?$newsItem->thumbnail:'' }}">
                <img src="{{ ($newsItem != null)?$newsItem->thumbnail:'' }}" style="max-height: 260px;" id="thumbnail_img">
            </div>
            
        </div>
    </div>
</form>

@endsection
@section('js')
<script type="text/javascript">
    $(function() {
         CKEDITOR.replace('content');

         $('[name=thumbnail]').change(function(){
            $('#thumbnail_img').attr('src',$(this).val())
         })


         $('#upload_file').change(function(e){
            uploadFile(e,'thumbnail')
         })
    })
</script>
@stop
