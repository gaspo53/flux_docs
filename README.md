flux_docs
=========

Flux IT Document Manager Test
=============

Flux IT Document Manager Test is a simple document manager system.
It was developed for apply to a job at Flux IT.


Pre-requisites
--------------

As it is a Web Application, you need to have installed at least this packages: 
<pre>
  <code>
      $ apache2
      $ mysql-server
      $ php5-cli
      $ php-pear
      $ libapache2-mod-php5
      $ git-core (for clonning the repository)
   </code>
</pre>
Installation
------------

First of all, check that your WebServer is running [here]

[here]: http://localhost

After that, it is recommended that you edit your /etc/hosts file and put this line: 
<pre>
  <code>
       $ 127.0.0.1 flux_docs.local
   </code>
</pre>

After doing that, you have to set-up a VirtualHost. As an example, you have to make one like this:
<pre>
  <code>
      &lt;virtualhost *:80&gt;
        ServerName flux_docs.local

        DocumentRoot "/path/to/project/flux_docs/web"
        DirectoryIndex index.php
        &lt;directory "/path/to/project/flux_docs/web"&gt;
          AllowOverride All
          Allow from All
        &lt;/directory&gt;

        Alias /sf /path/to/project/flux_docs/lib/vendor/symfony/data/web/sf
        &lt;directory /path/to/project/flux_docs/lib/vendor/symfony/data/web/sf&gt;
          AllowOverride All
          Allow from All
          &lt;/directory&gt;
        &lt;/virtualhost&gt;
    </code>
</pre>

And of course, enable it with:
<pre>
  <code>
      $# a2ensite flux_docs (if you named the VH 'flux_docs')
  </code>
</pre>

The PHP5 Apache2 Module and Rewrite:
<pre>
  <code>
      $# a2enmod php5
      $# a2enmod rewrite
      $# service apache2 restart
  </code>
</pre>


This is a PHP Symfony 1.4 App, so, you need to check your environment, with this script at
the root of the project:

<pre>
  <code> $ php check_configuration.php </code>
</pre>

Keep in mind that is recommended that all the items listed by the check script say OK.

After that, you have to edit config/databases.yml and set-up your DB configuration.

Once you have done that, you have to run the following commands:
<pre>
  <code>
    $ php symfony doctrine:build --all [y]
    $ php symfony doctrine:data-load
    $ php symfony guard:create-user admin@example.com admin admin
    $ php symfony cc


    Please make the <b>cache</b> and <b>log</b> folders, with write permissions.
  </code>
</pre>

After that, you have to set-up project permissions:
<pre>
  <code>
    $ php symfony project:permission
  </code>
</pre>

If for any reason, Symfony can't set permissions because of the lack of system permissions for the logged user, 
please run that command as root.
  
Usage
-----

That's all.

If you are a developer, the best way is to navigate the site with the prefix backend_dev.php; but it is optional.

If you have edited your /etc/hosts file with the line above, you can start to browse the app at this [address]

[address]: http://flux_docs.local

If it doesn't work, see what's happening in your Apache2 config file.