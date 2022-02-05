
function getbmivalue(){

    let weight = document.getElementById('weight').value;

    let height = document.getElementById('height').value;

    //convert height from feet to meters

    height = (height * 12) * 0.025;

    let bmivalue = weight / (height * height); //fromula for calculating BMI

    bmivalue = bmivalue.toFixed(2); //this will display only two numbers after the decimal point

    document.getElementById('bmivalue').value = bmivalue;
}