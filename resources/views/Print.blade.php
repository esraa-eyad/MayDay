@extends('layouts.app')

@section('content')
    <!-- row -->

    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"></h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    معاينة طباعة</span>
            </div>
        </div>

    </div>

    <div class="row row-sm">
        <div class="col-md-12 col-xl-12">
            <div class=" main-content-body-invoice" id="print">
                <div class="info-box">
                    <img src="{{url('/').$user->qrcode}}"></img>
                    <hr class="mg-b-40">



                    <button class="btn btn-danger  float-left mt-3 mr-2" id="print_Button" onclick="printDiv()"> <i
                            class="mdi mdi-printer ml-1"></i>طباعة</button>
                </div>

            </div>
        </div><!-- COL-END -->
    </div>
    <!-- row closed -->


    <!--Internal  Chart.bundle js -->


    <script type="text/javascript">
        function printDiv() {
            var printContents = document.getElementById('print').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }
    </script>

@endsection
