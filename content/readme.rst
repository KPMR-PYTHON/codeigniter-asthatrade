###################
How to Install
###################

 
*******************
Localhost Installation on Windows
*******************
1. Download and install XAMPP from https://www.apachefriends.org/download.html
2. Download and install codeigniter 3 from https://www.codeigniter.com/download
3. Download and install github from https://desktop.github.com/
4. Clone the repository into C:\\\xampp\\\htdocs\\\
5. Copy system folder from codeigniter3 and paste it inside asthatrade folder
6. Create a .htaccess file with 

```    
  <IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php?/$1 [L]
  </IfModule>
  
  SetEnv CI_ENV development
```

********************
Best Practices
********************
1. For each new feature , create a new branch 
2. Check thoroughly before pushing 
3. Make sure environment variables are set correctly on your machine and the server
