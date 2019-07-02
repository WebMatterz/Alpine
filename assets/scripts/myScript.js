$(function () {
    $("#tabs").tabs().find(".ui-tabs-nav").sortable({ axis: "x" });
});

var update_excursion = function () {
    if ($("#excursion").is(":checked")) {
        $('#eday1').prop('disabled', false);
        $('#eday2').prop('disabled', false); 
        $('#eday3').prop('disabled', false);
    }
    else {
        $('#eday1').prop('disabled', 'disabled');
        $('#eday2').prop('disabled', 'disabled');
        $('#eday3').prop('disabled', 'disabled');
        $('#eday4').prop('disabled', 'disabled');
        $('#eday5').prop('disabled', 'disabled');
        $('#eday6').prop('disabled', 'disabled');
        $('#eday7').prop('disabled', 'disabled');
        $('#eday8').prop('disabled', 'disabled');
        $('#eday9').prop('disabled', 'disabled');
        $('#eday10').prop('disabled', 'disabled');
        $('#eday11').prop('disabled', 'disabled');
        $('#eday12').prop('disabled', 'disabled');
    }
};

$(update_excursion);
$("#excursion").change(update_excursion);


/* MY DDL THINGY THINGY
==========================*/

        var defaultCountryArray = ["Select a City", "Select a Country First"];

        var gambiaArray = ["Select a City", "Banjul"];

        var ghanaArray = ["Select a City", "Accra"];

        var kenyaArray = ["Select a City", "Mombasa", "Nairobi", "Nairobi 2"];

        var nigeriaArray = ["Select a City", "Abuja", "Lagos"];

        var rwandaArray = ["Select a City", "Kigali"];

        var seychellesArray = ["Select a City", "Mahe", "Praslin"];

        var tanzaniaArray = ["Select a City", "Daresalam", "Zanzibar"];

        var ugandaArray = ["Select a City", "Kampala"];

      
//trying to append or replace content of the area ddl
function getCity() {
    var countryddl = $('#ddlCountry option:selected').html();
    var cityddl = $('#ddlCity');
    
    switch (countryddl) {
        case "Gambia":
            cityddl.empty();
            for (i = 0; i < gambiaArray.length; i++) {
                cityddl.append("<option value='" + gambiaArray[i] + "'>" + gambiaArray[i] + "</option>");
            }
            break;
        case "Ghana":
            cityddl.empty();
            for (i = 0; i < ghanaArray.length; i++) {
                cityddl.append("<option value='" + ghanaArray[i] + "'>" + ghanaArray[i] + "</option>");
            }
            break;
        case "Kenya":
            cityddl.empty();
            for (i = 0; i < kenyaArray.length; i++) {
                cityddl.append("<option value='" + kenyaArray[i] + "'>" + kenyaArray[i] + "</option>");
            }
            break;
        case "Nigeria":
            cityddl.empty();
            for (i = 0; i < nigeriaArray.length; i++) {
                cityddl.append("<option value='" + nigeriaArray[i] + "'>" + nigeriaArray[i] + "</option>");
            }
            break;
        case "Rwanda":
            cityddl.empty();
            for (i = 0; i < rwandaArray.length; i++) {
                cityddl.append("<option value='" + rwandaArray[i] + "'>" + rwandaArray[i] + "</option>");
            }
            break;
        case "Seychelles":
            cityddl.empty();
            for (i = 0; i < seychellesArray.length; i++) {
                cityddl.append("<option value='" + seychellesArray[i] + "'>" + seychellesArray[i] + "</option>");
            }
            break;
        case "Tanzania":
            cityddl.empty();
            for (i = 0; i < tanzaniaArray.length; i++) {
                cityddl.append("<option value='" + tanzaniaArray[i] + "'>" + tanzaniaArray[i] + "</option>");
            }
            break;
        case "Uganda":
            cityddl.empty();
            for (i = 0; i < ugandaArray.length; i++) {
                cityddl.append("<option value='" + ugandaArray[i] + "'>" + ugandaArray[i] + "</option>");
            }
            break;
        default:
            cityddl.empty();
            for (i = 0; i < defaultCountryArray.length; i++) {
                cityddl.append("<option value='" + defaultCountryArray[i] + "'>" + defaultCountryArray[i] + "</option>");
            }
    }
};

//Rating baseddl


var defaultRatingArray = ["Select a Rating", "Select a City First"];

var bajulArray = ["Select a Rating", "3 Star (B)", "4 Star (B)", "5 Star (B)"];

var accraArray = ["Select a Rating", "4 Star (A)", "5 Star (A)"];

var mombasaArray = ["Select a Rating", "4 Star (M)", "5 Star (M)"];

var nairobiArray = ["Select a Rating", "3 Star (N)", "4 Star (N)", "5 Star (N)"];

var nairobi2Array = ["Select a Rating", "Amboseli", "Aruba", "Lake Nakuru", "Lake Navaisha", "Masai Mara", "Quest", "Samburu"];

var abujaArray = ["Select a Rating", "3 Star (Abj)"];

var lagosArray = ["Select a Rating", "3 Star (L)"];

var kigaliArray = ["Select a Rating", "3 Star (K)"];

var maheArray = ["Select a Rating", "2 Star"];

var praslinArray = ["Select a Rating", "3 Star (P)"];

var daresalamArray = ["Select a Rating", "3 Star (D)", "Lodge"];

var zanzibarArray = ["Select a Rating", "3 Star (Z)"];

var kampalaArray = ["Select a Rating", "3 Star (Ka)", "4 Star (Ka)", "5 Star (Ka)", "6 Star (Ka)"];

// Itinerary Array Here 

var defaultItineraryArray = ["Select Itinerary", "Select City First"];

var bajulItinArray = ["Select Itinerary", ""];

var accraItinArray = ["Select Itinerary", "Accra City Tour", "Arrival Accra", "Departure", "Escape To The West", "Heritage Tour", "Northern Discovery", "Volta Adventure"];

var mombasaItinArray = ["Select Itinerary", ""];

var nairobiItinArray = ["Select Itinerary", "2 hour Nairobi Tour", "Arrival Nairobi", "Day at leisure", "Departure", "Greater Nairobi City Tour", "Lake Nakuru Day Tour", "Nairobi National Museum", "Nairobi National Park Tour"];

var nairobi2ItinArray = ["Select Itinerary", ""];

var abujaItinArray = ["Select Itinerary", "Abuja-Yankari Games Reserve", "Departure Abuja", "Sumu Wildlife Park", "Yankari - Abuja", "Yankari Game drive"];

var lagosItinArray = ["Select Itinerary", ""];

var kigaliItinArray = ["Select Itinerary", "Arrival Kigali", "Day at leisure", "Departure"];

var maheItinArray = ["Select Itinerary", "Arrival", "Day at leisure"];

var praslinItinArray = ["Select Itinerary", "Anse Major Private Nature Trails (M,W,F,Su)", "Arrival", "Copolia private nature trail (M,W,F,Su)", "Day at leisure", "Enchanted Walk In The Vallee de Mai (T, W, Su)", "La Digue Boat 'n Bike (M-Su)", "La Digue only (S)", "Mare Aux Cochon private nature trail (M,W,F,Su)", "Morne Blanc private nature trail (M,W,F,Su)", "Trois Frere private nature trail (M,W,F,Su)", "Vallee de Mai/Anse Lazio (W)"];

var daresalamItinArray = ["Select Itinerary", "Arrival Daresalam", "Daresalam Lobo", "Daresalam Manyara", "Daresalam Ngoronoro", "Daresalam Serengeti", "Daresalam Seronera", "Daresalam Tarangire", "Day at leisure", "Departure"];

var zanzibarItinArray = ["Select Itinerary", "Arrival Zanzibar", "Depart Zanzibar", "Jozani Forest", "Prison Island", "Snorkelling and scuba diving", "Spice Tour", "Stone Town Tour", "Swimming with dolphins", "Zanzibar Day at leisure", "Zanzibar Exclusive"];

var kampalaItinArray = ["Select Itinerary", "Arrival Kampala", "Day at leisure", "Departure"];


//trying to append rating and itinerary to city ddl
function getRating() {
var cityddl = $('#ddlCity option:selected').html();
var ratingddl = $('#ddlRating');
var itineraryDdl = $('.ddlItinerary');

switch (cityddl) {
case "Banjul":
    ratingddl.empty();
    itineraryDdl.empty();
    for (i = 0; i < bajulArray.length; i++) {
        ratingddl.append("<option value='" + bajulArray[i] + "'>" + bajulArray[i] + "</option>");
   //     itineraryDdl.append("<option value='" + bajulItinArray[i] + "'>" + bajulItinArray[i] + "</option>");
    }
    break;
case "Accra":
    ratingddl.empty();
    itineraryDdl.empty();
    for (i = 0; i < accraArray.length; i++) {
        ratingddl.append("<option value='" + accraArray[i] + "'>" + accraArray[i] + "</option>");
        itineraryDdl.append("<option value='" + accraItinArray[i] + "'>" + accraItinArray[i] + "</option>");
    }
    break;
case "Mombassa":
    ratingddl.empty();
    itineraryDdl.empty();
    for (i = 0; i < mombassaArray.length; i++) {
        ratingddl.append("<option value='" + mombassaArray[i] + "'>" + mombassaArray[i] + "</option>");
        itineraryDdl.append("<option value='" + mombassaItinArray[i] + "'>" + mombassaItinArray[i] + "</option>");
    }
    break;
case "Nairobi":
    ratingddl.empty();
    itineraryDdl.empty();
    for (i = 0; i < nairobiArray.length; i++) {
        ratingddl.append("<option value='" + nairobiArray[i] + "'>" + nairobiArray[i] + "</option>");
        itineraryDdl.append("<option value='" + nairobiItinArray[i] + "'>" + nairobiItinArray[i] + "</option>");
    }
    break;
case "Nairobi 2":
    ratingddl.empty();
    itineraryDdl.empty();
    for (i = 0; i < nairobi2Array.length; i++) {
        ratingddl.append("<option value='" + nairobi2Array[i] + "'>" + nairobi2Array[i] + "</option>");
        itineraryDdl.append("<option value='" + nairobi2ItinArray[i] + "'>" + nairobi2ItinArray[i] + "</option>");
    }
    break;
case "Abuja":
    ratingddl.empty();
    itineraryDdl.empty();
    for (i = 0; i < abujaArray.length; i++) {
        ratingddl.append("<option value='" + abujaArray[i] + "'>" + abujaArray[i] + "</option>");
        itineraryDdl.append("<option value='" + abujaItinArray[i] + "'>" + abujaItinArray[i] + "</option>");
    }
    break;
case "Lagos":
    ratingddl.empty();
    itineraryDdl.empty();
    for (i = 0; i < lagosArray.length; i++) {
        ratingddl.append("<option value='" + lagosArray[i] + "'>" + lagosArray[i] + "</option>");
        itineraryDdl.append("<option value='" + lagosItinArray[i] + "'>" + lagosItinArray[i] + "</option>");
    }
    break;
case "kigali":
    ratingddl.empty();
    itineraryDdl.empty();
    for (i = 0; i < kigaliArray.length; i++) {
        ratingddl.append("<option value='" + kigaliArray[i] + "'>" + kigaliArray[i] + "</option>");
        itineraryDdl.append("<option value='" + kigaliItinArray[i] + "'>" + kigaliItinArray[i] + "</option>");
    }
    break;
case "Mahe":
    ratingddl.empty();
    itineraryDdl.empty();
    for (i = 0; i < maheArray.length; i++) {
        ratingddl.append("<option value='" + maheArray[i] + "'>" + maheArray[i] + "</option>");
        itineraryDdl.append("<option value='" + maheItinArray[i] + "'>" + maheItinArray[i] + "</option>");
    }
    break;
case "Praslin":
    ratingddl.empty();
    itineraryDdl.empty();
    for (i = 0; i < praslinArray.length; i++) {
        ratingddl.append("<option value='" + praslinArray[i] + "'>" + praslinArray[i] + "</option>");
        itineraryDdl.append("<option value='" + praslinItinArray[i] + "'>" + praslinItinArray[i] + "</option>");
    }
    break;
case "Daresalam":
    ratingddl.empty();
    itineraryDdl.empty();
    for (i = 0; i < daresalamArray.length; i++) {
        ratingddl.append("<option value='" + daresalamArray[i] + "'>" + daresalamArray[i] + "</option>");
        itineraryDdl.append("<option value='" + daresalamItinArray[i] + "'>" + daresalamItinArray[i] + "</option>");
    }
    break;
case "Zanzibar":
    ratingddl.empty();
    itineraryDdl.empty();
    for (i = 0; i < zanzibarArray.length; i++) {
        ratingddl.append("<option value='" + zanzibarArray[i] + "'>" + zanzibarArray[i] + "</option>");
        itineraryDdl.append("<option value='" + zanzibarItinArray[i] + "'>" + zanzibarItinArray[i] + "</option>");
    }
    break;
case "Kampala":
    ratingddl.empty();
    itineraryDdl.empty();
    for (i = 0; i < kampalaArray.length; i++) {
        ratingddl.append("<option value='" + kampalaArray[i] + "'>" + kampalaArray[i] + "</option>");
        itineraryDdl.append("<option value='" + kampalaItinArray[i] + "'>" + kampalaItinArray[i] + "</option>");
    }
    break;
default:
    ratingddl.empty();
    itineraryDdl.empty();
    for (i = 0; i < defaultRatingArray.length; i++) {
        ratingddl.append("<option value='" + defaultRatingArray[i] + "'>" + defaultRatingArray[i] + "</option>");
        itenaryDdl.append("<option value='" + defaultItineraryArray[i] + "'>" + defaultItineraryArray[i] + "</option>");
    }
}
};


//Hotel Base ddl

var defaultHotelArray = ["Select a Hotel", "Select a Rating First"];

var starb3Array = ["Select a Hotel", "Senegambia Beach Hotel", "Sunset Beach Hotel"];

var starb4Array = ["Select a Hotel", "African Princess Beach", "Kombo Beach Hotel"];

var starb5Array = ["Select a Hotel", "Coco Ocean Resort & Spa", "Gambia Coral Beach Hotel", "Kairaba Beach Hotel", "Ocean Bay Hotel"];

var stara4Array = ["Select a Hotel", "Ignore"];

var stara5Array = ["Select a Hotel", "Highbridge Guest Lodge", "Tomreik Hotel"];

var star4mArray = ["Select a Hotel", "Travellers Beach Hotel"];

var star5mArray = ["Select a Hotel", "Bambura Beach Hotel", "Southern Palm Beach Resort"];

var star3nArray = ["Select a Hotel", "Central Park Hotel", "Kenya Comfort Hotel Suite", "Mvuli Hotel", "Sentrim Boulevard Hotel"];

var star4nArray = ["Select a Hotel", "Amber Hotel", "Crowne Plaza Hotel", "eka Hotel", "Heron Portico", "Jacaranda Hotel", "Meridien Court", "Nairobi Safari Club", "Sarova Panafic Hotel", "Silver Springs Hotel", "Tune Hotel"];

var star5nArray = ["Select a Hotel", "Intercontinental Hotel", "Laziz Premere Hotel", "Nairobi Serena Hotel", "Ole Sereni Hotel", "Penari Hotel", "Sarovs Stanley", "THe Boma", "Villa Rosa Kempinski"];

var amboseliArray = ["Select a Hotel", "Sopa Lodge"];

var arubaArray = ["Select a Hotel", "Ashnil Aruba Lodge"];

var lakenakArray =  ["Select a Hotel", "Sopa Lodge"];

var lakenavArray = ["Select a Hotel", "Sopa Resort"];

var masaimarArray = ["Select a Hotel", "Sopa Lodge"];

var questArray = ["Select a Hotel", "Sentrim 680", "Sentrim Amboseli", "Sentrim Boulevard", "Sentrim Castle", "Sentrim Elementaita", "Sentrim Mara", "Sentrim Samburu", "Sentrim Tsavo"];

var samburuArray = ["Select a Hotel", "Ashnil Mara Camp", "Ashnil Saburu Camp", "Sopa Lodge"];

var star3abjArray = ["Select a Hotel", "Bolton White Hotel", "Hawthorn Suites", "Ignore", "Stonehedge Suites"];

var star3lArray = ["Select a Hotel", "Tester Hotel"];

var star3kArray = ["Select a Hotel", "City Blue Hotel & Suites", "Urban City Blue Hotel"];

var star2Array = ["Select a Hotel", "Anse Soleil Beachcomber"];

var star3pArray = ["Select a Hotel", "Chalets Cote Mer", "Colbiri Guest House"];

var star3dArray = ["Select a Hotel", "Harbour View Suites", "Urban Rose Hotel & Apartments"];

var lodgeArray = ["Select a Hotel", "Lake Manyara Hotel", "Lobo Wildlife Lodge", "Ngorongoro Sopa Lodge", "Ngorongoro Wildlife Lodge", "Serengeti Sopa Lodge", "Seronera Wildlife Lodge", "Tarangire Sopa Lodge"];

var star3zArray = ["Select a Hotel", "Tembo House Hotel & Apartment"];

var star3kaArray = ["Select a Hotel", "Urban City Blue (3)"];

var star4kaArray = ["Select a Hotel", "Urban City Blue (4)"];

var star5kaArray = ["Select a Hotel", "Urban City Blue (5)"];

var star6kaArray = ["Select a Hotel", "Urban City Blue (6)"];

//trying to append or replace content of the area ddl
function getHotel() {
var ratingddl = $('#ddlRating option:selected').html();
var hotelddl = $('#ddlHotel');

switch (ratingddl) {
case "3 Star (B)":
    hotelddl.empty();
    for (i = 0; i < starb3Array.length; i++) {
        hotelddl.append("<option value='" + starb3Array[i] + "'>" + starb3Array[i] + "</option>");
    }
    break;
case "4 Star (B)":
    hotelddl.empty();
    for (i = 0; i < starb4Array.length; i++) {
        hotelddl.append("<option value='" + starb4Array[i] + "'>" + starb4Array[i] + "</option>");
    }
    break;
case "5 Star (B)":
    hotelddl.empty();
    for (i = 0; i < starb5Array.length; i++) {
        hotelddl.append("<option value='" + starb5Array[i] + "'>" + starb5Array[i] + "</option>");
    }
    break;
case "4 Star (A)":
    hotelddl.empty();
    for (i = 0; i < stara4Array.length; i++) {
        hotelddl.append("<option value='" + stara4Array[i] + "'>" + stara4Array[i] + "</option>");
    }
    break;
case "5 Star (A)":
    hotelddl.empty();
    for (i = 0; i < stara5Array.length; i++) {
        hotelddl.append("<option value='" + stara5Array[i] + "'>" + stara5Array[i] + "</option>");
    }
    break;
case "4 Star (M)":
    hotelddl.empty();
    for (i = 0; i < star4mArray.length; i++) {
        hotelddl.append("<option value='" + star4mArray[i] + "'>" + star4mArray[i] + "</option>");
    }
    break;
case "5 Star (M)":
    hotelddl.empty();
    for (i = 0; i < star5mArray.length; i++) {
        hotelddl.append("<option value='" + star5mArray[i] + "'>" + star5mArray[i] + "</option>");
    }
    break;
case "3 Star (N)":
    hotelddl.empty();
    for (i = 0; i < star3nArray.length; i++) {
        hotelddl.append("<option value='" + star3nArray[i] + "'>" + star3nArray[i] + "</option>");
    }
    break;
case "4 Star (N)":
    hotelddl.empty();
    for (i = 0; i < star4nArray.length; i++) {
        hotelddl.append("<option value='" + star4nArray[i] + "'>" + star4nArray[i] + "</option>");
    }
    break;
case "5 Star (N)":
    hotelddl.empty();
    for (i = 0; i < star5nArray.length; i++) {
        hotelddl.append("<option value='" + star5nArray[i] + "'>" + star5nArray[i] + "</option>");
    }
    break;
case "Amboseli":
    hotelddl.empty();
    for (i = 0; i < amboseliArray.length; i++) {
        hotelddl.append("<option value='" + amboseliArray[i] + "'>" + amboseliArray[i] + "</option>");
    }
    break;
case "Aruba":
    hotelddl.empty();
    for (i = 0; i < arubaArray.length; i++) {
        hotelddl.append("<option value='" + arubaArray[i] + "'>" + arubaArray[i] + "</option>");
    }
    break;
case "Lake Nakuru":
    hotelddl.empty();
    for (i = 0; i < lakenakArray.length; i++) {
        hotelddl.append("<option value='" + lakenakArray[i] + "'>" + lakenakArray[i] + "</option>");
    }
    break;
case "Lake Navaisha":
    hotelddl.empty();
    for (i = 0; i < lakenavArray.length; i++) {
        hotelddl.append("<option value='" + lakenavArray[i] + "'>" + lakenavArray[i] + "</option>");
    }
    break;
case "Masai Mara":
    hotelddl.empty();
    for (i = 0; i < masaimarArray.length; i++) {
        hotelddl.append("<option value='" + masaimarArray[i] + "'>" + masaimarArray[i] + "</option>");
    }
    break;
case "Quest":
    hotelddl.empty();
    for (i = 0; i < questArray.length; i++) {
        hotelddl.append("<option value='" + questArray[i] + "'>" + questArray[i] + "</option>");
    }
    break;
case "Samburu":
    hotelddl.empty();
    for (i = 0; i < samburuArray.length; i++) {
        hotelddl.append("<option value='" + samburuArray[i] + "'>" + samburuArray[i] + "</option>");
    }
    break;
case "3 Star (Abj)":
    hotelddl.empty();
    for (i = 0; i < star3abjArray.length; i++) {
        hotelddl.append("<option value='" + star3abjArray[i] + "'>" + star3abjArray[i] + "</option>");
    }
    break;
case "3 Star (L)":
    hotelddl.empty();
    for (i = 0; i < star3lArray.length; i++) {
        hotelddl.append("<option value='" + star3lArray[i] + "'>" + star3lArray[i] + "</option>");
    }
    break;
case "3 Star (K)":
    hotelddl.empty();
    for (i = 0; i < star3kArray.length; i++) {
        hotelddl.append("<option value='" + star3kArray[i] + "'>" + star3kArray[i] + "</option>");
    }
    break;
case "2 Star":
    hotelddl.empty();
    for (i = 0; i < star2Array.length; i++) {
        hotelddl.append("<option value='" + star2Array[i] + "'>" + star2Array[i] + "</option>");
    }
    break;
case "3 Star (P)":
    hotelddl.empty();
    for (i = 0; i < star3pArray.length; i++) {
        hotelddl.append("<option value='" + star3pArray[i] + "'>" + star3pArray[i] + "</option>");
    }
    break;
case "3 Star (D)":
    hotelddl.empty();
    for (i = 0; i < star3dArray.length; i++) {
        hotelddl.append("<option value='" + star3dArray[i] + "'>" + star3dArray[i] + "</option>");
    }
    break;
case "Lodge":
    hotelddl.empty();
    for (i = 0; i < lodgeArray.length; i++) {
        hotelddl.append("<option value='" + lodgeArray[i] + "'>" + lodgeArray[i] + "</option>");
    }
    break;
case "3 Star (Z)":
    hotelddl.empty();
    for (i = 0; i < star3zArray.length; i++) {
        hotelddl.append("<option value='" + star3zArray[i] + "'>" + star3zArray[i] + "</option>");
    }
    break;
case "3 Star (Ka)":
    hotelddl.empty();
    for (i = 0; i < star3kaArray.length; i++) {
        hotelddl.append("<option value='" + star3kaArray[i] + "'>" + star3kaArray[i] + "</option>");
    }
    break;
case "4 Star (Ka)":
    hotelddl.empty();
    for (i = 0; i < star4kaArray.length; i++) {
        hotelddl.append("<option value='" + star4kaArray[i] + "'>" + star4kaArray[i] + "</option>");
    }
    break;
case "5 Star (Ka)":
    hotelddl.empty();
    for (i = 0; i < star5kaArray.length; i++) {
        hotelddl.append("<option value='" + star5kaArray[i] + "'>" + star5kaArray[i] + "</option>");
    }
    break;
case "6 Star (Ka)":
    hotelddl.empty();
    for (i = 0; i < star6kaArray.length; i++) {
        hotelddl.append("<option value='" + star6kaArray[i] + "'>" + star6kaArray[i] + "</option>");
    }
    break;
default:
    hotelddl.empty();
    for (i = 0; i < defaultHotelArray.length; i++) {
        hotelddl.append("<option value='" + defaultHotelArray[i] + "'>" + defaultHotelArray[i] + "</option>");
    }
}
};

//

//Room Base ddl

var defaultRoomArray = ["Select a Room", "Select a Hotel First"];

var seneArray = ["Select a Room", "Apartments", "Delux Rooms", "Standard Room"];

var sunsetArray = ["Select a Room", "Double Room"];

var africaArray = ["Select a Room", "Ground Floor With Swimups", "Upper Floor With Balconies"];

var kombArray = ["Select a Room", "Standard Room", "Superior Room"];

var cocoArray = ["Select a Room", "Beach Club Villa", "Deluxe / Bamboo Suites", "Junior Penthouse", "Junior Suite", "Royal Penthouse", "Senior Suite"];

var gambArray = ["Select a Room", "Classic Room", "Deluxe Baobab", "Deluxe Beach Palm", "Deluxe Sunset Palm", "Junior Suite"];

var kairaArray = ["Select a Room", "Deluxe Room", "Premium Suite", "Standard Room", "Superior Deluxe"];

var oceanArray = ["Select a Room", "Deluxe Rooms", "Deluxe Seaview Rooms"];

var ignoreArray = ["Select a Room", "Deluxe", "Standard"];

var highArray = ["Select a Room", "Deluxe", "Standard"];

var tomreikArray = ["Select a Room", "Deluxe", "Executive", "Standard", "Twin"];

var travArray = ["Select a Room", "Deluxe", "Sea Front", "Standard", "Suite"];

var bambArray = ["Select a Room", "Standard"];

var southArray = ["Select a Room", "Ocean Front", "Standard"];

var centArray = ["Select a Room", "Standard"];

var kenyaComArray = ["Select a Room", "Standard"];

var mvuliArray = ["Select a Room", "Standard"];

var sentrimArray = ["Select a Room", "Standard"];

var amberArray = ["Select a Room", "Deluxe"];

var crownArray = ["Select a Room", "Standard"];

var ekaArray = ["Select a Room", "Superior"];

var heronArray = ["Select a Room", "Superior"];

var jacarArray = ["Select a Room", "Deluxe"];

var meridArray = ["Select a Room", "Amber Hotel", "Superior"];

var nairobArray = ["Select a Room", "Superior"];

var sarovArray = ["Select a Room", "Superior"];

var silverArray = ["Select a Room", "Standard"];

var tuneArray = ["Select a Room", "Superior"];

var interArray = ["Select a Room", "Superior"];

var lazizArray = ["Select a Room", "Superior"];

var nairoArray = ["Select a Room", "Deluxe"];

var oleArray = ["Select a Room", "Superior"];

var penariArray = ["Select a Room", "Superior"];

var sstanArray = ["Select a Room", "Deluxe"];

var tbomaArray = ["Select a Room", "Superior"];

var villaArray = ["Select a Room", "Superior"];

var sopaArray = ["Select a Room", "Standardized"];

var ashnilArray = ["Select a Room", "Standardized"];

var sent6Array = ["Select a Room", "Standardized"];

var sentaArray = ["Select a Room", "Standardized"];

var sentbArray = ["Select a Room", "Standardized"];

var sentcArray = ["Select a Room", "Standardized"];

var senteArray = ["Select a Room", "Standardized"];

var sentmArray = ["Select a Room", "Standardized"];

var sentsArray = ["Select a Room", "Standardized"];

var senttArray = ["Select a Room", "Standardized"];

var amaraArray = ["Select a Room", "Luxury Tent"];

var asaburuArray = ["Select a Room", "Luxury Tent"];

var boltonArray = ["Select a Room", "Standard"];

var hawArray = ["Select a Room", "Standard"];

var stoneArray = ["Select a Room", "Standard"];

var testerArray = ["Select a Room", "Standard"];

var cityArray = ["Select a Room", "Junior Suite", "Single Room", "Suite"];

var urbanArray = ["Select a Room", "Club Rooms", "Garden Signature Suites", "Garden Twin", "Signature Suites", "Standard", "Superior"];

var anseArray = ["Select a Room", "Premier", "Self Catering", "Standard", "Superior"];

var chaletArray = ["Select a Room", "Apartment", "Standard", "Superior"];

var colbiriArray = ["Select a Room", "Standard", "Superior", "Superior Honeymoon"];

var harbourArray = ["Select a Room", "Executive Business Suite", "Executive King", "Executive Studio", "One Bedroom Suite", "Standard Studio", "Superior King", "Two Bedroom Suite"];

var uroseArray = ["Select a Room", "One Bedroom Deluxe Apartment", "One Bedroom Executive Apartment"];

var manyArray = ["Select a Room", "Standard"];

var wildArray = ["Select a Room", "Standard"];

var ngoroArray = ["Select a Room", "Standard"];

var ngorowildArray = ["Select a Room", "Standard"];

var serengArray = ["Select a Room", "Standard"];

var seronArray = ["Select a Room", "Standard"];

var taranArray = ["Select a Room", "Standard"];

var temboArray = ["Select a Room", "Deluxe Suite", "Single"];

var urban3Array = ["Select a Room", "Standard"];

var urban4Array = ["Select a Room", "Poolside"];

var urban5Array = ["Select a Room", "Club"];

var urban6Array = ["Select a Room", "Suite"];

//trying to append or replace content of the area ddl
function getRoom() {
var hotelddl = $('#ddlHotel option:selected').html();
var roomddl = $('#ddlRoom');

switch (hotelddl) {
case "Senegambia Beach Hotel":
    roomddl.empty();
    for (i = 0; i < seneArray.length; i++) {
        roomddl.append("<option value='" + seneArray[i] + "'>" + seneArray[i] + "</option>");
    }
    break;
case "Sunset Beach Hotel":
    roomddl.empty();
    for (i = 0; i < sunsetArray.length; i++) {
        roomddl.append("<option value='" + sunsetArray[i] + "'>" + sunsetArray[i] + "</option>");
    }
    break;
case "African Princess Beach":
    roomddl.empty();
    for (i = 0; i < africaArray.length; i++) {
        roomddl.append("<option value='" + africaArray[i] + "'>" + africaArray[i] + "</option>");
    }
    break;
case "Kombo Beach Hotel":
    roomddl.empty();
    for (i = 0; i < kombArray.length; i++) {
        roomddl.append("<option value='" + kombArray[i] + "'>" + kombArray[i] + "</option>");
    }
    break;
case "Coco Ocean Resort & Spa":
    roomddl.empty();
    for (i = 0; i < cocoArray.length; i++) {
        roomddl.append("<option value='" + cocoArray[i] + "'>" + cocoArray[i] + "</option>");
    }
    break;
case "Gambia Coral Beach Hotel":
    roomddl.empty();
    for (i = 0; i < gambArray.length; i++) {
        roomddl.append("<option value='" + gambArray[i] + "'>" + gambArray[i] + "</option>");
    }
    break;
case "Kairaba Beach Hotel":
    roomddl.empty();
    for (i = 0; i < kairaArray.length; i++) {
        roomddl.append("<option value='" + kairaArray[i] + "'>" + kairaArray[i] + "</option>");
    }
    break;
case "Ocean Bay Hotel":
    roomddl.empty();
    for (i = 0; i < oceanArray.length; i++) {
        roomddl.append("<option value='" + oceanArray[i] + "'>" + oceanArray[i] + "</option>");
    }
    break;
case "Ignore":
    roomddl.empty();
    for (i = 0; i < ignoreArray.length; i++) {
        roomddl.append("<option value='" + ignoreArray[i] + "'>" + ignoreArray[i] + "</option>");
    }
    break;
case "Highbridge Guest Lodge":
    roomddl.empty();
    for (i = 0; i < highArray.length; i++) {
        roomddl.append("<option value='" + highArray[i] + "'>" + highArray[i] + "</option>");
    }
    break;
case "Tomreik Hotel":
    roomddl.empty();
    for (i = 0; i < tomreikArray.length; i++) {
        roomddl.append("<option value='" + tomreikArray[i] + "'>" + tomreikArray[i] + "</option>");
    }
    break;
case "Travellers Beach Hotel":
    roomddl.empty();
    for (i = 0; i < travArray.length; i++) {
        roomddl.append("<option value='" + travArray[i] + "'>" + travArray[i] + "</option>");
    }
    break;
case "Bambura Beach Hotel":
    roomddl.empty();
    for (i = 0; i < bambArray.length; i++) {
        roomddl.append("<option value='" + bambArray[i] + "'>" + bambArray[i] + "</option>");
    }
    break;
case "Southern Palm Beach Resort":
    roomddl.empty();
    for (i = 0; i < southArray.length; i++) {
        roomddl.append("<option value='" + southArray[i] + "'>" + southArray[i] + "</option>");
    }
    break;
case "Central Park Hotel":
    roomddl.empty();
    for (i = 0; i < centArray.length; i++) {
        roomddl.append("<option value='" + centArray[i] + "'>" + centArray[i] + "</option>");
    }
    break;
case "Kenya Comfort Hotel Suite":
    roomddl.empty();
    for (i = 0; i < kenyaComArray.length; i++) {
        roomddl.append("<option value='" + kenyaComArray[i] + "'>" + kenyaComArray[i] + "</option>");
    }
    break;
case "Mvuli Hotel":
    roomddl.empty();
    for (i = 0; i < mvuliArray.length; i++) {
        roomddl.append("<option value='" + mvuliArray[i] + "'>" + mvuliArray[i] + "</option>");
    }
    break;
case "Sentrim Boulevard Hotel":
    roomddl.empty();
    for (i = 0; i < sentrimArray.length; i++) {
        roomddl.append("<option value='" + sentrimArray[i] + "'>" + sentrimArray[i] + "</option>");
    }
    break;
case "Amber Hotel":
    roomddl.empty();
    for (i = 0; i < amberArray.length; i++) {
        roomddl.append("<option value='" + amberArray[i] + "'>" + amberArray[i] + "</option>");
    }
    break;
case "Crowne Plaza Hotel":
    roomddl.empty();
    for (i = 0; i < crownArray.length; i++) {
        roomddl.append("<option value='" + crownArray[i] + "'>" + crownArray[i] + "</option>");
    }
    break;
case "eka Hotel":
    roomddl.empty();
    for (i = 0; i < ekaArray.length; i++) {
        roomddl.append("<option value='" + ekaArray[i] + "'>" + ekaArray[i] + "</option>");
    }
    break;
case "Heron Portico":
    roomddl.empty();
    for (i = 0; i < heronArray.length; i++) {
        roomddl.append("<option value='" + heronArray[i] + "'>" + heronArray[i] + "</option>");
    }
    break;
case "Jacaranda Hotel":
    roomddl.empty();
    for (i = 0; i < jacarArray.length; i++) {
        roomddl.append("<option value='" + jacarArray[i] + "'>" + jacarArray[i] + "</option>");
    }
    break;
case "Meridien Court":
    roomddl.empty();
    for (i = 0; i < meridArray.length; i++) {
        roomddl.append("<option value='" + meridArray[i] + "'>" + meridArray[i] + "</option>");
    }
    break;
case "Nairobi Safari Club":
    roomddl.empty();
    for (i = 0; i < nairobArray.length; i++) {
        roomddl.append("<option value='" + nairobArray[i] + "'>" + nairobArray[i] + "</option>");
    }
    break;
case "Sarova Panafic Hotel":
    roomddl.empty();
    for (i = 0; i < sarovArray.length; i++) {
        roomddl.append("<option value='" + sarovArray[i] + "'>" + sarovArray[i] + "</option>");
    }
    break;
case "Silver Springs Hotel":
    roomddl.empty();
    for (i = 0; i < silverArray.length; i++) {
        roomddl.append("<option value='" + silverArray[i] + "'>" + silverArray[i] + "</option>");
    }
    break;
case "Tune Hotel":
    roomddl.empty();
    for (i = 0; i < tuneArray.length; i++) {
        roomddl.append("<option value='" + tuneArray[i] + "'>" + tuneArray[i] + "</option>");
    }
    break;//next batch
case "Intercontinental Hotel":
    roomddl.empty();
    for (i = 0; i < interArray.length; i++) {
        roomddl.append("<option value='" + interArray[i] + "'>" + interArray[i] + "</option>");
    }
    break;
case "Laziz Premere Hotel":
    roomddl.empty();
    for (i = 0; i < lazizArray.length; i++) {
        roomddl.append("<option value='" + lazizArray[i] + "'>" + lazizArray[i] + "</option>");
    }
    break;
case "Nairobi Serena Hotel":
    roomddl.empty();
    for (i = 0; i < nairoArray.length; i++) {
        roomddl.append("<option value='" + nairoArray[i] + "'>" + nairoArray[i] + "</option>");
    }
    break;
case "Ole Sereni Hotel":
    roomddl.empty();
    for (i = 0; i < oleArray.length; i++) {
        roomddl.append("<option value='" + oleArray[i] + "'>" + oleArray[i] + "</option>");
    }
    break;
case "Penari Hotel":
    roomddl.empty();
    for (i = 0; i < penariArray.length; i++) {
        roomddl.append("<option value='" + penariArray[i] + "'>" + penariArray[i] + "</option>");
    }
    break;
case "Sarovs Stanley":
    roomddl.empty();
    for (i = 0; i < sstanArray.length; i++) {
        roomddl.append("<option value='" + sstanArray[i] + "'>" + sstanArray[i] + "</option>");
    }
    break;
case "THe Boma":
    roomddl.empty();
    for (i = 0; i < tbomaArray.length; i++) {
        roomddl.append("<option value='" + tbomaArray[i] + "'>" + tbomaArray[i] + "</option>");
    }
    break;
case "Villa Rosa Kempinski":
    roomddl.empty();
    for (i = 0; i < villaArray.length; i++) {
        roomddl.append("<option value='" + villaArray[i] + "'>" + villaArray[i] + "</option>");
    }
    break;
case "Sopa Lodge":
    roomddl.empty();
    for (i = 0; i < sopaArray.length; i++) {
        roomddl.append("<option value='" + sopaArray[i] + "'>" + sopaArray[i] + "</option>");
    }
    break;
case "Ashnil Aruba Lodge":
    roomddl.empty();
    for (i = 0; i < ashnilArray.length; i++) {
        roomddl.append("<option value='" + ashnilArray[i] + "'>" + ashnilArray[i] + "</option>");
    }
    break;
case "Sentrim 680":
    roomddl.empty();
    for (i = 0; i < sent6Array.length; i++) {
        roomddl.append("<option value='" + sent6Array[i] + "'>" + sent6Array[i] + "</option>");
    }
    break;
case "Sentrim Amboseli":
    roomddl.empty();
    for (i = 0; i < sentaArray.length; i++) {
        roomddl.append("<option value='" + sentaArray[i] + "'>" + sentaArray[i] + "</option>");
    }
    break;
case "Sentrim Boulevard":
    roomddl.empty();
    for (i = 0; i < sentbArray.length; i++) {
        roomddl.append("<option value='" + sentbArray[i] + "'>" + sentbArray[i] + "</option>");
    }
    break;
case "Sentrim Castle":
    roomddl.empty();
    for (i = 0; i < sentcArray.length; i++) {
        roomddl.append("<option value='" + sentcArray[i] + "'>" + sentcArray[i] + "</option>");
    }
    break;
case "Sentrim Elementaita":
    roomddl.empty();
    for (i = 0; i < senteArray.length; i++) {
        roomddl.append("<option value='" + senteArray[i] + "'>" + senteArray[i] + "</option>");
    }
    break;
case "Sentrim Mara":
    roomddl.empty();
    for (i = 0; i < sentmArray.length; i++) {
        roomddl.append("<option value='" + sentmArray[i] + "'>" + sentmArray[i] + "</option>");
    }
    break;
case "Sentrim Samburu":
    roomddl.empty();
    for (i = 0; i < sentsArray.length; i++) {
        roomddl.append("<option value='" + sentsArray[i] + "'>" + sentsArray[i] + "</option>");
    }
    break;
case "Sentrim Tsavo":
    roomddl.empty();
    for (i = 0; i < senttArray.length; i++) {
        roomddl.append("<option value='" + senttArray[i] + "'>" + senttArray[i] + "</option>");
    }
    break;
case "Ashnil Mara Camp":
    roomddl.empty();
    for (i = 0; i < amaraArray.length; i++) {
        roomddl.append("<option value='" + amaraArray[i] + "'>" + amaraArray[i] + "</option>");
    }
    break;
case "Ashnil Saburu Camp":
    roomddl.empty();
    for (i = 0; i < asaburuArray.length; i++) {
        roomddl.append("<option value='" + asaburuArray[i] + "'>" + asaburuArray[i] + "</option>");
    }
    break;
case "Bolton White Hotel":
    roomddl.empty();
    for (i = 0; i < boltonArray.length; i++) {
        roomddl.append("<option value='" + boltonArray[i] + "'>" + boltonArray[i] + "</option>");
    }
    break;
case "Hawthorn Suites":
    roomddl.empty();
    for (i = 0; i < hawArray.length; i++) {
        roomddl.append("<option value='" + hawArray[i] + "'>" + hawArray[i] + "</option>");
    }
    break;
case "Stonehedge Suites":
    roomddl.empty();
    for (i = 0; i < stoneArray.length; i++) {
        roomddl.append("<option value='" + stoneArray[i] + "'>" + stoneArray[i] + "</option>");
    }
    break;
case "Tester Hotel":
    roomddl.empty();
    for (i = 0; i < testerArray.length; i++) {
        roomddl.append("<option value='" + testerArray[i] + "'>" + testerArray[i] + "</option>");
    }
    break;
case "City Blue Hotel & Suites":
    roomddl.empty();
    for (i = 0; i < cityArray.length; i++) {
        roomddl.append("<option value='" + cityArray[i] + "'>" + cityArray[i] + "</option>");
    }
    break;
case "Urban City Blue Hotel":
    roomddl.empty();
    for (i = 0; i < urbanArray.length; i++) {
        roomddl.append("<option value='" + urbanArray[i] + "'>" + urbanArray[i] + "</option>");
    }
    break;
case "Anse Soleil Beachcomber":
    roomddl.empty();
    for (i = 0; i < anseArray.length; i++) {
        roomddl.append("<option value='" + anseArray[i] + "'>" + anseArray[i] + "</option>");
    }
    break;
case "Chalets Cote Mer":
    roomddl.empty();
    for (i = 0; i < chaletArray.length; i++) {
        roomddl.append("<option value='" + chaletArray[i] + "'>" + chaletArray[i] + "</option>");
    }
    break;//third batch
case "Colbiri Guest House":
    roomddl.empty();
    for (i = 0; i < colbiriArray.length; i++) {
        roomddl.append("<option value='" + colbiriArray[i] + "'>" + colbiriArray[i] + "</option>");
    }
    break;
case "Harbour View Suites":
    roomddl.empty();
    for (i = 0; i < harbourArray.length; i++) {
        roomddl.append("<option value='" + harbourArray[i] + "'>" + harbourArray[i] + "</option>");
    }
    break;
case "Urban Rose Hotel & Apartments":
    roomddl.empty();
    for (i = 0; i < uroseArray.length; i++) {
        roomddl.append("<option value='" + uroseArray[i] + "'>" + uroseArray[i] + "</option>");
    }
    break;
case "Lake Manyara Hotel":
    roomddl.empty();
    for (i = 0; i < manyArray.length; i++) {
        roomddl.append("<option value='" + manyArray[i] + "'>" + manyArray[i] + "</option>");
    }
    break;
case "Lobo Wildlife Lodge":
    roomddl.empty();
    for (i = 0; i < wildArray.length; i++) {
        roomddl.append("<option value='" + wildArray[i] + "'>" + wildArray[i] + "</option>");
    }
    break;
case "Ngorongoro Sopa Lodge":
    roomddl.empty();
    for (i = 0; i < ngoroArray.length; i++) {
        roomddl.append("<option value='" + ngoroArray[i] + "'>" + ngoroArray[i] + "</option>");
    }
    break;
case "Ngorongoro Wildlife Lodge":
    roomddl.empty();
    for (i = 0; i < ngorowildArray.length; i++) {
        roomddl.append("<option value='" + ngorowildArray[i] + "'>" + ngorowildArray[i] + "</option>");
    }
    break;
case "Serengeti Sopa Lodge":
    roomddl.empty();
    for (i = 0; i < serengArray.length; i++) {
        roomddl.append("<option value='" + serengArray[i] + "'>" + serengArray[i] + "</option>");
    }
    break;
case "Seronera Wildlife Lodge":
    roomddl.empty();
    for (i = 0; i < seronArray.length; i++) {
        roomddl.append("<option value='" + seronArray[i] + "'>" + seronArray[i] + "</option>");
    }
    break;
case "Tarangire Sopa Lodge":
    roomddl.empty();
    for (i = 0; i < taranArray.length; i++) {
        roomddl.append("<option value='" + taranArray[i] + "'>" + taranArray[i] + "</option>");
    }
    break;
case "Tembo House Hotel & Apartment":
    roomddl.empty();
    for (i = 0; i < temboArray.length; i++) {
        roomddl.append("<option value='" + temboArray[i] + "'>" + temboArray[i] + "</option>");
    }
    break;
case "Urban City Blue (3)":
    roomddl.empty();
    for (i = 0; i < urban3Array.length; i++) {
        roomddl.append("<option value='" + urban3Array[i] + "'>" + urban3Array[i] + "</option>");
    }
    break;
case "Urban City Blue (4)":
    roomddl.empty();
    for (i = 0; i < urban4Array.length; i++) {
        roomddl.append("<option value='" + urban4Array[i] + "'>" + urban4Array[i] + "</option>");
    }
    break;
case "Urban City Blue (5)":
    roomddl.empty();
    for (i = 0; i < urban5Array.length; i++) {
        roomddl.append("<option value='" + urban5Array[i] + "'>" + urban5Array[i] + "</option>");
    }
    break;
case "Urban City Blue (6)":
    roomddl.empty();
    for (i = 0; i < urban6Array.length; i++) {
        roomddl.append("<option value='" + urban6Array[i] + "'>" + urban6Array[i] + "</option>");
    }
    break;
    default:
    hotelddl.empty();
    for (i = 0; i < defaultRoomArray.length; i++) {
        hotelddl.append("<option value='" + defaultRoomArray[i] + "'>" + defaultRoomArray[i] + "</option>");
    }
}
};

var countryVisa = ["Nigeria", "Gambia"];
var visa = "visa";

if (countryVisa === selected) {
        visa.disabled;
}

//trying to redirect
function BtnSearch() {
var catddl2 = $('#ddlCategory option:selected').html(); 
var stateddl2 = $('#ddlState option:selected').html();
var areaddl2 = $('#ddlArea option:selected').html();

switch (stateddl2) {
case "Lagos":
    window.location.href = "view.php";
    break;
case "English Language":
    window.location.href = "view.php";
    break;
case "Elementary Science":
    window.location.href = "view.php";
    break;
default:
    window.location.href = "view.php";
    break;
}
};