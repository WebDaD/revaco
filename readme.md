# Revaco

Responsive Variable Colors. A clear template with 2 colors. Will change header and footer on mobile using multiple css files. Will also use jquery to style navigation


## Installation

Just download the newest version from subfolder bin.

Then install it in joomla3 like any other module

## Update

Overwrite the Files. Check the Config. Simple as that.

## Features

- Header
- Mobile
- Responsive
- Swipe
- LazyLoad

## Intructions

### Link Effects
YOu can decorate your Links to hava some effects on mouse-hover.
Just add the following class to get an effect: (``<a class="[CLASS/ES]" href="">``)
- `.grow` : Grow the Element
- `.glow` : Let the Element glow
- `.underline` : produce an underline
- `.blod`: have bold font
- `.italic`: have italic font
- `.smooth`: Let all the above magic happen in a smooth movement

### Tables

You may use class `def` to have a default class.  
`highlight` will enable highlighting of rows and cols.  

_Example:_  
 `<table class="highlight def">  
    <thead>  
        <tr>  
            <th>col1</th>  
            <th>col2</th>  
            <th class="col">col3</th>  
            <th class="col">col4</th>  
            <th class="col">col5</th>  
        </tr>  
    </thead>    
    <tbody>  
        <tr>  
            <th class="row">300</th>  
            <th>300</th>  
            <td>1449,-</td>  
            <td></td>  
            <td></td>  
        </tr>  
        <tr>  
            <th class="row">300</th>  
            <th>400</th>  
            <td>1599,-</td>  
            <td></td>  
            <td></td>  
        </tr>`  

### Plugins

#### LazyLoad
This plugin defers the loading of images until they come into the viewspace.
It can be disabled per Image with the following class:
- ``no_lazyload``
Also all images in the following containers are ignored:
- ``simpleimagerotator``

#### YouTube
This Plugin converts a youtube-URL to a embedded Video.
You can write:
- ``<p class="youtube">URL</p>`` to use the default Values defined.
- ``<p class="youtube">url=https://www.youtube.com/watch?v=k4CDEhUE8YA;width=WWW;height=HHH</p>`` to overwrite the default Values for this Video

#### SimpleImageRotator
This Plugin shows different images in a single spot. Just write:
- ``<p class="simpleimagerotator"><img src=""/><img src=""/>...</p>``
You may use as many images as you like
You can also set the transition time for a single rotator:
- ``<p class="simpleimagerotator" data-transition_time="VALUE">`` Wheres VALUE = Time in milliseconds

#### FancyBox
This Plugin shows pretty full-screen-images onClick
It allows to auto-activate fancybox for every image, but wil ignore the class ``no_fancybox``
For activation on a single image simply add the class ``fancybox`` to a sorrounding Link, targeting the image!
Info: The img alt-Tag will be Used as Title for the FullScreen Image

## MileStones

See Issues


## Plugins
Revaco uses many plugins to have one configuration and not many seperate plugins.

There are some facts about them:
- There is a "Main Switch" for every Plugin
- Plugin JS will only be loaded if active
- If there are configurations for the plugin, they are saved in the details.xml
- The config can be overriden for every single call
- Plugins are used by assining classes to a container (p,div,...)
- The content and (maybe) config are plain written in the container
- There are global plugins (like lazyload) and local ones (like youtube)

## Planed Additional Projects

- Version for Wordpress
- Version for Tools with XML-Config-File (Navigation?)
