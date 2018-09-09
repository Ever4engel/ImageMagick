



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
  <title>MagickCore, C API: Get or Set Image Channels @ ImageMagick</title>
  <meta name="application-name" content="ImageMagick">
  <meta name="description" content="Use ImageMagick® to create, edit, compose, convert bitmap images. With ImageMagick you can resize your image, crop it, change its shades and colors, add captions, among other operations.">
  <meta name="application-url" content="https://www.imagemagick.org">
  <meta name="generator" content="PHP">
  <meta name="keywords" content="magickcore, c, api:, get, or, set, image, channels, ImageMagick, PerlMagick, image processing, image, photo, software, Magick++, OpenMP, convert">
  <meta name="rating" content="GENERAL">
  <meta name="robots" content="INDEX, FOLLOW">
  <meta name="generator" content="ImageMagick Studio LLC">
  <meta name="author" content="ImageMagick Studio LLC">
  <meta name="revisit-after" content="2 DAYS">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Copyright (c) 1999-2017 ImageMagick Studio LLC">
  <meta name="distribution" content="Global">
  <meta name="magick-serial" content="P131-S030410-R485315270133-P82224-A6668-G1245-1">
  <meta name="google-site-verification" content="_bMOCDpkx9ZAzBwb2kF3PRHbfUUdFj2uO8Jd1AXArz4">
  <link href="https://www.imagemagick.org/api/channel.php" rel="canonical">
  <link href="https://imagemagick.org/image/wand.png" rel="icon">
  <link href="https://imagemagick.org/image/wand.ico" rel="shortcut icon">
  <link href="https://imagemagick.org/assets/magick-css.php" rel="stylesheet">
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="https://imagemagick.org/"><img class="d-block" id="icon" alt="ImageMagick" width="32" height="32" src="https://imagemagick.org/image/wand.ico"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExampleDefault" style="">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="https://imagemagick.org/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="https://imagemagick.org/script/download.php">Download</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="https://imagemagick.org/script/command-line-tools.php">Tools</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="https://imagemagick.org/script/command-line-processing.php">Command-line</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="https://imagemagick.org/script/resources.php">Resources</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="https://imagemagick.org/script/develop.php">Develop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="https://www.imagemagick.org/discourse-server/">Community</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="../script/search.php">
      <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="sa">Search</button>
    </form>
    </div>
  </nav>
  <div class="container">
   <script async="async" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-3129977114552745"
         data-ad-slot="6345125851"
         data-ad-format="auto"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

  </div>
  </header>
  <main class="container">
    <div class="magick-template">
<div class="magick-header">
<p class="text-center"><a href="channel.php#ChannelFxImage">ChannelFxImage</a> &bull; <a href="channel.php#CombineImages">CombineImages</a> &bull; <a href="channel.php#GetImageAlphaChannel">GetImageAlphaChannel</a> &bull; <a href="channel.php#SeparateImage">SeparateImage</a> &bull; <a href="channel.php#SeparateImages">SeparateImages</a> &bull; <a href="channel.php#SetImageAlphaChannel">SetImageAlphaChannel</a></p>

<h2><a href="http://www.imagemagick.org/api/MagickCore/channel_8c.html" id="ChannelFxImage">ChannelFxImage</a></h2>

<p>ChannelFxImage() applies a channel expression to the specified image.  The expression consists of one or more channels, either mnemonic or numeric (e.g. red, 1), separated by actions as follows:</p>

<dd>
</dd>

<dd> &lt;=&gt;     exchange two channels (e.g. red&lt;=&gt;blue) =&gt;      copy one channel to another channel (e.g. red=&gt;green) =       assign a constant value to a channel (e.g. red=50) ,       write new image channels in the specified order (e.g. red, green) |       add a new output image for the next set of channel operations ;       move to the next input image for the source of channel data </dd>

<dd> For example, to create 3 grayscale images from the red, green, and blue channels of an image, use: </dd>

<pre class="text">
    -channel-fx "red; green; blue"
</pre>

<p>A channel without an operation symbol implies separate (i.e, semicolon). </dd>

<dd> The format of the ChannelFxImage method is: </dd>

<pre class="text">
Image *ChannelFxImage(const Image *image,const char *expression,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows: </dd>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>expression</dt>
<dd>A channel expression. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/channel_8c.html" id="CombineImages">CombineImages</a></h2>

<p>CombineImages() combines one or more images into a single image.  The grayscale value of the pixels of each image in the sequence is assigned in order to the specified channels of the combined image.   The typical ordering would be image 1 =&gt; Red, 2 =&gt; Green, 3 =&gt; Blue, etc.</p>

<p>The format of the CombineImages method is:</p>

<pre class="text">
Image *CombineImages(const Image *images,const ColorspaceType colorspace,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image sequence. </dd>

<dd> </dd>
<dt>colorspace</dt>
<dd>the image colorspace. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/channel_8c.html" id="GetImageAlphaChannel">GetImageAlphaChannel</a></h2>

<p>GetImageAlphaChannel() returns MagickFalse if the image alpha channel is not activated.  That is, the image is RGB rather than RGBA or CMYK rather than CMYKA.</p>

<p>The format of the GetImageAlphaChannel method is:</p>

<pre class="text">
MagickBooleanType GetImageAlphaChannel(const Image *image)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/channel_8c.html" id="SeparateImage">SeparateImage</a></h2>

<p>SeparateImage() separates a channel from the image and returns it as a grayscale image.</p>

<p>The format of the SeparateImage method is:</p>

<pre class="text">
Image *SeparateImage(const Image *image,const ChannelType channel,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>channel</dt>
<dd>the image channel. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/channel_8c.html" id="SeparateImages">SeparateImages</a></h2>

<p>SeparateImages() returns a separate grayscale image for each channel specified.</p>

<p>The format of the SeparateImages method is:</p>

<pre class="text">
Image *SeparateImages(const Image *image,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/channel_8c.html" id="SetImageAlphaChannel">SetImageAlphaChannel</a></h2>

<p>SetImageAlphaChannel() activates, deactivates, resets, or sets the alpha channel.</p>

<p>The format of the SetImageAlphaChannel method is:</p>

<pre class="text">
MagickBooleanType SetImageAlphaChannel(Image *image,
  const AlphaChannelOption alpha_type,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>alpha_type</dt>
<dd> The alpha channel type: ActivateAlphaChannel, AssociateAlphaChannel, CopyAlphaChannel, DeactivateAlphaChannel, DisassociateAlphaChannel,  ExtractAlphaChannel, OffAlphaChannel, OnAlphaChannel, OpaqueAlphaChannel, SetAlphaChannel, ShapeAlphaChannel, and TransparentAlphaChannel. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
</div>
    </div>
  </main><!-- /.container -->
  <footer class="magick-footer">
    <p><a href="https://imagemagick.org/script/security-policy.php">Security</a> •
    <a href="https://imagemagick.org/script/architecture.php">Architecture</a> •
    <a href="https://imagemagick.org/script/links.php">Related</a> •
     <a href="https://imagemagick.org/script/sitemap.php">Sitemap</a>
    &nbsp; &nbsp;
    <a href="channel.php#"><img class="d-inline" id="wand" alt="And Now a Touch of Magick" width="16" height="16" src="https://imagemagick.org/image/wand.ico"/></a>
    &nbsp; &nbsp;
    <a href="http://pgp.mit.edu/pks/lookup?op=get&amp;search=0x89AB63D48277377A">Public Key</a> •
    <a href="https://imagemagick.org/script/support.php">Donate</a> •
    <a href="https://imagemagick.org/script/contact.php">Contact Us</a>
    <br/>
        <small>© 1999-2018 ImageMagick Studio LLC</small></p>
  </footer>

  <!-- Javascript assets -->
  <script src="https://imagemagick.org/assets/magick-js.php" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="https://imagemagick.org/assets/jquery.min.js"><\/script>')</script>
</body>
</html>
<!-- Magick Cache 5th September 2018 23:32 -->