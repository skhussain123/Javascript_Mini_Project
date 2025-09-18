<style>
    #measureme {
        margin: 0px auto;
        padding: 10px 20px 10px 20px;
        max-width: 450px;
    }

    #measureme .inputmeasure {
        width: 58px;
        text-align: center;
    }

    #measureme input {
        height: 25px;
    }

    #measureme .btnft {
        cursor: pointer;
        background: #000;
        color: #fff;
        padding: 8px;
        height: 43px;
        border: 1px solid #000;
        margin: 5px 0;
    }

    #measureme .btnsmft {
        cursor: pointer;
        margin: 5px 0;
        background: #ca9a30;
        color: #fff;
        padding: 8px;
        border: 1px solid #d79f25;
        height: 43px;
    }

    #measureme .btnrg {
        cursor: pointer;
        margin: 5px 0;
        background: #000;
        color: #fff;
        padding: 8px;
        border: 1px solid #000;
        height: 43px;
    }

    #measureme button {
        padding: 10px 9px;
        margin-bottom: 5px;
        font-weight: bold;
    }

    @media screen and (max-device-width:480px) {
        #measureme button {
            padding: 10px 6px;
            margin-bottom: 5px;
        }
    }

    .calculbuttons {
        border-radius: 4px;
        background-color: #d79f25;
        color: black;
        border: none;
        font-weight: 700 !important;
    }

    .calculbuttons:hover {
        background-color: grey !important;
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="wpb_wrapper">


                <div style="margin-top: 15px;">

                    <div id="measureme">
                        <p style="color: #ca9a30;background: #000;padding: 15px 15px;border-radius:5px;">
                            <b style="font-size: 14px;">NECK (*Inch):</b>
                            <input style="padding: 0px;width: 45px;text-align: center; margin-right: 8px; background: #2a2a2a;font-weight: bold;color: #eee;" type="text" id="NECK1" value="16.0" onkeyup="playAudio2();" name="NECK1">
                            <b style="font-size: 14px;">HEIGHT:</b>
                            <input type="text" style="text-align: center; padding: 0px;width: 17px;background: #2a2a2a;font-weight: bold;color: #eee;" id="HEIGHT1" value="5" onkeyup="playAudio2();" name="HEIGHT1">
                            <b style="font-size: 14px;">*ft </b>
                            <input type="text" style="text-align: center; padding: 0px;width: 30px;background: #2a2a2a;font-weight: bold;color: #eee;" id="HEIGHT2" value="8.4" onkeyup="playAudio2();" name="HEIGHT2">
                            <b style="font-size: 14px;">*Inch</b>
                        </p>


                        <p style="padding: 7px 7px;border-radius:5px;">

                            <span style="display: flex;">
                                <b style="font-size: 14px;color:gray">SHOULDER</b>
                                <span class="ms-1 me-1">:</span> <input class="form" style="width: 100%;color:#4C4C4C" type="text" id="SHLDR" name="SHLDR">
                            </span>


                            <span class="mt-4" style="display: flex;">
                                <b style="font-size: 14px;color:gray">SLEEVES</b>
                                <span class="ms-1 me-1">:</span> <input class="form" style="width: 30%;color:#4C4C4C" type="text" id="SLV" name="SLV">

                                <b style="font-size: 14px;color:gray" class="ms-2">SHAPE</b>
                                <span class="ms-1 me-1">:</span> <input class="inputmeasure" style="width: 30%;color:#4C4C4C" type="text" id="Shape_Top" name="Shape_Top">
                                <span class="ms-1 me-1">:</span> <input class="inputmeasure" style="width: 30%;color:#4C4C4C" type="text" id="Shape_Bottom" name="Shape_Bottom">

                            </span>

                            <span class="mt-4" style="display: flex;">
                                <b style="font-size: 14px;color:gray">CUFF 180*</b>
                                <span class="ms-1 me-1">:</span> <input class="form" style="width: 80%;color:#4C4C4C" type="text" id="CUFF" name="CUFF">
                            </span>


                            <span class="mt-4" style="display: flex;">
                                <b style="font-size: 14px;color:gray">CHEST 360*</b>
                                <span class="ms-1 me-1">:</span> <input class="form" style="width: 77%;color:#4C4C4C" type="text" id="CHEST360" name="CHEST360">
                            </span>

                            <span class="mt-4" style="display: flex;">
                                <b style="font-size: 14px;color:gray">CHEST</b>
                                <span class="ms-1 me-1">:</span> <input class="form" style="width: 30%;color:#4C4C4C" type="text" id="CHEST" name="CHEST">

                                <b style="font-size: 14px;color:gray" class="ms-2">WAIST</b>
                                <span class="ms-1 me-1">:</span> <input class="form" style="width: 30%;color:#4C4C4C" type="text" id="WAIST" name="WAIST">

                                <b style="font-size: 14px;color:gray" class="ms-2">DAMAN</b>
                                <span class="ms-1 me-1">:</span> <input class="form" style="width: 30%;color:#4C4C4C" type="text" id="DAMAN" name="DAMAN">

                            </span>

                            <span class="mt-4" style="display: flex;">
                                <b style="font-size: 14px;color:gray">PATTI</b>
                                <span class="ms-1 me-1">:</span> <input class="form" style="width: 88%;color:#4C4C4C" type="text" id="PATTI" name="PATTI">
                            </span>


                            <span class="mt-4" style="display: flex;">
                                <b style="font-size: 14px;color:gray">ARMHOLE 180*</b>
                                <span class="ms-1 me-1">:</span> <input style="width: 71%;color:#4C4C4C" type="text" id="Armhole" name="Armhole">
                            </span>


                            <span class="mt-4" style="display: flex;">
                                <b style="font-size: 14px;color:gray">KAMEEZ | ON KNEES</b>
                                <span class="ms-1 me-1">:</span> <input class="form" style="width: 20%;color:#4C4C4C" type="text" id="ONKNEES" name="ONKNEES">

                                <b style="font-size: 14px;color:gray" class="ms-1">OFF KNEES</b>
                                <span class="ms-1 me-1">:</span> <input class="form" style="width: 20%;color:#4C4C4C" type="text" id="OFFKNEES" name="OFFKNEES">

                            </span>


                            <span class="mt-4" style="display: flex;">
                                <b style="font-size: 14px;color:gray">SHALWAR</b>
                                <span class="ms-1 me-1">:</span> <input class="form" style="width: 27%;color:#4C4C4C" type="text" id="SHALWAR" name="SHALWAR">

                                <b style="font-size: 14px;color:gray" class="ms-2">PAICHA 180*</b>
                                <span class="ms-1 me-1">:</span> <input class="" style="width: 26%;color:#4C4C4C" type="text" id="PAICHA" name="PAICHA">

                            </span>

                            <span class="mt-4" style="display: flex; justify-content: center; gap: 34px;">
                                <button class="calculbuttons" style="font-size: 14px;" onclick="measure_slim(); playAudio();">SLIM FIT</button>
                                <button class="calculbuttons" style="font-size: 14px;" onclick="measure_smart(); playAudio();">SMART FIT</button>
                                <button class="calculbuttons" style="font-size: 14px;" onclick="measure_regular(); playAudio();">REGULAR FIT</button>
                            </span>








                        </p>

                    </div>




                </div>


                <p><audio id="audio">
                        <source src="voice2.mp3" type="audio/mpeg" />
                    </audio><br />
                    <audio id="audio2">
                        <source src="voice1.mp3" type="audio/mpeg" />
                    </audio>
                </p>


            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<script type="text/javascript">
    // SMART FITTING
    function measure_smart() {
        var NECK2 = parseFloat(document.getElementById("NECK1").value);
        var HEIGHT1 = parseFloat(document.getElementById("HEIGHT1").value);
        var HEIGHT2 = parseFloat(document.getElementById("HEIGHT2").value);

        var height22 = (HEIGHT1 * 12) + HEIGHT2;
        var SHLDR = NECK2 + 2;
        var slv1 = (NECK2 * 2.5) / 2
        var SLV = (height22 - slv1) / 2;
        var Shape_Top = NECK2 / 2;
        var Shape_Bottom = Shape_Top - 1.5;
        var CUFF = (NECK2 + 2) / 2;
        var CHEST360 = (NECK2 * 2.47);
        if (NECK2 < 16) {
            CHEST360 = NECK2 * 2.35;
        }
        var CHEST = (CHEST360 + 6) / 2;
        var WAIST = CHEST - 1;
        var DAMAN = CHEST;
        var PATTI = NECK2;
        var Armhole = CHEST360 / 4;
        var PAICHA = 8;

        // Below Ankles
        var OFFKNEES = height22 - (height22 / 8) * 3;
        //Above ankles 
        var ONKNEES = OFFKNEES - 3;

        var SHALWAR = (height22 / 8) * 4.6;

        if (NECK2 < 15 && height22 > 66) {
            CUFF = CUFF + 0.5;
            PATTI = NECK2 + 1.5;
        }

        if (NECK2 < 15 && height22 > 68.4) {
            SHLDR = NECK2 + 2.5;
            CUFF = CUFF + 0.5;
            PATTI = NECK2 + 1.5;
        }

        if (NECK2 > 16 && height22 < 70.2) {
            PATTI = NECK2 - 0.5;
        }

        if (NECK2 < 15) {
            PAICHA = 7.5;
        }


        if (NECK2 > 17) {
            SHLDR = NECK2 + 2.5;
            PAICHA = 8.5;
            PATTI = NECK2 - 0.5;
            CHEST = (CHEST360 + 6.5) / 2;
            WAIST = CHEST - 1;
            DAMAN = CHEST;
            CUFF = (NECK2 + 2.5) / 2;
        }

        if (NECK2 > 18) {
            PAICHA = 9;
            PATTI = NECK2 - 1;
            CHEST = (CHEST360 + 7) / 2;
            WAIST = CHEST - 1;
            DAMAN = CHEST;
        }


        document.getElementById("SHLDR").value = SHLDR.toFixed(2);
        document.getElementById("SLV").value = SLV.toFixed(2);
        document.getElementById("CUFF").value = CUFF.toFixed(2);
        document.getElementById("CHEST360").value = CHEST360.toFixed(2);
        document.getElementById("CHEST").value = CHEST.toFixed(2);
        document.getElementById("WAIST").value = WAIST.toFixed(2);
        document.getElementById("DAMAN").value = DAMAN.toFixed(2);
        document.getElementById("PATTI").value = PATTI.toFixed(2);
        document.getElementById("PAICHA").value = PAICHA.toFixed(2);
        document.getElementById("OFFKNEES").value = OFFKNEES.toFixed(2);
        document.getElementById("ONKNEES").value = ONKNEES.toFixed(2);
        document.getElementById("SHALWAR").value = SHALWAR.toFixed(2);
        document.getElementById("Armhole").value = Armhole.toFixed(2);
        document.getElementById("Shape_Top").value = Shape_Top.toFixed(2);
        document.getElementById("Shape_Bottom").value = Shape_Bottom.toFixed(2);

    };


    // SLIM FITTING
    function measure_slim() {
        var NECK2 = parseFloat(document.getElementById("NECK1").value);
        var HEIGHT1 = parseFloat(document.getElementById("HEIGHT1").value);
        var HEIGHT2 = parseFloat(document.getElementById("HEIGHT2").value);

        var height22 = (HEIGHT1 * 12) + HEIGHT2;
        var SHLDR = NECK2 + 2;
        var slv1 = (NECK2 * 2.5) / 2
        var SLV = (height22 - slv1) / 2;
        var Shape_Top = NECK2 / 2 - 0.5;
        var Shape_Bottom = Shape_Top - 1.5;
        var CUFF = (NECK2 + 2) / 2;
        var CHEST360 = (NECK2 * 2.47);
        if (NECK2 < 16) {
            CHEST360 = NECK2 * 2.35;
        }
        var CHEST = (CHEST360 + 4) / 2;
        var WAIST = CHEST - 1;
        var DAMAN = CHEST;
        var PATTI = NECK2;
        var Armhole = (CHEST360 / 4) - 0.5;
        var PAICHA = 8;

        // Below Ankles
        var OFFKNEES = height22 - (height22 / 8) * 3;
        //Above ankles 
        var ONKNEES = OFFKNEES - 3;

        var SHALWAR = (height22 / 8) * 4.5;

        if (NECK2 < 15 && height22 > 66) {
            CUFF = CUFF + 0.5;
            PATTI = NECK2 + 1.5;
        }

        if (NECK2 < 15 && height22 > 68.4) {
            SHLDR = NECK2 + 2.5;
            CUFF = CUFF + 0.5;
            PATTI = NECK2 + 1.5;
        }

        if (NECK2 < 15) {
            PAICHA = 7.5;
        }


        if (NECK2 > 17) {
            SHLDR = NECK2 + 2.5;
            PAICHA = 8.5;
            PATTI = NECK2 - 0.5;
            CHEST = (CHEST360 + 4.5) / 2;
            WAIST = CHEST - 1;
            DAMAN = CHEST;
            CUFF = (NECK2 + 2.5) / 2;
        }

        if (NECK2 > 18) {
            PAICHA = 9;
            PATTI = NECK2 - 1;
            CHEST = (CHEST360 + 5) / 2;
            WAIST = CHEST - 1;
            DAMAN = CHEST;
        }


        document.getElementById("SHLDR").value = SHLDR.toFixed(2);
        document.getElementById("SLV").value = SLV.toFixed(2);
        document.getElementById("CUFF").value = CUFF.toFixed(2);
        document.getElementById("CHEST360").value = CHEST360.toFixed(2);
        document.getElementById("CHEST").value = CHEST.toFixed(2);
        document.getElementById("WAIST").value = WAIST.toFixed(2);
        document.getElementById("DAMAN").value = DAMAN.toFixed(2);
        document.getElementById("PATTI").value = PATTI.toFixed(2);
        document.getElementById("PAICHA").value = PAICHA.toFixed(2);
        document.getElementById("OFFKNEES").value = OFFKNEES.toFixed(2);
        document.getElementById("ONKNEES").value = ONKNEES.toFixed(2);
        document.getElementById("SHALWAR").value = SHALWAR.toFixed(2);
        document.getElementById("Armhole").value = Armhole.toFixed(2);
        document.getElementById("Shape_Top").value = Shape_Top.toFixed(2);
        document.getElementById("Shape_Bottom").value = Shape_Bottom.toFixed(2);

    };

    // REGULAR FITTING

    function measure_regular() {
        var NECK2 = parseFloat(document.getElementById("NECK1").value);
        var HEIGHT1 = parseFloat(document.getElementById("HEIGHT1").value);
        var HEIGHT2 = parseFloat(document.getElementById("HEIGHT2").value);

        var height22 = (HEIGHT1 * 12) + HEIGHT2;
        var SHLDR = NECK2 + 2;
        var slv1 = (NECK2 * 2.5) / 2
        var SLV = (height22 - slv1) / 2;
        var Shape_Top = (NECK2 / 2) + 0.5;
        var Shape_Bottom = Shape_Top - 1.5;
        var CUFF = (NECK2 + 3) / 2;
        var CHEST360 = (NECK2 * 2.47);
        if (NECK2 < 16) {
            CHEST360 = NECK2 * 2.35;
        }
        var CHEST = (CHEST360 + 8) / 2;
        var WAIST = CHEST - 1;
        var DAMAN = CHEST + 0.5;
        var PATTI = NECK2;
        var Armhole = (CHEST360 / 4) + 1;
        var PAICHA = 8;

        // Below Ankles
        var OFFKNEES = height22 - (height22 / 8) * 3;
        //Above ankles 
        var ONKNEES = OFFKNEES - 3;

        var SHALWAR = (height22 / 8) * 4.6;

        if (NECK2 < 15 && height22 > 66) {
            PATTI = NECK2 + 1.5;
        }

        if (NECK2 < 15 && height22 > 68.4) {
            SHLDR = NECK2 + 2.5;
            PATTI = NECK2 + 1.5;
        }

        if (NECK2 < 15) {
            PAICHA = 7.5;
        }


        if (NECK2 > 17) {
            SHLDR = NECK2 + 2.5;
            PAICHA = 8;
            PATTI = NECK2 - 0.5;
            CHEST = (CHEST360 + 8.5) / 2;
            WAIST = CHEST - 1;
            DAMAN = CHEST + 0.5;
        }

        if (NECK2 > 18) {
            PAICHA = 9;
            PATTI = NECK2 - 1;
            CHEST = (CHEST360 + 9) / 2;
            WAIST = CHEST - 1;
            DAMAN = CHEST + 0.5;
        }


        document.getElementById("SHLDR").value = SHLDR.toFixed(2);
        document.getElementById("SLV").value = SLV.toFixed(2);
        document.getElementById("CUFF").value = CUFF.toFixed(2);
        document.getElementById("CHEST360").value = CHEST360.toFixed(2);
        document.getElementById("CHEST").value = CHEST.toFixed(2);
        document.getElementById("WAIST").value = WAIST.toFixed(2);
        document.getElementById("DAMAN").value = DAMAN.toFixed(2);
        document.getElementById("PATTI").value = PATTI.toFixed(2);
        document.getElementById("PAICHA").value = PAICHA.toFixed(2);
        document.getElementById("OFFKNEES").value = OFFKNEES.toFixed(2);
        document.getElementById("ONKNEES").value = ONKNEES.toFixed(2);
        document.getElementById("SHALWAR").value = SHALWAR.toFixed(2);
        document.getElementById("Armhole").value = Armhole.toFixed(2);
        document.getElementById("Shape_Top").value = Shape_Top.toFixed(2);
        document.getElementById("Shape_Bottom").value = Shape_Bottom.toFixed(2);

    };

    function playAudio2() {
        var s = document.getElementById("audio2");
        s.play();
    };

    function playAudio() {
        var s = document.getElementById("audio");
        s.play();
    };
</script>