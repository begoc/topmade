<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">{{$clients->title}}</h2>
                <h3 class="section-subheading text-muted">{{$clients->header}}</h3>
            </div>
        </div>
        {!!$clients->content!!}
    </div>
</section>