<!DOCTYPE html>
<html lang="en">
<head>
 
    <style>
        #measureme {
            margin: 0px auto;
            padding: 10px 5px;
            max-width: 440px !important;
        }

        #measureme input {
            height: 35px;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
        }

        #measureme .form {
            flex: 1;
            min-width: 0;
        }

        #measureme button {
            margin-bottom: 5px;
            font-weight: bold;
            padding: 10px 15px;
            white-space: nowrap;
        }

        .calculbuttons {
            border-radius: 4px;
            background-color: #d79f25;
            color: black;
            border: none;
            font-weight: 700 !important;
            padding: 10px 20px !important;
            font-size: 14px;
        }

        .calculbuttons:hover,
        .calculbuttons:active,
        .calculbuttons:focus {
            background-color: grey !important;
        }

        .header-section {
            color: #ca9a30;
            background: #000;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .header-section input {
            background: #2a2a2a;
            font-weight: bold;
            color: #eee;
            border: none;
        }

        .header-inputs {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
        }

        .header-section .input-group {
            display: flex;
            align-items: center;
            gap: 5px;
            /*flex-wrap: wrap;*/
        }

        .header-section label,
        .header-section span {
            white-space: nowrap;
        }

        .measurement-row {
            display: flex;
            align-items: center;
            margin-top: 15px;
            gap: 5px;
            flex-wrap: wrap;
        }

        .measurement-row label {
            font-size: 13px;
            color: gray;
            font-weight: bold;
            white-space: nowrap;
        }

        .measurement-row .separator {
            margin: 0 3px;
        }

        .button-group {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 8px;
            flex-wrap: wrap;
        }
        
         @media screen and (max-width: 464px) {
             
             #NECK1{
              width: 100%!important;   
             }
             #HEIGHT1{
                 width: 50%!important;   
             }
             
             #HEIGHT2{
                  width: 50%!important;  
             }
             .header-inputs{
                 flex-direction: column
             }
             
      
         }   

        /* Mobile Responsive */
        @media screen and (max-width: 576px) {
            #measureme {
                padding: 10px;
            }

            .header-section {
                padding: 12px;
            }

            .header-inputs {
                /*flex-direction: column;*/
                align-items: stretch;
                gap: 12px;
            }

            /*.header-section .input-group {*/
            /*    justify-content: space-between;*/
            /*}*/

            .header-section label {
                font-size: 13px;
            }

            .header-section span {
                font-size: 13px;
            }

            .measurement-row {
                margin-top: 12px;
            }

            .measurement-row label {
                font-size: 12px;
                min-width: fit-content;
            }

            .measurement-row input {
                height: 32px;
                font-size: 14px;
            }

            .calculbuttons {
                padding: 10px 12px !important;
                font-size: 12px;
                flex: 1;
                min-width: 90px;
            }

            .button-group {
                gap: 5px;
            }
        }

        /* Extra small screens */
        @media screen and (max-width: 380px) {
            .calculbuttons {
                font-size: 11px;
                padding: 8px 10px !important;
                min-width: 80px;
            }

            .measurement-row label {
                font-size: 11px;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div id="measureme">
                    <div class="header-section">
                        <div class="header-inputs">
                            <div class="input-group">
                                <label style="color: #ca9a30; font-size: 14px;"><b>NECK (*Inch):</b></label>
                                <input type="text" id="NECK1" value="16.0" onkeyup="playAudio2();" name="NECK1" style="width: 60px; text-align: center;">
                            </div>
                            <div class="input-group">
                                <label style="color: #ca9a30; font-size: 14px;"><b>HEIGHT:</b></label>
                                <input type="text" id="HEIGHT1" value="5" onkeyup="playAudio2();" name="HEIGHT1" style="width: 40px; text-align: center;">
                                <span style="color: #ca9a30; font-size: 14px;">
                                <b>*ft</b></span>
                                <input type="text" id="HEIGHT2" value="8.4" onkeyup="playAudio2();" name="HEIGHT2" style="width: 50px; text-align: center;">
                                <span style="color: #ca9a30; font-size: 14px;"><b>*Inch</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="measurement-row">
                        <label>SHOULDER</label>
                        <span class="separator">:</span>
                        <input class="form" type="text" id="SHLDR" name="SHLDR">
                    </div>

                    <div class="measurement-row">
                        <label>SLEEVES</label>
                        <span class="separator">:</span>
                        <input class="form" type="text" id="SLV" name="SLV">
                    </div>

                    <div class="measurement-row">
                        <label>SHAPE</label>
                        <span class="separator">:</span>
                        <input type="text" id="Shape_Top" name="Shape_Top" style="width: 80px; flex: 1;">
                        <span class="separator">:</span>
                        <input type="text" id="Shape_Bottom" name="Shape_Bottom" style="width: 80px; flex: 1;">
                    </div>

                    <div class="measurement-row">
                        <label>CUFF180*</label>
                        <span class="separator">:</span>
                        <input type="text" id="CUFF" name="CUFF" style="width: 80px; flex: 1;">
                        <label class="separator">CHEST360:</label>
                        <input type="text" id="CHEST360" name="CHEST360" style="width: 80px; flex: 1;">
                    </div>

                    <div class="measurement-row">
                        <label>CHEST</label>
                        <span class="separator">:</span>
                        <input class="form" type="text" id="CHEST" name="CHEST" style="max-width: 155px;">
                        <label class="ms-2">WAIST</label>
                        <span class="separator">:</span>
                        <input class="form" type="text" id="WAIST" name="WAIST" style="max-width: 155px;">
                    </div>

                    <div class="measurement-row">
                        <label>DAMAN</label>
                        <span class="separator">:</span>
                        <input type="text" id="DAMAN" name="DAMAN" style="width: 80px; flex: 1;">
                        <label class="separator">PATTI:</label>
                        <input type="text" id="PATTI" name="PATTI" style="width: 80px; flex: 1;">
                    </div>

                    <div class="measurement-row">
                        <label>ARMHOLE180*</label>
                        <span class="separator">:</span>
                        <input class="form" type="text" id="Armhole" name="Armhole">
                    </div>

                    <div class="measurement-row">
                        <label>KAMEEZ|ON KNEES</label>
                        <span class="separator">:</span>
                        <input class="form" type="text" id="ONKNEES" name="ONKNEES" style="max-width: 100px;">
                        <label class="ms-1">OFFKNEES</label>
                        <span class="separator">:</span>
                        <input class="form" type="text" id="OFFKNEES" name="OFFKNEES" style="max-width: 100px;">
                    </div>

                    <div class="measurement-row">
                        <label>SHALWAR</label>
                        <span class="separator">:</span>
                        <input class="form" type="text" id="SHALWAR" name="SHALWAR" style="max-width: 122px;">
                        <label class="ms-2">PAICHA180*</label>
                        <span class="separator">:</span>
                        <input class="form" type="text" id="PAICHA" name="PAICHA" style="max-width: 122px;">
                    </div>

                    <div class="button-group">
                        <button class="calculbuttons" onclick="measure_slim(); playAudio();">SLIM FIT</button>
                        <button class="calculbuttons" onclick="measure_smart(); playAudio();">SMART FIT</button>
                        <button class="calculbuttons" onclick="measure_regular(); playAudio();">REGULAR FIT</button>
                    </div>
                </div>

                <audio id="audio">
                    <source src="voice2.mp3" type="audio/mpeg" />
                </audio>
                <audio id="audio2">
                    <source src="voice1.mp3" type="audio/mpeg" />
                </audio>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script type="text/javascript">
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
            var OFFKNEES = height22 - (height22 / 8) * 3;
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
        }

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
            var OFFKNEES = height22 - (height22 / 8) * 3;
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
        }

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
            var OFFKNEES = height22 - (height22 / 8) * 3;
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
        }

        function playAudio2() {
            var s = document.getElementById("audio2");
            s.play();
        }

        function playAudio() {
            var s = document.getElementById("audio");
            s.play();
        }
    </script>
</body>
</html>