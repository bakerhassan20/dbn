@extends('layouts.backend.app')
@section('title', 'Projects')
@section('content')


<style>
.item{
  padding-bottom: 10px !important;
    margin-top: 5px !important;

}


.mw-900px {
    max-width: 670px!important;
}
</style>



    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">


            <!--begin::Tables Widget 11-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">{{ __('messages.Join Us List') }}</span>
                     </h3>
                    <div class="card-toolbar">

                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bolder text-muted bg-light">
                                    <th class="min-w-125px">{{ __('messages.Name') }}</th>
                                    <th class="min-w-150px">{{ __('messages.Email') }}</th>
                                    <th class="min-w-125px">{{ __('messages.Position') }}</th>
                                    <th class="min-w-125px">{{ __('messages.Preferred') }}</th>
                                    <th class="min-w-150px">{{ __('messages.Message') }}</th>
                                    <th class="min-w-150px">{{ __('messages.Created at') }}</th>
                                    <th class="min-w-100px"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                            @foreach ( $joins as $join)


                                <tr>

                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="d-flex justify-content-center flex-column">
                                                <p class="text-dark fw-bolder text-hover-primary fs-6">{{ $join->name }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                      <p class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $join->email }}</p>
                                    </td>
                                    <td>
                                     <p class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $join->position }}</p>
                                    </td>
                                    <td>
                                    <p class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $join->preferred }}</p>
                                    </td>
                                    <td>
                                    <p class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $join->message }}</p>
                                    </td>
                                      <td>
                                      <p class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $join->created_at }}</p>
                                    </td>
                                    <td class="">

                               <a href="#" class="button2" data-bs-toggle="modal"                 data-bs-target="#join_view"tabindex="0"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 showModal"
                                            data-id="{{ $join->id }}"
                                            data-name="{{ $join->name }}"
                                            data-email="{{ $join->email }}"
                                            data-position="{{ $join->position }}"
                                            data-preferred="{{ $join->preferred }}"
                                            data-message="{{ $join->message }}"
                                            data-file="{{ $join->file }}" >
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                            <span class="svg-icon svg-icon-3 btn btn-bg-light">
                                           	<i class="bi bi-eye fs-2"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                         @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--begin::Body-->
            </div>
            <!--end::Tables Widget 11-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->


     <div class="modal fade" id="join_view" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Job View</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16"
                                    height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                    fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2"
                                    rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-lg-10 px-lg-10 container-fluid">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills stepper-column row"
                        id="kt_modal_create_app_stepper">
                        <!--begin::Aside-->
                        <div class=" justify-content-center justify-content-xl-start   "style="height:260px;">

                                  <div class="row item ">
                                 <div class="col-3">
                                    <h6 class="text-muted">Name<h6>
                                 </div>
                                  <div class="col"style="margin-left:10px;">
                                    <h6 id="name"><h6>
                                 </div>
                                  </div>

                                <div class="row item">
                                 <div class="col-3">
                                    <h6 class="text-muted">Email<h6>
                                 </div>
                                  <div class="col"style="margin-left:10px;">
                                    <h6 id="email"><h6>
                                 </div>
                                  </div>



                            <div class="row item">
                                 <div class="col-3 ">
                                    <h6 class="text-muted">Position<h6>
                                 </div>
                                  <div class="col"style="margin-left:10px;">
                                    <h6 id="position"><h6>
                                 </div>
                                  </div>



                            <div class="row item">
                                 <div class="col-3">
                                    <h6 class="text-muted">Preferred<h6>
                                 </div>
                                  <div class="col "style="margin-left:10px;">
                                    <h6 id="preferred"><h6>
                                 </div>
                                  </div>


                                   <div class="row item">
                                 <div class="col-3">
                                    <h6 class="text-muted">Message<h6>
                                 </div>
                                  <div class="col "style="margin-left:10px;">
                                    <h6 id="message"><h6>
                                 </div>
                                  </div>




                        </div>

                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->

                      <a id="file" href="{{URL::asset('SocialIS.pdf')}}"class="btn btn-primary"style="margin-left: 240px;" download="SocialIS">Download</a>

                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
@endsection

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<script>


 	$(document).ready(function(){
  		$("#join_view").modal({
  			keyboard: true,
  			backdrop: "static",
  			show: false,

  		}).on("show.bs.modal", function(event){
  		    var button = $(event.relatedTarget);
  			var id = button.data("id");
            var name = button.data("name");
            var email = button.data("email");
            var position = button.data("position");
            var preferred =  button.data("preferred");
            var message = button.data("message");
            var file = button.data("file");

            $('#name').html(name);
            $('#email').html(email);
            $('#position').html(position);
            $('#preferred').html(preferred);
            $('#message').html(message);
            var link ="/uploads/jops/join/"+file;
           $('#file').attr("href",link);
           $('#file').attr("download",name);


  		});
  	});
  	</script>

</script>
 @endsection

