btnClear.addEventListener("click", function () {
  console.log("You clicked Clear button");
});

btnCalculate.addEventListener("click", function () {
  let Num1 = parseFloat(document.getElementById("num1").value);
  let Num2 = parseFloat(document.getElementById("num2").value);
  let Operator = document.getElementById("operator").value;
  let resultElement = document.getElementsByClassName("result")[0];
  let finalResult;

  switch (Operator) {
    case "add":
      console.log(Num1 + Num2);
      finalResult = Num1 + Num2;
      break;
    case "minus":
      console.log(Num1 - Num2);
      finalResult = Num1 - Num2;
      break;
    case "multiply":
      console.log(Num1 * Num2);
      finalResult = Num1 * Num2;
      break;
    case "divide":
      console.log(Num1 / Num2);
      finalResult = Num1 / Num2;
      break;

    default:
      console.log("Operation error");
      break;
  }

  resultElement.innerHTML = finalResult;
});
