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
        $("#adTitle").html(data.year + " <span class='pipe'> | </span> " + data.name);
        $("#price").html(data.price);
        $("#adSubtitle").html(data.subtitle);

        $("#adImage").attr("src", "/images/" + data.images[0]);
        page.images = data.images;

        $("#make").html(data.make);
        $("#series").html(data.series);
        $("#model").html(data.model);
        $("#manufacturerCode").html(data.manufacturerCode);
        $("#firstRegistrationDate").html(data.firstRegistrationDate);
        $("#yearOfManufacture").html(data.yearOfManufacture);
        $("#mileage").html(data.mileage);
        $("#chassisNumber").html(data.chassisNumber);
        $("#engineNumber").html(data.engineNumber);
        $("#gearboxNumber").html(data.gearboxNumber);
        $("#matchingNumbers").html(data.matchingNumbers);
        $("#previousOwners").html(data.previousOwners);

        $("#bodyStyle").html(data.bodyStyle);
        $("#power").html(data.power);
        $("#cubicCapacity").html(data.cubicCapacity);
        $("#cylinders").html(data.cylinders);
        $("#doors").html(data.doors);
        $("#steering").html(data.steering);
        $("#gearbox").html(data.gearbox);
        $("#gears").html(data.gears);
        $("#transmission").html(data.transmission);
        $("#frontBreaks").html(data.frontBreaks);
        $("#rearBreaks").html(data.rearBreaks);
        $("#fuelType").html(data.fuelType);

        $("#exteriorColor").html(data.exteriorColor);
        $("#manufacturerColorName").html(data.manufacturerColorName);
        $("#sunRoof").html(data.sunRoof);
        $("#foldingRoof").html(data.foldingRoof);
        $("#powerAssistedSteering").html(data.powerAssistedSteering);
        $("#centralLocking").html(data.centralLocking);
        $("#electricWindows").html(data.electricWindows);
        $("#interiorColor").html(data.interiorColor);
        $("#interiorMaterial").html(data.interiorMaterial);
        $("#heatedSeats").html(data.heatedSeats);
        $("#airConditioning").html(data.airConditioning);
        $("#abs").html(data.abs);
        $("#airbag").html(data.airbag);
        $("#cruiseControl").html(data.cruiseControl);

        $("#sellerImage").attr("src", "/images/" + data.seller.image);
        $("#sellerCompanyName").html(data.seller.companyName);
        $("#sellerName").html(data.seller.firstName + " " + data.seller.lastName);
        $("#sellerStreet").html(data.seller.street + " " + data.seller.streetNumber);
        $("#sellerCity").html(data.seller.postalCode + " " + data.seller.city);
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
        $("#adImage").attr("src", "/images/" + page.images[currentImageIndex]).data("imageIndex", currentImageIndex);
    }
}
