Purpose
=======

This theme is designed to be a basic starter theme for use with compass and provides only the most basic styling to enable multi-column layout. It is recommended to copy and rename this theme as creating sub-theme would not provide many benefits as this theme provides no functionality for a sub-theme to rely on.

Requirements
============

- compass 0.11.1
- Drupal 7.x

Installing
==========

1. Copy this repo to a theme directory such as sites/all/themes/ or profiles/PROFILENAME/themes

        cd sites/all/themes
        git clone git://github.com/shomeya/compass_theme.git
        
2. Rename the directory to reflect the name for your new theme. i.e. change `compass_theme` to `your_theme_name`:

        mv compass_theme your_theme_name

3. Rename compass_theme.info to reflect the name of your theme:

        cd your_theme_name
        mv compass_theme.info your_theme_name.info

4. Edit the your_theme_name.info file and fill in the name and description.
5. Edit the template.php file and replace all instances of `certs_theme` with `your_theme_name`. For instance, the `compass_theme_preprocess_html` should be changed to `your_theme_name_preprocess_html`. If you do not change all places where `certs_theme` appears, then your theme will not work properly.
6. Copy the config.rb to the root of your Drupal site, next to README.txt and index.php

        cd ../../../..
        cp sites/all/themes/your_theme_name/config.rb .

7. Edit the config.rb and replace the first part of each path to reflect the path from step 1 and 2. For example:

        css_dir = "path/to/themes/compass_theme/css"

    Should be edited to:
    
        css_dir = "sites/all/themes/your_theme_name/css"

8. When developing your theme, you can use `compass watch` to automatically compile the stylesheets when they are saved. To use this properly, you must run it from the root directory of your Drupal site. Running compass from the theme directory is not supported.

Editing
=======

Most styles should be placed in screen.sass except for where appropriate for print or Internet Explorer only styles. The `partials/_base.sass` file contains sane defaults for the Blueprint grid, and adds variables for the $sidebar-first-columns and $sidebar-second-columns which set the width of the first and second sidebar in columns. This coupled with the sparse markup in screen.sass provides only enough layout to correctly position the sidebars regardless of dynamic content.

If you wish to override any template such as html.tpl.php, page.tpl.php, node.tpl.php, etc. please copy those from their respective Drupal modules, and clear the cache to see any changes. html.tpl.php and page.tpl.php are found in the system module inside the core modules directory.