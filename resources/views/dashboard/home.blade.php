@extends('layouts.dashboard')

@section('content')
<style>
    .homeLogo{
        width:60%;
        height:60%;
        object-fit: contain;
        filter: drop-shadow(0px 0px 10px #3333335d)
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" style="width:100%;height:90vh;display:flex;justify-content:center;align-items:center; flex-direction:column;">
          {{-- <div class="dash_home" style="display:flex;justify-content:center;align-items:center; border-radius:50%; width:300px; height:300px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        </div> --}}
        <img src="{{asset('dist/img/logo.png')}}" alt="Main Logo" class="homeLogo" >
          <div class="bg_title_div">
                    <p class="bg_title"><span>MAKAN</span> INVESTMENT <span>!</span></p>
                </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<!-- /.content-wrapper -->

@endsection
