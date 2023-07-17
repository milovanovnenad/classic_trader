import './bootstrap';
import '../sass/app.scss'
import jQuery from 'jquery';
window.$ = jQuery;

$(document).ready(function() {
    page.getAdData(url);
    $(".circleImagesButton").click(function(event){
        page.changeImage(event);
    });
});

let page = {
    getAdData: function(url) {
        $.get( url, function( data ) {
            page.setAdData(data);
        });
    },

    setAdData: function(data) {
        $("#adTitle").html(data.year + " <span class='pipe'> | </span> " + data.title);
        $("#price").html(data.price);
        $("#adSubtitle").html(data.subtitle);

        $("#adImage").attr("src", "/images/" + data.images[0].file_name);
        page.images = data.images;

        $("#make").html(data.vehicle_details.make);
        $("#series").html(data.vehicle_details.series);
        $("#model").html(data.vehicle_details.model);
        $("#manufacturerCode").html(data.vehicle_details.manufacturer_code);
        $("#firstRegistrationDate").html(data.vehicle_details.first_registration_date);
        $("#yearOfManufacture").html(data.vehicle_details.year_of_manufacture);
        $("#mileage").html(data.vehicle_details.mileage);
        $("#chassisNumber").html(data.vehicle_details.chassis_number);
        $("#engineNumber").html(data.vehicle_details.engine_number);
        $("#gearboxNumber").html(data.vehicle_details.gearbox_number);
        $("#matchingNumbers").html(data.vehicle_details.matching_numbers);
        $("#previousOwners").html(data.vehicle_details.previous_owners);

        $("#bodyStyle").html(data.technical_details.body_style);
        $("#power").html(data.technical_details.power);
        $("#cubicCapacity").html(data.technical_details.cubic_capacity);
        $("#cylinders").html(data.technical_details.cylinders);
        $("#doors").html(data.technical_details.doors);
        $("#steering").html(data.technical_details.steering);
        $("#gearbox").html(data.technical_details.gearbox);
        $("#gears").html(data.technical_details.gears);
        $("#transmission").html(data.technical_details.transmission);
        $("#frontBrakes").html(data.technical_details.front_brakes);
        $("#rearBrakes").html(data.technical_details.rear_brakes);
        $("#fuelType").html(data.technical_details.fuel_type);

        $("#exteriorColor").html(data.individual_configuration.exterior_color);
        $("#manufacturerColorName").html(data.individual_configuration.manufacturer_color_name);
        $("#sunRoof").html(data.individual_configuration.sun_roof);
        $("#foldingRoof").html(data.individual_configuration.folding_roof);
        $("#powerAssistedSteering").html(data.individual_configuration.power_assisted_steering);
        $("#centralLocking").html(data.individual_configuration.central_locking);
        $("#electricWindows").html(data.individual_configuration.electric_windows);
        $("#interiorColor").html(data.individual_configuration.interior_color);
        $("#interiorMaterial").html(data.individual_configuration.interior_material);
        $("#heatedSeats").html(data.individual_configuration.heated_seats);
        $("#airConditioning").html(data.individual_configuration.air_conditioning);
        $("#abs").html(data.individual_configuration.abs);
        $("#airbag").html(data.individual_configuration.airbag);
        $("#cruiseControl").html(data.individual_configuration.cruise_control);

        $("#sellerImage").attr("src", "/images/" + data.seller.image.file_name);
        $("#sellerCompanyName").html(data.seller.company_name);
        $("#sellerName").html(data.seller.first_name + " " + data.seller.last_name);
        $("#sellerStreet").html(data.seller.street + " " + data.seller.street_number);
        $("#sellerCity").html(data.seller.postal_code + " " + data.seller.city);
        $("#sellerCountry").html(data.seller.flag + " " + data.seller.country);
    },

    changeImage: function(event) {
        let currentImageIndex = $("#adImage").data("imageIndex");
        if (event.target.id == "nextImage") {
            currentImageIndex++;
            if (currentImageIndex > page.images.length - 1) {
                currentImageIndex = 0;
            }
        } else {
            currentImageIndex--;
            if (currentImageIndex < 0) {
                currentImageIndex = page.images.length - 1;
            }
        }
        $("#adImage").attr("src", "/images/" + page.images[currentImageIndex].file_name).data("imageIndex", currentImageIndex);
    }
}
