# Acquia Certified Developer - Front End Specialist

## Site installation

This is working site following Definitive guide to Drupal 7 on theming (Ch. 15 and 16) in preparation for 
Acquia Certified Developer - Front End Specialist.

In order to recreate the site, one should install it with (change particular data with your own, after the `=`):

```
$ drush site-install \
  --account-mail=cert_loc@bluefish.rs \
  --account-name=admin \
  --account-pass=admin \
  --db-su=lokalni \
  --db-su-pw=lokalni \
  --db-url=mysql://lokalni:lokalni@localhost/certification \
  --site-mail=cert_loc@bluefish.rs \
  --site-name=Certification
```

Once installed, use

`$ drush generate-content 20 --types=article`

## [Acquia Certified Developer - Front End Specialist](https://www.acquia.com/customer-success/learning-services/acquia-certified-developer-front-end-specialist-exam-blueprint)

##### Domain 1.0: Fundamental Web Development Concepts — 18%

1.1. Demonstrate knowledge of HTML and CSS

1.2. Identify PHP programing concepts

1.3. Identify JavaScript and jQuery programing concepts

##### Domain 2.0: Theming Concepts — 18%

2.1 Demonstrate ability to define and use custom regions in a theme

2.2 Demonstrate ability to work with Theme Settings

2.3 Demonstrate knowledge of working with Stylesheets

2.4 Demonstrate knowledge of working with Javascript in a theme

##### Domain 3.0: Sub-theming Concepts — 9%

3.1 Demonstrate ability to build a sub-theme from a base theme

3.2 Demonstrate ability to work with templates and pre-process functions in a sub-theme

##### Domain 4.0: Templates — 13%

4.1 Demonstrate ability to build and customize core templates for managing markup
4.2 Demonstrate ability to work with template suggestions

##### Domain 5.0: Template Functions  — 13%

5.1 Demonstrate ability to use theme() functions for overriding custom output
5.2 Demonstrate ability to write template pre-process functions for overriding custom output

##### Domain 6.0: Layout Configuration — 13%

6.1 Demonstrate ability to configure field display and view modes for content types
6.2 Demonstrate ability to create and configure Blocks for building layouts
6.3 Demonstrate ability to create and configure Views for building content list pages, blocks and feeds

##### Domain 7.0: Performance — 9%

7.1 Demonstrate ability to analyze and resolve site performance issues arising from site configuration
7.2 Demonstrate ability to analyze and resolve security issues arising from site custom code

##### Domain 8.0: Security — 7%

8.1 Demonstrate ability to analyze and resolve security issues arising from site configuration
8.2 Demonstrate ability to analyze and resolve security issues arising from site custom theme