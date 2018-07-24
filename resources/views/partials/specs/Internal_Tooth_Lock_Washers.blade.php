<form action="{{ route('cart.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="product-section-subtitle">Specification:</div>
                <br>
                
                            <table>
                                <tbody class="product-options">
                                <th>Diameter (d1)</th>
                                <th></th>
                                <th>P, Pitch</th>
                                <th>s</th>
                                
                                <th>d max. (d2)</th>
                                
                                  <tr class="selected">
                                    <td><strong>M2</strong></td>
                                    <td></td>
                                    <td>
                                      <data class="pitch">0.5</data>
                                    </td>
                                    <td>
                                      <data class="s">1.5</data>
                                    </td>
                                    
                                    <td>
                                      <data class="d max.">3.5</data>
                                    </td>
                                   
                                    <td>
                                      <input type="radio" name="productvariation" value="M3" checked="checked"/>
                                    </td>
                                  </tr>
                                  
                                  


                                </tbody>
                              </table>

                <div class="product-section-subtitle">Material:</div>
                <br>

                <input type="radio" name="material" value="Rainbow Zinc" checked>Rainbow Zinc<br>
                <br>

                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <button type="submit" class="button button-plain">Add to Cart</button>
</form>