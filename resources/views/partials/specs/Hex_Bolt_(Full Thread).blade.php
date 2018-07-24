<form action="{{ route('cart.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="product-section-subtitle">Specification:</div>
                <br>
                
                            <table>
                                <tbody class="product-options">
                                <th>Diameter (d2)</th>
                                <th></th>
                                <th>P, Pitch</th>
                                <th>s</th>
                                <th>L</th>
                                <th>d max. (d1)</th>
                                <th>e</th>
                                <th>k</th>
                                  <tr class="selected">
                                    <td><strong>M3</strong></td>
                                    <td></td>
                                    <td>
                                      <data class="pitch">0.5</data>
                                    </td>
                                    <td>
                                      <data class="s">5.5</data>
                                    </td>
                                    <td>
                                      <data class="e">6.01</data>
                                    </td>
                                    <td>
                                      <data class="d max.">5.5</data>
                                    </td>
                                    <td>
                                      <data class="m max.">2.4</data>
                                    </td>
                                    <td>
                                      <data class="h">5.5</data>
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
                                      <data class="s">7</data>
                                    </td>
                                    <td>
                                      <data class="e">7.66</data>
                                    </td>
                                    <td>
                                      <data class="d max.">6.5</data>
                                    </td>
                                    <td>
                                      <data class="m max.">3.2</data>
                                    </td>
                                    <td>
                                      <data class="h">6.2</data>
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
                                      <data class="s">8</data>
                                    </td>
                                    <td>
                                      <data class="e">8.79</data>
                                    </td>
                                    <td>
                                      <data class="d max.">7.5</data>
                                    </td>
                                    <td>
                                      <data class="m max.">4</data>
                                    </td>
                                    <td>
                                      <data class="h">7.5</data>
                                    </td>
                                    <td>
                                      <input type="radio" name="productvariation" value="M5"/>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td><strong>M6</strong></td>
                                    <td></td>
                                    <td>
                                      <data class="pitch">0.9</data>
                                    </td>
                                    <td>
                                      <data class="s">9</data>
                                    </td>
                                    <td>
                                      <data class="e">10.23</data>
                                    </td>
                                    <td>
                                      <data class="d max.">8.5</data>
                                    </td>
                                    <td>
                                      <data class="m max.">4.5</data>
                                    </td>
                                    <td>
                                      <data class="h">8.75</data>
                                    </td>
                                    <td>
                                      <input type="radio" name="productvariation" value="M5"/>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td><strong>M7</strong></td>
                                    <td></td>
                                    <td>
                                      <data class="pitch">1.0</data>
                                    </td>
                                    <td>
                                      <data class="s">9</data>
                                    </td>
                                    <td>
                                      <data class="e">11.45</data>
                                    </td>
                                    <td>
                                      <data class="d max.">8.5</data>
                                    </td>
                                    <td>
                                      <data class="m max.">5.2</data>
                                    </td>
                                    <td>
                                      <data class="h">10.5</data>
                                    </td>
                                    <td>
                                      <input type="radio" name="productvariation" value="M5"/>
                                    </td>
                                  </tr>


                                </tbody>
                              </table>

                <div class="product-section-subtitle">Material:</div>
                <br>

                <input type="radio" name="material" value="Blue Zinc" checked>Blue Zinc<br><br>
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <button type="submit" class="button button-plain">Add to Cart</button>
</form>