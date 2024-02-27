let expression = ""; // Move variable to JavaScript

function appendNumber(number) {
  expression += number;
  document.getElementById("result").value = expression;
}

function appendOperator(operator) {
  expression += operator;
  document.getElementById("result").value = expression;
}

function clearDisplay() {
  expression = "";
  document.getElementById("result").value = expression;
}

function calculate() {
  try {
    let result = eval(expression);
    document.getElementById("result").value = result;
    expression = result; // Update expression for further calculations
  } catch (error) {
    document.getElementById("result").value = "Error";
  }
}
