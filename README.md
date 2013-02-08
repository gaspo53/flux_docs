flux_docs
=========

Flux IT Document Manager Test
=============

Flux IT Document Manager Test is a simple document manager system.
It was developed for apply to a job at Flux IT.


Pre-requisites
--------------

As it is a Web Application, you need to have installed at least this packages: []:

   $ apache2
   $ mysql-server
   $ php5-cli
   $ php-pear
   $ libapache2-mod-php5
   $ git-core (for clonning the repository)
   

Installation
------------

First of all, check that your WebServer is running [here]

[here]: http://localhost

After that, it is recommended that you edit your /etc/hosts file and put this line: 
    $ 127.0.0.1 flux_docs.local

After doing that, you have to set-up a VirtualHost. As an example, you have to make one like this: []:
<pre>
  <code>
      <virtualhost *:80>
        ServerName flux_docs.local

        DocumentRoot "/path/to/project/flux_docs/web"
        DirectoryIndex index.php
        <directory "/path/to/project/flux_docs/web">
          AllowOverride All
          Allow from All
        </directory>

        Alias /sf /path/to/project/flux_docs/lib/vendor/symfony/data/web/sf
        <directory /path/to/project/flux_docs/lib/vendor/symfony/data/web/sf>
          AllowOverride All
          Allow from All
          </directory>
        </virtualhost>
    </code>
</pre>

And of course, enable it with:
<pre>
  <code>
      $ a2ensite flux_docs (if you called the VH 'flux_docs')
  </code>
</pre>

This is a PHP Symfony 1.4 App, so, you need to check you environment, with this script at
the root of the projet:

<pre>
  <code> php check_configuration.php </code>
</pre>

After that, you have to edit config/databases.yml and set-up you DB configuration.

Once you have done that, you have to run the following commands:
<pre>
  <code>
    $ php symfony doctrine:build --all [y]
    $ php symfony doctrine:data-load
    $ php symfony guard:create-user admin@example.com admin admin
    $ php symfony cc
  </code>
</pre>
  
Usage
-----

That's all.

If you are a developer, the best way is to navigate the site with the prefix backend_dev.php; but it is optional.


