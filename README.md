XDebug Tutorial
===============

Requirements
------------

Requires the following:

- Vagrant >= v1.9.0
- VirtualBox >= v5.1.0

Also requires the following Vagrant plugins:

- vagrant-hostmanager >= v1.5.0
- vagrant-vbguest v0.13.0

An error will be thrown on ```vagrant up``` if they are not present. 
To install a plugin run ```vagrant plugin install <plugin_name>```.

Installation
------------

Run ```vagrant up``` in the project root. Grab a drink, this will take a few minutes. During the install process you'll be asked for your root or administrator password. This is to add the virtual machines hostname to your hosts files (/etc/hosts on *nix systems).


Testing
-------

Once setup check everything works by typing  http://xdebug.dev/ into your browser and check that you get a meme. If you see this then everything is OK. If not get in touch. 

