@extends('layouts.real')
@section('content')
<section style="background-color: #eee;">
  <div class="text-center container py-5">
    <h2 class="mt-4 mb-5"><strong>Products</strong></h2>

    <div class="row">
    @foreach($prod as $product)
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            <img src="https://www.qsrmagazine.com/sites/default/files/styles/story_page/public/story/pizza-hut-turns-comeback-expert_0.jpg?itok=H7tqkA3B"
              class="w-100" />
            <a href="#!">             
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="/product-detail?name={{ $product['name'] }}" class="ProdName">
              <h4 class="nm card-title mb-3"><strong>{{ $product['name'] }}</strong></h4>
            </a>
            <a href="/product-detail?name={{ $product['name'] }}" class="text-reset text-decoration-none">
              <h6>{{ $product['description'] }}</h6>
            </a>
            <h5 class="p-2 mb-3">RM {{ $product['price'] }}</h5>
            <div class="mask">
                <div class="d-sm-flex justify-content-between align-items-center">
                  <h5 class="h-100"><span class="badge bg-danger ms-2">Limited Edition</span></h5>
                  <h5 class="h-100"><span class="badge bg-success ms-2">In Stock: {{ $product['quantity'] }}</span></h5>
                </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
@stop


