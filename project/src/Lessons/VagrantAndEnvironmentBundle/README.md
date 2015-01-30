Vagrant and Symfony2 environment setup
========================
Would be really nice to have local project environment the same as production.
At least to have the same OS and soft. In this case we'll avoid simple
mistakes, problems with case insensitive file systems, wrong version of 
software and etc. A lot of virtualization solutions can help us with this
problem. So lets talk about vagrant. First of all lets install [Vagrant](https://www.vagrantup.com/ "Vagrant") and [VirtualBox](https://www.virtualbox.org/wiki/Downloads "VirtualBox").

Then go to the root of this project and run "vagrant up". This command will
turn on your image. Here is a small list of basic Vagrant commands which you'll usually use. 
```bash
    vagrant ssh #enter you into image shell
    vagrant halt #turn off the image
    vagrant reload #restart the image
    vagrant destroy #destroy the image
```

Have a look into Vagrantfile, ./vagrant/shell/start.sh and ./vagrant/shell/project.sh
to understand what is going on when you type "vagrant up" for the first time. 

Links:
------
- en http://symfony.com/doc/current/book/installation.html
- en http://symfony.com/doc/current/book/page_creation.html
- en https://puphpet.com/
- ru http://habrahabr.ru/post/178797/