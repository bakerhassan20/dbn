@extends('layouts.backend.app')
@section('title', 'Projects')
@section('content')


<style>

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
                        <span class="card-label fw-bolder fs-3 mb-1">{{ __('messages.Contact Us') }}</span>
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
                                    <th class="min-w-125px">{{__('messages.First Name')}}</th>
                                    <th class="min-w-150px">{{ __('messages.Last Name') }}</th>
                                    <th class="min-w-125px">{{ __('messages.Email') }}</th>
                                    <th class="min-w-125px">{{ __('messages.Message') }}</th>
                                    <th class="min-w-150px">{{ __('messages.Created at') }}</th>

                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                            @foreach ( $contacts as $contact)


                                <tr>

                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="d-flex justify-content-center flex-column">
                                                <p class="text-dark fw-bolder text-hover-primary fs-6">{{ $contact->first_name }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                      <p class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $contact->last_name }}</p>
                                    </td>
                                    <td>
                                     <p class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $contact->email }}</p>
                                    </td>
                                    <td>
                                    <p class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $contact->message }}</p>
                                    </td>
                                      <td>
                                      <p class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $contact->created_at }}</p>
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


@endsection

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>

</script>
 @endsection

