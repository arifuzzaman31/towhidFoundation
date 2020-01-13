 <!-- Modal -->
 <div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="serviceModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <form>
      <div class="form-group">
        <!-- <label for="recipient-name" class="col-form-label"> :</label> -->
        <input type="text" class="form-control" name="name" id="recipient-name" placeholder="@lang('service.name')" required="">
    </div>
    <div class="form-group">
        <!-- <label for="reciept-phone" class="col-form-label"> : </label> -->
        <input type="text" class="form-control" name="phone" id="reciept-phone" placeholder="@lang('service.phone')" required="">
    </div>
    <div class="form-group">
        <!-- <label for="recipient-address" class="col-form-label"> :</label> -->
        <input type="text" class="form-control" name="address" id="recipient-address" placeholder="@lang('service.address')" required="">
    </div>
    <div class="form-group">
        <label for="recipient-message" class="col-form-label">@lang('service.details') :</label>
        <textarea class="form-control" rows="6" name="message" id="recipient-message"></textarea>
    </div>
</form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('service.close')</button>
    <button type="button" class="btn btn-primary submit-btn">@lang('service.send')</button>
</div>
</div>
</div>
</div>
<!--End Modal -->

<script type="text/javascript">

   var base_url = "{{ url('/') }}"+'/';

</script>

<script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}} "></script>
<script src="{{asset('assets/js/bootstrap.min.js')}} "></script>
<script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nav.js')}}"></script>
<script src="{{asset('assets/js/main.js')}} "></script>
<script src="{{asset('assets/js/custom.js')}} "></script>
@include('toastr.toastrjs')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script type="text/javascript">
  
$('#serviceModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('whatever')
  var title = button.data('title')
  var modal = $(this)
  modal.find('.modal-title').text("@lang('service.you') “"+title+"” @lang('service.title_part')").css('font-style','italic')
  
  $('.submit-btn').on('click',function(){
      var name    = modal.find('#recipient-name').val();
      var phone   = modal.find('#reciept-phone').val();
      var address = modal.find('#recipient-address').val();
      var message = modal.find('#recipient-message').val();
      
      if (name != '' && phone != '' && address != '') {
        $.ajax({
            url : 'send-user-request',
            type: 'POST',
            dataType: 'JSON',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data : {
                    'service_id': id,'name': name,'phone': phone,
                    'address': address,'message': message
                  },
            success: function(data){
                if (data.alertType == 'success') {
                  $('#serviceModal').modal('hide');
                  toastr.success(data.message);
                }else{
                  $('#serviceModal').modal('show');
                  toastr.error(data.message);
                }
              $('#serviceModal').reset();
              console.log(data.message);
            },
            error: function(data){
          
                console.log(data.message);
            }
        });
      }else{
        toastr.error("নাম, ফোন, ঠিকানা অত্যাবশ্যক।");
        $('#serviceModal').modal('show');
      }
  });
  modal.find('form').trigger('reset');
  // event.preventDefault();
})

$('#serviceModal').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
})
</script>

@stack('script')



</body>

</html>