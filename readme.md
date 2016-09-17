# ArtisanCMS Theme

A really simple package that defines a new location for the app to look for, for a theme.

Create a `themes` directory in the root of your project, this should happen if you use the installer. But if it doesn't exist, just create the folder. Then create your theme folder within it.

You will want to update the `artisancms.php` file in the config folder, again this should exist from installation. You will want to update the following:

```
    // change clean-theme to the name of the folder in
    // the themes folder.
    'theme' => theme('clean-theme'),
```

Access like this:
```
theme::nameoffile
