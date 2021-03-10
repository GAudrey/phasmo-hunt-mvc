<?php

class View{

    // file name for view
    private $file;
    // view title (title in view_form)
    private $title;

    public function __construct($action){
        //file is "in folder views, file view_whatever".php
        $this->file = "views/view_" . $action . ".php";
    }

    public function generate($datas){
        //generate view_whatever
        $content = $this->generateFile($this->file, $datas);
        //generate layout with view_whatever within
        $view = $this->generateFile('views/layout.php',
            array('title' => $this->title, 'content' => $content));
        //display
        echo $view;
    }

    private function generateFile($file, $datas){
        //if file exists
        if(file_exists($file)){
            //allow access to datas from view
            extract($datas);
            //keep datas while generating
            ob_start();
            //include view file
            require $file;
            //when done return view clear cache
            return ob_get_clean();
        }else{
            throw new Exception("File '$file' not found");
        }
    }

}

?>
