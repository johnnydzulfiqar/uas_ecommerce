@extends('layout.master')
@section('judul')
Show
@endsection
@section('content')
<main style="margin-top: 70px">
    <div class="container">
        @if (count($errors) > 0)
<div class="alert alert-danger">
<b>Perhatian</b>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
        <div class="container-fluid">
            
                <div class="d-md-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Kategori {{ $admin->kategori_produk }}</h5>

                   
                </div>
            
                <div class="card border-0 rounded p-4 shadow mt-4">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-5">
                            <div class="mb-3 row">
                                <label for="foto_produk" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-5">
                                @if(!empty(@$admin->foto_produk))
                                <img src="{{ $admin->foto_produk }}" class="mb-3" alt="foto" width="240px" />
                                @endif    
                                </div>
                            </div>
                            
                        </div><!--end col-->
    
                        <div class="col-lg-8 col-md-7 mt-4 mt-sm-0">
                            <div class="section-title ms-md-4">
                                <h5>{{ $admin->nama_produk }}</h5>
                                <div class="d-md-flex justify-content-between align-items-center">
                                    <h6 class="text-muted mb-0">Rp. {{ $admin->harga_produk }} </h6>
                                    
                                    <ul class="list-unstyled text-warning h6 mb-0 mt-2 mt-sm-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <h5 class="mt-4">Overview :</h5>
                                <p class="text-muted">{{ $admin->deskripsi_produk }}</p>
                            
                                <ul class="list-unstyled text-muted">
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span> Digital Marketing Solutions for Tomorrow</li>
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span> Our Talented &amp; Experienced Marketing Agency</li>
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span> Create your own skin to match your brand</li>
                                </ul>
    
                                <div class="row mt-4">
                                    <div class="col-lg-6 col-12">
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0">Your Size:</h6>
                                            <ul class="list-unstyled mb-0 ms-3">
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">S</a></li>
                                                <li class="list-inline-item ms-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">M</a></li>
                                                <li class="list-inline-item ms-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">L</a></li>
                                                <li class="list-inline-item ms-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">XL</a></li>
                                            </ul>
                                        </div>
                                    </div><!--end col-->
    
                                    <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                                        <div class="d-flex shop-list align-items-center">
                                            <h6 class="mb-0">Quantity: {{ $admin->stok }}</h6>
                                            
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
    
                                {{-- <div class="mt-4">
                                    <a href="javascript:void(0)" class="btn btn-primary">Shop Now</a>
                                    <a href="shop-cart.html" class="btn btn-soft-primary ms-2">Add to Cart</a>
                                </div> --}}
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>

                <div class="row">
                    <div class="col-12 mt-4">
                        <ul class="nav nav-pills shadow flex-column flex-sm-row d-md-inline-flex mb-0 p-1 bg-white-color rounded position-relative overflow-hidden" id="pills-tab" role="tablist">
                            <li class="nav-item m-1">
                                <a class="nav-link py-2 px-5 active rounded" id="description-data" data-bs-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="false">
                                    <div class="text-center">
                                        <h6 class="mb-0">Description</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item m-1">
                                <a class="nav-link py-2 px-5 rounded" id="additional-info" data-bs-toggle="pill" href="#additional" role="tab" aria-controls="additional" aria-selected="false">
                                    <div class="text-center">
                                        <h6 class="mb-0">Additional Information</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->

                            <li class="nav-item m-1">
                                <a class="nav-link py-2 px-5 rounded" id="review-comments" data-bs-toggle="pill" href="#review" role="tab" aria-controls="review" aria-selected="false">
                                    <div class="text-center">
                                        <h6 class="mb-0">Review</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                        </ul>
                        
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <div class="card border-0 tab-pane fade show active p-4 rounded shadow" id="description" role="tabpanel" aria-labelledby="description-data">
                                <p class="text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page (layout or type area). For this reason, dummy text usually consists of a more or less random series of words or syllables.</p>
                            </div>

                            <div class="card border-0 tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-info">
                                <table class="table p-4 rounded shadow">
                                    <tbody>
                                        <tr>
                                            <td style="width: 100px;">Color</td>
                                            <td class="text-muted">Red, White, Black, Orange</td>
                                        </tr>

                                        <tr>
                                            <td>Material</td>
                                            <td class="text-muted">Cotton</td>
                                        </tr>

                                        <tr>
                                            <td>Size</td>
                                            <td class="text-muted">S, M, L, XL, XXL</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="card border-0 tab-pane fade p-4 rounded shadow" id="review" role="tabpanel" aria-labelledby="review-comments">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="media-list list-unstyled mb-0">
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <a class="pe-3" href="#">
                                                            <img src="assets/images/client/01.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                        </a>
                                                        <div class="flex-1 commentor-detail">
                                                            <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">Lorenzo Peterson</a></h6>
                                                            <small class="text-muted">15th August, 2019 at 01:25 pm</small>
                                                        </div>
                                                    </div>
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="mt-3">
                                                    <p class="text-muted fst-italic p-3 bg-light rounded">" Awesome product "</p>
                                                </div>
                                            </li>
            
                                            <li class="mt-4">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <a class="pe-3" href="#">
                                                            <img src="assets/images/client/02.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                        </a>
                                                        <div class="flex-1 commentor-detail">
                                                            <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading text-dark">Tammy Camacho</a></h6>
                                                            <small class="text-muted">15th August, 2019 at 05:44 pm</small>
                                                        </div>
                                                    </div>
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="mt-3">
                                                    <p class="text-muted fst-italic p-3 bg-light rounded mb-0">" Good "</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!--end col-->

                                    <div class="col-lg-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                        <form class="ms-lg-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5>Add your review:</h5>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <h6 class="small fw-bold">Your Rating:</h6>
                                                    <a href="javascript:void(0)" class="d-inline-block me-3">
                                                        <ul class="list-unstyled mb-0 small">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                        </ul>
                                                    </a>

                                                    <a href="javascript:void(0)" class="d-inline-block me-3">
                                                        <ul class="list-unstyled mb-0 small">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                        </ul>
                                                    </a>

                                                    <a href="javascript:void(0)" class="d-inline-block me-3">
                                                        <ul class="list-unstyled mb-0 small">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                        </ul>
                                                    </a>

                                                    <a href="javascript:void(0)" class="d-inline-block me-3">
                                                        <ul class="list-unstyled mb-0 small">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                        </ul>
                                                    </a>

                                                    <a href="javascript:void(0)" class="d-inline-block">
                                                        <ul class="list-unstyled mb-0 small">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <div class="mb-3">
                                                        <label class="form-label">Your Review:</label>
                                                        <div class="form-icon position-relative">
                                                            <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                            <textarea id="message" placeholder="Your Comment" rows="5" name="message" class="form-control ps-5" required=""></textarea>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
            
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Name <span class="text-danger">*</span></label>
                                                        <div class="form-icon position-relative">
                                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                                            <input id="name" name="name" type="text" placeholder="Name" class="form-control ps-5" required="">
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
            
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                        <div class="form-icon position-relative">
                                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                                            <input id="email" type="email" placeholder="Email" name="email" class="form-control ps-5" required="">
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
            
                                                <div class="col-md-12">
                                                    <div class="send d-grid">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </form><!--end form-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->

@endsection