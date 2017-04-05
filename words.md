

# Welcome to Xdebug workshop


The format for the evening is going to be this:

i. Someone will say some words up here

ii. We'll do an exercise involving some debugging.

iii. Rinse and repeat, until the end.

## Aim of the evening
 
To be honest Xdebug is a bit of a pain in the arse to use. Even when you're experienced with it, getting it to co-operate is sometimes still quite annoying.

The aim of this evening isn't to give you flawless knowledge of how to use Xdebug - instead the main goal is to show you what it's capable of

The exercises are in the web directory of the project, in separate directories.

# Exercise 1 - Getting started

1. Start the VM
2. Install Xdebug
3. Configure PHP
4. Check configuration
5. Install browser plugins
6. Configure PhpStorm

Task 1 - Install and configure Xdebug

Task 2 - Configure PhpStorm


# Exercise 2 - Breakpoints, stepping, stack and variables

To stop execution at a certain point in the code you can set a breakpoint by clicking next to a line. Once execution has
stopped you can use the stepping controls:

- Step over - executes the function, but doesn't take the debugger in there. i.e. takes you to the next line in the 
current scope.
- Step into - starts executing the function, and takes the debugger into the first line of that function.
- Step out - Jumps out of the current function, and takes the debugger to the line where the function was called.
- Run to caret - Executes code till the line that the caret is on.

When execution is halted, the Frames window shows the current execution stack. This is equivalent to a stack trace in
an error message. The variables window shows the content of variables in the current scope. Clicking a frame in the
Frames window allows you to change the scope to any point in the current stack.

Task - Have a play with setting breakpoints, the stepping functions and the frames window to get used to the 
functionality. Feel free to ask any questions you have.

# Exercise 3 - Advanced breakpoints, variables and watches 

Sometimes you want to debug a function that is called many times, or are interested in a specific cycle of a very long
loop. Setting a breakpoint and clicking play till you are at the right point can be very time consuming. Conditional
breakpoints solve this problem, halting execution based on an expression. You can also create breakpoints based on
Exceptions. They get detected when thrown rather than when unhandled which can be very helpful.

Note the use of the breakpoint manager.

We have already seen the variables window showing variable content when the debugger is paused. It also allows variables
to be changed at runtime.

Watches can be used to evaluate expressions in the current scope. They are stored between debugging runs.

Task - Have a play with conditional breakpoints, variables and watches. Feel free to ask any questions you have.

# Exercise 4 - Remote CLI debugging

This is really useful for debugging through unit-tests, or running code in either vagrant/docker to match your production environment, without having to swap versions of PHP 

Task 1 - ssh into the vagrant box `vagrant ssh`

Go to the directory that holds the source file `cd /vagrant/web/exercise_8`

Start PhpStorm listening to 

zend_extension=php_xdebug.so
xdebug.remote_host = 10.0.2.2 
xdebug.remote_enable = on
xdebug.remote_autostart = on 























