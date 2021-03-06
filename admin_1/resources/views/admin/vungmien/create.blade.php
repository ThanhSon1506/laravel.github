@extends('layouts.dashboard')
@section('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Thêm vùng miền</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Thêm vùng miền</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>    

<section class="content">
	<div class="container-fluid">
		<form method="post" action="{{route('home.vungmien.store')}}">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">	
				<div class="row">	
					<label class="col-md-3">Tên</label>
					<div class="col-md-6"><input type="text" name="ten_vungmien" class="form-control" required></div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-group">	
				<div class="row">	
					<label class="col-md-3">Nội dung</label>
					<div class="col-md-6"> <textarea name="noidung" class="form-control" required></textarea> </div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-success" value=" Save">
			</div>
		</form>
	</div>
</section>
@endsection