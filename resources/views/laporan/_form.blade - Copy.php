<div class="box-body">
    <div class="form-group has-feedback{{ $errors->has('tanggal_awal') ? ' has-error' : '' }}">
        {!! Form::label('tanggal_awal', 'Dari Tanggal') !!}

        {!! Form::text('tanggal_awal', null, ['class' => 'form-control', 'placeholder' => 'Dari Tanggal, ex: 2000-01-01']) !!}
        {!! $errors->first('nis', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group has-feedback{{ $errors->has('tanggal_akhir') ? ' has-error' : '' }}">
        {!! Form::label('tanggal_akhir', 'Sampai Tanggal') !!}

        {!! Form::text('tanggal_akhir', null, ['class' => 'form-control', 'placeholder' => 'Sampai Tanggal, ex: 2000-01-01']) !!}
        {!! $errors->first('tanggal_akhir', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group has-feedback{{ $errors->has('jenistab') ? ' has-error' : '' }}">
        {!! Form::label('jenistab', 'Jenis Tabungan') !!}

        {!! Form::text('jenistab', null, ['class' => 'form-control', 'placeholder' => 'Jenis Tabungan']) !!}
        {!! $errors->first('jenistab', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<!-- /.box-body -->

<div class="box-footer">
    {!! Form::submit('Tampil', ['class' => 'btn btn-primary']) !!}

    {!! Form::submit('Reset', ['class' => 'btn btn-batal']) !!}
</div>
