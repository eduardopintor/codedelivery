@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Novo Pedido</h3>

        @include('errors._check')

        <div class="container">
            {!! Form::open(['route' => 'customer.order.store', 'class' => 'form']) !!}


            <div class="form-group">
                <p>
                    <label for="total">Total: </label> <span id="total">0,00</span>
                </p>
                <a href="#" class="btn btn-new-client btn-primary">Novo Item</a>
            </div>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <select name="items[0][product_id]" class="form-control">
                        @foreach($products as $product)
                            <option value="{{ $product->id }}" data-price="{{ $product->price }}">{{ $product->name }} - R$ {{ $product->price }}</option>
                        @endforeach
                        </select>
                    </td>
                    <td>
                        {!! Form::text('items[0][qty]', 1, ['class' => 'form-control']) !!}
                    </td>
                </tr>
                </tbody>
            </table>
            {!! Form::submit('Criar Pedido',['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>

    </div>
@endsection

@section('post-script')
    <script type="text/javascript">
        var length;
        $('.btn-new-client').click(function () {

            var row = $('table tbody > tr:last'),
                newRow = row.clone();
            length = $('table tbody > tr').length;

            newRow.find('td').each(function () {

                var td = $(this),
                    input = td.find('input,select'),
                    name =  input.attr('name');

                input.attr('name', name.replace((length - 1) + '', length + ''));

            });

            newRow.find('input').val(1);
            newRow.insertAfter(row);
            calculateTotal();
        });

        $(document.body).on('change', 'select', function () {
            calculateTotal();
        });

        $(document.body).on('blur', 'input[name*=qty]', function () {
            calculateTotal();
        });

        function calculateTotal() {
            var total = 0,
                tr =null, price, qtd;
            length = $('table tbody > tr').length;

            for (var i = 0; i < length; i ++){
                tr = $('table tbody > tr').eq(i);
                price = tr.find(':selected').data('price');
                qtd = tr.find('input').val();
                total += price * qtd;
            }

            $('#total').html(total);

        }

    </script>
@endsection