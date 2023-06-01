$(document).ready(function(){

    // Alert message time before fading ------------------------------->
    setTimeout(function() {
        $("#importAlert").fadeOut(1500);
        }, 3200);

    // Navigator toggler --------------------------------------------->
    
    $("#small-nav-toggler").on('click', function(){
        $("#sideNav").width("140px");
        $(".navbar-nav").show();
        $(".btn-close").show();
    })
    $(".btn-close").on('click', function(){
        $("#sideNav").width("0px");
        $(".navbar-nav").hide();
        $(".btn-close").hide();
    })

    // Batch filter ------------------------------------->

    $("#table1").hide();
    $("#table2").hide();
    $("#table3").hide();
    $("#table4").hide();
    $("#table5").hide();

    $(".No_data").hide();
    $(".No_data1").hide();
    $(".No_data2").hide();
    $(".No_data3").hide();
    $(".No_data4").hide();
    $(".No_data5").hide();

    $("#card1").hide();
    $("#card2").hide();
    $("#card3").hide();
    $("#card4").hide();
    $("#card5").hide();

    $("#btnReport1").hide();
    $("#btnReport2").hide();
    $("#btnReport3").hide();
    $("#btnReport4").hide();
    $("#btnReport5").hide();

    $("#batch").on('change', function(){
        var select_value = this.value;

        if(select_value == "--- Batch - 2018 ---")
        {
            $("#table").hide();
            $("#table1").show();
            $("#table2").hide();
            $("#table3").hide();
            $("#table4").hide();
            $("#table5").hide();
           
            $(".No_data").hide();
            $(".No_data1").show();
            $(".No_data2").hide();
            $(".No_data3").hide();
            $(".No_data4").hide();
            $(".No_data5").hide();

            $("#card").hide();
            $("#card1").show();
            $("#card2").hide();
            $("#card3").hide();
            $("#card4").hide();
            $("#card5").hide();

            $("#btnReport").hide();
            $("#btnReport1").show();
            $("#btnReport2").hide();
            $("#btnReport3").hide();
            $("#btnReport4").hide();
            $("#btnReport5").hide();

        }
        else if(select_value == "--- Batch - 2019 ---")
        {
            $("#table").hide();
            $("#table1").hide();
            $("#table2").show();
            $("#table3").hide();
            $("#table4").hide();
            $("#table5").hide();
           
            $(".No_data").hide();
            $(".No_data1").hide();
            $(".No_data2").show();
            $(".No_data3").hide();
            $(".No_data4").hide();
            $(".No_data5").hide();

            $("#card").hide();
            $("#card1").hide();
            $("#card2").show();
            $("#card3").hide();
            $("#card4").hide();
            $("#card5").hide();

            $("#btnReport").hide();
            $("#btnReport1").hide();
            $("#btnReport2").show();
            $("#btnReport3").hide();
            $("#btnReport4").hide();
            $("#btnReport5").hide();

        }
        else if(select_value == "--- Batch - 2020 ---")
        {
            $("#table").hide();
            $("#table1").hide();
            $("#table2").hide();
            $("#table3").show();
            $("#table4").hide();
            $("#table5").hide();
           
            $(".No_data").hide();
            $(".No_data1").hide();
            $(".No_data2").hide();
            $(".No_data3").show();
            $(".No_data4").hide();
            $(".No_data5").hide();

            $("#card").hide();
            $("#card1").hide();
            $("#card2").hide();
            $("#card3").show();
            $("#card4").hide();
            $("#card5").hide();

            $("#btnReport").hide();
            $("#btnReport1").hide();
            $("#btnReport2").hide();
            $("#btnReport3").show();
            $("#btnReport4").hide();
            $("#btnReport5").hide();

        }
        else if(select_value == "--- Batch - 2021 ---")
        {
            $("#table").hide();
            $("#table1").hide();
            $("#table2").hide();
            $("#table3").hide();
            $("#table4").show();
            $("#table5").hide();
           
            $(".No_data").hide();
            $(".No_data1").hide();
            $(".No_data2").hide();
            $(".No_data3").hide();
            $(".No_data4").show();
            $(".No_data5").hide();

            $("#card").hide();
            $("#card1").hide();
            $("#card2").hide();
            $("#card3").hide();
            $("#card4").show();
            $("#card5").hide();

            $("#btnReport").hide();
            $("#btnReport1").hide();
            $("#btnReport2").hide();
            $("#btnReport3").hide();
            $("#btnReport4").show();
            $("#btnReport5").hide();

        }
        else if(select_value == "--- Batch - 2022 ---")
        {
            $("#table").hide();
            $("#table1").hide();
            $("#table2").hide();
            $("#table3").hide();
            $("#table4").hide();
            $("#table5").show();

            $("#card").hide();
            $("#card1").hide();
            $("#card2").hide();
            $("#card3").hide();
            $("#card4").hide();
            $("#card5").show();
           
            $(".No_data").hide();
            $(".No_data1").hide();
            $(".No_data2").hide();
            $(".No_data3").hide();
            $(".No_data4").hide();
            $(".No_data5").show();

            $("#btnReport").hide();
            $("#btnReport1").hide();
            $("#btnReport2").hide();
            $("#btnReport3").hide();
            $("#btnReport4").hide();
            $("#btnReport5").show();

        }
        else{
            $("#table").show();
            $("#table1").hide();
            $("#table2").hide();
            $("#table3").hide();
            $("#table4").hide();
            $("#table5").hide();
           
            $(".No_data").show();
            $(".No_data1").hide();
            $(".No_data2").hide();
            $(".No_data3").hide();
            $(".No_data4").hide();
            $(".No_data5").hide();

            $("#card").show();
            $("#card1").hide();
            $("#card2").hide();
            $("#card3").hide();
            $("#card4").hide();
            $("#card5").hide();

            $("#btnReport").show();
            $("#btnReport1").hide();
            $("#btnReport2").hide();
            $("#btnReport3").hide();
            $("#btnReport4").hide();
            $("#btnReport5").hide();

        }
    })
})

