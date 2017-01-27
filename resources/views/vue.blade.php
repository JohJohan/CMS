<!DOCTYPE html>
<html lang="en">
    <body>
      <div id="app">
        <h1>Hello Laravel CMS!</h1>
        <p>
          <!-- use router-link component for navigation. -->
          <!-- specify the link by passing the `to` prop. -->
          <!-- <router-link> will be rendered as an `<a>` tag by default -->
          <router-link to="/foo">Go to Foo</router-link>
          <router-link to="/bar">Go to Bar</router-link>
        </p>
        <!-- route outlet -->
        <!-- component matched by the route will render here -->
        <router-view></router-view>
      </div>
    </body>
    <script src="/js/app.js"></script>
</html>
