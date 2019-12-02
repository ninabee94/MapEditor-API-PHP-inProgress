# MapEditor-API-PHP-inProgress

<b>1. Start XAMPP, then Apache & MySQL</b>

      //find and stop other process running at port 3306

      netstat -ano|findstr "PID :3306"
     
      taskkill /pid 3404 /f

2. Open http://localhost/phpmyadmin

3. Create these tables

      id (int 255, PRIMARY KEY, UNSIGNED, AUTO INCREMENT)
     
      latitude (double)
     
      longitude (double)
     
      name (varchar 255)
     
      icon (longblob, BROWSER DISPLAY TRANS:Inline image/png)

2. Create new folder at C:\XAMPP\htdocs\mapeditor\ to put php files

3. Open http://localhost/mapeditor/view.php
