<section id="company">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">{{$company->title}}</h2>
                <h3 class="section-subheading text-muted">{{$company->header}}</h3>
            </div>
        </div>
        <div class="row">
            {!! $company->content !!}
        </div>
    </div>
</section>