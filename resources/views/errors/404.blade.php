@extends('web.layouts.master')

@section('title', 'Bağlantı Bulunamadı.')

@section('content')

<section class="pb-0 d-table bg-half-170 w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="title-heading text-center mt-4 mt-md-5 pt-md-5 welcome">
                    <h1 class="heading mb-3 text-success">404!</h1>
                    <p class="para-desc mx-auto text-muted">Böyle bir bağlantı bulunamadı.</p>
                    <p class="para-desc mx-auto text-muted small">
                        Bağlantının oluşturulmasının üzerinden 7 gün geçtiyse<br> bağlantınız silinmiş olabilir.
                    </p>
                    <p class="para-desc mx-auto text-muted mt-4 mb-4 pt-4 pb-4">
                        <a href="{{ route('homepage') }}" class="btn btn-outline-light font-weight-light">siteyi görüntüle</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
