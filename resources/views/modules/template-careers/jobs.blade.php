
<section id="jobs">
  <h3 class="text-primary mb-4">Job Openings</h3>
  @if ($jobs = get_posts(['post_type' => 'job']))
    <div class="row">
      @foreach ($jobs as $job)
        <div class="col-lg-6 mb-5">
          <a href="{{ get_permalink($job->ID) }}" class="card card-job bg-secondary text-white">
            <div class="card-body">
              @php
              $less_month_ago = time() < strtotime($job->post_date . ' +1 month');
              @endphp
              @if ($less_month_ago)
                <span class="badge badge-new">New</span>
              @endif
              <div class="row">
                <div class="col-8">
                  <h4 class="mb-2">{{ $job->post_title }}</h4>
                  @php
                  $metadata = get_field('metadata', $job->ID);
                  @endphp
                  @foreach ($metadata as $meta)
                    <div class="text-gray">{{ $meta['value'] }}</div>
                  @endforeach
                </div>
                <div class="col-4 d-flex align-items-center justify-content-end">
                  @php
                  $date_stamp = strtotime($job->post_date);
                  $post_date = date('F jS, Y', $date_stamp);
                  @endphp
                  <small>{{ $post_date }}</small>
                </div>  
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  @endif
</section>
