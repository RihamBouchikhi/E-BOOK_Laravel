@extends('layouts.app')

@section('content')
<style>
    .slideshow {
        margin: 0 auto;
        height: 400px;
        box-sizing: border-box;
    }

    .content {
        margin: auto;
        width: 190px;
        perspective: 1000px;
        position: relative;
        padding-top: 80px;
    }

    .content-carrousel {
        width: 100%;
        position: absolute;
        float: right;
        animation: rotar 15s infinite linear;
        transform-style: preserve-3d;
    }

    .content-carrousel:hover {
        animation-play-state: paused;
        cursor: pointer;
    }

    .content-carrousel figure {
        width: 100%;
        height: 120px;
        border: 1px solid #4d444d;
        overflow: hidden;
        position: absolute;
    }

    .content-carrousel figure:nth-child(1) {
        transform: rotateY(0deg) translateZ(300px);
    }

    .content-carrousel figure:nth-child(2) {
        transform: rotateY(40deg) translateZ(300px);
    }

    .content-carrousel figure:nth-child(3) {
        transform: rotateY(80deg) translateZ(300px);
    }

    .content-carrousel figure:nth-child(4) {
        transform: rotateY(120deg) translateZ(300px);
    }

    .content-carrousel figure:nth-child(5) {
        transform: rotateY(160deg) translateZ(300px);
    }

    .content-carrousel figure:nth-child(6) {
        transform: rotateY(200deg) translateZ(300px);
    }

    .content-carrousel figure:nth-child(7) {
        transform: rotateY(240deg) translateZ(300px);
    }

    .content-carrousel figure:nth-child(8) {
        transform: rotateY(2800deg) translateZ(300px);
    }

    .content-carrousel figure:nth-child(9) {
        transform: rotateY(320deg) translateZ(300px);
    }

    .shadow {
        position: absolute;
        box-shadow: 0px 0px 20px 0px #000;
        border-radius: 2px;
    }

    .content-carrousel img {
        image-rendering: auto;
        transition: all 30ms;
        width: 100%;
        height: 100%;
    }

    .content-carrousel img:hover {
        transform: scale(1.2);
        transition: all 300ms;
    }

    @keyframes rotar {
        from {
            transforam: rotatey(0deg);
        }

        to {
            transform: rotateY(360deg);
        }
    }
</style>
<div class="container-fluid">
    <div>
        <div class=" bg-light rounded-3 ">
            <div class="container-fluid text-center">
                <section class="slideshow">
                    <div class="content">
                        <div class="content-carrousel">
                            <figure class="shadow"><img src="/images/book.png"></figure>
                            <figure class="shadow"><img src="/images/book.png"></figure>
                            <figure class="shadow"><img src="/images/book.png"></figure>
                            <figure class="shadow"><img src="/images/book.png"></figure>
                            <figure class="shadow"><img src="/images/book.png"></figure>
                            <figure class="shadow"><img src="/images/book.png"></figure>
                            <figure class="shadow"><img src="/images/book.png"></figure>
                            <figure class="shadow"><img src="/images/book.png"></figure>
                            <figure class="shadow"><img src="/images/book.png"></figure>

                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class=" mb-4 bg-white rounded-3 ">
            <div class="container-fluid text-center py-4">
                <h3 class="display-6 fw-bold">Recommendations</h3>
                <div class="row">
                    @foreach($books as $book)
                    <div class="col-md-3 m-3">
                        <div class="card" style="width: 18rem;">
                            <img src="/images/book.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$book->name}}</h5>
                                <p class="card-text">descreption</p>
                                <a href="/home" type="button" class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                    </svg> Télécharger</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection