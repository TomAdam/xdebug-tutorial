

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























