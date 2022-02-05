<?php
// You can write all your calculator form code here
?>

<div class="main-bg">
    <div class="myform">
        <div class="form-header">
            <p> BMI Calculator </p>
        </div>

        <div class="form-body">
        <div class="fields">
                <input type="number" id="weight" placeholder=" Weight in Kg">
            </div>

            <div class="fields">
                <input type="number" id="height" placeholder=" Height in feet">
            </div>

            <div class="fields">
                <input type="text" id="bmivalue" placeholder="Your BMI value is..">
            </div>

            <div class="fields">
                <button class="calc-value" onclick="getbmivalue()"> Calculate </button>
            </div>
        </div>

    </div>
</div>