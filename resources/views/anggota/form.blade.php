<div class="box box-info padding-1">
 <div class="box-body">

 <div class="form-group">
 {{ Form::label('nama') }}<div>
 {{ Form::text('nama', $anggota->nama, ['class' => 'formcontrol' . ($errors->has('nama') ? ' is-invalid' : ''), 'placeholder' => 'Nama']) }}
 {!! $errors->first('nama', '<div class="invalidfeedback">:message</p>') !!}
 </div></div>
 <div class="form-group">
 {{ Form::label('alamat') }}<div>
 {{ Form::text('alamat', $anggota->alamat, ['class' => 'formcontrol' . ($errors->has('alamat') ? ' isinvalid' : ''), 'placeholder' => 'Alamat']) }}
 {!! $errors->first('alamat', '<div class="invalidfeedback">:message</p>') !!}
 </div></div>
 <div class="form-group">
 {{ Form::label('tempat_lahir') }}<div>
 {{ Form::text('tempat_lahir', $anggota->tempat_lahir, ['class' => 'formcontrol' . ($errors->has('tempat_lahir') ? ' isinvalid' : ''), 'placeholder' => 'Tempat Lahir']) }}
 {!! $errors->first('tempat_lahir', '<div class="invalidfeedback">:message</p>') !!}
 </div></div>
 <div class="form-group">
 {{ Form::label('tanggal_lahir') }}<div>
 {{ Form::date('tanggal_lahir', $anggota->tanggal_lahir, ['class' => 'form-control' . ($errors->has('tanggal_lahir') ? ' isinvalid' : ''), 'placeholder' => 'Tanggal Lahir']) }}
 {!! $errors->first('tanggal_lahir', '<div class="invalidfeedback">:message</p>') !!}
 </div></div>
 <div class="form-group">
 {{ Form::label('jenis_kelamin') }}<div>
 {!! Form::radio('jenis_kelamin','L', $anggota->jenis_kelamin=="L" ? true : false) !!} Laki-laki
 {!! Form::radio('jenis_kelamin','P', $anggota->jenis_kelamin=="P" ? true : false) !!} Perempuan
 {!! $errors->first('jenis_kelamin', '<div class="invalidfeedback">:message</p>') !!}
 </div></div>
 <div class="form-group">
 {{ Form::label('Satus') }}<div>
 {!! Form::radio('status','0',$anggota->status=='0' ? true : false) !!} Tidak aktif
 {!! Form::radio('status','1',$anggota->status=='1' ? true : false) !!} Aktif
 {!! $errors->first('status', '<div class="invalidfeedback">:message</p>') !!}
 </div></div>
 <div class="form-group">
 {{ Form::label('telepon') }}<div>
 {{ Form::text('telepon', $anggota->telepon, ['class' => 'formcontrol' . ($errors->has('telepon') ? ' isinvalid' : ''), 'placeholder' => 'Telepon']) }}
 {!! $errors->first('telepon', '<div class="invalidfeedback">:message</p>') !!}
 </div></div>
 <div class="form-group">
 {{ Form::label('keterangan') }}<div>
 {{ Form::text('keterangan', $anggota->keterangan, ['class' => 'formcontrol' . ($errors->has('keterangan') ? ' isinvalid' : ''), 'placeholder' => 'Keterangan']) }}
 {!! $errors->first('keterangan', '<div class="invalidfeedback">:message</p>') !!}
 </div>
 </div>
 <div class="box-footer mt20">
 <button type="submit" class="btn btn-primary">Simpan</button>
 </div>
</div>
</div>