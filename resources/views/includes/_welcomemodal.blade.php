{{-- <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" id="myModal" aria-hidden="true" style="display: none;">
    <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table pricing-table--popular wow move-up">
        <div class="pricing-table__inner">
            <div class="pricing-table__feature-mark">
                <span>Popular Choice</span>
            </div>
            <div class="pricing-table__header">
                <h6 class="sub-title">Professional</h6>
                <div class="pricing-table__image">
                    <img src="assets/images/icons/mitech-pricing-box-icon-02-88x88.png" class="img-fluid" alt="">
                </div>
                <div class="pricing-table__price-wrap">
                    <h6 class="currency">$</h6>
                    <h6 class="price">59</h6>
                    <h6 class="period">/mo</h6>
                </div>
            </div>
            <div class="pricing-table__body">
                <div class="pricing-table__footer">
                    <a href="#" class="ht-btn  ht-btn-md ">Get started</a>
                </div>
                <ul class="pricing-table__list text-left">
                    <li>Unlimited project</li>
                    <li>Power And Predictive Dialing</li>
                    <li>Quality &amp; Customer Experience</li>
                    <li>24/7 phone and email support</li>
                </ul>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="modal modal-dialog modal-dialog-centered modal-dialog-scrollable" id="myModal" role="modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> --}}

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="border: 0 solid transparent; box-shadow: 0 0 30px 5px rgba(0, 0, 0, 0.07);">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-content-center">
                <h4 class="modal-title" id="myModalLabel">Admission in Progress!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p class="text" style="font-size: 14px;">The Admission to the new session has commenced.</p>
                <p class="text" style="font-size: 14px;">For details about the entrance examination dates, please go to the <a href="{{ route('frontend.event') }}">events page</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="ht-btn btn--white ht-btn-xs" data-dismiss="modal">I know</button>
                <a href="{{ route('frontend.event') }}" class="ht-btn btn-primary ht-btn-xs">
                    Go to Events page
                    <span class="btn-icon"><i class="far fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>