<?php

/**
 * Created by Pizaini
 * http://pizaini.wordpress.com
 *
 * Description of GlobalConfig
 *
 * @author Pizaini
 */
class globalConfiguration {
    //Global Configuration
    private $serverName = "localhost";
    private $user = "root";
    private $password = "";
    private $databaseName = "family";
    private $siteName = "Family Tree";

    public function getServerName() {
        return $this->serverName;
    }

   public function getUser() {
        return $this->user;
    }

   public function getPassword() {
        return $this->password;
    }

   public function getDatabaseName() {
        return $this->databaseName;
    }

   public function getSiteName() {
        return $this->siteName;
    }
}
?>