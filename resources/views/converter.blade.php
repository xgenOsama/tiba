@extends('layouts.base')
@section('base_content')
<!--start converter-->
<div id="convert">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row text-center">
                  @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                    <h3 class="title">حاسبة تحويل</h3>
                    </div>
                    <p>آلة حاسبة تحويل على نحو مفيد بين مختلف وحدات القياس المستخدمة عادة في الزراعة .</p>
                    <p>
                      يمكن أن يتم تعريف المحتوى الغذائي للأسمدة إما أكسيد أو عنصري. هذه المحولات تسمح التحويلات بين الوحدتين.
                    </p>
                  @elseif( Config::get('languages')[App::getLocale()] == 'English' )
                    <h2 class="title">Conversion Calculator</h2>
                    </div>
                    <p>A useful conversion calculator between various units of measurement commonly used in agriculture.</p>
                    <p>
                        The nutrient content of fertilizers can be declared as either oxide or elemental. These converters allow conversions between the two units.
                    </p>
                    @endif
                    <div class="row">
                        <div class="col-xs-12">
                          <div class="element">
                              <h4><span>p</span>from/to<span>p2o5</span></h4>
                              <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                  <label for="element1">Elemental, P</label>
                                  <input type="text" class="form-control ele" id="ele" name="p" placeholder="Elemental, P">
                                </div>
                              </div>
                              <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                  <label for="oxide1">Oxide, P2O5</label>
                                  <input type="text" class="form-control ele" id="ele" name="p2o5" placeholder="Oxide, P2O5">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12">
                            <div class="element">
                              <h4><span>K</span>from/to<span>K2O</span></h4>
                              <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                  <label for="element1">Elemental, K</label>
                                  <input type="text" class="form-control ele" id="ele" name="k" placeholder="Elemental, K">
                                </div>
                              </div>
                              <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                  <label for="oxide1">Oxide, K2O</label>
                                  <input type="text" class="form-control ele" id="ele" name="k2o" placeholder="Oxide, K2O">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12">
                            <div class="element">
                              <h4><span>Ca</span>from/to<span>CaCO3</span></h4>
                              <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                  <label for="element1">Elemental, Ca</label>
                                  <input type="text" class="form-control ele" id="ele" name="ca3" placeholder="Elemental, Ca">
                                </div>
                              </div>
                              <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                  <label for="oxide1">Oxide, CaCO3</label>
                                  <input type="text" class="form-control ele" id="ele" name="caco3" placeholder="Oxide, CaCo3">
                                </div>
                              </div>
                            </div>
                          </div>
                            <div class="col-xs-12">
                              <div class="element">
                                <h4><span>Ca</span>from/to<span>CaO</span></h4>
                                <div class="col-md-6 col-xs-12">
                                  <div class="form-group">
                                    <label for="element1">Elemental, Ca</label>
                                    <input type="text" class="form-control ele" id="ele" name="ca" placeholder="Elemental, Ca">
                                  </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                  <div class="form-group">
                                    <label for="oxide1">Oxide, CaO</label>
                                    <input type="text" class="form-control ele" id="ele" name="cao" placeholder="Oxide, CaO">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xs-12">
                              <div class="element">
                                <h4><span>Mg</span>from/to<span>MgO</span></h4>
                                <div class="col-md-6 col-xs-12">
                                  <div class="form-group">
                                    <label for="element1">Elemental, Mg</label>
                                    <input type="text" class="form-control ele" id="ele" name="mg" placeholder="Elemental, Mg">
                                  </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                  <div class="form-group">
                                    <label for="oxide1">Oxide, MgO</label>
                                    <input type="text" class="form-control ele" id="ele" name="mgo" placeholder="Oxide, MgO">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xs-12">
                              <div class="element">
                                <h4><span>S</span>from/to<span>SO3</span></h4>
                                <div class="col-md-6 col-xs-12">
                                  <div class="form-group">
                                    <label for="element1">Elemental, S</label>
                                    <input type="text" class="form-control ele" id="ele" name="s" placeholder="Elemental, S">
                                  </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                  <div class="form-group">
                                    <label for="oxide1">Oxide, SO3</label>
                                    <input type="text" class="form-control ele" id="ele" name="so3" placeholder="Oxide, SO3">
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
