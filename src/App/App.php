<?php

namespace Anax\App;

/**
 * An App class to wrap the resources of the framework.
 *
 * @SuppressWarnings(PHPMD.ExitExpression)
 */
class App
{
    public function redirect($url)
    {
        $this->response->redirect($this->url->create($url));
        exit;
    }



    /**
     * Render a standard web page using a specific layout.
     */
    public function renderPage($data, $status = 200)
    {
        //$data["stylesheets"] = ["css/style.css"];
        $data["stylesheets"] = [
            "css/style.css",
            "css/w3.css",
            "css/remserver.css"
        ];

        // Add common header, navbar and footer
        $this->view->add("blocks/header", [], "header");
        //$this->view->add("default1/navbar", [], "navbar");
        $this->view->add("blocks/footer", [], "footer");

        // Add layout, render it, add to response and send.
        $this->view->add("default1/layout", $data, "layout");
        $body = $this->view->renderBuffered("layout");
        $this->response->setBody($body)
                       ->send($status);
        exit;
    }
}
