<section id="activities" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">{{$activities->title}}</h2>
                <h3 class="section-subheading text-muted">{{$activities->header}}</h3>
            </div>
        </div>
        <div class="row text-center show-grid">
            {!!$activities->content!!}
        </div>
    </div>
</section>