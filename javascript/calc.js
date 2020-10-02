function getHistory() {
  return document.getElementById('history-value').innerText;//this takes value from <p>
}
function printHistory(num) {
   document.getElementById('history-value').innerText = num;//this embed value in p
}

function getOutput() {
  return document.getElementById('output-value').innerText;
}
function printOutput(num) {
   if (num == "") {
     document.getElementById('output-value').innerText = num;
   }else{
    if (num == "-") {
      // return "";
      document.getElementById('output-value').innerText = "0";
    }
   var n = Number(num)
   var val = n.toLocaleString("en");
   document.getElementById('output-value').innerText = val;
   }
}

function reverseNumberFormat(num) {
  return Number(num.replace(/,/g,''));
}

var operator = document.getElementsByClassName('operator');
for (var i = 0; i < operator.length; i++) {
 operator[i].addEventListener('click',function() {
   // alert("the operator clicked:"+this.id);
    if (this.id == "clear") {
      printOutput("");
      printHistory("");
    }else if (this.id == "backspace") {
      var output = reverseNumberFormat(getOutput()).toString();
      if(output){
        output = output.substr(0,output.length-1);
        printOutput(output);
      }
    }else{//this not working
      var output = getOutput();
      var history = getHistory();
      if (output==""&&history!="") {
        if (isNaN(history[history.length-1])) {
          history = history.substr(0,history.length-1);
        }
      }
      // printHistory(output);
      // printOutput("55")
      if (output != "" || history!="") {
        output = output==""? output: reverseNumberFormat(output);
        history = history+output;
        // printHistory(history)
        if (this.id == "=") {
          var res = eval(history);
          printOutput(res);
          printHistory("");
        }else {
          history = history+this.id;
          printHistory(history);
          printOutput("");
        }
      }
    }
 });
}
var number = document.getElementsByClassName('number');
for (var i = 0; i < number.length; i++) {
 number[i].addEventListener('click',function() {
   // alert("the operator clicked:"+this.id);
   var output = reverseNumberFormat(getOutput());
   if (output!= NaN) {
     output = output+this.id;
     printOutput(output);
   }

 });
}

// alert(getHistory());
// printOutput("");
