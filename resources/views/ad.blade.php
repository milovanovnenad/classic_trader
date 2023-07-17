<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Classic Trader Task</title>
        <link rel="icon" href="/classic_trader.ico" type="image/x-icon">
        @vite(['resources/js/app.js'])

    </head>
    <body>

        <script type="text/javascript">
            let url = "{{$getDataUrl}}";
        </script>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="adTitle">
                        <h1><span id="adTitle"></span><span id="price"></span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="adSubtitle">
                        <h4><span id="adSubtitle"></span></h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="adImageContainer">
                        <div class="circleImagesButton" id="previousImage"></div>
                        <img id="adImage" src="/images/no-image-icon-23483.png" class="adImage" alt="image" data-image-index="0">
                        <div  class="circleImagesButton" id="nextImage"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="details">

                        <div id="vehicleDetailsContainer">
                            <div class="row detailsHeading">
                                <h3>Vehicle details</h3>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Make</h5></div><div class="col" id="make"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Series</h5></div><div class="col" id="series"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Model</h5></div><div class="col" id="model"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Manufacturer code</h5></div><div class="col" id="manufacturerCode"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>First registration date</h5></div><div class="col" id="firstRegistrationDate"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Year of manufacture</h5></div><div class="col" id="yearOfManufacture"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Mileage (read)</h5></div><div class="col" id="mileage"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Chassis number</h5></div><div class="col" id="chassisNumber"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Engine number</h5></div><div class="col" id="engineNumber"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Gearbox number</h5></div><div class="col" id="gearboxNumber"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Matching numbers</h5></div><div class="col" id="matchingNumbers"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Previous owners</h5></div><div class="col" id="previousOwners"></div>
                            </div>
                        </div>

                        <br/><br/>

                        <div id="technicalDetailsContainer">
                            <div class="row detailsHeading">
                                <h3>Technical details</h3>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Body style</h5></div><div class="col" id="bodyStyle"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Power (kW/hp)</h5></div><div class="col" id="power"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Cubic capacity (ccm)</h5></div><div class="col" id="cubicCapacity"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Cylinders</h5></div><div class="col" id="cylinders"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Doors</h5></div><div class="col" id="doors"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Steering</h5></div><div class="col" id="steering"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Gearbox</h5></div><div class="col" id="gearbox"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Gears</h5></div><div class="col" id="gears"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Transmission</h5></div><div class="col" id="transmission"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Front brakes</h5></div><div class="col" id="frontBrakes"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Rear brakes</h5></div><div class="col" id="rearBrakes"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Fuel type</h5></div><div class="col" id="fuelType"></div>
                            </div>
                        </div>

                        <br/><br/>

                        <div id="individualConfigurationContainer">
                            <div class="row detailsHeading">
                                <h3>Individual configuration</h3>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Exterior color</h5></div><div class="col" id="exteriorColor"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Manufacturer color name</h5></div><div class="col" id="manufacturerColorName"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Sun roof</h5></div><div class="col" id="sunRoof"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Folding roof</h5></div><div class="col" id="foldingRoof"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Power Assisted Steering</h5></div><div class="col" id="powerAssistedSteering"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Central locking</h5></div><div class="col" id="centralLocking"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Electric windows</h5></div><div class="col" id="electricWindows"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Interior color</h5></div><div class="col" id="interiorColor"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Interior material</h5></div><div class="col" id="interiorMaterial"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Heated seats</h5></div><div class="col" id="heatedSeats"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Air conditioning</h5></div><div class="col" id="airConditioning"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>ABS</h5></div><div class="col" id="abs"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Airbag</h5></div><div class="col" id="airbag"></div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Cruise control</h5></div><div class="col" id="cruiseControl"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="seller sellerImage">
                        <img id="sellerImage" src="/images/facebook-default-no-profile-pic.jpg" alt="image">
                    </div>
                    <div class="seller sellerDetails">
                        <h4 id="sellerCompanyName"></h4>
                        <h5 id="sellerName"></h5>
                        <div id="sellerStreet"></div>
                        <div id="sellerCity"></div>
                        <div id="sellerCountry"></div>
                    </div>
                </div>
                <div class="col-sm-6" id="actions">
                    <img class="action" src="/images/pin.png" alt="Show on map" title="Show on map">
                    <img class="action" src="/images/call.png" alt="Call" title="Call">
                    <img id="message" class="action" src="/images/message.png" alt="Message" title="Message">
                </div>
            </div>
        </div>

    </body>
</html>
