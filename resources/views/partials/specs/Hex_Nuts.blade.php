<form action="{{ route('cart.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="product-section-subtitle">Specification:</div>
                <br>
                
                            <table>
                                <tbody class="product-options">
                                <th>Diameter (d1)</th>
                                <th></th>
                                <th>P, Pitch</th>
                                <th>m</th>
                                <th>s</th>
                                <th>e</th>
 
                                  <tr class="selected">
                                    <td><strong>M3</strong></td>
                                    <td></td>
                                    <td>
                                      <data class="pitch">0.5</data>
                                    </td>
                                    <td>
                                      <data class="s">2</data>
                                    </td>
                                    <td>
                                      <data class="e">3</data>
                                    </td>
                                    <td>
                                      <data class="d max.">3</data>
                                    </td>
                                    
                                    <td>
                                      <input type="radio" name="productvariation" value="M3" checked="checked"/>
                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    <td><strong>M4</strong></td>
                                    <td></td>
                                    <td>
                                      <data class="pitch">0.7</data>
                                    </td>
                                    <td>
                                      <data class="s">3</data>
                                    </td>
                                    <td>
                                      <data class="e">4</data>
                                    </td>
                                    <td>
                                      <data class="d max.">4</data>
                                    </td>
                                    
                                    <td>
                                      <input type="radio" name="productvariation" value="M4"/>
                                    </td>
                                  </tr>

                                  

                                </tbody>
                              </table>

                <div class="product-section-subtitle">Material:</div>
                <br>

                <input type="radio" name="material" value="Blue Zinc" checked>Blue Zinc<br>
                <input type="radio" name="material" value="Stainless Steel">Stainless Steel<br>
                <input type="radio" name="material" value="Black Oxide">Black Oxide<br><br>
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <button type="submit" class="button button-plain">Add to Cart</button>
</form>