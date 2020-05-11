@extends('layouts.adminmaster')

@section('content')
<section class="content-header">

   <div class="content-header">
     <h1>
       Project Documentation
       <small>Current version 2.1.0</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li class="active">Documentation</li>
     </ol>
   </div>

   <!-- Main content -->
   <div class="content body">

<section id='introduction'>
<h2 class='page-header'><a href="#introduction">Introduction</a></h2>
<p class='lead'>
<b>AdminLTE</b> is a popular open source WebApp template for admin dashboards and control panels.
It is a responsive HTML template that is based on the CSS framework Bootstrap 3.
It utilizes all of the Bootstrap components in its design and re-styles many
commonly used plugins to create a consistent design that can be used as a user
interface for backend applications. AdminLTE is based on a modular design, which
allows it to be easily customized and built upon. This documentation will guide you through
installing the template and exploring the various components that are bundled with the template.
</p>
</section><!-- /#introduction -->

<!-- ============================================================= -->

<section id='download'>
<h2 class='page-header'><a href="#browsers">File Directories</a></h2>
<pre class='hierarchy bring-up'><code class="language-bash" data-lang="bash">File Hierarchy of the Source Code Package

AdminLTE/
├── dist/
│   ├── CSS/
│   ├── JS
│   ├── img
├── build/
│   ├── less/
│   │   ├── AdminLTE's Less files
│   └── Bootstrap-less/ (Only for reference. No modifications have been made)
│       ├── mixins/
│       ├── variables.less
│       ├── mixins.less
└── plugins/
├── All the customized plugins CSS and JS files</code></pre>
</section>


<!-- ============================================================= -->

<section id='advice'>
<h2 class='page-header'><a href="#advice">A Word of Advice</a></h2>
<p class='lead'>
Before you go to see your new awesome theme, here are few tips on how to familiarize yourself with it:
</p>

<ul>
<li><b>AdminLTE is based on <a href="http://getbootstrap.com/" target="_blank">Bootstrap 3</a>.</b> If you are unfamiliar with Bootstrap, visit their website and read through the documentation. All of Bootstrap components have been modified to fit the style of AdminLTE and provide a consistent look throughout the template. This way, we guarantee you will get the best of AdminLTE.</li>
<li><b>Go through the pages that are bundled with the theme.</b> Most of the template example pages contain quick tips on how to create or use a component which can be really helpful when you need to create something on the fly.</li>
<li><b>Documentation.</b> We are trying our best to make your experience with AdminLTE be smooth. One way to achieve that is to provide documentation and support. If you think that something is missing from the documentation, please do not hesitate to create an issue to tell us about it. Also, if you would like to contribute, email the support team at <a href="mailto:support@almsaeedstudio.com">support@almsaeedstudio.com</a>.</li>
<li><b>Built with <a href="http://lesscss.org/" target="_blank">LESS</a>.</b> This theme uses the LESS compiler to make it easier to customize and use. LESS is easy to learn if you know CSS or SASS. It is not necessary to learn LESS but it will benefit you a lot in the future.</li>
<li><b>Hosted on <a href="https://github.com/almasaeed2010/AdminLTE/" target="_blank">GitHub</a>.</b> Visit our GitHub repository to view issues, make requests, or contribute to the project.</li>
</ul>
<p>
<b>Note:</b> LESS files are better commented than the compiled CSS file.
</p>
</section>

<!-- ============================================================= -->

<section id='browsers'>
<h2 class='page-header'><a href="#browsers">Browser Support</a></h2>
<p class="lead">AdminLTE supports the following browsers:</p>
<ul>
<li>IE9+</li>
<li>FireFox (latest)</li>
<li>Safari (latest)</li>
<li>Chrome (latest)</li>
<li>Opera (latest)</li>
</ul>
<p><b>Note:</b> IE9 does not support transitions or animations. The template will function properly but it won't use animations/transitions on IE9.</p>
</section>

<!-- ============================================================= -->

<section id='upgrade'>
<h2 class='page-header'><a href="#upgrade">Upgrade Guide</a></h2>
<p class="lead">To upgrade from version 1.x to the lateset version, follow this guide.</p>
<h3>New Files</h3>
<p>Make sure you update all CSS and JS files that are related to AdminLTE. Otherwise, the layout will not
function properly. Most important files are AdminLTE.css, skins CSS files, and app.js.</p>
<h3>Layout Changes</h3>
<ol>
<li>The .wrapper div must be placed immediately after the body tag rather than after the header</li>
<li>Change the .header div to .main-header <code>&LT;div class="main-header"></code></li>
<li>Change the .right-side class to .content-wrapper <code>&LT;div class="content-wrapper"></code></li>
<li>Change the .left-side class to .main-sidebar <code>&LT;div class="main-sidebar"></code></li>
<li>In the navbar, change .navbar-right to .navbar-custom-menu <code>&LT;div class="navbar-custom-menu"></code></li>
</ol>
<h3>Navbar Custom Dropdown Menus</h3>
<ol>
<li>The icons in the notification menu do not need bg-* classes. They should be replaced with contextual text color class such as text-aqua or text-red.</li>
</ol>
<h3>Login, Registration and Lockscreen Pages</h3>
<p>There are major changes to the HTML markup and style to these pages. The best way is to copy the page's code and customize it.</p>
<p>And you should be set to go!</p>
<h3>Mailbox</h3>
<p>Mailbox got an upgrade to include three different views. The views are inbox, read mail, and compose new email. To use these views,
you should use the provided HTML files in the pages/mailbox folder.</p>
<p><b class="text-red">Note:</b> the old mailbox layout has been deprecated in favor of the new one and will be removed by the next release.</p>
</section>

<!-- ============================================================= -->

<section id="implementations">
<h2 class="page-header"><a href="#implementations">Implementations</a></h2>
<p class="lead">Thanks to many of AdminLTE users, there are multiple implementations of the template
for easy integration with back-end frameworks. The following are some of them:</p>

<ul class="">
<li><a href="https://github.com/dmstr/yii2-adminlte-asset" target="_blank">Yii 2</a> by <a href="https://github.com/schmunk42" target="_blank">Tobias Munk</a></li>
<li><a href="https://github.com/yajra/laravel-admin-template" target="_blank">Laravel</a> by <a href="https://github.com/yajra" target="_blank">Arjay Angeles</a></li>
<li><a href="https://github.com/avanzu/AdminThemeBundle" target="_blank">Symfony</a> by <a href="https://github.com/avanzu" target="_blank">Marc Bach</a></li>
<li><a href="https://github.com/nicolas-besnard/adminlte2-rails" target="_blank">Rails Gem</a> by <a href="https://github.com/nicolas-besnard" target="_blank">Nicolas Besnard</a></li>
</ul>

<p><b class="text-red">Note:</b> these implementations are not supported by Almsaeed Studio. However,
they do provide a good example of how to integrate AdminLTE into different frameworks. For the latest release
of AdminLTE, please visit our <a href="https://github.com/almasaeed2010/AdminLTE">repository</a> or <a href="https://almsaeedstudio.com">website</a></p>
</section>

<!-- ============================================================= -->

<!-- ============================================================= -->

<section id="license">
<h2 class="page-header"><a href="#license">License</a></h2>
<h3>AdminLTE</h3>
<p class="lead">AdminLTE is an open source project that is licensed under the <a href="http://opensource.org/licenses/MIT">MIT license</a>.
This allows you to do pretty much anything you want as long as you include the copyright in "all copies or substantial portions of the Software."
Attribution is not required (though very much appreciated).</p>
<h3>AdminLTE Premium Collection (Coming Soon)</h3>
<p class="lead">AdminLTE's premium collection provides a set of non-open source components, plugins and widgets. To use
the premium collection, you must buy a license that fits your use case. The following is the set of available licenses:</p>
<p><b>Single Application License</b></p>
<ul>
<li>Your use of the item is restricted to a single installation.
<li>You may use the item in work which you are creating for your own purposes or for your client.
<li>You must not incorporate the item in a work which is created for redistribution or resale by you or your client.
<li>The item may not be redistributed or resold.
<li>If the item contains licensed components, those components must only be used within the item and you must not extract and use them on a stand-alone basis.
<li>If the item was created using materials which are the subject of a GNU General Public License (GPL), your use of the item is subject to the terms of the GPL in place of the foregoing conditions (to the extent the GPL applies).
</ul>
<p><b>Multiple Applications License</b></p>
<ul>
<li>Your use of the item may extend to multiple installations.
<li>You may use the item in work which you are creating for your own purposes or for your clients.
<li>You must not incorporate the item in a work which is created for redistribution or resale by you or your clients.
<li>The item may not be redistributed or resold.
<li>If the item contains licensed components, those components must only be used within the item and you must not extract and use them on a stand-alone basis.
<li>If the item was created using materials which are the subject of a GNU General Public License (GPL), your use of the item is subject to the terms of the GPL in place of the foregoing conditions (to the extent the GPL applies).
</ul>

<p><b>Extended License</b></p>
<p>This license must be purchased if you intend to license, sublicense, redistribute, or resell the final product.</p>
<ul>
<li>Your use of the item may extend to multiple installations.
<li>You may use the item in work which you are creating for your own purposes or for your clients.
<li>You may license, sublicense, redistribute, or resell the item in the following circumstances:
 <ul>
   <li>The item is incorporated into a larger work you have created; or
   <li>If you modify the item and resell the end product.
   <li>If the item contains licensed components, those components must only be used within the item and you must not extract and use them on a stand-alone basis.
   <li>If the item was created using materials which are the subject of a GNU General Public License (GPL), your use of the item is subject to the terms of the GPL in place of the foregoing conditions (to the extent the GPL applies).
 </ul>
</ul>
<p>For further question about which license you should get, please email us at <a href="mailto:support@almsaeedstudio.com">support@almsaeedstudio.com</a>.</p>
</section>

   </div><!-- /.content -->

</section>

@endsection
