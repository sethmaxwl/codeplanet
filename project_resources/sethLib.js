/*

DEMOS for presentations and such

rainbows.js

//Picks two random hex colors and sets the console text to one and the console background to the other each second
var hexes = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'A', 'B', 'C', 'D', 'E', 'F'];
function generateColor(){
  color = '#';
  for(var i=0;i<6;i++){
    color += hexes[randInt(0, hexes.length-1)];
  }
  return(color);
}
var fonts = ['Arial', 'Arial Black', 'Arial Narrow', 'Arial Rounded RT Bold', 'Avant Garde', 'Calibri', 'Candara', 'Century Gothic', 'Franklin Gothic Medium', 'Geneva', 'Gill Sans', 'Helvetica', 'Impact', 'Lucida Grande', 'Optima', 'Segoe UI', 'Tahoma', 'Trebuchet MS', 'Verdana'];
setInterval(function(){
  var fontPick = fonts[randInt(0, fonts.length)];
  changeColor(generateColor(), generateColor());
  changeFont(fontPick, randInt(1, 100) + 'px');
}, 1000);

aesthetic.js

//Takes a string and prints it to the console one letter at a time with a space in front of each new letter
//Ex. output for input='codeplanet'
//$c
//$c o
//$c o d
//$c o d e
//$c o d e p
//$c o d e p l
//$c o d e p l a
//$c o d e p l a n
//$c o d e p l a n e
//$c o d e p l a n e t
var string = prompt('Enter a string');
var newString = '';
var hexes = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'A', 'B', 'C', 'D', 'E', 'F'];
function generateColor(){
  color = '#';
  for(var i=0;i<6;i++){
    color += hexes[randInt(0, hexes.length-1)];
  }
  return(color);
}

for(var i=0;i<string.length;i++){
  if(string[i] != ' '){
    newString += string[i] + ' ';
    print(newString);
  }else{
    newString += ' ';
  }
}
changeColor(generateColor());

clock.js

//Prints a timestamp to the console that clears the previous stamp and updates itself every millisecond
setInterval(function(){
  clear_console();
  var now = new Date();
  var hour = now.getHours(),
  minutes = now.getMinutes(),
  seconds = now.getSeconds(),
  msec = now.getMilliseconds(),
  mo = now.getMonth(),
  dy = now.getDate(),
  yr = now.getFullYear();
  print(mo+1 + '/' + dy + '/' + yr);
  print(hour + ":" + minutes + ":" + seconds + ":" + msec);
}, 1);

oscilation.js
//Takes a string input and prints it to console while oscillating the text size from 1pt font to 70pt font
clear_console();
changeFont(null, '12px');
print(prompt('enter a string'));
var increasing = 1;
window.fontSize = 12
setInterval(function(){
  changeFont(null, fontSize + 'px');
  if(increasing == 1){
    if(fontSize < 70){
      fontSize += 1;
    }else{
      increasing = 0;
    }
  }
  if(increasing === 0){
    if(fontSize > 1){
      fontSize -= 1;
    }else{
      increasing = 1;
    }
  }
}, 10);
*/

window['ignore_error'] = false;
//Initializes codemirror instance and applies all styling and functions
window.onload = function(editableCodeMirror){
  window['editableCodeMirror'] = CodeMirror.fromTextArea(document.getElementById('codesnippet_editable'), {
    mode: "javascript",
    theme: "bespin",
    lineNumbers: true,
    styleActiveLine: true,
    autoCloseBrackets: true,
    gutters: ['Codemirror-lint-markers'],
    lint: true,
    lineWrapping: true,
    scrollbarStyle: "overlay"
  });
  //Initial message in console
  window['console_log'] = 'Console:~$ Welcome to the codeplanet code editor';
  $('#result').val(console_log);
}
/*
Library of predefined functions
*/

//Displays a message in the console that displays all pre-defined functions
function help(){
  //ASCII art for functions 
  var ascii_arts = ['\n #######                                                   \n #       #    # #    #  ####  ##### #  ####  #    #  ####   \n #       #    # ##   # #    #   #   # #    # ##   # #      \n #####   #    # # #  # #        #   # #    # # #  #  ####  \n #       #    # #  # # #        #   # #    # #  # #      # \n #       #    # #   ## #    #   #   # #    # #   ## #    # \n #        ####  #    #  ####    #   #  ####  #    #  ####  ', 'F)ffffff                           t)   ##                         \nF)                               t)tTTT                            \nF)fffff  u)   UU n)NNNN   c)CCCC   t)   i)  o)OOO  n)NNNN   s)SSSS \nF)       u)   UU n)   NN c)        t)   i) o)   OO n)   NN s)SSSS  \nF)       u)   UU n)   NN c)        t)   i) o)   OO n)   NN      s) \nF)        u)UUU  n)   NN  c)CCCC   t)T  i)  o)OOO  n)   NN s)SSSS  ', ' _______                      _                  \n(_______)                _   (_)                 \n _____ _   _ ____   ____| |_  _  ___  ____   ___ \n|  ___) | | |  _ \\ / ___)  _)| |/ _ \\|  _ \\ /___)\n| |   | |_| | | | ( (___| |__| | |_| | | | |___ |\n|_|    \\____|_| |_|\\____)\\___)_|\\___/|_| |_(___/ ', '    ______                 __  _                 \n   / ____/_  ______  _____/ /_(_)___  ____  _____\n  / /_  / / / / __ \\/ ___/ __/ / __ \\/ __ \\/ ___/\n / __/ / /_/ / / / / /__/ /_/ / /_/ / / / (__  ) \n/_/    \\__,_/_/ /_/\\___/\\__/_/\\____/_/ /_/____/  ', "d88888b db    db d8b   db  .o88b. d888888b d888888b  .d88b.  d8b   db .d8888. \n88'     88    88 888o  88 d8P  Y8 `~~88~~'   `88'   .8P  Y8. 888o  88 88'  YP \n88ooo   88    88 88V8o 88 8P         88       88    88    88 88V8o 88 `8bo.   \n88~~~   88    88 88 V8o88 8b         88       88    88    88 88 V8o88   `Y8b. \n88      88b  d88 88  V888 Y8b  d8    88      .88.   `8b  d8' 88  V888 db   8D \nYP      ~Y8888P' VP   V8P  `Y88P'    YP    Y888888P  `Y88P'  VP   V8P `8888Y' "];
  var chose_art = ascii_arts[randInt(0, ascii_arts.length-1)];
  console_log += '\nConsole:~$ \n .-"-.     .-"-.     .-"-.     .-"-.     .-"-.     .-"-.\n     "-.-"     "-.-"     "-.-"     "-.-"     "-.-"     "-.-"\n' + chose_art + '\n .-"-.     .-"-.     .-"-.     .-"-.     .-"-.     .-"-.\n     "-.-"     "-.-"     "-.-"     "-.-"     "-.-"     "-.-"'
  //List of functions
  console_log += "\n \n \\ print(str); -> prints out the value in the console\n / isString(str); -> returns true if string is passed in\n \\ strip(str); -> returns the value without leading and trailing whitespace\n / wordSplit(str); -> returns an array of each word in a string\n \\ letterSplit(str); -> returns an array of each letter in a string\n / combineStrings(str1, str2); -> returns string that combines 2 strings\n \\ isNumber(num); -> returns true if number is passed in\n / randInt(num1, num2); -> returns a random integer between parameters\n \\ randFloat(num1, num2); ->  returns a random float between parameters\n / sec(num); -> returns the secant of num\n \\ csc(num); -> returns the cosecant of num\n / cot(num); -> returns the cotangent of num\n \\ randChars(num); -> returns a random string of characters num characters long\n / average(arr); -> returns the average of an array of numbers\n \\ accumulate(arr); -> returns the sum of an array of numbers\n / isArray(arr); -> returns true if array is passed in\n \\ changeColor(text, back); -> change color of console text and backdrop\n / changeFont(font, size); -> changes the font and size of console";
  $('#result').val(console_log);
  window['ignore_error'] = true;
}

//Prints out whatever is passed in as the input
function print(str){
  if(str.toString.length < 1000){
    console_log += '\nConsole:~$ ' + str;
    $('#result').val(console_log);
    window['ignore_error'] = true;
  }else{
    throw new Error('The output is greater than 1000 characters. Please reduce its size.');
  }
}

//Returns a string without leading and trailing whitespace
function strip(str) {
  return str.replace(/^\s+|\s+$/g, '');
}

function combineStrings(str1, str2){
  var combined = str1 + str2;
  return combined;
}

//Returns a random integer between two parameters
function randInt(num1, num2){
  if(isNumber(num1) && isNumber(num2)){
    if(num2.toString().length < 9){
      var diff = num2 - num1;
      var possible_ints = [num1, num2];
      while(diff > 0){
        var addition = num2 - 1;
        possible_ints.push(addition);
        diff -= 1;
        num2 -= 1;
      }
      var rand_int = possible_ints[Math.floor(Math.random() * possible_ints.length)];
      return(rand_int);
    }else{
      throw new Error('The gap between the parameters passed into randInt() is too big. Please reduce it.');
    }
  }else{
    throw new Error('At least one of the values passed into randInt() is not a number.');
  }
}

//Generates a random floating point number between two parameters
function randFloat(num1, num2){
  if(isNumber(num1) && isNumber(num2)){
    if(num2.toString().length < 9){
      var diff = num2 - num1;
      var possible_ints = [num1, num2];
      while(diff > 0){
        var addition = num2 - 1;
        possible_ints.push(addition);
        diff -= 1;
        num2 -= 1;
      }
      var rand_int = possible_ints[Math.floor(Math.random() * possible_ints.length)];
      return(rand_int * Math.random());
    }else{
      throw new Error('The gap between the parameters passed into randFloat() is too big. Please reduce it.');
    }
  }else{
    throw new Error('At least one of the values passed into randFloat() is not a number.');
  }
}

//Returns the average of an array of numbers
function average(arr){
  var sum = 0;
  for( var i = 0; i < arr.length; i++ ){
    if(isNumber(arr[i])){
      sum += parseInt( arr[i], 10 );
    }else{
      throw new Error('The array passed into average() does not contain only numbers.');
    }
  }
  return(sum/arr.length);
}

//Returns the cotangent of a number
function cot(num){
  if(isNumber(num)){
    tangent = Math.tan(num);
    return(1/tangent);
  }else{
    throw new Error('The parameter passed into cot() is not a number.');
  }
}

//Returns the cosecant of a number
function csc(num){
  if(isNumber(num)){
    sine = Math.sin(num);
    return(1/sine);
  }else{
    throw new Error('The parameter passed into csc() is not a number.');
  }
}

//Returns the secant of a number
function sec(num){
  if(isNumber(num)){
    cosine = Math.cos(num);
    return(1/cosine);
  }else{
    throw new Error('The value passed into sec() is not a number.');
  }
}

//Returns the sum of all elements in an array
function accumulate(arr){
  var sum = 0;
  for( var i = 0; i < arr.length; i++ ){
    if(isNumber(i)){
      sum += parseInt( arr[i], 10 );
    }else{
      throw new Error('The array passed into accumulate() does not contain only numbers.')
    }
  }
  return sum;
}

//Returns an array of every word in the string
function wordSplit(str){
  var arr = str.split(' ');
  return arr;
}

//Returns an array of every character in the string
function letterSplit(str){
  var arr = str.split('');
  return arr;
}

//Changes the console color
function changeColor(txt, back){
  var elem = document.getElementById("result");
  if(isString(txt) || txt == null){
    if(txt == 'revert'){
      elem.style.backgroundColor = '#000000';
      elem.style.color = '#00ff00';
    }else{
      if((txt != 'null') && (txt != null)){
        elem.style.color = txt;
      }
      if(back !== undefined){
        if(isString(back)){
          elem.style.backgroundColor = back;
        }else{
          throw new Error('The second value passed into changeColor() is not a valid string.');
        }
      }
    }
  }else{
    if(isString(back)){
      if(back !== undefined){
        elem.style.backgroundColor = back;
      }
      throw new Error('The first value passed into changeColor() is not a valid string.');
    }else{
      throw new Error('The first value passed into changeColor() is not a valid string.');
    }
  }
}

//Changes font and size of console
function changeFont(font, size){
  var elem = document.getElementById("result");
  if(isString(font) || font == null){
    if(font == 'revert'){
      elem.style.fontFamily =  'Lucida Console,Lucida Sans Typewriter,monaco,Bitstream Vera Sans Mono,Lucida Console,monospace';
      elem.style.fontSize = '12px';
    }else{
      if((font != 'null') && (font != null)){
        elem.style.fontFamily = font;
      }
      if(size !== undefined){
        if(isString(size)){
          elem.style.fontSize = size;
        }else{
          throw new Error('The second value passed into changeFont() is not a valid string.');
        }
      }
    }
  }else{
    if(isString(size)){
      if(size !== undefined){
        elem.style.fontSize = size;
      }
      throw new Error('The first value passed into changeFont() is not a valid string.');
    }else{
      throw new Error('The first value passed into changeFont() is not a valid string.');
    }
  }
}

//Generates a random string of characters that is as long as 
function randChars(len){
  if(isNumber(len)){
    for(var rdmString = "" ; rdmString.length < len; rdmString  += Math.random().toString(36).substr(2));
      return  rdmString.substr(0, len);
    }else{
      throw new Error('The value passed into randChars() is not a number.')
    }
}

//Returns true if num is a number
function isNumber(num){
  return Object.prototype.toString.call(num) === '[object Number]';
}

//Returns true if arr is an array
function isArray(arr){
  return Object.prototype.toString.call(arr) === '[object Array]' ;
}

//Returns true if str is a string
function isString(str){
  return Object.prototype.toString.call(str) === '[object String]';
}



/*
End of library
*/

//Clears the console
function clear_console(){
  $('.clearingConsole').css('display', 'none');
  $('.eraserAnimation1').css('display', 'block');
  console_log = "Console:~$ ";
  $("#result").val(console_log);
  setTimeout(function(){
    $('.clearingConsole').css('display', 'block');
    $('.eraserAnimation1').css('display', 'none');
  }, 2000);
}

//Executes code from the editor
function run(){
  $('.btnRunner').css('display','none');
  $('.btnLoader').css('display', 'block');
  try {
    if(editableCodeMirror.getValue().length >= 0){
      window['input'] = editableCodeMirror.getValue('\n');
      //Tests if the input contains the word 'Infinity'; this is implemented to prevent infinite loops
      if(input.includes('Infinity') == false){
        //Executes the code and stores the output
        var output = eval(input);
        //Enforces a 1000 character limit on output size
        if(output.toString().length <= 1000){
          //Decides if window is redirecting and displays a message if it is
          window['redirecting'] = false;
          window.onbeforeunload = function(){
            window['redirecting'] = true;
            return '';
          };
          if(!redirecting){
            console_log += "\nConsole:~$ " +  output;
            $('#result').val(console_log);
          }
          if(redirecting){
            $('.btnRunner').css('display','none');
            $('.btnLoader').css('display', 'block');
            if(output.includes('http') || output.includes('www')){
              console_log += "\nConsole:~$ There was an attempt to redirect to \'"  +  output + "\' If you do not trust this URL, please do not run this program again.";
              $('#result').val(console_log);
            }
          }
          window['redirecting'] = false;
        }else if(output.toString().length > 1000){
        //Error message that is displayed if output is greater than 1000 characters
          window['output'];
          throw new Error('The output is greater than 1000 characters. Please reduce its size.');
        }
      }else{
        //Error message that is displayed if infinity is detected
        window['output'];
        throw new Error('Please refrain from using the word \'Infinity.\' Infinite loops are bad.');
      }    
    }
  } catch(err){
    //Prevents error that occurs if there is an attempt to execute empty string
    if(err.message != "Cannot read property 'toString' of undefined"){
      console_log += '\nConsole:~$ ' + err.name + ': ' + err.message;
      $('#result').val(console_log);
    }else{
      if(!ignore_error){
        console_log += '\nConsole:~$ '
        $('#result').val(console_log);
      }
    }
  }
  //Auto-scrolls the console to the bottom after something is run
  var textarea = document.getElementById('result');
  textarea.scrollTop = textarea.scrollHeight;
  window.removeEventListener("beforeunload", function(){
    return null;
  });
  setTimeout(function(){
    $('.btnRunner').css('display','block');
    $('.btnLoader').css('display', 'none');
  }, 1000);
}

//Clears the editor
function clear_editor(){
  $('.eraserAnimation2').css('display', 'block');
  $('.clearingEditor').css('display', 'none');
  editableCodeMirror.setValue('');
  setTimeout(function(){
    $('.clearingEditor').css('display', 'block');
    $('.eraserAnimation2').css('display', 'none');
  }, 2000);
}