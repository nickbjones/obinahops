<?php
date_default_timezone_set('Asia/Tokyo');
/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen. 
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 * Roles: https://getkirby.com/docs/guide/users/roles
 * Permissions: https://getkirby.com/docs/guide/users/permissions
 * Hooks: https://getkirby.com/docs/reference/plugins/extensions/hooks
 */

function checkUserAction($context, $page, $action) {
  $role = $context->user()->role();
  $template = explode("/",$page)[0];
  $currentUser = $context->user()->id();
  $pageAuthor = substr($page->author()->email(), 2);

  if ($role != "admin") {
    if ($template == "student-blog") {
      if ($action == "update") {
        if ($currentUser != $pageAuthor) {
          // is not user's page; block access
          throw new Exception("You cannot edit a page that is not yours!");
        }
      }
    } else {
      // is not "student-blog"; block access
      throw new Exception("You do not have permission to make changes here!");
    }
  }
}

return [
  'debug' => true,
  'languages' => true,
  'languages.detect' => true,

  'hooks' => [
    'page.changeNum:before' =>      function ($page, $num) {                     checkUserAction($this, $page, "update"); },
    'page.changeSlug:before' =>     function ($page, $slug, $languageCode) {     checkUserAction($this, $page, "update"); },
    'page.changeStatus:before' =>   function ($page, $status, $position) {       checkUserAction($this, $page, "update"); },
    'page.changeTemplate:before' => function ($page, $template) {                checkUserAction($this, $page, "update"); },
    'page.changeTitle:before' =>    function ($page, $title, $languageCode) {    checkUserAction($this, $page, "update"); },
    'page.create:before' =>         function ($page, $input) {                   checkUserAction($this, $page, "create"); },
    'page.delete:before' =>         function ($page, $force) {                   checkUserAction($this, $page, "update"); },
    'page.duplicate:before' =>      function ($page, $input, $options) {         checkUserAction($this, $page, "create"); },
    'page.update:before' =>         function ($page, $values, $strings) {        checkUserAction($this, $page, "update"); },
    // 'file.changeName:before' =>     function ($file, $name) {                    checkUserAction($this, $pg, "update"); },
    // 'file.changeName:after' =>      function ($newFile, $oldFile) {              checkUserAction($this, $pg, "update"); },
    // 'file.changeSort:before' =>     function ($file, $position) {                checkUserAction($this, $pg, "update"); },
    // 'file.changeSort:after' =>      function ($newFile, $oldFile) {              checkUserAction($this, $pg, "update"); },
    // 'file.create:before' =>         function ($file, $upload) {                  checkUserAction($this, $pg, "update"); },
    // 'file.create:after' =>          function ($file) {                           checkUserAction($this, $pg, "update"); },
    // 'file.delete:before' =>         function ($file) {                           checkUserAction($this, $pg, "update"); },
    // 'file.delete:after' =>          function ($status, $file) {                  checkUserAction($this, $pg, "update"); },
    // 'file.replace:before' =>        function ($file, $upload) {                  checkUserAction($this, $pg, "update"); },
    // 'file.replace:after' =>         function ($newFile, $oldFile) {              checkUserAction($this, $pg, "update"); },
    // 'file.update:before' =>         function ($file, $values, $strings) {        checkUserAction($this, $pg, "update"); },
    // 'file.update:after' =>          function ($newFile, $oldFile) {              checkUserAction($this, $pg, "update"); },
    // 'kirbytags:before' =>           function ($text, $data, $options) {          checkUserAction($this, $pg, "update"); },
    // 'kirbytags:after' =>            function ($text, $data, $options) {          checkUserAction($this, $pg, "update"); },
    // 'kirbytext:before' =>           function ($text) {                           checkUserAction($this, $pg, "update"); },
    // 'kirbytext:after' =>            function ($text) {                           checkUserAction($this, $pg, "update"); },
    // 'route:before' =>               function ($route, $path, $method) {          checkUserAction($this, $pg, "update"); },
    // 'route:after' =>                function ($route, $path, $method, $result) { checkUserAction($this, $pg, "update"); },
    // 'site.changeTitle:before' =>    function ($site, $title, $languageCode) {    checkUserAction($this, $pg, "update"); },
    // 'site.changeTitle:after' =>     function ($newSite, $oldSite) {              checkUserAction($this, $pg, "update"); },
    // 'site.update:before' =>         function ($site, $values, $strings) {        checkUserAction($this, $pg, "update"); },
    // 'site.update:after' =>          function ($newSite, $oldSite) {              checkUserAction($this, $pg, "update"); },
    // 'user.changeEmail:before' =>    function ($user, $email) {                   checkUserAction($this, $pg, "update"); },
    // 'user.changeEmail:after' =>     function ($newUser, $oldUser) {              checkUserAction($this, $pg, "update"); },
    // 'user.changeLanguage:before' => function ($user, $language) {                checkUserAction($this, $pg, "update"); },
    // 'user.changeLanguage:after' =>  function ($newUser, $oldUser) {              checkUserAction($this, $pg, "update"); },
    // 'user.changeName:before' =>     function ($user, $name) {                    checkUserAction($this, $pg, "update"); },
    // 'user.changeName:after' =>      function ($newUser, $oldUser) {              checkUserAction($this, $pg, "update"); },
    // 'user.changePassword:before' => function ($user, $password) {                checkUserAction($this, $pg, "update"); },
    // 'user.changePassword:after' =>  function ($newUser, $oldUser) {              checkUserAction($this, $pg, "update"); },
    // 'user.changeRole:before' =>     function ($user, $role) {                    checkUserAction($this, $pg, "update"); },
    // 'user.changeRole:after' =>      function ($newUser, $oldUser) {              checkUserAction($this, $pg, "update"); },
    // 'user.create:before' =>         function ($user, $input) {                   checkUserAction($this, $pg, "update"); },
    // 'user.create:after' =>          function ($user) {                           checkUserAction($this, $pg, "update"); },
    // 'user.delete:before' =>         function ($user) {                           checkUserAction($this, $pg, "update"); },
    // 'user.delete:after' =>          function ($status, $user) {                  checkUserAction($this, $pg, "update"); },
    // 'user.login:before' =>          function ($user, $session) {                 checkUserAction($this, $pg, "update"); },
    // 'user.login:after' =>           function ($user, $session) {                 checkUserAction($this, $pg, "update"); },
    // 'user.logout:before' =>         function ($user, $session) {                 checkUserAction($this, $pg, "update"); },
    // 'user.logout:after' =>          function ($user, $session) {                 checkUserAction($this, $pg, "update"); },
    // 'user.update:before' =>         function ($user, $values, $strings) {        checkUserAction($this, $pg, "update"); },
    // 'user.update:after' =>          function ($newUser, $oldUser) {              checkUserAction($this, $pg, "update"); },
    // 'system.loadPlugins:after' =>   function () {                                checkUserAction($this, $pg, "update"); },
  ]
];

