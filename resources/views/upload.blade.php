@extends('layouts.app')
@section('title', '- Create')
@section('content)
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Section Title -->
                    <div class="section-title text-white">
                        <h2>Upload Your Image</h2>
                    </div>
                    <!-- End Section Title -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <form action=""{{route('simpanupload')}}"" class="upload-form text-white">
                        @csrf
                        <div class="card mb-60">
                            <div class="card-body">
                                <div class="dropzone-wrap">

                                    <p>File types supported: JPG, PNG, SVG.
                                        Max size: 100 MB</p>

                                    <!-- Dropzone Start -->
                                    <div class="dropzone">
                                        <input type="file">
                                        <span class="upload-btn">
                                            <img src="assets/img/icons/plus.svg" class="svg" alt="">
                                        </span>
                                    </div>
                                    <!-- Dropzone End -->
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="upload-info">

                                    <h3>Upload Information</h3>
                                    <div class="form-group">
                                        <label for="name">Display Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Item Name ">
                                    </div>
                                    <div class="form-group">
                                        <div class="row justify-content-between">
                                            <label for="description" class="col-md-5">Description</label>
                                            <span class="info col-md-7 d-flex justify-content-md-end mb-3 mb-lg-0">Deskripsi 
                                                akan terlihat pada halaman detail gambar</span>
                                        </div>
                                        <textarea id="description" class="form-control"
                                            placeholder="Provide a detailed description of your item"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="row justify-content-between">
                                            <label id="description" name="description" class="col-md-5">Collection</label>
                                            <span class="info col-md-7 d-flex justify-content-md-end mb-3 mb-lg-0">
                                                Deskripsi akan terlihat pada halaman detail gambar</span>
                                    </div>
                                    <div class="form-group">
                                        <div class="row justify-content-between">
                                            <label for="category" class="col-md-5">Category</label>
                                            <span class="info col-md-7 d-flex justify-content-md-end mb-3 mb-lg-0">The
                                                Description will be include on the items details page</span>
                                        </div>
                                        <select id="category" class="form-control">
                                            <option></option>
                                            <option value="Art">Art</option>
                                            <option value="Memes">Memes</option>
                                            <option value="Anime">Anime</option>
                                            <option value="Sports">Sports</option>
                                            <option value="Animals">Animals</option>
                                            <option value="Plants">Plants</option>
                                        </select>
                                    </div>

                                    <input type="hidden" value="{{ Auth::user()->email }}" id="Email_of_user" name="Email_of_user" >
                                    <input type="hidden" value="{{ Auth::user()->name }}" id="Name_of_user" name="Name_of_user" >

                                    <!-- Upload -->
                                    <div class="form-group d-flex justify-content-end pt-2 mb-0">
                                        <button class="btn" type="submit"><img src="assets/img/icons/btn-save.svg"
                                                alt="" class="svg"> Create Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>
        <script type="text/javascript">
           function readURL(input) 
           {
            if (input.files && input.files[0]) 
                {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#blah')
                            .attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                    var x = document.getElementById("myDIV");
                    x.style.display = "none";
                    var y = document.getElementById("imagehid");
                    y.style.display = "block";
                }
            }
 
</script>
    </section>
@endsection
