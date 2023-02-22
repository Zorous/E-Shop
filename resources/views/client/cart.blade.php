@extends('client.layout_without_nv')



@section('shop')

<section class="h-100 mb-5">
    <div class="container py-5">
      <div class="row d-flex justify-content-center my-4">
        <div class="col-md-8">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">Cart - 2 items</h5>
            </div>
            <div class="card-body">
@if(session('cart'))
@foreach(session('cart') as $id => $details)
              <!-- Single item -->
              <div class="row" data-id="{{$id}}">
                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                  <!-- Image -->
                  <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                    <img src="{{"/uploads/articles_imgs"}}/{{$details['photo']}}"
                      class="w-100" alt="Blue Jeans Jacket" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                  </div>
                  <!-- Image -->
                </div>

                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                  <!-- Data -->
                  <p><strong>{{ $details['products_name'] }}</strong></p>
                  <p>Color: blue</p>
                  <p>Size: M</p>
                  <button type="button" class="btn btn-primary cart_remove" data-mdb-toggle="tooltip"
                    title="Remove item">
                    Delete
                  </button>
                  <!-- Data -->
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                  <!-- Quantity -->
                  <div class="d-flex mb-4" style="max-width: 300px">
                    <div class="form-outline">
                      <input style="width:40px;" min="0" name="quantity" value={{$details['quantity']}} type="number" />
                    </div>
                  </div>
                  <!-- Quantity -->

                  <!-- Price -->
                  <p class="text-start text-md-center">
                    <strong>{{ $details['price'] * $details['quantity'] }} DH</strong>
                  </p>
                  <!-- Price -->
                </div>
              </div>
              <!-- Single item -->
@endforeach
@endif
              <hr class="my-4" />


            </div>
          </div>
          <div class="card mb-4">
            <div class="card-body">
              <p><strong>Expected shipping delivery</strong></p>
              <p class="mb-0">12.10.2020 - 14.10.2020</p>
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body">
              <p><strong>We accept</strong></p>
              <img class="me-2" width="45px"
                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                alt="Visa" />
              <img class="me-2" width="45px"
                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                alt="American Express" />
              <img class="me-2" width="45px"
                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                alt="Mastercard" />
              <img class="me-2" width="45px"
                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.webp"
                alt="PayPal acceptance mark" />
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">Summary</h5>
            </div>
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li
                  class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                  @php $total = 0;  @endphp
                  @foreach((array) session('cart') as $id => $details)
                  @php $total += $details['price'] * $details['quantity'] @endphp
                  @endforeach
                  Products
                  <span>{{ $total }} DH</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  Shipping
                  <span>Free</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  Shipping Method
                  <span>Cash on devilery</span>
                </li>
                <li
                  class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                  <div>
                    <strong>Total amount</strong>
                    <strong>
                      <p class="mb-0">(including TVA)</p>
                    </strong>
                  </div>
                  <span><strong>{{$total}} DH</strong></span>
                </li>
              </ul>

              <button type="button" class="btn btn-primary btn-lg btn-block">
                Go to checkout
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection


@section('my_scripts')
<script type="text/javascript">
$('.cart_remove').click(function(e){
    e.preventDefault();

    var element = $(this);

    if(confirm("Do you really want to remove this item?")){
      $.ajax({
        url: "{{route('remove_from_cart')}}",
        method : "DELETE",
        data : {
            _token : '{{ csrf_token() }}',
            id : element.parent("row").attr("data-id")
        },
        success: function (response){
            window.location.reload();
        }
      })
    }
})
</script>
@endsection
