#!/usr/bin/env node
var express = require('express')
  , fs = require('fs')
  , path = require('path')
  , htmlRegex = /\.html$/;

var root_path = './src/html';
var assets_path = './src/assets';
var js_path = './src/js';
var notFoundPage = 'pages-404.html';

var app = express();

// Serve assets folder
app.use( '/assets', express.static( assets_path ) );

// Serve JavaScript folder
app.use( '/assets/js', express.static( js_path ) );

app.get('/*', function(req, res){
  var errorPage = path.join(__dirname + '/../src/html/' + notFoundPage );
  
  if( req.url.match(htmlRegex) ) {
    var filePath = path.join(__dirname + '/../src/html/' + req.url );

    fs.exists( root_path + req.url, function(exists){
 
      if( exists ) {//If file exists then serve it  

        try{

          res.sendFile( filePath );

        } catch ( error ) {

          var msg = error.toString();
          msg =  msg.replace(new RegExp('>','g'), '&gt;');
          msg =  msg.replace(new RegExp('\n','g'), '<br>');
          res.send( msg );

        }
      } else {
        res.status(404).sendFile( errorPage );
      }
      
    });
  } else {
    res.status(404).sendFile( errorPage );
  }

});

module.exports = app;