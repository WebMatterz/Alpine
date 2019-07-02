<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>View metrics here</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="<?php base_url(); ?>itinerary"> Create Itinerary</a></li>
      <li class="active"> Itinerary Builder</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="col-md-12">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab"> Destination</a></li>
            <li><a href="#tab_2" data-toggle="tab"> Passenger Details</a></li>
            <li><a href="#tab_3" data-toggle="tab"> Accomodation</a></li>
            <li><a href="#tab_4" data-toggle="tab"> AirFare</a></li>
            <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
             
              <h4>Add Destination Information:</h4>
              <hr/>
              <br>
              <form method="post" action="fullmemberresponse.php">
           
              <div class="row">
                <div class="col-md-4">

                <div class="form-group">
                                   <label> Passenger Name </label> 
                                   <input class="form-control" placeholder="Create Passenger ID" type="text" required data-val="true" data-val-required="The Passenger name is required." name="passName" value="" style="width:80%;" />
                                   
                </div>

                  <div class="form-group">
                    <label>Select Country</label>
                    <select class="form-control" data-val="true" id="ddlCountry" onchange="getCity()" data-val-required="Country field is required." name="country" required="required" style="width:80%;"><option>Select Country</option>
                                   <option>Gambia</option>
                                   <option>Ghana</option>
                                   <option>Kenya</option>
                                   <option>Nigeria</option>
                                   <option>Rwanda</option>
                                   <option>Seychelles</option>
                                   <option>Tanzania</option>
                                   <option>Uganda</option>
                        </select>

                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Select City</label>
                    <select class="form-control" data-val="true" id="ddlCity" onchange="getRating()" data-val-required="Country field is required." name="city" required="required" style="width:80%; "><option>Select City</option>
                                </select>
                  </div>

                          <div class="form-group">
                                   <label> Add Visa    </label>                           
                                  <input type="checkbox" required data-val="true" id="ddlVisa" data-val-required="The Name of Company field is required." name="visa" value="" style="width:15%; margin-right: 8em;"/>
                                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label>  <input name="itineraries" checked value="" type="radio" required="required" style="width:30%;">
                    Itineraries</label>        
              </div></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="form-group">
                    <label>  <input name="itineraries" value="" type="radio" required="required" style="width:30%;">
                    Packages</label>        
              </div></div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                  
                <div class="col-md-4">
                <div class="col-12" style = "margin-left:60px;" >
                              <h4><span class="fa fa-globe"></span>Travel Dates</h4>
                         </div>
                <div class="form-group">
                    <label> Depart </label>
                    <input class="form-control" placeholder="" type="date" required data-val="true" data-val-required="Depart date is required." name="ddate" value="" style="width:80%;" />
                     </div>
                    <div class="form-group">
                    <label> Return </label>
                    <input class="form-control" placeholder="" type="date" required data-val="true" data-val-required="Return date is required." name="rdate" value="" style="width:80%;" />
                    </div>
                  <!-- /.form-group -->
                </div> 
                
                <div class="col-md-4">
                <div class="col-12" style = "margin-left:60px;">
                              <h4><span class="fa fa-globe"></span> Hotel </h4>
                         </div>
                <div class="form-group">
                                   <label> Rating </label>
                                   <select class="form-control" data-val="true" id="ddlRating" onchange="getHotel()" data-val-required="Rating field is required." name="rhotel" required="required" style="width:80%;"><option>Select</option>
                        </select> </div>

                              <div class="form-group">
                                   <label> Hotel </label>
                                   <select class="form-control" data-val="true" id="ddlHotel" onchange="getRoom()" data-val-required="Hotel field is required." name="hotel" required="required" style="width:80%;"><option>Select Hotel</option>
                                </select> 
                              </div> 
                              <div class="form-group">
                                   <label> Room </label>
                                   <select class="form-control" data-val="true" id="ddlRoom" data-val-required="Hotel room field is required." name="hotelroom" required="required" style="width:80%;"><option>Select Room</option>
                                </select> 
                          
                              </div> 
                              </div> 
                            
                    

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-top:50px;">
                <div class="form-group">
                          <label>  <input id="excursion" name="excursion" value="yes" type="checkbox" >
                          Add Excursions</label>        
                    </div></div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="form-group">
                          <label> Day 1
                          <select class="form-control ddlItinerary" id="eday1"  name="eday1" ><option>Select Itinerary</option>
                      </select> </label>
                    </div>  
                    <div class="form-group">
                          <label> Day 2
                          <select class="form-control ddlItinerary" id="eday2"  name="eday2" ><option>Select Itinerary</option>
                      </select> </label>
                    </div> 
                    <div class="form-group">
                          <label> Day 3
                          <select class="form-control ddlItinerary" id="eday3" name="eday3" ><option>Select Itinerary</option>
                      </select> </label>
                    </div>  
                  </div>  
                  <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="form-group">
                          <label> Day 4
                          <select class="form-control" data-val="true" id="eday4"  name="eday4"  ><option>Select Itinerary</option>
                      </select> </label>
                    </div>  
                    <div class="form-group">
                          <label> Day 5
                          <select class="form-control" data-val="true" id="eday5" name="eday5" ><option>Select Itinerary</option>
                      </select> </label>
                    </div> 
                    <div class="form-group">
                          <label> Day 6
                          <select class="form-control" data-val="true" id="eday6" name="eday6" ><option>Select Itinerary</option>
                      </select> </label>
                    </div>  
                  </div>  
                  <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="form-group">
                          <label> Day 7
                          <select class="form-control" data-val="true" id="eday7" name="eday7"  ><option>Select Itinerary</option>
                      </select> </label>
                    </div>  
                    <div class="form-group">
                          <label> Day 8
                          <select class="form-control" data-val="true" id="eday8" name="eday8"  ><option>Select Itinerary</option>
                      </select> </label>
                    </div> 
                    <div class="form-group">
                          <label> Day 9
                          <select class="form-control" data-val="true" id="eday9" name="eday9" ><option>Select Itinerary</option>
                      </select> </label>
                    </div>  
                  </div>  
                  <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="form-group">
                          <label> Day 10
                          <select class="form-control" data-val="true" id="eday10" name="eday10" ><option>Select Itinerary</option>
                      </select> </label>
                    </div>  
                    <div class="form-group">
                          <label> Day 11
                          <select class="form-control" data-val="true" id="eday11" name="eday11" ><option>Select Itinerary</option>
                      </select> </label>
                    </div> 
                    <div class="form-group">
                          <label> Day 12
                          <select class="form-control" data-val="true" id="eday12"  name="eday12"  ><option>Select Itinerary</option>
                      </select> </label>
                    </div>  
                  </div>     
                  
                  </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                    <button class="btn btn-danger formmethod=post" type="submit"> <span class="glyphicon glyphicon-send"></span> Submit </button>
                     </div>      
                  <!-- /.form-group -->
                  </form>
                
              </div>
              </div>
              
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
        <h4>Passenger Details</h4>
        <hr/>
        <br>
        <form method="post" action="fullmemberresponse.php">
           
        <div class="row">
          <div class="col-md-4">
          <div class="form-group">
                                   <label> Adults
                                   <select class="form-control" data-val="true" data-val-required="Adult field is required." name="adults" required="required" style="margin-right: 13em; width:80%;"><option> 1</option>
                                   <option> 2</option>
                                   <option> 3</option>
                                   <option> 4</option>
                                   <option> 5</option>
                                   <option> 6</option>
                                   <option> 7</option>
                                   <option> 8</option>
                                   <option> 9</option>
                                </select> </label></div>

                              <div class="form-group">
                                   <label> Children
                                   <select class="form-control" data-val="true" name="children" style="margin-right: 13em; width:80%;"><option> 0</option>
                                   <option> 1</option>
                                   <option> 2</option>
                                   <option> 3</option>
                                   <option> 4</option>
                                   <option> 5</option>
                                   <option> 6</option>
                                   <option> 7</option>
                                   <option> 8</option>
                                   <option> 9</option>
                                </select> </label>
                              </div> 
                              <div class="form-group">
                                   <label> Infants
                                   <select class="form-control" data-val="true" name="infants" style="margin-right: 13em; width:80%;"><option> 0</option>
                                   <option> 1</option>
                                   <option> 2</option>
                                   <option> 3</option>
                                   <option> 4</option>
                                   <option> 5</option>
                                   <option> 6</option>
                                   <option> 7</option>
                                   <option> 8</option>
                                   <option> 9</option>
                                </select> </label>
                              </div> 
                            
                             </div>
                             
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <div class="col-12 text-center">
                              <h4><span class="fa fa-globe"></span> Children's Date of Birth </h4>
                         </div>

                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                         <div class="form-group">
                                   <label> Child 1 
                                   <input class="form-control" placeholder="" type="date" data-val="true"  name="child1" value="" />
                                   </label> </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                   <div class="form-group">
                                   <label> Child 2  
                                   <input class="form-control" placeholder="" type="date" data-val="true" name="child2" value=""  />
                                   </label> </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                         <div class="form-group">
                                   <label> Child 3 
                                   <input class="form-control" placeholder="" type="date" data-val="true"  name="child3" value=""  />
                                   </label> </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                   <div class="form-group">
                                   <label> Child 4 
                                   <input class="form-control" placeholder="" type="date" data-val="true"  name="child4" value=""  />
                                   </label> </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                         <div class="form-group">
                                   <label> Child 5 
                                   <input class="form-control" placeholder="" type="date"  data-val="true" name="child5" value=""  />
                                   </label> </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                   <div class="form-group">
                                   <label> Child 6  
                                   <input class="form-control" placeholder="" type="date" data-val="true"  name="child6" value=""  />
                                   </label> </div>
                                </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
               <button class="btn btn-danger formmethod=post" type="submit"> <span class="glyphicon glyphicon-send"></span> Submit </button>
                        </div>
                        </form>
            <!-- /.form-group -->
         
          <!-- /.col -->

            
            <!-- /.form-group -->
          </div> 
               
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
              
        <h4>Accomodation Information</h4>
  <hr/>
  <br>
  <form method="post" action="fullmemberresponse.php">
           
  <div class="row">
    <div class="col-md-4">
    <div class="col-12" style="margin-left: 20px;">
                        <h4><span class="fa fa-globe"></span> Occupancy </h4>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                              <label>  <input name="occupancy" checked value="" type="radio" required="required" style="width:20%;">
                              SGL</label>        
                        </div></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                              <label>  <input name="occupancy" value="" type="radio" required="required" style="width:20%;">
                              DBL</label>        
                        </div></div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                              <label>  <input name="occupancy" value="" type="radio" required="required" style="width:20%;">
                              TRP</label>        
                        </div></div>
      <!-- /.form-group -->
    </div>
    <!-- /.col -->

      
    <div class="col-md-4">
    <div class="col-12" style="margin-left: 150px;">
                        <h4><span class="fa fa-globe"></span> Meal Plan </h4>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="form-group">
                              <label>  <input name="meal" checked value="" type="radio" required="required" style="width:30%;">
                              BB</label>        
                        </div></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                              <label>  <input name="meal" value="" type="radio" required="required" style="width:30%;">
                              HB</label>        
                        </div></div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                              <label>  <input name="meal" value="" type="radio" required="required" style="width:30%;">
                              FB</label>        
                        </div></div>
                            </div>

                            <div class="col-md-4">
    <div class="col-12" style="margin-left: 150px;">
                        <h4><span class="fa fa-globe"></span> Extra Meal </h4>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                              <label>  <input name="lunch" value="" type="checkbox" style="width:30%;">
                              Lunch</label>        
                        </div></div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                              <label>  <input name="dinner" value="" type="checkbox"  style="width:30%;">
                              Dinner </label>        
                        </div></div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
 <button class="btn btn-danger formmethod=post" type="submit"> <span class="glyphicon glyphicon-send"></span> Submit </button>
                  </div>
                   </form>  
      <!-- /.form-group -->
    </div> 
              
              </div>
              <!-- /.tab-pane -->

              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">
              <h4>AirFare</h4>
  <hr/>
  <br>
  <form method="post" action="fullmemberresponse.php">
 
  <div class="row">
              <div class="col-md-4">
                         <div class="col-12" style="margin-left: 20px;">
                              <h4><span class="fa fa-lock"></span> Cabin </h4>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                                   <label>  <input name="cabin" value="" type="radio" checked style="width:30%;">
                                   Economy</label>        
                              </div></div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                   <label>  <input name="cabin" value="" type="radio" style="width:30%;">
                                   Business</label>        
                              </div></div>
                            </div>
                    
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="col-12">
                              <h4><span class="fa fa-lock"></span> Currency </h4>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                                   <label>  <input name="currency" value="" type="radio" checked style="width:30%;">
                                   USD</label>        
                              </div></div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                   <label>  <input name="currency" value="" type="radio" style="width:30%;">
                                   NGN</label>        
                              </div></div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="col-12">
                              <h4><span class="fa fa-lock"></span> ROE </h4>
                         </div>
                            <div class="form-group">
                                   <label> Adult fare
                                   <input class="form-control" placeholder="" type="text"  data-val="true" data-val-required="The Passenger name is required." name="adultFare" value="" style="width:60%; float:right;" />
                                   </label> </div>
                            <div class="form-group">
                                   <label> Child fare
                                   <input class="form-control" placeholder="" type="text" data-val="true" data-val-required="The Passenger name is required." name="childFare" value="" style="width:60%; float:right;" />
                                   </label> </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                            <button class="btn btn-danger formmethod=post" type="submit" > <span class="glyphicon glyphicon-send"></span> View Itinerary </button>
                        </div>
                           
              </div>
              <!-- /.tab-pane -->              
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>