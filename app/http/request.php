<?php

namespace App\Http;

Class Request
{

    protected $post;
    protected $get;
    protected $method;
    protected $url;

    public function __construct()
    {
        $this->setGet($_GET)
            ->setPost($_POST)
            ->setUrl($_SERVER['REQUEST_URI'])
            ->setMethod($_SERVER['REQUEST_METHOD']);
    }

    /**
     * Get the value of post
     *
     * @return  Post
     */

    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set the value of post
     *
     * @param  Post  $post
     *
     *
     */

    public function setPost($post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get the value of get
     *
     * @return  Get
     */

    public function getGet()
    {
        return $this->get;
    }

    /**
     * Set the value of get
     *
     * @param  Get  $get
     *
     *
     */

    public function setGet($get)
    {
        $this->get = $get;

        return $this;
    }

    /**
     * Get method used to perform the request $_SERVER['REQUEST_METHOD']
     *
     * @return  String
     */

    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set method used to perform the request $_SERVER['REQUEST_METHOD']
     *
     * @param  String  $method  Method used to perform the request $_SERVER['REQUEST_METHOD']
     *
     *
     */

    public function setMethod(String $method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get the request Url $_SERVER['REQUEST_URI'];
     *
     * @return  String
     */

    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the request Url $_SERVER['REQUEST_URI'];
     *
     * @param  String  $url  The request Url $_SERVER['REQUEST_URI'];
     *
     *
     */

    public function setUrl(String $url)
    {
        $this->url = $url;

        return $this;
    }
}