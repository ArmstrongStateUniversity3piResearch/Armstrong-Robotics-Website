<div id="LCD">

	<div id="introduction">
	  <h1>LCD</h1>

    <h2>Overview</h2>
    <p>This module will cover printing text to the 3pi LCD. You can make the robot print to the LCD when you want to know the status of the robot or if it is following your commands as you programed it. You can find out how much battery the robot has or if it has reached a certain part of the program.</p>
	</div>

  <h2>Objectives</h2>
  <ul>
    <li>Print strings, characters, and numbers to the LCD</li>
    <li>Format text to fit 8x2 size LCD</li>
    <li>Neatly displaying more text than can fit in the LCD at a time</li>
    <li>Use variables and arrays to print text to LCD</li>
    <li>Use loops and control flow statements to print text to the LCD</li>
    <li>Become familiar with the following terms, operators, and data types: output, '+', char*, const char*, char[], char[][]</li>
    <li>Become familiar with the following functions: print, print_character, print_long, lcd_goto_xy, clear, delay, delay_ms, strlen</li>
  </ul>

  <h2>Need To Know</h2>
    <ul>
    <li>Strings, characters, and numbers</li>
    <li>Variables, arrays, functions, loops, control-flow statements</li>
  </ul>

  <h2>Tutorial</h2>
  <p>When you give the 3pi robot some kind of input, often times there is an output. Input is any type of information the robot can receive. Input can be many things like a number, string, or even the pressing of a button. All of these give the robot some kind of information that it can use to do certain actions.</p>

  <p>Output is any type of information the robot gives back to you or an action it does based on the input it received. Like input, output can be many things like a number or a string. The robot can also use the screen (called an LCD) to display text, its lights (called LEDs), and the buzzer (plays music and sounds) for output.</p>
  
   <p>In this section you will be shown how to output values to the LCD. Many types of values can be outputted to the LCD but we will use strings for now. The program below shows how the string "Hello" is outputted to the LCD.</p>

  <img src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/screenshots/Hello.png" alt="Hello.c source file">
  <img class="tut" src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/pictures/Hello.jpg" alt="Robot displaying Hello">
  <p>Figure 1: Hello.c. Prints "Hello" to the LCD</p>

  <p>Using a function called print, one can output strings to the robot's LCD. You should be able to print any character found on your keyboard, like question marks (?), percent signs (%), and dollar signs($). The "while(1);" is also an important part of the program. The "while" is called a loop and in this case it stops the program from ending. Programs for the 3pi robots should not reach the end as it may cause unpredictable behavior.</p>

  <p>You can use the print function again to print more strings onto the LCD. The strings will be printed right after the last string that was printed. For example, you can use another print statement to print "Hi" to the LCD like so:</p>

  <img src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/screenshots/HelloHi.png" alt="HelloHi.c source file">
  <img class="tut" src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/pictures/HelloHi.jpg" alt="Robot displaying HelloHi">
  <p>Figure 2: HelloHi.c. Prints "HelloHi" to the LCD.</p>

  <p>The strings will be printed exactly as you type them. With the code above, the LCD should appear as "HelloHi". Putting a space after "Hello" will cause the LCD to leave a blank space and for "Hello" and "Hi" to be spaced out. This makes strings easier to read on the LCD. Here is how the code looks with an extra space in the "Hello" string:</p>
  
  <img src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/screenshots/Hello_Hi.png" alt="Hello_Hi.c source file">
  <img class="tut" src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/pictures/Hello_Hi.jpg" alt="Robot displaying Hello Hi">
  <p>Figure 3: Hello_Hi.c. Prints "Hello Hi" to the LCD.</p>

  <p>Not only can you print strings, but you can also print numbers and characters with different print functions. The two functions that print numbers and characters are "print_long" and "print_character". "print_long" will print numbers. A "long" is a data type for big numbers, so print_long can print big numbers but also small ones as well. "print_character" will print characters, which are individual keyboard letters, numbers, and symbols surrounded by single quote (‘) marks. Here are what some characters look like: ‘a’, ‘b’, ‘3’, ‘!’. They are different from strings since strings use the double quote marks (") and can have more than 1 letter, number, or symbol in between the quotation marks. Here are examples printing numbers and characters.</p>

  <img src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/screenshots/print_long.png" alt="print_long.c source file">
  <img class="tut" src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/pictures/print_long.jpg" alt="Robot displaying 12345678">
  <p>Figure 4: print_long.c. Prints 12345678 to the LCD.</p>  

  <img src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/screenshots/print_character.png" alt="print_character.c source file">
  <img class="tut" src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/pictures/print_character.jpg" alt="Robot displaying c 3 !">
  <p>Figure 5: print_character.c. Prints a few different characters to the LCD.</p>

  <p>"print_long" can also be used to display negative numbers and the result of an expression. For example, print_long(3 + 3) would display 6 on the LCD, print_long(3 * 3) would display 9 on the LCD, print_long(3 * -3) would display -9 on the LCD, and print_long(18 - 19) would display -1 on the LCD. Here is an example using 2 - 6:</p>

  <img src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/screenshots/print_expression_result.png" alt="print_expression_result.c source file">
  <img class="tut" src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/pictures/print_expression_result.jpg" alt="Robot displaying result of 2 - 6">
  <p>Figure 6: print_expression_result.c. Prints the result of 2 - 6 to the LCD.</p>

  <p>All 3 of these print functions can be used together to display text on the LCD like so:</p>

  <img src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/screenshots/print_string_long_character.png" alt="print_string_long_character.c source file">
  <img class="tut" src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/pictures/print_string_long_character.jpg" alt="Robot displaying message about age">
  <p>Figure 7: print_string_long_character.c. Prints a message about age.</p>

  <p>When trying to print something longer than "Hello", like "Hello World!", you will notice that the entire message does not fit on the LCD. The size of the LCD is 8x2 characters, meaning 8 characters are displayed on each row and there are 2 rows. If you try to print "Hello World!", only "Hello Wo" is displayed on the LCD. We can use a different function called "lcd_goto_xy" which allows us to pick where on the LCD a string can be printed. We will also use another call to the print function to split printing "Hello World!" between 2 print functions. An example is shown below.</p>

  <img src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/screenshots/Hello_World!.png" alt="Hello_World!.c source file">
  <img class="tut" src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/pictures/Hello_World!.jpg" alt="Robot displaying Hello World!">
  <p>Figure 8: Hello_World!.c. Prints "Hello" on the first row then "World!" on the second row of the LCD.</p>

  <p>The function lcd_goto_xy picked the first spot in the second row to start printing from, so when the function print was called to print "World!", it was printed from the second row. Again, you will learn more about functions in future sections. The first number in the function lcd_goto_xy chooses which column to start printing from and the second number chooses which row, where 0 is the first column or row and 1 is the next column or row, and so on.</p>

  <p>If you wish to print more text when the LCD is full or want to display text without any of the previous text, you can clear the entire LCD with the function "clear()". After the screen is cleared, the next print function will start to print from the start of the LCD. The code below will print a string of a math expression, clear the LCD, then print the result of the expression.</p>

  <img src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/screenshots/clear.png" alt="clear.c source file">
  <video controls preload="none">
    <source src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/pictures/clear.mp4" type="video/mp4">
    Your browser does not support HTML video.
  </video>
  <p>Figure 9: clear.c. Prints an expression then clears screen and prints answer.</p>

  <p>You may notice that the LCD only displays the result of the expression although according to the code the LCD should display the expression first. The code is displaying the text but the speed at which the code is executed is so fast you only see the result of the expression. A function can be used to help delay the execution of the "clear()" function.</p>

  <p>This function is "delay_ms". "delay_ms" delays the execution of the next lines of code by the specified amount of time (in milliseconds). 1000 milliseconds is equal to 1 second. "delay_ms" also has another name that does the same thing called "delay". Since it is more obvious that "delay_ms" will delay execution of the program by milliseconds, using "delay_ms" instead of "delay" could make reading code easier. We will typically be using "delay_ms" in our code. Here the delay function is used so that you can see the math expression from above for a second before you see the answer.</p>

  <img src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/screenshots/delay.png" alt="delay.c source file">
  <video controls preload="none">
    <source src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/pictures/delay.mp4" type="video/mp4">
    Your browser does not support HTML video.
  </video>
  <p>Figure 10: delay.c. Prints an expression, delays clearing of the LCD for 1 second, then prints the result.</p>

  <p>The delay function will not affect previously executed code. The text that was printed before the delay function will still be displayed on the screen. If the robot was playing music, the music would still be playing while the robot is delaying the next lines of code. If the robot was moving around, it would continue to move around while the robot is delaying the next lines of code.</p>

  <p>Variables can be used to more conveniently print messages to the LCD. For example, if you need to print the same string multiple times to the LCD, you can save the string to a variable and reuse as needed. You can use the data types char*, const char*, or char[] to hold a string. Here is an example of a simple message being printed twice on the LCD.</p>

  <img src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/screenshots/print_string_variable.png" alt="print_string_variable.c source file">
  <img class="tut" src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/pictures/print_string_variable.jpg" alt="Robot displaying Hello Hello">
  <p>Figure 11: print_string_variable.c. Printing a string variable.</p>

  <p>The string "Hello" is printed twice on the LCD, the first "Hello" on the first row of the LCD and the second "Hello" on the second row of the LCD. Using variables will allow you to avoid retyping the same strings over and over again. If you wanted to change the printed string from "Hello" to "Hi", you only need to change it in one place, but if you typed out the string in both the print functions, you would have to change the string in both the print functions. Besides being convenient this also reduces the chances for errors in your code.</p>

  <p>There are many other string related functions that can be be useful when printing to the LCD like "strlen". "strlen" (short for "string length") will return how many characters are in a string. Here is an example of "strlen" being used.</p>

  <img src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/screenshots/strlen.png" alt="strlen.c source file">
  <img class="tut" src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/pictures/strlen.jpg" alt="Robot displaying Hello Hello">
  <p>Figure 12: strlen.c. Printing lengths of strings with "strlen".</p>

  <p>The length of the string "Hello" is printed on the first row of the LCD and the length of the string variable "welcome_line" is printed on the second row of the LCD. "strlen" can be used to return the length of a string literal or string variable as shown in this program. The length is 5 in both cases. Knowing the lengths of strings can be useful when deciding on what to print on the LCD.</p>

  <p>Trying to print strings longer than 8 characters in a single row of the LCD will result in only part of the string showing up on the LCD. Instead of attempting to print the string, you can display an error message warning you that a string was too long to display. This could let you know that you must shorten the string to make it fit on the LCD. For example, if a string’s length is longer than 8 characters, then you can print "too long" instead. You can use if-else statements and boolean conditions in this case to help the robot decide what to print. Here is code for this example.</p>

  <img src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/screenshots/strlen_ifelse_demo.png" alt="strlen_ifelse_demo.c source file">
  <img class="tut" src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/pictures/strlen_ifelse_demo.jpg" alt="Robot displaying Hello Hello">
  <p>Figure 13: strlen_ifelse_demo.c. Printing strings to LCD based on their lengths.</p>

  <p>The length of the welcome_line strings are checked to see if they are longer than 8 characters. These become conditions in the if-else statements. If the condition is true, then the too_long_line string is printed as the welcome line is longer than 8 characters and all of it will not be displayed on the LCD. If it is false, then it is less than or equal to 8 characters and will fit on the LCD. In this case, welcome_line1 is too long so "too long" is printed on the first row of the LCD. After a lcd_goto_xy function, the welcome_line2 string is printed on the second row of the LCD because it is less than or equal to 8 characters.</p>

  <p>You can use other functions that give a boolean result as a condition in if-else statements or switch statements to decide whether or not to print something. These type of functions include "is_playing". "is_playing" will return true if the robot is playing music on the buzzer and return  false if it is not playing. If the robot is playing music, you can print to the LCD "music is playing". Here is code for this example.</p>

  <img src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/screenshots/LCD_is_playing_demo.png" alt="LCD_is_playing_demo.c source file">
  <video controls preload="none">
    <source src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/pictures/LCD_is_playing_demo.mp4" type="video/mp4">
    Your browser does not support HTML video.
  </video>
  <p>Figure 14: LCD_is_playing_demo.c. Printing to LCD if music is playing.</p>

  <p>After an initial delay of 1000 ms, music starts to play. Then a check is made if music is playing. Since music is still playing by the time the check is made, the music_playing_line strings are printed to the LCD.</p>

  <p>Loops are very useful when using the LCD. They can be used to print messages over and over again to the LCD. You could use conditions just like with if-else statements with loops. For example, you could continuously display a message until a user clicks a button. This message could remind them which button to press if they want the robot to do something, tell them the status of the robot, or tell them the name of the program the robot is running. Here is code for a program that continuously displays the battery level of the robot and ask users to press B. Pressing B makes the LCD print another message infinitely.</p>

  <img src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/screenshots/LCD_loop_through_strings.png" alt="LCD_loop_through_strings.c source file">
  <video controls preload="none">
    <source src="http://web-students.armstrong.edu/~jm4386/includes/images/tutorials/3pi_basics/LCD/pictures/LCD_loop_through_strings.mp4" type="video/mp4">
    Your browser does not support HTML video.
  </video>
  <p>Figure 15: LCD_loop_through_strings.c. Printing a message to big to fit all at once on LCD.</p>

  <p>The level of the battery is found then displayed on the screen. The message "Press B" is also displayed on the screen. These text stay on the LCD for 100 ms (just a tenth of 1 second) then the LCD is cleared and the text is displayed again. If the b button is pressed and released and after a delay of 1000 ms, the welcome line strings will be printed on the LCD infinitely.</p>

  <p>Printing text to the LCD drains the battery quickly, so adding a delay (like the 100 ms delay in the first loop or the 1000 ms delay in the second loop) before another iteration of printing in a loop will greatly conserve battery life.</p>


  <h2>Summary</h2>
    <p>The LCD is a good way to let the robot display output.</p>

    <h3>List of used functions</h3>
    <ul>
      <li>print(const char *str) - prints a string</li>
      <li>print_long(long value) - prints a long type number</li>
      <li>print_character(char c) - prints a character</li>
      <li>lcd_goto_xy(unsigned char col, unsigned char row) - changes where text will be printed on the LCD</li>
      <li>clear() - clears the LCD of all text</li>
      <li>delay_ms(unsigned int milliseconds) - delays the execution of the next lines of code</li>
      <li>strlen(const char*) - returns length of a string</li>
    </ul>

  <h2>Questions</h2>
    <ol>
      <li>Display two 8-letter words on the LCD at the same time</li>
      <li>Make a short message appear like it is blinking</li>
    </ol>
	
</div>