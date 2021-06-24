<?php
class navbarModel extends model{
    public  $title = "Navbar";
    public function logout()
    {
        

        return session_destroy();
    }
    
  
}