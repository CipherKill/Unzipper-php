# Unzipper by CipherKill #

`unzipper.php` allows you to extract your project zip files in the hosting server easily.

# How to use #
Note: Lets assume your website address is `example.com`.

- Place the project zip file and the unzipper.php file in the same folder (in my case it's public_html).
- Then go to `example.com/unzipper.php`.
- Follow the instructions in the webpage and you are good to go.

# In case of errors #
This uses the ZipArchive class. Newer versions of php supports this by default.  

In case if you get errors realted to `ZipArchive` when using the unzipper.php. Then make sure to execute `sudo apt install php-zip` (linux command) to install the required dependencies.  

## If there are other errors that you find. Let me know in github itself ##
