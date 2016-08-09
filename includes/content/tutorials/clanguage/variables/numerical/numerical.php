<div id="numerical">
  <div id="introduction">
    <h1>Numerical Variables</h1>
    <h2>Overview</h2>
    <p>This module will cover numerical variables.</p>
  </div>

  <h2>Objectives</h2>
  <ul>
    <li>Create C language numerical variables</li>
  </ul>

  <h2>Need To Know</h2>
  <ul>
    <li>Atmel Studios IDE</li>
  </ul>

  <h2>Tutorial</h2>
  
  <p>We will begin with the simplest numerical data type: integers. Integers, represented as int in the C language, are used to store both positive and negative numbers. We initialize an integer by doing the following:</p>

  <img class="tut" src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/clanguage/variables/numerical/screenshots/int_variable.png" alt="Integer variable">
  <p>Figure 1: Integer variable.</p>

  <p>In this example, we have set up a variable called ‘x,’ and we’ve set the value of x to 2. We can add, subtract, multiply, and divide these integers by other constants and variables. For instance:</p>

  <img class="tut" src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/clanguage/variables/numerical/screenshots/int_variable_assignments.png" alt="Integer variable assignments">
  <p>Figure 2: Integer variable assignments.</p>

  <p>In this example, our variable ‘x’ is equal to 2, our variable ‘y’ is equal to 2+2, which means that y is equal to 4, and our variable ‘z’ is equal to x+y, which means that z is equal to 6, because x = 2, and y = 4.</p>

  <p>Integers have a weakness, however. If we want to represent the number (1/4) or (0.25), we can’t do this using an integer. Integer division removes everything after the decimal, meaning that the integer value of 0.25 is equal to 0.</p>

  <p>Fortunately we have a way to represent 0.25 using two different data types: floats, and doubles. While these two data types may look as though they’re different, they will be treated as though they are the same for the sake of this chapter. We can initialize doubles and floats by doing the following:</p>

  <img class="tut" src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/clanguage/variables/numerical/screenshots/float_variables.png" alt="Float variables">
  <p>Figure 3: Float variables.</p>

  <p>In this example the variable ‘x’ is a double with a value of 2.0, and the variable ‘y’ is a double with the value of 3.0. Just like integers, these variables can be added, subtracted, multiplied, and divided by other doubles and floats, as well as other variables. For instance:</p>

  <img class="tut" src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/clanguage/variables/numerical/screenshots/float_variable_assignments.png" alt="Float variables assignments">
  <p>Figure 4: Float variables assignments.</p>

  <p>In this example the variable ‘x’ is equal to 1.5, the variable ‘y’ is equal to 3.0, the variable ‘z’ is equal to x*2 (x multiplied by 2) which equals 3.0, and the variable ‘a’ is equal to y++ which is equal to 4.0.</p>

  <p>It’s important to note that the ‘++’ operator will increment integers, doubles, and floats by exactly 1. There are several other types of incrementation similar to this:</p>

  <img class="tut" src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/clanguage/variables/numerical/screenshots/shorthand_assignment_operators.png" alt="Shorthand assignment operators">
  <p>Figure 5: Shorthand assignment operators.</p>

  <p>Finally, the last numerical data type we will use is called a long. A long, for the most part, is similar to an integer, except that it can hold a much larger integer value than the int data type can. We can initialize longs by doing the following:</p>

  <img class="tut" src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/clanguage/variables/numerical/screenshots/long_variable.png" alt="Long variable">
  <p>Figure 6: Long variable.</p>

  <p>In this example the variable 'x' is a  long with the value of 2.</p>


  <h2>Summary</h2>
    <p>Numerical variables are useful for storing number data to be used later.</p>

    <h3>List of used operators</h3>
    <ul>
      <li>= - assings a value to a variable</li>
    </ul>

  <h2>Questions</h2>
    <ol>
      <li>Assign the result of "(24 - 2) * 3 + 5" to an int variable without calculating the result yourself.</li>
    </ol>

</div>