<?php
  class rss extends Controller{
      function rss(){
          parent::Controller();
          $this->load->model('rss_model','rss');
      }
      function index(){
          echo 'zin chao';
          $this->load->view('autoanh/index');
      }
      function tintuc(){
          $list = $this->rss->getRssTintuc();
       $detail ='<?xml version="1.0" encoding="utf-8"?>
        <rss version="2.0">
            <channel>
                <title>DINH VIET LAND RSS</title>
                <link>'.base_url().'</link>
                <description>'.$this->setting_library->setting['site_description'].'</description>
                <language>en-us</language>
                <copyright>Copyright (C) 2010</copyright>';
            foreach($list as $rs):
              $detail .='<item>
                    <title>'.$rs->tieude.'</title>
                    <description>'.$rs->noidungngan.'</description>
                    <link>'.base_url().'tintuc/chi-tiet/'.$rs->idcat.'/'.$rs->id.'/'.$rs->alias.duoi().'</link>
                    <pubDate>'.$rs->ngay.'</pubDate>
                </item>';
              endforeach;
  
            $detail .='</channel>
        </rss>';
        echo $detail;          
      }
  }
?>
