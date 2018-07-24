<form action="{{ route('cart.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="product-section-subtitle">Specification:</div>
                <br>
                
                            <table>
                                <tbody class="product-options">
                                <th>Diameter (d2)</th>
                                <th></th>
                                <th>P, Pitch</th>
                                <th>a</th>
                                <th>L</th>
                                <th>d max. (d1)</th>
                               
                                  <tr class="selected">
                                    <td><strong>M3</strong></td>
                                    <td></td>
                                    <td>
                                      <data class="pitch">0.5</data>
                                    </td>
                                    <td>
                                      <data class="s">0.5</data>
                                    </td>
                                    <td>
                                      <data class="e">7.0</data>
                                    </td>
                                    <td>
                                      <data class="d max.">3.5</data>
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
                                      <data class="s">0.7</data>
                                    </td>
                                    <td>
                                      <data class="e">8.0</data>
                                    </td>
                                    <td>
                                      <data class="d max.">3.7</data>
                                    </td>
                                    <td>
                                      <input type="radio" name="productvariation" value="M4"/>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td><strong>M5</strong></td>
                                    <td></td>
                                    <td>
                                      <data class="pitch">0.8</data>
                                    </td>
                                    <td>
                                      <data class="s">1.2</data>
                                    </td>
                                    <td>
                                      <data class="e">8.0</data>
                                    </td>
                                    <td>
                                      <data class="d max.">3.9</data>
                                    </td>
                                    <td>
                                      <input type="radio" name="productvariation" value="M5"/>
                                    </td>
                                  </tr>


                                </tbody>
                              </table>

                <div class="product-section-subtitle">Material:</div>
                <br>

                <input type="radio" name="material" value="Black Oxide" checked>Black Oxide<br><br>
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <button type="submit" class="button button-plain">Add to Cart</button>
</form>