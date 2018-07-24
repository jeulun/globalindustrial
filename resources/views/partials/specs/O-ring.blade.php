<form action="{{ route('cart.store') }}" method="POST">
                {{ csrf_field() }}

                

                <div class="product-section-subtitle">Colour:</div>
                <br>

                <input type="radio" name="colour" value="Black" checked>Black<br>
                <input type="radio" name="colour" value="Blue">Blue<br>
                <input type="radio" name="colour" value="Brown">Brown<br>
                <input type="radio" name="colour" value="Green">Green<br>
                <input type="radio" name="colour" value="White">White<br>
                <br>
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <button type="submit" class="button button-plain">Add to Cart</button>
</form>