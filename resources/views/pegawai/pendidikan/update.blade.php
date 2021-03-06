@extends('_layouts.template')

@section('title', 'Masukkan Pendidikan Terakhir')

@section('bread')
<li class="active"><i class="icon-laptop"></i> Home</li>
@endsection

@section('button')
	<a class="btn btn-large btn-red item" href="{{ url('pendidikan-terakhir') }}">Kembali</a>
@endsection

@section('main')
			
	<div class="row">
		<div class="col-sm-12">				
			<div class="panel panel-default">
				<div class="panel-body">	
					<form action="{{ url('pendidikan-terakhir/'.$data->id) }}" method="post" enctype="multipart/form-data">				
						<div class="row">
							<div class="col-md-12">
								@include('_errors/pesan_error')				
							</div>
							<input type="hidden" name="pegawai_id" value="{{$data->pegawai_id}}">
							<div class="col-md-12">
								<div class='form-group @if($errors->has('nama')) has-error @endif'>
									<label class='control-label'>Nama Pendidikan</label>
									<input type='text' placeholder='Nama Pendidikan' class='form-control limited' id='nama' name='nama' maxlength='100' value='@if(count($errors) > 0){{old('nama')}}@else{{$data->nama}}@endif'
									required>

									@if ($errors->has('nama'))
										<span for="nama" class="help-block">{{ $errors->first('nama') }}</span>
									@endif
								</div>
								<div class='form-group @if($errors->has('kota')) has-error @endif'>
									<label class='control-label'>Kota</label>
									<input type='text' placeholder='Kota' class='form-control limited' id='kota' name='kota' maxlength='100' value='@if(count($errors) > 0){{old('kota')}}@else{{$data->kota}}@endif'
									required>

									@if ($errors->has('kota'))
										<span for="kota" class="help-block">{{ $errors->first('kota') }}</span>
									@endif
								</div>
								<div class='form-group @if($errors->has('tanggal_lulus')) has-error @endif'>
									<label class='control-label'>Tanggal Lulus</label>
									<div class="input-group">
										<input type="text" name="tahun_lulus" required autocomplete="off" value="@if(count($errors) > 0){{old('kota')}}@else{{tgl_id($data->tahun_lulus)}}@endif" placeholder="Tanggal Lulus" data-date-format="dd-mm-yyyy" data-date-viewmode="years" class="form-control date-picker">
										<span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
									</div>
								</div>
								<div class='form-group @if($errors->has('file')) has-error @endif'>
									<label class='control-label'>Upload File</label>
									<div class="input-group">
										<input type="file" name="file" class="form-control" required>
									</div>

									@if ($errors->has('file'))
										<span for="file" class="help-block">{{ $errors->first('file') }}</span>
									@endif
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="PUT">
								<input name="simpan" value="Simpan" type="submit" class="btn btn-green fright">
							</div>
						</div>							
					</form>
				</div>
			</div>				
		</div>		
	</div>

@endsection