# Heroku Wordpress

This is where changes to your Wordpress site are made.  Changes committed to this directory will overwrite all the vendor defaults.

Generally, you'll be interested in adding plugins, adding themes, and modifying wordpress.conf.erb.
```
└── config                # Config files
    ├── public            # Public directory
    │   └── wp-content    # Themes & plugins
    │       ├── plugins
    │       └── themes
    └── vendor            # Config files for vendored apps
        ├── nginx
        │   └── conf      # nginx.conf + wordpress.conf.erb
        └── php           # php.ini
            └── etc       # php-fpm.conf
```

The best way to use this is to run the buildpack to configure your Heroku APP.  This buildpack will install all of the Add-Ons needed.  You can get the buildpack here: https://github.com/eccentricpixel/heroku-wordpress-buildpack

