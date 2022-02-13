
<section id="jobs">
  <div class="container">
    <h3 class="d-none">Jobs Openings</h3>
    @if ($jobs = get_posts(['post_type' => 'jobs']))
      <div class="row">
        @foreach ($jobs as $job)
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card card-job">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h4>{TITLE}</h4>
                    {LOCATION}
                    <br/>
                    {TYPE}
                    <br/>
                    {DATE}
                  </div>
                  <div class="col-4">
                  </div>  
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endif
  </div>
</section>
