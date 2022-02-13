
<style>
.card-job:hover::before {
  opacity: 1;
}
.card-job::before {
  inset: 0px;
  content: "";
  position: absolute;
  border-width: 2px;
  border-style: solid;
  border-image-slice: 1;
  border-image-source: linear-gradient(to left, #f44518, #9e9e9e);
  opacity: 0;
  transition: opacity 0.3s ease-in-out 0s;
}
</style>
<section id="jobs">
  <h3 class="d-none">Jobs Openings</h3>
  @if ($jobs = get_posts(['post_type' => 'job']))
    <div class="row">
      @foreach ($jobs as $job)
        <div class="col-lg-6 mb-5">
          <a href="{{ get_permalink($job->ID) }}" class="card card-job bg-secondary text-white">
            <div class="card-body">
              <div class="row">
                <div class="col-8">
                  <h4 class="mb-2">{{ $job->post_title }}</h4>
                  @php
                  $metadata = get_field('metadata', $job->ID);
                  @endphp
                  @foreach ($metadata as $meta)
                    <div>{{ $meta['value'] }}</div>
                  @endforeach
                </div>
                <div class="col-4 d-flex align-items-center">
                  @php
                  $date_stamp = strtotime($job->post_date);
                  $post_date = date('F jS, Y', $date_stamp);
                  @endphp               
                  {{ $post_date }}
                </div>  
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  @endif
</section>
