numOneError.style.display = "none";
numTwoError.style.display = "none";
operatorError.style.display = "none";
let numOneErrorStatus = false;
let numTwoErrorStatus = false;
let operatorErrorStatus = false;

// Calculation
btnCalculate.addEventListener("click", function () {
  let num1 = document.getElementById("num1");
  let num2 = document.getElementById("num2");
  let operator = document.getElementById("operator").value;
  let resultElement = document.getElementsByClassName("result")[0];
  let finalResult;

  checkValidation(num1, num2, operator);

  if (!numOneErrorStatus && !numTwoErrorStatus && !operatorErrorStatus) {
    console.log(numOneErrorStatus);
    console.log(numTwoErrorStatus);
    console.log(operatorErrorStatus);
    //change num1 num2 value to decimal number
    num1 = parseFloat(num1.value);
    num2 = parseFloat(num2.value);

    switch (operator) {
      case "add":
        finalResult = num1 + num2;
        break;
      case "minus":
        finalResult = num1 - num2;
        break;
      case "multiply":
        finalResult = num1 * num2;
        break;
      case "divide":
        finalResult = num1 / num2;
        break;
      default:
        console.log("Operation error");
        break;
    }

    resultElement.innerHTML = finalResult;
  }
});

// clear input fields
btnClear.addEventListener("click", function () {
  let num1 = document.getElementById("num1");
  let num2 = document.getElementById("num2");
  let operator = document.getElementById("operator");
  let resultElement = document.getElementsByClassName("result")[0];

  num1.value = "";
  num2.value = "";
  operator.selectedIndex = 0;
  resultElement.innerHTML = "Result";
});

// Validation
function checkValidation(num1, num2, operator) {
  if (
    num1.value == "" ||
    isNaN(parseFloat(num1.value)) ||
    num1.value == undefined ||
    num1.value == null
  ) {
    numOneError.style.display = "block";
    numOneErrorStatus = true;
  } else {
    numOneError.style.display = "none";
    numOneErrorStatus = false;
  }

  if (
    num2.value == "" ||
    isNaN(parseFloat(num2.value)) ||
    num2.value == undefined ||
    num2.value == null
  ) {
    numTwoError.style.display = "block";
    numTwoErrorStatus = true;
  } else {
    numTwoError.style.display = "none";
    numTwoErrorStatus = false;
  }

  if (operator == "empty") {
    operatorError.style.display = "block";
    operatorErrorStatus = true;
  } else {
    operatorError.style.display = "none";
    operatorErrorStatus = false;
  }
}
