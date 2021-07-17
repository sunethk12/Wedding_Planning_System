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


    var password = document.getElementById('password');
    var flag = 1;
	
    function check(elem) {
        if (elem.value.length > 0) {
            if (elem.value != password.value) {
                document.getElementById('alert').innerHTML = "Confirm password does not match ";
                flag = 0;
            } else {
                document.getElementById('alert').innerHTML = "";
                flag = 1;

            }
        } else {
            document.getElementById('alert').innerHTML = "Please enter confirm password";
            flag = 0;
        }

    }

    function validate() {
        if (flag == 1) {
            return true;
        } else {
            return false;
        }
    }
	
	
	
	
	function checktp(){
	var tp=document.getElementById('cont').value;
	//alert(tp);
	if(isNaN(tp) || (tp.length)!=10){
        document.getElementById("tpalert1").innerHTML = "Enter Valid Contact Number";

    } else{
        document.getElementById("tpalert1").innerHTML = " ";

    }
	
	
	}
	
	
	
	

