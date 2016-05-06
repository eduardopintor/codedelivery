<div class="form-group">
    {!! Form::label('Status', 'Status:') !!}
    {!! Form::select('status', $list_status, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('DeliveryMan', 'Entregador:') !!}
    {!! Form::select('deliveryman', $deliveryman, null, ['class' => 'form-control']) !!}
</div>
