<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Cafeteria</title>
    <script>
        $(document).ready(function() {
            $(".deduct_button").click(function() {
                $menu_id = $(this).prop('id').replace("deduct_", "");
                $new_val = Number($("#order_" + $menu_id).val()) - 1;
                if ($new_val >= 0) {
                    $("#order_" + $menu_id).val($new_val);
                }
            });

            $(".add_button").click(function() {
                $menu_id = $(this).prop('id').replace("add_", "");
                $new_val = Number($("#order_" + $menu_id).val()) + 1;
                if ($new_val <= 99) {
                    $("#order_" + $menu_id).val($new_val);
                }
            });
        });
    </script>
</head>

<body>
    @include('layouts/navbar')
    <h1>Cafeteria</h1>
    <div class="container">
        <form action="/cafeteria" method="POST">
            <div class="row">
                @csrf
                @foreach ($menu as $m)
                <div class="col-lg-3">
                    <div class="card">
                        <img src="img/products/{{$m -> image}}" class="card-img-top" alt="{{$m -> name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$m -> name}} - PHP<span>{{$m -> price}}</span></h5>
                            <a class="btn btn-danger deduct_button" id="deduct_{{$m -> product_id}}">-</a>
                            <input type="number" style="width: 50px" min="0" max="99" value="0" id="order_{{$m -> product_id}}" name="order_{{$m -> product_id}}">
                            <a class="btn btn-primary add_button" id="add_{{$m->product_id}}">+</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <input type="submit" class="btn btn-success mt-3" value="Place Order">
        </form>
    </div>
</body>

</html>