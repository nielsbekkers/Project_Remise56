/**
 * Created by Soufiane on 22/11/2016.
 */
$( function() {

    var datum = null;
    var uur = null;
    var personen = null;

    // Verbergen
    $("#FrmReservatieGroepUur").hide();
    $("#FrmReservatieGroepPersonen").hide();
    $("#FrmReservatie2").hide();
    $("#FrmReservatieVolgende").hide();
    $('#FrmReservatieSubmit').hide();



    $( "#datepicker" ).datepicker({
        inline: true,
        dateFormat: 'yy-mm-dd',
        monthNames: [ "Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December" ],
        dayNames: [ "Zondag", "Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag" ],
        dayNamesMin: [ "Zo", "Ma", "Di", "Wo", "Do", "Vr", "Za" ],
        firstDay: 1, //maandag
        altField: "#datepickerhelper",
        minDate: 0,
        onSelect: function (date) {
            //alert(date);
            // $("#FrmReservatieGroepUur").show();
            $("#FrmReservatieGroepUur").fadeIn(1000);

            datum = date;
        }
    });



    $("#FrmReservatieUur").click(function(){
        $("#FrmReservatieGroepPersonen").fadeIn(1000);
        uur = $("#FrmReservatieUur option:selected").text();
    })

    $("#FrmReservatiePersonen").click(function(){
        $("#FrmReservatieVolgende").fadeIn(1000);
    })

    $("#FrmReservatieVolgende").click(function(){
        $("#FrmReservatie1").hide();
        $("#FrmReservatie2").show();
        personen = $("#FrmReservatiePersonen option:selected").text()

        $("#datum").text(datum) ;$("#uur").text(uur) ;$("#personen").text(personen) ;
    })

    $("#FrmReservatieVorige").click(function(){
        $("#FrmReservatie1").show();
        $("#FrmReservatie2").hide();
    })

} );

function doSomething() {
    $('#FrmReservatieSubmit').show();

}

