<form action="{{ route('cart.store') }}" method="POST">
                {{ csrf_field() }}


                
                            

                <div class="product-section-subtitle">Material:</div>
                <br>


                <input type="radio" name="material" value="Stainless Steel" checked>Stainless Steel<br>
                <br>
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <button type="submit" class="button button-plain">Add to Cart</button>
</form>