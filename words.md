

# Welcome to Xdebug workshop


The format for the evening is going to be this:

i. Someone will say some words up here

ii. We'll do an exercise involving some debugging.

iii. Rinse and repeat, until the end.

## Aim of the evening
 
To be honest Xdebug is a bit of a pain in the arse to use. Even when you're experienced with it, getting it to co-operate is sometimes still quite annoying.

The aim of this evening isn't to give you flawless knowledge of how to use Xdebug - instead the main goal is to show you what it's capable of

The exercises are in the web directory of the project, in separate directories.

# Exercise 1 - getting going

There's two ways to start debugging something:

Quick way - right click on the file and select 'Debug PHP' - I really don't know why PhpStorm gives you a trick question of do you want to debug this PHP file as Javascript.

You may need to configure which PHP executable should be used - most of the time this only needs to be done once.

Longer way - 'Edit configurations' in the top right window. This allows more complex setup e.g. debugging server side code, setting arguments. For now keep with the 'PHP Script'.

We'll talk about 'stepping through' code as part of the next exercise, but I just need to mention once your code has stopped on the xdebug_break() you'll need to hit the green 'Resume program' button.

  
Task 1 - Launch the exercise_1/index.php through xdebug it should stop automatically if Xdebug is configured properly. Raise your flag if it doesn't stop. Press play or step over to run through to the end of the script.

 
Task 2 - Edit the PHP script configuration through the menu in the top right to pass in an argument (or two) to the script so that it can greet you properly. 


# Exercise 2 - Simple breakpoints + Stepping through code

When you're debugging, you can step through the code.

Step over - executes the function, but doesn't take the debugger in there. i.e. takes you to the next line in the current scope.

Step into - starts executing the function, and takes the debugger into the first line of that function.

Force step into - if anyone knows what this is, please let me know.

Step out of - Jumps out of the current function, and takes the debugger to the line where the function was called from.

Just to point out some downsides, you can't step through PHP internal code - this is actually quite annoying.

# Exercise 4 - Introduction to stack traces

# Exercise 5 - Introduction to variables and watches

# Exercise 6 - Exception based breakpoints

# Exercise 7 - Web server debugging 

# Exercise 8 - Remote CLI debugging

This is really useful for debugging through unit-tests, or running code in either vagrant/docker to match your production environment, without having to swap versions of PHP 

Task 1 - ssh into the vagrant box `vagrant ssh`

Go to the directory that holds the source file `cd /vagrant/web/exercise_8`

Start PhpStorm listening to 

zend_extension=php_xdebug.so
xdebug.remote_host = 10.0.2.2 
xdebug.remote_enable = on
xdebug.remote_autostart = on 























