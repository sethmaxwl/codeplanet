<?php 
    session_name ($_SESSION['sessionId']);
    session_start();
    if (isset($_SESSION['username'])){
        include('navbar.html');
    }else{
        include('navbar_unauthorized.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Docs - codeplanet</title>
    <link rel="icon" href="/images/planet.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/project_resources/MDB-Free/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/project_resources/MDB-Free/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/project_resources/MDB-Free/css/style.css" rel="stylesheet">
    <link href="/project_resources/css/animate.css" rel="stylesheet">
    <script>
      function offsetAnchor() {
        if(location.hash.length !== 0) {
          window.scrollTo(window.scrollX, window.scrollY - 100);
        }
      }
      window.addEventListener("hashchange", offsetAnchor);
      window.setTimeout(offsetAnchor, 1);
    </script>
  </head>
  <body>
    <!-- Main container-->
    <div class="container fadeIn animated">
        <div class="divider-new pt-5">
          <h2 class="h2-responsive wow fadeIn">Library Documentation</h2>
        </div>
        <p class="bigger text-center">This is intended to be a more in-depth guide to demonstrate how the codeplanet library functions. This information is also available in the code editor by calling the help function.</p>
        <div class="divider-new pt-5">
          <h3 class="h3-responsive wow fadeIn" id="editor_tag">Table of Contents</h3>
        </div>
        <div class="row">
          <div class="col">
            <ul>
              <li><a href="#accumulate">accumulate</a></li>
              <li><a href="#average">average</a></li>
              <li><a href="#changeColor">changeColor</a></li>
              <li><a href="#changeFont">changeFont</a></li>
              <li><a href="#combineStrings">combineStrings</a></li>
              <li><a href="#cot">cot</a></li>
              <li><a href="#csc">csc</a></li>
              <li><a href="#isArray">isArray</a></li>
              <li><a href="#isNumber">isNumber</a></li>
            </ul>
          </div>
          <div class="col">
            <ul>
              <li><a href="#isString">isString</a></li>
              <li><a href="#letterSplit">letterSplit</a></li>
              <li><a href="#print">print</a></li>
              <li><a href="#randChars">randChars</a></li>
              <li><a href="#randFloat">randFloat</a></li>
              <li><a href="#randInt">randInt</a></li>
              <li><a href="#sec">sec</a></li>
              <li><a href="#strip">strip</a></li>
              <li><a href="#wordSplit">wordSplit</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="divider-new pt-5">
        <h3 class="h3-responsive wow fadeIn"><a name="accumulate">accumulate</a></h3>
      </div>
      <p class="text-center">Accumulate is a function that accepts an array of numbers and returns the sum of the numbers.</p>
      <pre><code>
    accumulate([1,2,3,4,5]); >> returns the value '15'
    accumulate([1,2,3,4,"string"]); >> fails because accumulate can only accept numbers
      </code></pre>
      <div class="divider-new pt-5">
        <h3 class="h3-responsive wow fadeIn"><a name="average">average</a></h3>
      </div>
      <p class="text-center">Average is a function that accepts an array of numbers and returns the average of the numbers.</p>
      <pre><code>
    average([1,2,3,4,5]); >> returns the value '3'
    average([1,2,3,4,"string"]); >> fails because average can only accept an array of numbers
      </code></pre>
      <div class="divider-new pt-5">
        <h3 class="h3-responsive wow fadeIn"><a name="changeColor">changeColor</a></h3>
      </div>
      <p class="text-center">changeColor accepts two strings and changes the color of the console's text and/or background.</p>
      <pre><code>
    changeColor('green', 'blue'); >> changes console's text color to green and console's background to blue
    changeColor(null, 'blue'); >> changes only console's background color to blue
    changeColor('green'); >> changes only console's text color to green
      </code></pre>
      <div class="divider-new pt-5">
        <h3 class="h3-responsive wow fadeIn"><a name="changeFont">changeFont</a></h3>
      </div>
      <p class="text-center">changeColor accepts two strings and changes the color of the console's font and/or font size.</p>
      <pre><code>
    changeFont('arial', '20px'); >> changes console's font to arial and console's font size to 20px
    changeFont(null, '20px'); >> changes only console's font size to 20px
    changeFont('arial'); >> changes only console's font to arial
      </code></pre>
      <div class="divider-new pt-5">
        <h3 class="h3-responsive wow fadeIn"><a name="combineStrings">combineStrings</a></h3>
      </div>
      <p class="text-center">combineStings accepts two strings and combines them into one string.</p>
      <pre><code>
    combineStrings('one', 'two'); >> returns the value 'onetwo'
    combineStrings('one', 1); >> returns the value 'one1'
    combineStrings('one', [1, 2, 3]); >> returns the value 'one1,2,3'
      </code></pre>
      <div class="divider-new pt-5">
        <h3 class="h3-responsive wow fadeIn"><a name="cot">cot</a></h3>
      </div>
      <p class="text-center">cot returns the cotangent of a number.</p>
      <pre><code>
    cot(60); >> returns the value '3.124605622242308'
    cot(120); >> returns the value '1.4022826164313726'
    cot(0); >> returns the value 'Infinity'
      </code></pre>
      <div class="divider-new pt-5">
        <h3 class="h3-responsive wow fadeIn"><a name="csc">csc</a></h3>
      </div>
      <p class="text-center">csc returns the cosecant of a number.</p>
      <pre><code>
    csc(60); >> returns the value '-3.280725574403968'
    csc(120); >> returns the value '1.7223230058109356'
    csc(0); >> returns the value 'Infinity'
      </code></pre>
      <div class="divider-new pt-5">
        <h3 class="h3-responsive wow fadeIn"><a name="isArray">isArray</a></h3>
      </div>
      <p class="text-center">isArray returns true if an array is passed in.</p>
      <pre><code>
    isArray([1,2,3]); >> returns true
    isArray(['hello']); >> returns true
    isArray('goodbye'); >> returns false
      </code></pre>
      <div class="divider-new pt-5">
        <h3 class="h3-responsive wow fadeIn"><a name="isNumber">isNumber</a></h3>
      </div>
      <p class="text-center">isNumber returns true if a number is passed in.</p>
      <pre><code>
    isNumber(1); >> returns true
    isNumber('string'); >> returns false
    isNumber([1,2,3]); >> returns false
      </code></pre>
      <div class="divider-new pt-5">
        <h3 class="h3-responsive wow fadeIn"><a name="isString">isString</a></h3>
      </div>
      <p class="text-center">isString returns true if a string is passed in.</p>
      <pre><code>
    isString('hello'); >> returns true
    isString(1); >> returns false
    isString([1,2,3]); >> returns false
      </code></pre>
      <div class="divider-new pt-5">
        <h3 class="h3-responsive wow fadeIn"><a name="letterSplit">letterSplit</a></h3>
      </div>
      <p class="text-center">letterSplit takes a string and returns an array containing each character in the string.</p>
      <pre><code>
    letterSplit('hello'); >> returns ['h','e','l','l','o']
    letterSplit(12345); >> fails becuase letterSplit only accepts strings
    letterSplit([1,2,3,4,5]); >> fails because letterSplit only accepts strings
      </code></pre>
      <div class="divider-new pt-5">
        <h3 class="h3-responsive wow fadeIn"><a name="print">print</a></h3>
      </div>
      <p class="text-center">print accepts a value and prints it out to the console.</p>
      <pre><code>
    print('hello'); >> prints out 'hello' to the console
    print(1); >> prints out '1' to the console
    print([1,2,3]); >> prints out '1,2,3' to the console
      </code></pre>
      <div class="divider-new pt-5">
        <h3 class="h3-responsive wow fadeIn"><a name="randChars">randChars</a></h3>
      </div>
      <p class="text-center">randChars returns a string of random characters that is a specified length.</p>
      <pre><code>
    randChars(5); >> could return a string 'fv024'
    randChars(10); >> could return a string 'qecc1qqg1m'
    randChars('one'); >> fails because it only accepts integers
      </code></pre>
      <div class="divider-new pt-5">
      <h3 class="h3-responsive wow fadeIn"><a name="randFloat">randFloat</a></h3>
      </div>
      <p class="text-center">randFloat returns a float of random numbers that is a length between the parameters.</p>
      <pre><code>
    randFloat(1,5); >> returns a random float between 1 and 5
    randFloat(1,2); >> could return a random float like '1.5592598188895535'
    randFlaot(1); >> fails because there must be two number parameters
      </code></pre>
      <div class="divider-new pt-5">
      <h3 class="h3-responsive wow fadeIn"><a name="randInt">randInt</a></h3>
      </div>
      <p class="text-center">randInt returns a random integer between the parameters.</p>
      <pre><code>
    randInt(1,5); >> returns a random integer between 1 and 5
    randInt(1,3); >> could return a random integer like '2'
    randInt(1); >> fails because there must be two number parameters
      </code></pre>
      <div class="divider-new pt-5">
      <h3 class="h3-responsive wow fadeIn"><a name="sec">sec</a></h3>
      </div>
      <p class="text-center">sec returns the secant of a number.</p>
      <pre><code>
    sec(60); >> returns '-1.0499646902797362'
    sec(120); >> returns '1.2282281657274081'
    sec(0); >> returns '1'
      </code></pre>
      <div class="divider-new pt-5">
      <h3 class="h3-responsive wow fadeIn"><a name="strip">strip</a></h3>
      </div>
      <p class="text-center">strip returns a string without any leading or trailing whitespace.</p>
      <pre><code>
    strip('    hello   '); >> returns 'hello'
    strip('hello'); >> returns 'hello'
    strip(1); >> fails because strip only accepts strings
      </code></pre>
      <div class="divider-new pt-5">
      <h3 class="h3-responsive wow fadeIn"><a name="wordSplit">wordSplit</a></h3>
      </div>
      <p class="text-center">wordSplit takes an array and separates it by words into an array.</p>
      <pre><code>
    wordSplit('this is a string'); >> returns ['this','is','a','string']
    wordSplit('hello'); >> returns ['hello']
    wordSplit(1); >> fails because wordSplit only accepts strings
      </code></pre>
      
    </div>
    <!--/ Main container-->

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
</html>