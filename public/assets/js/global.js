(function ($) {
    'use strict';
    /*==================================================================
        [ Daterangepicker ]*/
    try {
        $('.js-datepicker').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "autoUpdateInput": false,
            locale: {
                format: 'DD/MM/YYYY'
            },
        });

        var myCalendar = $('.js-datepicker');
        var isClick = 0;

        $(window).on('click',function(){
            isClick = 0;
        });

        $(myCalendar).on('apply.daterangepicker',function(ev, picker){
            isClick = 0;
            $(this).val(picker.startDate.format('DD/MM/YYYY'));

        });

        $('.js-btn-calendar').on('click',function(e){
            e.stopPropagation();

            if(isClick === 1) isClick = 0;
            else if(isClick === 0) isClick = 1;

            if (isClick === 1) {
                myCalendar.focus();
            }
        });

        $(myCalendar).on('click',function(e){
            e.stopPropagation();
            isClick = 1;
        });

        $('.daterangepicker').on('click',function(e){
            e.stopPropagation();
        });


    } catch(er) {console.log(er);}
    /*[ Select 2 Config ]
        ===========================================================*/

    try {
        var selectSimple = $('.js-select-simple');

        selectSimple.each(function () {
            var that = $(this);
            var selectBox = that.find('select');
            var selectDropdown = that.find('.select-dropdown');
            selectBox.select2({
                dropdownParent: selectDropdown
            });
        });

    } catch (err) {
        console.log(err);
    }

})(jQuery);

function etudeSelect_function()
{
    var a=document.getElementById("etude").value;
    if(a==="Bac Science" | a==="Bac Science +")
    {
        var arr=["Kinésithérapeute","Sage femme", "Infirmier polyvalent", "Infirmier auxilaire","Aide soignant","Vendeur pharmacie"];
    }
    else if(a==="Bac" | a==="Bac+")
    {
        var arr=["Sage femme", "Infirmier polyvalent", "Infirmier auxilaire","Aide soignant","Vendeur pharmacie"];

    }
    else if(a==="Niveau Bac" )
    {
        var arr=["Infirmier auxilaire","Aide soignant","Vendeur pharmacie"];

    }
    else {
        var arr=["Aide soignant","Vendeur pharmacie"];
    }

    var string="";

    string="<option disabled='disabled' selected='selected'>1er Choix</option>"
    for(i=0;i<arr.length;i++)
    {
        string=string+"<option>"+arr[i]+"</option>";
    }
    document.getElementById("choix_1").innerHTML=string;

    string="<option disabled='disabled' selected='selected'>2eme Choix</option>"
    for(i=0;i<arr.length;i++)
    {
        string=string+"<option>"+arr[i]+"</option>";
    }

    document.getElementById("choix_2").innerHTML=string;
}
