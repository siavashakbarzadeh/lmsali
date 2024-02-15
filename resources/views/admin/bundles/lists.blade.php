
@extends('admin.layouts.app')

@push('libraries_top')

@endpush


@section('content')
    <section class="section">
    <div class="section-header">
            <h1>Aida!</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-body">



                            <div class="empty-state mx-auto d-block"  data-width="900" >

                              bundle listAida!
                              </div>



                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection

@push('scripts_bottom')

@endpush
