<?php

class HelloController extends BaseController {
    
    public function hello() {
        $this->view = View::make('hello')->with('title', HelloModel::title())
                                         ->withContent(HelloModel::content());
    }

}

?>
